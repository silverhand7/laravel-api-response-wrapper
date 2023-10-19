<?php

namespace Silverhand7\LaravelApiResponseWrapper\Responses;

use Illuminate\Http\JsonResponse;
use Silverhand7\LaravelApiResponseWrapper\Contracts\GetResponseContract;

class GetResponse implements GetResponseContract
{
    public function handle(
        string|null $message = null,
        array|null $data = null,
    ): JsonResponse
    {
        return response()
                ->json([
                    'success' => true,
                    'message' => $message,
                    'data' => $data,
                ]);
    }
}