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
     * @Route("/bezoeker")
     */
    public function showAction()
    {
        return $this->render('/bezoeker/index.html.twig');
    }
    /**
     * @Route("/bezoeker/inloggen")
     */
    public function loginAction(Request $request, AuthenticationUtils $authUtils)
    {
        $error = $authUtils->getLastAuthenticationError();

        $lastUsername = $authUtils->getLastUsername();

        return $this->render();

    }
}