<?php

namespace Umbrella\AuthBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('UmbrellaAuthBundle:Default:index.html.twig', array('name' => $name));
    }
}
