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
            'quantity' => $request->qnt,
            'attributes' => [
                'image' => $request->imagem
            ]
        ]);

        return redirect()->route('site.carrinho')->with('sucesso', 'Produto adicionado ao carrinho!');
    }
}
