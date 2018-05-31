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
            'error'         => $error,
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