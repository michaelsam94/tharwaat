<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class OptimizeConnections
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
        
        // Add keep-alive headers for static resources
        if ($this->isStaticResource($request)) {
            $response->headers->set('Connection', 'keep-alive');
            $response->headers->set('Keep-Alive', 'timeout=5, max=1000');
            
            // Add cache headers for static resources
            $response->headers->set('Cache-Control', 'public, max-age=31536000');
            $response->headers->set('Expires', gmdate('D, d M Y H:i:s', time() + 31536000) . ' GMT');
        }
        
        return $response;
    }
    
    /**
     * Check if the request is for a static resource
     */
    private function isStaticResource(Request $request)
    {
        $path = $request->path();
        
        return str_starts_with($path, 'design/') || 
               str_starts_with($path, 'storage/') ||
               str_ends_with($path, '.css') ||
               str_ends_with($path, '.js') ||
               str_ends_with($path, '.woff2') ||
               str_ends_with($path, '.woff') ||
               str_ends_with($path, '.ttf') ||
               str_ends_with($path, '.eot') ||
               str_ends_with($path, '.png') ||
               str_ends_with($path, '.jpg') ||
               str_ends_with($path, '.jpeg') ||
               str_ends_with($path, '.gif') ||
               str_ends_with($path, '.svg') ||
               str_ends_with($path, '.ico');
    }
}

