<?php

namespace Silverhand7\LaravelApiResponseWrapper\Facades;

use Illuminate\Support\Facades\Facade;
use Silverhand7\LaravelApiResponseWrapper\ApiResponseWrapper as ApiResponseWrapperApp;

class ApiResponseWrapper extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'api-response-wrapper';
    }
}