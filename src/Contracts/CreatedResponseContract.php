<?php

namespace Silverhand7\LaravelApiResponseWrapper\Contracts;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;

interface CreatedResponseContract
{
    public function handle(string|null $message = null, Collection|array|null $data = null): JsonResponse;
}