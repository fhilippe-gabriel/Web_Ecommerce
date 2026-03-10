<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        // return ('index');

        $produtos = Produto::paginate(12);
        return view('site.home', compact('produtos'));
    }

    public function details($slug)
    {
        $produto = Produto::where('slug', $slug)->firstOrFail();
        return view('site.details', compact('produto'));
    }

    public function categoria($id)
    {
        $categoria = Categoria::find($id);
        $produtos = Produto::where('id_categorias', $id)->paginate(6);
        return view('site.categoria', compact('produtos', 'categoria'));
    }
}
