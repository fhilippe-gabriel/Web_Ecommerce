<?php

use App\Http\Controllers\CarrinhoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('/produtos/{slug}', [SiteController::class, 'details'])->name('site.details');
Route::get('/categorias/{id}', [SiteController::class, 'categoria'])->name('site.categoria');
Route::get('/carrinho', [CarrinhoController::class, 'carrinhoLista'])->name('site.carrinho');
Route::post('/carrinho', [CarrinhoController::class, 'adicionaCarrinho'])->name('site.addcarrinho');
Route::post('/remover', [CarrinhoController::class, 'removeCarrinho'])->name('site.removecarrinho');
Route::post('/atualizar', [CarrinhoController::class, 'atualizaCarrinho'])->name('site.atualizacarrinho');
Route::get('/carrinho/total', [CarrinhoController::class, 'getTotalCarrinho'])->name('site.carrinho.total');
Route::get('/limpar', [CarrinhoController::class, 'limparCarrinho'])->name('site.limparcarrinho');
