<?php
/**
 * Created by PhpStorm.
 * User: Kylian
 * Date: 22-5-2018
 * Time: 09:43
 */

namespace AppBundle\Controller;


use AppBundle\AppBundle;
use AppBundle\Entity\Persoon;
use AppBundle\Entity\Training;
use AppBundle\Form\PersoonType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class BezoekerController extends Controller
{
    /**
     * @Route("/bezoeker", name = "home")
     */
    public function showAction()
    {
        return $this->render('/bezoeker/index.html.twig');
    }



    /**
     * @Route("/bezoeker/login", name="login")
     */
    public function loginAction(Request $request, AuthenticationUtils $authUtils)
    {
        // get the login error if there is one
        $error = $authUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authUtils->getLastUsername();
        if (isset($error)) {
            $this->addFlash(
                'error',
                'Gegevens kloppen niet. Probeer opnieuw.'
            );
        } else {

            $this->addFlash(
                'notice',
                'Vul uw gegevens in'
            );
        }
        return $this->render('bezoeker/login.html.twig', array(
            'last_username' => $lastUsername,
            'error' => $error,
        ));
    }


    /**
     * @Route ("/bezoeker/gedrag", name = "gedrag")
     */
    public function gedragAction()
    {
        return $this->render('/bezoeker/gedrag.html.twig');
    }

    /**
     * @Route ("/bezoeker/aanbod", name = "aanbod")
     */
    public function aanbodAction(Request $request)
    {
        $repository=$this->getDoctrine()->getRepository(Training::class);
        $training=$repository->findAll();
        return $this->render('bezoeker/aanbod.html.twig',array('boodschap'=>'Welkom','training'=>$training));
    }

    /**
     * @Route ("/bezoeker/contact", name = "contact")
     */
    public function contactAction()
    {
        return $this->render('/bezoeker/contact.html.twig');
    }

    /**
     * @Route ("/bezoeker/registreren", name = "registratie")
     */
    public function registratieAction(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        // 1) build the form
        $user = new Persoon();
        $form = $this->createForm(PersoonType::class, $user);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $password = $passwordEncoder->encodePassword($user, $user->getPassword());
            $user->setPassword($password);

            // 4) save the User!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            $this->addFlash("success", "U bent geregistreerd!");
            return $this->redirectToRoute('home');


        }

        return $this->render(
            'bezoeker/registreren.html.twig',
            array('form' => $form->createView())
        );
    }
}