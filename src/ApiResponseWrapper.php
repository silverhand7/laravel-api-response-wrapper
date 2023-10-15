<?php

namespace Silverhand7\LaravelApiResponseWrapper;

use Silverhand7\LaravelApiResponseWrapper\Contracts\CreatedResponseContract;
use Silverhand7\LaravelApiResponseWrapper\Contracts\GetResponseContract;

class ApiResponseWrapper
{
    public function __construct(
        public GetResponseContract $getResponse,
        public CreatedResponseContract $createdResponse,
    ) {}

    public function get(
        array|null $data = null,
        string|null $message = null
    ) {
        return $this->getResponse->handle($data, $message);
    }

    public function created(
        array|null $data = null,
        string|null $message = null
    ) {
        return $this->createdResponse->handle($data, $message);
    }
}