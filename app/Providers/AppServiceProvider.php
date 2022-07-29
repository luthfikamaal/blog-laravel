<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Post;
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
        view()->composer('include.popularpost', function($view){
            $view->with('popularPosts', Post::orderBy('views','DESC')->limit(5)->get());
        });
        view()->composer('include.latestpost', function($view){
            $view->with('latestPosts', Post::latest()->take(5)->get());
        });
        view()->composer('include.randompost', function($view){
            $view->with('randomPosts', Post::latest()->take(3)->get());
        });
        view()->composer('include.navbar', function($view){
            $view->with('categories', Category::all());
        });
    }
}