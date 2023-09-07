@extends('layouts.app')

@section('template_title')
  {{ __('Agregar') }} Postulante
@endsection

@section('content')
  <section class="content container-fluid">
    <div class="row">
      <div class="col-md-12">
        @includeif('partials.errors')
        <div class="card card-default">
          <div class="card-header">
            <span class="card-title">{{ __('Agregar') }} Postulante</span>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('postulantes.store') }}" autocomplete="off" role="form" enctype="multipart/form-data">
              @csrf
              @include('postulante.form')
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
