<?php

namespace App\Http\Controllers;
use App\Models\Entrada;
use Illuminate\Http\Request;

class EntradaController extends Controller
{
  public function index()
  {
    $entradas = Entrada::paginate();
    return view('entrada.index', compact('entradas'))->with('i', (request()->input('page', 1) - 1) * $entradas->perPage());
  }

  public function create()
  {
    $entrada = new Entrada();
    return view('entrada.create', compact('entrada'));
  }

  public function store(Request $request)
  {
    request()->validate(Entrada::$rules);
    $entrada = Entrada::create($request->all());
    return redirect()->route('entradas.index')->with('success', 'Entrada agregada correctamente.');
  }

  public function show($id)
  {
    $entrada = Entrada::find($id);
    return view('entrada.show', compact('entrada'));
  }

  public function edit($id)
  {
    $entrada = Entrada::find($id);
    return view('entrada.edit', compact('entrada'));
  }

  public function update(Request $request, Entrada $entrada)
  {
    request()->validate(Entrada::$rules);
    $entrada->update($request->all());
    return redirect()->route('entradas.index')->with('success', 'Entrada actualizada correctamente');
  }

  public function destroy($id)
  {
    $entrada = Entrada::find($id)->delete();
    return redirect()->route('entradas.index')->with('success', 'Entrada eliminada correctamente');
  }
}
