<?php

namespace Silverhand7\LaravelApiResponseWrapper;

use Silverhand7\LaravelApiResponseWrapper\Contracts\CreatedResponseContract;
use Silverhand7\LaravelApiResponseWrapper\Contracts\DeletedResponseContract;
use Silverhand7\LaravelApiResponseWrapper\Contracts\GetResponseContract;
use Silverhand7\LaravelApiResponseWrapper\Contracts\NoContentResponseContract;
use Silverhand7\LaravelApiResponseWrapper\Contracts\NotFoundResponseContract;
use Silverhand7\LaravelApiResponseWrapper\Contracts\ServerErrorResponseContract;
use Silverhand7\LaravelApiResponseWrapper\Contracts\UpdatedResponseContract;
use Silverhand7\LaravelApiResponseWrapper\Contracts\ValidationErrorsResponseContract;

class ApiResponseWrapper
{
    public function __construct(
        public GetResponseContract $getResponse,
        public CreatedResponseContract $createdResponse,
        public UpdatedResponseContract $updatedResponse,
        public DeletedResponseContract $deletedResponse,
        public NotFoundResponseContract $notFoundResponse,
        public ValidationErrorsResponseContract $validationErrorsResponse,
        public ServerErrorResponseContract $serverErrorResponse,
        public NoContentResponseContract $noContentResponse,
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

    public function updated(
        string|null $message = null,
    ) {
        return $this->updatedResponse->handle($message);
    }

    public function deleted(
        string|null $message = null,
    ) {
        return $this->deletedResponse->handle($message);
    }

    public function validationErrors(
        ?string $message = null,
        $errors = null
    ) {
        return $this->validationErrorsResponse->handle($message, $errors);
    }

    public function serverError(
        ?string $message = null,
        $errors = null
    ) {
        return $this->serverErrorResponse->handle($message, $errors);
    }

    public function noContent(
        ?string $message = null
    ) {
        return $this->noContentResponse->handle($message);
    }
}