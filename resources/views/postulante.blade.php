@extends('layouts.template')

@section('postulante')
<div class="container d-flex align-items-center flex-column">
  <img style="pointer-events: none; border-radius: 100%; border: 4px solid #ffffff;" class="masthead-avatar mb-5" src="{{ $postulantes[0]['imagen'] }}" alt="{{ $postulantes[0]['nombre'] }}" />
  <h1 class="masthead-heading text-uppercase mb-0">{{ $postulantes[0]['nombre'] }}</h1>
  <div class="divider-custom divider-light">
    <div class="divider-custom-line"></div>
    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
    <div class="divider-custom-line"></div>
  </div>
  <p class="masthead-subheading font-weight-light mb-0">{{ $postulantes[0]['puesto'] }}</p>
</div>
@endsection