<?php

namespace Silverhand7\LaravelApiResponseWrapper\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Collection;

interface FindResponseContract
{
    public function handle(string|null $message = null, Collection|Model|JsonResource|array|null $data = null): JsonResponse;
}