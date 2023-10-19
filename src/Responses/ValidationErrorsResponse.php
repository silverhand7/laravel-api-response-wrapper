<?php

namespace Silverhand7\LaravelApiResponseWrapper\Responses;

use Illuminate\Http\JsonResponse;
use Silverhand7\LaravelApiResponseWrapper\Contracts\ValidationErrorsResponseContract;

class ValidationErrorsResponse implements ValidationErrorsResponseContract
{
    public function handle(?string $message, $errors): JsonResponse
    {
        return response()
            ->json([
                'message' => $message,
                'errors' => $errors,
            ], 422);
    }
}