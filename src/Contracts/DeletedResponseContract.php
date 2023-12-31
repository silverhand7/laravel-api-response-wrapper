<?php

namespace Silverhand7\LaravelApiResponseWrapper\Contracts;

use Illuminate\Http\JsonResponse;

interface DeletedResponseContract
{
    public function handle(?string $message): JsonResponse;
}