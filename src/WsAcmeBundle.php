<?php

namespace Ws\AcmeBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Ws\AcmeBundle\DependencyInjection\WsAcmeExtension;

class WsAcmeBundle extends Bundle
{


    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}