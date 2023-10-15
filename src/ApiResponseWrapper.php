<?php

namespace Silverhand7\LaravelApiResponseWrapper;

use Silverhand7\LaravelApiResponseWrapper\Contracts\GetResponseContract;
use Silverhand7\LaravelApiResponseWrapper\Responses\GetResponse;

class ApiResponseWrapper
{
    public function __construct(
        public GetResponse $getResponse
    ) {}

    public function get()
    {
        return $this->getResponse->handle();
    }
}