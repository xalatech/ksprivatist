<?php

namespace MyApp\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class ForseSSL
{

    public function handle($request, Closure $next)
    {
        if (!$request->secure() && App::environment() === 'prod') {
            return redirect()->secure($request->getRequestUri());
        }

        return $next($request);
    }
}
