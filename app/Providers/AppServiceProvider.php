<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

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
        view()->composer('client.layout.partials.nav', function ($view) {
            $categories = Category::all(); // Lấy tất cả các danh mục sản phẩm từ database
            $view->with('categories', $categories);
        });
    }
}
