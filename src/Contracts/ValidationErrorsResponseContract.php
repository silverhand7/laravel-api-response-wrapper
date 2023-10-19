<?php

namespace Silverhand7\LaravelApiResponseWrapper\Contracts;

use Illuminate\Http\JsonResponse;

interface ValidationErrorsResponseContract
{
    public function handle(?string $message, $errors): JsonResponse;
}