<?php

namespace Silverhand7\LaravelApiResponseWrapper\Contracts;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;

interface ValidationErrorsResponseContract
{
    public function handle(?string $message, Collection|array|null $errors = null): JsonResponse;
}