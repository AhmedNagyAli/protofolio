<?php

namespace App\Providers;

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // if (env(key: 'APP_ENV') !=='local') {
        //     URL::forceScheme(scheme:'https');
        //   }
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // if (!empty( env('NGROK_URL') ) && $request->server->has('HTTP_X_ORIGINAL_HOST')) {
        //     $this->app['url']->forceRootUrl(env('NGROK_URL'));
        // }
        Model::unguard();
    }
}
