<?php

namespace Silverhand7\LaravelApiResponseWrapper\Responses;

use Illuminate\Http\JsonResponse;
use Silverhand7\LaravelApiResponseWrapper\Contracts\DeletedResponseContract;

class DeletedResponse implements DeletedResponseContract
{
    public function handle(?string $message): JsonResponse
    {
        return response()
                ->json([
                    'success' => true,
                    'message' => $message ?? "Deleted Successfully",
                ], 204);
    }
}