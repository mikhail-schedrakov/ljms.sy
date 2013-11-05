<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/frontend')) {
            // index
            if ($pathinfo === '/frontend') {
                return array (  '_controller' => 'Umbrella\\FrontendBundle\\Controller\\StaticPageController::indexAction',  '_route' => 'index',);
            }

            // about
            if ($pathinfo === '/frontend/about') {
                return array (  '_controller' => 'Umbrella\\FrontendBundle\\Controller\\StaticPageController::aboutAction',  '_route' => 'about',);
            }

            // sponsors
            if ($pathinfo === '/frontend/sponsors') {
                return array (  '_controller' => 'Umbrella\\FrontendBundle\\Controller\\StaticPageController::sponsorsAction',  '_route' => 'sponsors',);
            }

            // contact
            if ($pathinfo === '/frontend/contact') {
                return array (  '_controller' => 'Umbrella\\FrontendBundle\\Controller\\ContactController::indexAction',  '_route' => 'contact',);
            }

        }

        // admin
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'Umbrella\\AdminBundle\\Controller\\SystemUsersController::indexAction',  '_route' => 'admin',);
        }

        // profile
        if ($pathinfo === '/profile') {
            return array (  '_controller' => 'Umbrella\\AdminBundle\\Controller\\ProfileController::indexAction',  '_route' => 'profile',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
