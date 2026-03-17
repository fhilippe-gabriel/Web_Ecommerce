<?php

namespace App\Http\Controllers;

use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    public function carrinhoLista()
    {
        $itens = \Cart::getContent();
        return view('site.carrinho', compact('itens'));
    }

    public function adicionaCarrinho(Request $request)
    {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->nome,
            'price' => $request->preco,
            'quantity' => abs($request->qnt),
            'attributes' => [
                'slug' => $request->slug,
                'image' => $request->imagem
            ]
        ]);

        return redirect()->route('site.carrinho')->with('sucesso', 'Produto adicionado ao carrinho!');
    }

    public function removeCarrinho(Request $request)
    {
        \Cart::remove($request->id);
        return redirect()->route('site.carrinho')->with('sucesso', 'Produto removido do carrinho!');
    }

    public function atualizaCarrinho(Request $request)
    {
        \Cart::update($request->id, [
            'quantity' => [
                'relative' => false,
                'value' => abs($request->quantity)
            ]
        ]);

        if ($request->expectsJson()) {
            return response()->json(['success' => true]);
        }

        return redirect()->route('site.carrinho')->with('sucesso', 'Quantidade do produto atualizada!');
    }

    public function getTotalCarrinho()
    {
        return response()->json(['total' => \Cart::getTotal()]);
    }
}
