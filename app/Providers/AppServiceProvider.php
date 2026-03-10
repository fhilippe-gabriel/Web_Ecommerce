<?php

namespace App\Providers;

use App\Models\Categoria;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

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
        AliasLoader::getInstance()->alias('Cart', \Darryldecode\Cart\Facades\CartFacade::class);

        $categoriasMenu = Categoria::all();
        view()->share('categoriasMenu', $categoriasMenu);
    }
}
