<?php

namespace App\Http\Controllers;
use App\Models\Postulante;
use Illuminate\Http\Request;

class PostulanteController extends Controller
{
  public function index()
  {
    $postulantes = Postulante::paginate();
    return view('postulante.index', compact('postulantes'))->with('i', (request()->input('page', 1) - 1) * $postulantes->perPage());
  }

  public function create()
  {
    $postulante = new Postulante();
    return view('postulante.create', compact('postulante'));
  }

  public function store(Request $request)
  {
    request()->validate(Postulante::$rules);
    $postulante = Postulante::create($request->all());
    return redirect()->route('postulantes.index')->with('success', 'Postulante agregado correctamente.');
  }

  public function show($id)
  {
    $postulante = Postulante::find($id);
    return view('postulante.show', compact('postulante'));
  }

  public function edit($id)
  {
    $postulante = Postulante::find($id);
    return view('postulante.edit', compact('postulante'));
  }

  public function update(Request $request, Postulante $postulante)
  {
    request()->validate(Postulante::$rules);
    $postulante->update($request->all());
    return redirect()->route('postulantes.index')->with('success', 'Postulante actualizado correctamente');
  }

  public function destroy($id)
  {
    $postulante = Postulante::find($id)->delete();
    return redirect()->route('postulantes.index')->with('success', 'Postulante eliminado correctamente');
  }
}
