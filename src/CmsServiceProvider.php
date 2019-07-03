<?php

namespace sixredsquares\cms;
use Illuminate\Support\ServiceProvider;

class CmsServiceProvider extends ServiceProvider {
	public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'cms');
        $this->loadMigrationsFrom(__DIR__ . '/Database/migrations');
    }

    public function register()
    {
    }
}