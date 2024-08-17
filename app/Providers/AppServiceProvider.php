<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Services\HeaderService ;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Pagination\Paginator as PaginationPaginator;

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
        $this->app->bind(HeaderService::class, function ($app) {
            return new HeaderService();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        View::composer('frontend.Component.header', function ($view) {
            $categories = app(HeaderService::class); 
            $data = $categories->getItems();
            $view->with('categories', $data); 
        });
        PaginationPaginator::defaultView('pagination::bootstrap-5');
        PaginationPaginator::defaultSimpleView('pagination::simple-default');
    }
}
