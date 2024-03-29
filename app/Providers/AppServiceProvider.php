<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //TODO 動いてない（初期データを日本語化する）
        $this->app->singleton(FakerGenerator::class, function () {
            return FakerFactory::create('ja_JP');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // 追加した
        $this->app['request']->server->set('HTTPS','on');
    }
}
