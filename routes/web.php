<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\PostulanteController;
use App\Http\Controllers\ConfiguracioneController;
use App\Http\Controllers\ProyectoIndexController;
use App\Http\Controllers\ServicioIndexController;
use App\Http\Controllers\EntradaIndexController;
use App\Http\Controllers\PostulanteIndexController;
use App\Http\Controllers\ConfiguracionIndexController;

Route::get('/', function () {
  $proyectos = app(ProyectoIndexController::class)->index();
  $servicios = app(ServicioIndexController::class)->index();
  $entradas = app(EntradaIndexController::class)->index();
  $postulantes = app(PostulanteIndexController::class)->index();
  $configuraciones = app(ConfiguracionIndexController::class)->index();

  return view('layouts.template', [
    'proyectos' => $proyectos,
    'servicios' => $servicios,
    'entradas' => $entradas,
    'postulantes' => $postulantes,
    'configuraciones' => $configuraciones,
  ]);
});

Route::resource('/proyectos', ProyectoController::class)->middleware('auth');
Route::resource('/servicios', ServicioController::class)->middleware('auth');
Route::resource('/entradas', EntradaController::class)->middleware('auth');
Route::resource('/postulantes', PostulanteController::class)->middleware('auth');
Route::resource('/configuraciones', ConfiguracioneController::class)->middleware('auth');

Auth::routes(['register' => false, 'reset' => false]);
