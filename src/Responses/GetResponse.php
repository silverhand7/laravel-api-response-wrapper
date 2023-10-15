<?php

namespace Silverhand7\LaravelApiResponseWrapper\Responses;

use Silverhand7\LaravelApiResponseWrapper\Contracts\GetResponseContract;

class GetResponse implements GetResponseContract
{
    public function handle()
    {
        return response()
            ->json([
                'success' => true,
                'message' => '',
                'data' => []
            ]);
    }
}