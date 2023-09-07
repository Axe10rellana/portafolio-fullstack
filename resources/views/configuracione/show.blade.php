@extends('layouts.app')

@section('template_title')
  {{ $configuracione->name ?? "{{ __('Ver') Configuración" }}
@endsection

@section('content')
  <section class="content container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
						<div class="d-flex align-items-center justify-content-between">
              <span class="card-title">{{ __('Ver') }} Configuración</span>
              <a class="btn btn-primary" href="{{ route('configuraciones.index') }}"> {{ __('Volver') }}</a>
            </div>
          </div>
          <div class="card-body">
            <div class="form-group">
              <strong>Nombre de la configuración:</strong>
              {{ $configuracione->nombreconfiguracion }}
            </div>
            <div class="form-group">
              <strong>Valor:</strong>
              {{ $configuracione->valor }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
