<?php

namespace HauntPet\Theme;

use HauntPet\Theme\Services\Repository;
use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $repository = new Repository;
        $this->app->instance(Repository::class, $repository);
        $this->app->bind('haunt-theme-repository', function ($app) use ($repository) {
            return $repository;
        });
    }
}
