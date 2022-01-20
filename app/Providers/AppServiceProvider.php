<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Site;
use Illuminate\Pagination\Paginator;
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
        Paginator::useBootstrap();
        if(Schema::hasTable('sites')){
            view()->share('siteInfo',Site::first());
        }
        if(Schema::hasTable('categories')){
            view()->share('main_categories',Category::activeParent()->with('activeChilds')->get());
        }
    }
}
