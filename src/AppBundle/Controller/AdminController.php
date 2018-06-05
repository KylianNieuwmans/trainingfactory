<?php
/**
 * Created by PhpStorm.
 * User: Kylian
 * Date: 5-6-2018
 * Time: 11:10
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Les;
use AppBundle\Entity\Persoon;
use AppBundle\Form\LesType;
use AppBundle\Form\PersoonType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
    /**
     * @Route("/administratie", name = "admin")
     */
    public function showAction()
    {
        return $this->render('/administratie/index.html.twig');
    }

    /**
     * @Route("/administratie/lessen", name = "beheerLessen")
     */
    public function showLessenAction()
    {

        $repository=$this->getDoctrine()->getRepository(Les::class);
        $lessen=$repository->findAll();

        return $this->render('administratie/lessen.html.twig',array('boodschap'=>'Welkom','lessen'=>$lessen));
    }

    /**
     * @Route("/administratie/leden", name = "leden")
     */
    public function showLedenAction()
    {
        $repository=$this->getDoctrine()->getRepository(Persoon::class);
        $leden=$repository->findAll();
        return $this->render('administratie/leden.html.twig',array('boodschap'=>'Welkom','leden'=>$leden));
    }

    /**
     * @Route("/administratie", name = "trainingen")
     */
    public function showTrainingenAction()
    {
        return $this->render('/administratie/trainingen.html.twig');
    }

    /**
     * @Route ("/administratie/leden/lidBewerken/{lidId}", name = "lidBewerken")
     */
    public function wijzigLidAction(Request $request,  $lidId)
    {
        $repository = $this->getDoctrine()->getRepository(Persoon::class);
        $user = $repository->find($lidId);

        if(empty($user) || !$user->getRoles())
        {
            $this->addFlash('error', 'Dit persoon kan niet gevonden worden');
            return $this->redirectToRoute('admin');
        }
        $form = $this->createForm(PersoonType::class, $user);
        $form->remove('password');
        $form->remove('username');


        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            $this->addFlash("success", "Uw gegevens zijn gewijzigd!");
            return $this->redirectToRoute('admin');
        }

        return $this->render(
            '/administratie/lidBewerken.html.twig',
            array('form' => $form->createView())
        );
    }
    /**
     * @Route("/administratie/leden/verwijderen/{lidId}", name = "lidVerwijderen")
     */
    public function lidVerwijderenAction($lidId)
    {
        $user = $this->getDoctrine()
            ->getRepository(Persoon::class)
            ->find($lidId);

        $em = $this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();

        $this->addFlash("success", "Uw gegevens zijn verwijderd!");
        return $this->redirectToRoute('admin');
    }

    /**
     * @Route ("/administratie/lessen/lesToevoegen/{lesId}", name = "lesToevoegen")
     */
    public function lesToevoegenAction(Request $request)
    {
        // 1) build the form
        $les = new Les();
        $form = $this->createForm(LesType::class, $les);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {


            // 4) save the User!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($les);
            $entityManager->flush();
            $this->addFlash("success", "U bent geregistreerd!");
            return $this->redirectToRoute('beheerLessen');


        }

        return $this->render(
            '/administratie/lesBewerken.html.twig',
            array('form' => $form->createView())
        );
    }

    /**
     * @Route ("/administratie/lessen/lesBewerken/{lesId}", name = "lesBewerken")
     */
    public function wijzigLesAction(Request $request,  $lesId)
    {
        $repository = $this->getDoctrine()->getRepository(Les::class);
        $les = $repository->find($lesId);

        if(empty($les))
        {
            $this->addFlash('error', 'De les kan niet gevonden worden');
            return $this->redirectToRoute('admin');
        }
        $form = $this->createForm(LesType::class, $les);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($les);
            $entityManager->flush();
            $this->addFlash("success", "De gegevens zijn veranderd!");
            return $this->redirectToRoute('beheerLessen');
        }

        return $this->render(
            '/administratie/lesBewerken.html.twig',
            array('form' => $form->createView())
        );
    }

    /**
     * @Route("/administratie/lessen/verwijderen/{lesId}", name = "lesVerwijderen")
     */
    public function lesVerwijderenAction($lesId)
    {
        $les = $this->getDoctrine()
            ->getRepository(Les::class)
            ->find($lesId);

        $em = $this->getDoctrine()->getManager();
        $em->remove($les);
        $em->flush();

        $this->addFlash("success", "De les is verwijderd!");
        return $this->redirectToRoute('admin');
    }
}