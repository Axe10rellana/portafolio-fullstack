<?php

namespace App\Http\Controllers;
use App\Models\Configuracione;
use Illuminate\Http\Request;

class ConfiguracionIndexController extends Controller
{
	public function index()
  {
    $configuraciones = Configuracione::paginate();
    return view('configuracion', compact('configuraciones'));
  }
}
