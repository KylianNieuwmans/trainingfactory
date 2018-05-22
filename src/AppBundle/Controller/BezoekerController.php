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
use Symfony\Component\HttpFoundation\Response;

class BezoekerController extends Controller
{
    /**
     * @Route("/bezoeker")
     */
    public function showAction()
    {
        return $this->render('default/bezoeker.html.twig');
    }
}