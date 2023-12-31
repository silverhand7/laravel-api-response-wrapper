<?php

namespace Silverhand7\LaravelApiResponseWrapper;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use Silverhand7\LaravelApiResponseWrapper\Responses\CreatedResponse;
use Silverhand7\LaravelApiResponseWrapper\Responses\DeletedResponse;
use Silverhand7\LaravelApiResponseWrapper\Responses\GetResponse;
use Silverhand7\LaravelApiResponseWrapper\Responses\NoContentResponse;
use Silverhand7\LaravelApiResponseWrapper\Responses\NotFoundResponse;
use Silverhand7\LaravelApiResponseWrapper\Responses\ServerErrorResponse;
use Silverhand7\LaravelApiResponseWrapper\Responses\UpdatedResponse;
use Silverhand7\LaravelApiResponseWrapper\Responses\ValidationErrorsResponse;

class ApiResponseWrapperServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('api-response-wrapper', function(Application $app) {
            return new ApiResponseWrapper(
                $app->make(GetResponse::class),
                $app->make(CreatedResponse::class),
                $app->make(UpdatedResponse::class),
                $app->make(DeletedResponse::class),
                $app->make(NotFoundResponse::class),
                $app->make(ValidationErrorsResponse::class),
                $app->make(ServerErrorResponse::class),
                $app->make(NoContentResponse::class),
            );
        });
    }

    public function boot()
    {

    }
}