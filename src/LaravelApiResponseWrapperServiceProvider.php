<?php

namespace Silverhand7\LaravelApiResponseWrapper;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use Silverhand7\LaravelApiResponseWrapper\Facades\ApiResponseWrapper as ApiResponseWrapperFacade;
use Silverhand7\LaravelApiResponseWrapper\Responses\GetResponse;

class LaravelApiResponseWrapperServiceProvider extends ServiceProvider
{
    public function register()
    {
        // $this->app->bind(GetResponseContract::class, function (Application $app) {
        //     return new GetResponse();
        // });
        $this->app->bind(GetResponseContract::class, GetResponse::class);

        $this->app->bind('api-response-wrapper', ApiResponseWrapper::class);

        // $this->app->bind(ApiResponseWrapper::class, function (Application $app) {
        //     $getResponse = new GetResponse();
        //     return new ApiResponseWrapper($getResponse);
        // });

        // $this->app->bind(ApiResponseWrapperFacade::class, ApiResponseWrapper::class);
    }
}