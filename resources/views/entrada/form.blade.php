<div class="box box-info padding-1">
  <div class="box-body">
    <div class="form-group">
      {{ Form::text('descripcion', $entrada->descripcion, ['class' => 'form-control mb-3' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripción']) }}
      {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
    </div>
  </div>
  <div class="box-footer mt20">
    <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
  </div>
</div>