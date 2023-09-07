<div class="box box-info padding-1">
  <div class="box-body">
      <div class="form-group">
        {{ Form::text('nombre', $servicio->nombre, ['class' => 'form-control mb-3' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
        {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
      </div>
      <div class="form-group">
        {{ Form::label('icono') }}
        {{ Form::text('icono', $servicio->icono, ['class' => 'form-control mb-3' . ($errors->has('icono') ? ' is-invalid' : ''), 'placeholder' => 'Icono']) }}
        {!! $errors->first('icono', '<div class="invalid-feedback">:message</div>') !!}
      </div>
      <div class="form-group">
        {{ Form::text('descripcion', $servicio->descripcion, ['class' => 'form-control mb-3' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripción']) }}
        {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
      </div>
  </div>
  <div class="box-footer mt20">
    <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
  </div>
</div>