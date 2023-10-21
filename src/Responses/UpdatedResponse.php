<?php

namespace Silverhand7\LaravelApiResponseWrapper\Responses;

use Illuminate\Http\JsonResponse;
use Silverhand7\LaravelApiResponseWrapper\Contracts\UpdatedResponseContract;

class UpdatedResponse implements UpdatedResponseContract
{
    public function handle(
        ?string $message,
    ): JsonResponse
    {
        return response()
                ->json([
                    'success' => true,
                    'message' => $message ?? "Update Success",
                ], 204);
    }
}