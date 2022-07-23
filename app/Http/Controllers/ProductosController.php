<?php

namespace App\Http\Controllers;
use App\Models\Administrador;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    //
    public function index()
    {
        $productos = Administrador::paginate();

        return view('welcome', compact('productos'));
            
    }
}
