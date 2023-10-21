<?php

namespace Silverhand7\LaravelApiResponseWrapper\Contracts;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;

interface UpdatedResponseContract
{
    public function handle(?string $message): JsonResponse;
}