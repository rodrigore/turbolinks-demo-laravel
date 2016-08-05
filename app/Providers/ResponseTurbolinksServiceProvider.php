<?php

namespace App\Providers;

use Response;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Routing\ResponseFactory;

class ResponseTurbolinksServiceProvider extends ServiceProvider
{
    public function boot(ResponseFactory $factory)
    {
        Response::macro('turbolinks', function ($url) use ($factory) {
            return $factory->redirectTo($url)
                ->with('_turbolinks_location', $url);
        });
    }

    public function register()
    {
    }
}
