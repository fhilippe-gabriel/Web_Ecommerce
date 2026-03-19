<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class DashboardController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        return view('admin.dashboard', ['produtos' => $produtos]);
    }
}
