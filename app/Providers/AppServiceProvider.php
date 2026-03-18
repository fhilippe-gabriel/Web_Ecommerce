<?php

namespace App\Providers;

use App\Models\Categoria;
use App\Models\Produto;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
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
        // Gate::define('ver-produto', function (User $user, Produto $produto) {
        //     return $user->id === $produto->id_user;
        // });

        AliasLoader::getInstance()->alias('Cart', \Darryldecode\Cart\Facades\CartFacade::class);

        $categoriasMenu = Categoria::all();
        view()->share('categoriasMenu', $categoriasMenu);
    }
}
