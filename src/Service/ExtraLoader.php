<?php

namespace Ws\AcmeBundle\Service;

use Symfony\Component\Config\Loader\Loader;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

class ExtraLoader extends Loader
{
    private $isLoaded = false;

    public function load($resource, string $type = null)
    {
        if (true === $this->isLoaded) {
            throw new \RuntimeException('Do not add the "extra" loader twice');
        }

        $routes = new RouteCollection();

        // prepare a new route
        $path = '/extra/{parameter}';
        $defaults = [
            '_controller' => 'Ws\AcmeBundle\Controller\ExtraController::extra',
        ];
        $requirements = [
            'parameter' => '\d+',
        ];
        $route = new Route($path, $defaults, $requirements);

        // add the new route to the route collection
        $routeName = 'extraRoute';
        $routes->add($routeName, $route);

        $this->isLoaded = true;

        return $routes;
    }

    public function supports($resource, string $type = null)
    {
        return 'extra' === $type;
    }
}