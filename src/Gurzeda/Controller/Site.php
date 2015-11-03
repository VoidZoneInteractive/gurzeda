<?php
/**
 * Created by PhpStorm.
 * User: grzegorzgurzeda
 * Date: 01.11.15
 * Time: 23:14
 */

namespace Gurzeda\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


class Site extends Controller{

    /**
     * Index action
     * @Route("/", name="home")
     * @Method({"GET"})
     */
    public function homeAction()
    {
        return $this->render('gurzeda/site/index.html.twig', array(
            'title' => 'Tes',
            'title' => 'Grzegorz Gurzeda - Developer',
        ));
    }
}