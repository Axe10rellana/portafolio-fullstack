<?php

namespace App\Http\Controllers;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoIndexController extends Controller
{
  public function index()
  {
    $proyectos = Proyecto::paginate();
    return view('proyecto', compact('proyectos'));
  }
}
