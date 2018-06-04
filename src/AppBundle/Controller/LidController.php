<?php
/**
 * Created by PhpStorm.
 * User: Kylian
 * Date: 4-6-2018
 * Time: 09:27
 */

namespace AppBundle\Controller;


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

}