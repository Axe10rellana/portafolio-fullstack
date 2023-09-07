@extends('layouts.template')

@section('servicios')
	@foreach ($servicios as $servicio)
		<div class="col-lg-6 text-center">
      <i class="{{ $servicio->icono }}"></i>
    	<h3>{{ $servicio->nombre }}</h3>
    	<p class="lead">{{ $servicio->descripcion }}</p>
    </div>
	@endforeach
@endsection