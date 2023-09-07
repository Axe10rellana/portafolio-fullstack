<div class="box box-info padding-1">
  <div class="box-body">
    <div class="form-group">
      {{ Form::text('nombreconfiguracion', $configuracione->nombreconfiguracion, ['class' => 'form-control mb-3' . ($errors->has('nombreconfiguracion') ? ' is-invalid' : ''), 'placeholder' => 'Nombre de la configuración']) }}
      {!! $errors->first('nombreconfiguracion', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group">
      {{ Form::text('valor', $configuracione->valor, ['class' => 'form-control mb-3' . ($errors->has('valor') ? ' is-invalid' : ''), 'placeholder' => 'Valor']) }}
      {!! $errors->first('valor', '<div class="invalid-feedback">:message</div>') !!}
    </div>
  </div>
  <div class="box-footer mt20">
    <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
  </div>
</div>