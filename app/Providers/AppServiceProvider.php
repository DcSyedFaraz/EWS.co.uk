<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\View\Composers\LayoutComposer;
use Illuminate\Bus\Dispatcher;
use Illuminate\Support\Facades\View;
use App\Http\Resources\Api\OrderResource;
use App\Http\Resources\Api\InvoiceResource;
use App\WebSetting;

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
    public function boot(Dispatcher $events)
    {
        View::composer('layouts.web', LayoutComposer::class);
        View::share(['web_setting' => WebSetting::first()]);
        OrderResource::withoutWrapping();
        InvoiceResource::withoutWrapping();
    }
}
