<?php

namespace Silverhand7\LaravelApiResponseWrapper\Contracts;

use Illuminate\Http\JsonResponse;

interface GetResponseContract
{
    public function handle(array|null $data = null, string|null $message = null): JsonResponse;
}