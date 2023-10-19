<?php

namespace Silverhand7\LaravelApiResponseWrapper\Contracts;

use Illuminate\Http\JsonResponse;

interface UpdatedResponseContract
{
    public function handle(?string $message): JsonResponse;
}