<?php
/**
 * Created by PhpStorm.
 * User: Kylian
 * Date: 5-6-2018
 * Time: 11:10
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Persoon;
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
     * @Route("/administratie", name = "lessen")
     */
    public function showLessenAction()
    {

        return $this->render('/administratie/lessen.html.twig');
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
     * @Route ("/bewerken/leden/bewerken/{lidId}", name = "lidBewerken")
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
            'administratie/bewerken.html.twig',
            array('form' => $form->createView())
        );
    }
    /**
     * @Route("/bewerken/leden/verwijderen/{lidId}", name = "lidVerwijderen")
     */
    public function lidVerwijderenAction($lidId)
    {
        $user = $this->getDoctrine()
            ->getRepository(Persoon::class)
            ->find($lidId);

        $em = $this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();

        $this->addFlash("success", "Uw gegevens zijn gewijzigd!");
        return $this->redirectToRoute('admin');
    }
}