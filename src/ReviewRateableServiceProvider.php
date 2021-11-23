<?php

namespace Kivicms\ReviewRateable;

use Illuminate\Support\ServiceProvider;

class ReviewRateableServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../resources/config/reviewrateable.php' => config_path('reviewrateable.php'),
        ], 'config');

        $timestamp = date('Y_m_d_His', time());
        $this->publishes([
            __DIR__ . '/../resources/database/migrations/create_reviews_table.php.stub' => $this->app->databasePath()."/migrations/{$timestamp}_create_reviews_table.php",
        ], 'migrations');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
