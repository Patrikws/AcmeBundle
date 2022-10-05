<?php

namespace Ws\AcmeBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\Routing\RouteCollection;

class WsAcmeExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container): void
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__ . '/../../config'));
        $loader->load('services.xml');
        // $loader_yaml = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../../config'));
        // $loader_yaml->load('services.yaml');
        // $loader->load('routes.xml');

        // $routes = new RouteCollection();
        // $route = $loader->load('routes.xml');
        // $routes->addCollection($route);

        $schema = new ConfigSchema();

        $this->processConfiguration($schema, $configs);
    }

    public function getAlias()
    {
        return 'ws_acme';
    }
}