<?php

namespace Silverhand7\LaravelApiResponseWrapper\Responses;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;
use Silverhand7\LaravelApiResponseWrapper\Contracts\ServerErrorResponseContract;

class ServerErrorResponse implements ServerErrorResponseContract
{
    public function handle(?string $message, Collection|array|null $errors = null): JsonResponse
    {
        return response()
            ->json([
                'success' => false,
                'message' => $message,
                'errors' => $errors,
            ], 500);
    }
}