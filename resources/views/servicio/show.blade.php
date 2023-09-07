@extends('layouts.app')

@section('template_title')
  {{ $servicio->name ?? "{{ __('Ver') Servicio" }}
@endsection

@section('content')
  <section class="content container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="d-flex align-items-center justify-content-between">
              <span class="card-title">{{ __('Ver') }} Servicio</span>
              <a class="btn btn-primary" href="{{ route('servicios.index') }}"> {{ __('Volver') }}</a>
          	</div>
          </div>

          <div class="card-body">
            <div class="form-group">
              <strong>Nombre:</strong>
              {{ $servicio->nombre }}
            </div>
            <div class="form-group">
              <strong>Icono:</strong>
              {{ $servicio->icono }}
            </div>
            <div class="form-group">
              <strong>Descripción:</strong>
              {{ $servicio->descripcion }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
