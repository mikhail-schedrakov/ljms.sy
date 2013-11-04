<?php

namespace Umbrella\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class SystemUsersController extends Controller
{
    public function indexAction()
    {
        return $this->render('UmbrellaAdminBundle:pages:systemUsers.html.twig');
    }
}