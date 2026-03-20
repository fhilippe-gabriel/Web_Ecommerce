<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class DashboardController extends Controller
{
    public function index()
    {
        $produtos = Produto::paginate(16);
        return view('admin.dashboard', ['produtos' => $produtos]);
    }
}
