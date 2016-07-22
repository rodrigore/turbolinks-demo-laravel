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

        $turbolinksLocation = session('_turbolinks_location');

        if ($request->ajax() && ! $request->isMethod('get')) {
            $script = [];
            $script[] = "Turbolinks.clearCache()";
            $script[] = "Turbolinks.visit('" . $turbolinksLocation . " ')";

            $response->setContent(join(";", $script));
            $response->header('Content-Type', 'application/javascript');
            $response->setStatusCode(422);
        } else if ($turbolinksLocation) {
            return $response->header("Turbolinks-Location", $turbolinksLocation);
        }

        return $response;
    }
}
