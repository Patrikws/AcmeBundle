<?php

declare(strict_types=1);

namespace Ws\AcmeBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * @psalm-suppress PossiblyUndefinedMethod
 */
// @see https://symfony.com/doc/current/components/config/definition.html
class ConfigSchema implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('skeleton-bundle');

        $treeBuilder->getRootNode()
            ->children()
            ->end();

        return $treeBuilder;
    }
}
