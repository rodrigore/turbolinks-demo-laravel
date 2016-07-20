<?php

namespace App\Http\Middleware;

use Closure;

class FilterIfTurbolinks
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        if ($request->ajax()) {
            $script = [];
            $script[] = "Turbolinks.clearCache()";
            $script[] = "Turbolinks.visit('" . $request->path() . " ')";

            $response->setContent(join(";", $script));
            $response->header('Content-Type', 'application/javascript');
            $response->setStatusCode(422);
        }

        // set visit
        // Turbolinks-Location
        /* if ($request->header('turbolinks-referrer') && $response->isRedirection()) { */
        /* } */

        return $response;
    }
}
