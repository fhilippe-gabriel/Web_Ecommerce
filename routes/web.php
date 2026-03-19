<?php

use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Authenticate;


route::resource('users', UserController::class);

// Rotas de acesso
Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('/produtos/{slug}', [SiteController::class, 'details'])->name('site.details');
Route::get('/categorias/{id}', [SiteController::class, 'categoria'])->name('site.categoria');

// Rotas de Carrinho
Route::get('/carrinho', [CarrinhoController::class, 'carrinhoLista'])->name('site.carrinho');
Route::post('/carrinho', [CarrinhoController::class, 'adicionaCarrinho'])->name('site.addcarrinho');
Route::post('/remover', [CarrinhoController::class, 'removeCarrinho'])->name('site.removecarrinho');
Route::post('/atualizar', [CarrinhoController::class, 'atualizaCarrinho'])->name('site.atualizacarrinho');
Route::get('/carrinho/total', [CarrinhoController::class, 'getTotalCarrinho'])->name('site.carrinho.total');
Route::get('/limpar', [CarrinhoController::class, 'limparCarrinho'])->name('site.limparcarrinho');

//Rotas de Autenticação
Route::view('/login', 'login.form')->name('login.form');
Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [LoginController::class, 'create'])->name('login.create');


Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard')->middleware('auth');
Route::get('/admin/produto', [ProdutoController::class, 'index'])->name('admin.produto')->middleware('auth');
