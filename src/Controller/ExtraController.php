<?php

namespace Ws\AcmeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

/**
 * @psalm-suppress MissingConstructor
 * @psalm-suppress PossiblyUndefinedMethod
 */
class ExtraController extends AbstractController
{
    public function extra(string $parameter): Response
    {
        return new Response($parameter);
    }
}
