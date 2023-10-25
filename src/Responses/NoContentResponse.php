<?php

namespace Silverhand7\LaravelApiResponseWrapper\Responses;

use Illuminate\Http\JsonResponse;
use Silverhand7\LaravelApiResponseWrapper\Contracts\NoContentResponseContract;

class NoContentResponse implements NoContentResponseContract
{
    public function handle(?string $message = null): JsonResponse
    {
        return response()
                ->json([
                    'success' => true,
                    'message' => $message,
                ], 204);
    }
}