<?php
/**
 * Created by PhpStorm.
 * User: Kylian
 * Date: 4-6-2018
 * Time: 09:27
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Les;
use AppBundle\Entity\Registratie;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class LidController extends Controller
{
    /**
 * @Route("/lid", name = "lid")
 */
    public function showAction()
    {
        return $this->render('/lid/start.html.twig');
    }

    /**
     * @Route("/lid/lessen", name = "lessen")
     */
    public function lessenAction()
    {
        $repository=$this->getDoctrine()->getRepository(Registratie::class);
        $registratie=$repository->fin;

        $repository=$this->getDoctrine()->getRepository(Les::class);
        $lessen=$repository->findAll();
        return $this->render('lid/lessen.html.twig',array('boodschap'=>'Welkom','lessen'=>$lessen));
    }

    /**
     * @Route("/lid/inschrijven/{lesId}", name = "inschrijven")
     */
    public function inschrijfAction(Request $request, $lesId)
    {
        $repository = $this->getDoctrine()->getRepository(Les::class);
        $les = $repository->find($lesId);
        $user = $this->getUser();

        $registratie = new Registratie();
        $registratie->setPersoon($user);
        $registratie->setLes($les);

        $em = $this->getDoctrine()->getManager();
        $em->persist($registratie);
        $em->flush();


        return $this->RedirectToRoute('lessen');
    }
}