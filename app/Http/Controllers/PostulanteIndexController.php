<?php

namespace App\Http\Controllers;
use App\Models\Postulante;
use Illuminate\Http\Request;

class PostulanteIndexController extends Controller
{
	public function index()
  {
    $postulantes = Postulante::paginate();
    return view('postulante', compact('postulantes'));
  }
}
