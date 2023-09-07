@extends('layouts.app')

@section('template_title')
  {{ $proyecto->name ?? "{{ __('Ver') Proyecto" }}
@endsection

@section('content')
  <section class="content container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="d-flex align-items-center justify-content-between">
              <span class="card-title">{{ __('Ver') }} Proyecto</span>
              <a class="btn btn-primary" href="{{ route('proyectos.index') }}"> {{ __('Volver') }}</a>
            </div>
          </div>

          <div class="card-body">
            <div class="form-group">
              <strong>Nombre:</strong>
              {{ $proyecto->nombre }}
            </div>
            <div class="form-group">
              <strong>Imagen:</strong>
              {{ $proyecto->imagen }}
            </div>
            <div class="form-group">
              <strong>Descripción:</strong>
              {{ $proyecto->descripcion }}
            </div>
            <div class="form-group">
              <strong>Url:</strong>
              {{ $proyecto->url }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
