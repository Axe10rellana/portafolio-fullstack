<?php

namespace App\Http\Controllers;
use App\Models\Entrada;
use Illuminate\Http\Request;

class EntradaIndexController extends Controller
{
	public function index()
  {
    $entradas = Entrada::paginate();
    return view('entrada', compact('entradas'));
  }
}
