<div class="box box-info padding-1">
  <div class="box-body"> 
    <div class="form-group">
      {{ Form::text('nombre', $postulante->nombre, ['class' => 'form-control mb-3' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
      {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group">
      {{ Form::label('imagen') }}
      {{ Form::text('imagen', $postulante->imagen, ['class' => 'form-control mb-3' . ($errors->has('imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
      {!! $errors->first('imagen', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group">
      {{ Form::text('puesto', $postulante->puesto, ['class' => 'form-control mb-3' . ($errors->has('puesto') ? ' is-invalid' : ''), 'placeholder' => 'Puesto']) }}
      {!! $errors->first('puesto', '<div class="invalid-feedback">:message</div>') !!}
    </div>
  </div>
  <div class="box-footer mt20">
    <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
  </div>
</div>