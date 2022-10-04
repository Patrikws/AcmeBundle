<?php

namespace Ws\AcmeBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Ws\AcmeBundle\DependencyInjection\WsAcmeExtension;

class WsAcmeBundle extends Bundle
{

    // public function getContainerExtension()
    // {
    //     if (null === $this->extension) {
    //         $this->extension = new WsAcmeExtension();
    //     }
    //     return $this->extension;
    // }

    /**
     * Returns the bundle's container extension class.
     *
     * @return string
     */
    protected function getContainerExtensionClass()
    {
        $basename = preg_replace('/Bundle$/', '', $this->getName());
        // dd( $basename );

        return $this->getNamespace().'\\DependencyInjection\\'.$basename.'Extension';
    }

    public function getPath(): string
    {
        // dd(\dirname(__DIR__));
        return \dirname(__DIR__);
    }
}