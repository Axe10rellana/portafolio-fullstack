@extends('layouts.template')

@section('entradas')
	@foreach ($entradas as $entrada)
    <div class="col-lg-4 text-center"><p class="lead">{{ $entrada->descripcion }}</p></div>
	@endforeach
@endsection