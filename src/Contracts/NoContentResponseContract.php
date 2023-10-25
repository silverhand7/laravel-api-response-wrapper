<?php

namespace Silverhand7\LaravelApiResponseWrapper\Contracts;

use Illuminate\Http\JsonResponse;

interface NoContentResponseContract
{
    public function handle(?string $message = null): JsonResponse;
}