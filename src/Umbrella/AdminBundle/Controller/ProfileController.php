<?php

namespace Umbrella\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ProfileController extends Controller
{
    public function indexAction()
    {
        return $this->render('UmbrellaAdminBundle:pages:profile.html.twig');
    }
}