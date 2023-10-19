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
        string|null $message = null,
        array|null $data = null,
    ) {
        return $this->getResponse->handle($message, $data);
    }

    public function created(
        string|null $message = null,
        array|null $data = null,
    ) {
        return $this->createdResponse->handle($message, $data);
    }
}