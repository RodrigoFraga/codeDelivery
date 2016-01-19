<?php

namespace CodeDelivery\Http\Controllers;

use Illuminate\Http\Request;

use CodeDelivery\Http\Requests;
use CodeDelivery\Http\Controllers\Controller;

class CategoriasController extends Controller
{
    public function index()
    {
    	$nome = "Rodrigo";
    	return view('admin.categorias.index', compact('nome'));
    }
}
