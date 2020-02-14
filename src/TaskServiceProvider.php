<?php

namespace Parteek\Par_crud;

use Illuminate\Support\ServiceProvider;

class TaskServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
         $this->loadRoutesFrom(__DIR__.'/routes/web.php');
         $this->loadViewsFrom(__DIR__.'/views', 'par_crud');
         $this->loadMigrationsFrom(__DIR__.'/migrations');
         $this->publishes([
             __DIR__.'/views' => resource_path('views/parteek/par_crud')
         ],'parviews');
         $this->mergeConfigFrom([
             __DIR__.'/routes/web.php' => base_path('routes/web.php'),
         ]);
    }
}
