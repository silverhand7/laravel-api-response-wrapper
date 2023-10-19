<?php

namespace Silverhand7\LaravelApiResponseWrapper;

use Silverhand7\LaravelApiResponseWrapper\Contracts\CreatedResponseContract;
use Silverhand7\LaravelApiResponseWrapper\Contracts\GetResponseContract;
use Silverhand7\LaravelApiResponseWrapper\Contracts\NotFoundResponseContract;
use Silverhand7\LaravelApiResponseWrapper\Contracts\ValidationErrorsResponseContract;

class ApiResponseWrapper
{
    public function __construct(
        public GetResponseContract $getResponse,
        public CreatedResponseContract $createdResponse,
        public NotFoundResponseContract $notFoundResponse,
        public ValidationErrorsResponseContract $validationErrorsResponse,
    ) {}

    public function get(
        string|null $message = null,
        array|null $data = null,
    ) {
        return $this->getResponse->handle($message, $data);
    }

    public function notFound(
        ?string $message = null,
    ) {
        return $this->notFoundResponse->handle($message);
    }

    public function created(
        string|null $message = null,
        array|null $data = null,
    ) {
        return $this->createdResponse->handle($message, $data);
    }

    public function validationErrors(
        ?string $message = null,
        $errors = null
    ) {
        return $this->validationErrorsResponse->handle($message, $errors);
    }
}