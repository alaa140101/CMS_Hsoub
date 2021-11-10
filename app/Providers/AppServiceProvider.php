<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\View\Composers\ProfileComposer;
use Illuminate\Support\Facades\View;
use App\Http\ViewComposers\CategoryComposer;
use App\Http\ViewComposers\CommentComposer;
use App\Http\ViewComposers\RoleComposer;
use Illuminate\Pagination\Paginator;

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
         // Using class based composers...
         View::composer(['partials.sidebar', 'lists.categories', 'lists.roles'], CategoryComposer::class);

         view::composer('lists.roles', RoleComposer::class);

         View::composer(['partials.sidebar'], CommentComposer::class);

         Paginator::useBootstrap();
         
    }
}
