<?php
/**
 * Created by PhpStorm.
 * User: Kylian
 * Date: 22-5-2018
 * Time: 09:43
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
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
     * @Route("/bezoeker/inlog", name="inlog")
     */
    public function loginAction(Request $request, AuthenticationUtils $authUtils)
    {
        $error = $authUtils->getLastAuthenticationError();

        $lastUsername = $authUtils->getLastUsername();

        return $this->render("/bezoeker/inlog.html.twig");

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
    public function aanbodAction()
    {
        return $this->render('/bezoeker/aanbod.html.twig');
    }

    /**
     * @Route ("/bezoeker/contact", name = "contact")
     */
    public function contactAction()
    {
        return $this->render('/bezoeker/contact.html.twig');
    }
}