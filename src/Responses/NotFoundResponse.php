<?php

namespace Silverhand7\LaravelApiResponseWrapper\Responses;

use Illuminate\Http\JsonResponse;
use Silverhand7\LaravelApiResponseWrapper\Contracts\NotFoundResponseContract;

class NotFoundResponse implements NotFoundResponseContract
{
    public function handle(?string $message = null): JsonResponse
    {
        return response()
            ->json([
                'success' => false,
                'message' => $message ?? "Data is not found",
            ], 404);
    }
}