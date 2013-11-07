<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Umbrella\\FrontendBundle\\Controller\\StaticPageController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/frontend',    ),  ),  4 =>   array (  ),),
        'about' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Umbrella\\FrontendBundle\\Controller\\StaticPageController::aboutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/frontend/about',    ),  ),  4 =>   array (  ),),
        'sponsors' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Umbrella\\FrontendBundle\\Controller\\StaticPageController::sponsorsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/frontend/sponsors',    ),  ),  4 =>   array (  ),),
        'contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Umbrella\\FrontendBundle\\Controller\\ContactController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/frontend/contact',    ),  ),  4 =>   array (  ),),
        'auth' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Umbrella\\FrontendBundle\\Controller\\AuthController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/frontend/auth',    ),  ),  4 =>   array (  ),),
        'system_users' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Umbrella\\AdminBundle\\Controller\\SystemUsersController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/system_users',    ),  ),  4 =>   array (  ),),
        'profile' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Umbrella\\AdminBundle\\Controller\\ProfileController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/profile',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
