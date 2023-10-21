<?php

namespace Silverhand7\LaravelApiResponseWrapper\Responses;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;
use Silverhand7\LaravelApiResponseWrapper\Contracts\CreatedResponseContract;

class CreatedResponse implements CreatedResponseContract
{
    public function handle(
        string|null $message = null,
        Collection|array|null $data = null,
    ): JsonResponse
    {
        return response()
                ->json([
                    'success' => true,
                    'message' => $message ?? "Create Success",
                    'data' => $data,
                ]);
    }
}