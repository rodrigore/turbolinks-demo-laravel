<?php

namespace App\Providers;

use Response;
use Illuminate\Support\ServiceProvider;

class ResponseTurbolinksServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Response::macro('turbolinksLocation', function ($url) {
            return Response::redirect($url);
        });
    }
}
