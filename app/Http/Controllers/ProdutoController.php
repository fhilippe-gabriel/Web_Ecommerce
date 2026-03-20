<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Illuminate\Support\Str;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return ('index');

        $produtos = Produto::paginate(8);

        return view('site.home', 'admin.dashboard', compact('produtos', 'categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categorias = Categoria::all();
        return view('admin.produtos.create', compact('categorias'));

        $produto = $request->all();

        if ($request->imagem) {
            $produto['imagem'] = $request->imagem->store('produtos');
        }

        $produto['slug'] = Str::slug($request->nome);

        $produto = Produto::create($produto);

        return redirect()->view('admin.dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();

        return redirect()->route('admin.dashboard');
    }
}
