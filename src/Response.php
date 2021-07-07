<?php

declare(strict_types=1);

namespace Pollen\Http;

use Symfony\Component\HttpFoundation\Response as BaseResponse;

class Response extends BaseResponse implements ResponseInterface
{
    use ResponseTrait;
}