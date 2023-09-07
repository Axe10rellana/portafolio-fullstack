@extends('layouts.app')

@section('template_title')
  {{ $postulante->name ?? "{{ __('Ver') Postulante" }}
@endsection

@section('content')
  <section class="content container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="d-flex align-items-center justify-content-between">
              <span class="card-title">{{ __('Ver') }} Postulante</span>
              <a class="btn btn-primary" href="{{ route('postulantes.index') }}"> {{ __('Volver') }}</a>
            </div>
          </div>

          <div class="card-body">
            <div class="form-group">
              <strong>Nombre:</strong>
              {{ $postulante->nombre }}
            </div>
            <div class="form-group">
              <strong>Imagen:</strong>
              {{ $postulante->imagen }}
            </div>
            <div class="form-group">
              <strong>Puesto:</strong>
              {{ $postulante->puesto }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
