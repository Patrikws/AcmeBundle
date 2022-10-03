<?php

namespace Acme\AcmeBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AcmeAcmeBundle extends Bundle
{
    public function getPath(): string
    {
        // dd(\dirname(__DIR__));
        return \dirname(__DIR__);
    }
}