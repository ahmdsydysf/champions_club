<?php

namespace App\Providers;

use App\Models\Sport;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
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
        view()->composer(['web.layout.header','web.layout.footer'], function ($view) {
            $sports = Sport::all();
            $view->with('sports', $sports);
        });

    }
}
