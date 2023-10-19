<?php

namespace Silverhand7\LaravelApiResponseWrapper\Contracts;

use Illuminate\Http\JsonResponse;

interface GetResponseContract
{
    public function handle(string|null $message = null, array|null $data = null): JsonResponse;
}