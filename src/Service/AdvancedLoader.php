<?php

namespace Ws\AcmeBundle\Service;

use Symfony\Component\Config\Loader\Loader;
use Symfony\Component\Routing\RouteCollection;

class AdvancedLoader extends Loader
{
    public function load(mixed $resource, mixed $type = null): mixed
    {
        $collection = new RouteCollection();

        $resource = __DIR__ . '/../../config/routes.yaml';
        $type = 'yaml';

        $importedRoutes = $this->import($resource, $type);

        $collection->addCollection($importedRoutes);

        return $collection;
    }

    public function supports(mixed $resource, mixed $type = null): bool
    {
        return $type === 'advanced_extra';
    }
}
