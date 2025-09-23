<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        // Get the 'lang' parameter from the URL
        $lang = $request->route('lang');

        // Check if a valid locale is provided; otherwise, use the default
        $supportedLocales = ['en', 'fr', 'es']; // Add more supported locales if needed
        if (in_array($lang, $supportedLocales)) {
            app()->setLocale($lang);
        } else {
            app()->setLocale(config('app.locale')); // Use the default locale from your app configuration
        }

        return $next($request);
    }
}
