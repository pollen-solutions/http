<?php

declare(strict_types=1);

namespace Pollen\Http;

use Laminas\HttpHandlerRunner\Emitter\EmitterInterface;
use Laminas\HttpHandlerRunner\Emitter\SapiEmitter;
use Pollen\Container\ServiceProvider;
use Psr\Http\Message\ServerRequestInterface as PsrRequestInterface;

class HttpServiceProvider extends ServiceProvider
{
    protected $provides = [
        PsrRequestInterface::class,
        RequestInterface::class,
        EmitterInterface::class
    ];

    /**
     * @inheritDoc
     */
    public function register(): void
    {
        $this->getContainer()->share(RequestInterface::class, function () {
            return Request::getFromGlobals();
        });

        $this->getContainer()->share(PsrRequestInterface::class, function () {
            return Request::createPsr();
        });

        $this->getContainer()->share(EmitterInterface::class, SapiEmitter::class);
    }
}
