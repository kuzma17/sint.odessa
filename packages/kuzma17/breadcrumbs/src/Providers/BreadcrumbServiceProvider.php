<?php

namespace Kuzma17\Breadcrumbs;


use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class BreadcrumbServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('breadcrumbs', function (){
           return new Breadcrumbs();
        });
    }
}
