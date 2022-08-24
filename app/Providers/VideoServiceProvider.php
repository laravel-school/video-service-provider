<?php

namespace App\Providers;

use App\Services\Contracts\VideoServiceInterface;
use App\Services\YouTubeVideoService;
use Illuminate\Support\ServiceProvider;

class VideoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(VideoServiceInterface::class, function () {
            return new YouTubeVideoService;
        });
    }
}
