<?php

declare(strict_types=1);

namespace Pollen\Http;

use Symfony\Component\HttpFoundation\RedirectResponse as BaseRedirectResponse;

class RedirectResponse extends BaseRedirectResponse implements RedirectResponseInterface
{
    use ResponseTrait;
}