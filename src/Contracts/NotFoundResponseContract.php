<?php

namespace Silverhand7\LaravelApiResponseWrapper\Contracts;

use Illuminate\Http\JsonResponse;

interface NotFoundResponseContract
{
    public function handle(?string $message): JsonResponse;
}