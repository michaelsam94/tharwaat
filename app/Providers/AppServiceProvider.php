<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\WebsiteContent;
use App\Observers\WebsiteContentObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            '*', 'App\Services\Helper\RenderComposer'
        );
        
        // Register observers
        WebsiteContent::observe(WebsiteContentObserver::class);
        
        // Force HTTPS in production
        if (config('app.env') === 'production') {
            \URL::forceScheme('https');
            \Illuminate\Support\Facades\Request::setTrustedProxies(['*'], \Illuminate\Http\Request::HEADER_X_FORWARDED_ALL);
        }
    }
}
