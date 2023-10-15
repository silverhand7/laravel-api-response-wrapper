<?php

namespace Silverhand7\LaravelApiResponseWrapper;

use Silverhand7\LaravelApiResponseWrapper\Contracts\GetResponseContract;

class ApiResponseWrapper
{
    public function __construct(
        public GetResponseContract $getResponse
    ) {}

    public function get()
    {
        return $this->getResponse->handle();
    }
}