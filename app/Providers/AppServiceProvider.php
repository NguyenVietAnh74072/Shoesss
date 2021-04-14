<?php

namespace App\Providers;

use App\Category;
use App\Menu;
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
        try {
            $menusGlobal = Menu::all();
            $categoriesGlobal = Category::all();
        } catch (\Exception $exception) {
        }
        \view()->share('menusGlobal', $menusGlobal ?? []);
        \view()->share('categoriesGlobal', $categoriesGlobal ?? []);
    }
}
