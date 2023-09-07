<?php

namespace App\Http\Controllers;
use App\Models\Servicio;
use Illuminate\Http\Request;

class ServicioIndexController extends Controller
{
  public function index()
  {
    $servicios = Servicio::paginate();
    return view('servicio', compact('servicios')); 
  }
}
