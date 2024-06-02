<?php

namespace App\Http\Middleware;

use Symfony\Component\HttpFoundation\Response;
use Closure;
use Illuminate\Http\Request;

class ApplyLocale
{
    /**
     * Handle an incoming request.
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->header('X-Locale');
        if (! empty($locale)) {
            app()->setLocale($locale);
        }

        return $next($request);
    }
}
