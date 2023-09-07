<?php

namespace App\Http\Controllers;
use App\Models\Configuracione;
use Illuminate\Http\Request;

class ConfiguracioneController extends Controller
{
  public function index()
  {
    $configuraciones = Configuracione::paginate();
    return view('configuracione.index', compact('configuraciones'))->with('i', (request()->input('page', 1) - 1) * $configuraciones->perPage());
  }

  public function create()
  {
    $configuracione = new Configuracione();
    return view('configuracione.create', compact('configuracione'));
  }

  public function store(Request $request)
  {
    request()->validate(Configuracione::$rules);
    $configuracione = Configuracione::create($request->all());
    return redirect()->route('configuraciones.index')->with('success', 'Configuración agregada correctamente.');
  }

  public function show($id)
  {
    $configuracione = Configuracione::find($id);
    return view('configuracione.show', compact('configuracione'));
  }

  public function edit($id)
  {
    $configuracione = Configuracione::find($id);
    return view('configuracione.edit', compact('configuracione'));
  }

  public function update(Request $request, Configuracione $configuracione)
  {
    request()->validate(Configuracione::$rules);
    $configuracione->update($request->all());
    return redirect()->route('configuraciones.index')->with('success', 'Configuración actualizada correctamente');
  }

  public function destroy($id)
  {
    $configuracione = Configuracione::find($id)->delete();
    return redirect()->route('configuraciones.index')->with('success', 'Configuración eliminada correctamente');
  }
}
