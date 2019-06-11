<?php

namespace App\Providers;

use App\Models\Admin\Category;
use App\Models\Admin\Order;
use App\Models\Admin\Product;
use App\Observers\AdminCategoryObserver;
use App\Observers\AdminOrderObserver;
use App\Observers\AdminProductObserver;
use Illuminate\Support\Facades\Schema;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        date_default_timezone_set('Europe/Minsk');
        Order::observe(AdminOrderObserver::class);
        Category::observe(AdminCategoryObserver::class);
        Product::observe(AdminProductObserver::class);

    }
}
