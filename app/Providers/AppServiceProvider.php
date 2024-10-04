<?php

namespace App\Providers;

use App\Http\Controllers\dashboard\AdminController;
use App\Models\Page;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
        view()->composer('dashboard.layouts.navbar',
        function ($view) {
            $adminController = new AdminController();
            $view->with('loginUser', Auth::user());
        });

        view()->composer('home.layouts.footer',
        function ($view) {
            $pages = Page::all();
            $view->with('pages', $pages);
        });

    }


}
