<?php

namespace App\Providers;

use App\Models\About;
use App\Models\Announ;
use App\Models\Product;
use App\Models\Rasta;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\PostRepositoryInterface;
use App\Repositories\PostRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PostRepositoryInterface::class, PostRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('welcome', function ($view) {
            $rastalar = Rasta::latest()->limit(8)->get();
            $about = About::latest()->first();
            $elonlar = Announ::latest()->limit(6)->get();
            $product_1 = Product::where('muhim','1')->limit(5)->get();
            $product_0 = Product::where('muhim','0')->limit(5)->get();
            $view->with(compact('rastalar','about','elonlar','product_1','product_0'));
        });
    }
}
