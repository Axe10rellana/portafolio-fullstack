<div class="box box-info padding-1">
  <div class="box-body">
    <div class="form-group">
      {{ Form::text('nombre', $proyecto->nombre, ['class' => 'form-control mb-3' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
      {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group">
      {{ Form::label('imagen') }}
      {{ Form::text('imagen', $proyecto->imagen, ['class' => 'form-control mb-3' . ($errors->has('imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
      {!! $errors->first('imagen', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group">
      {{ Form::text('descripcion', $proyecto->descripcion, ['class' => 'form-control mb-3' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripción']) }}
      {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group">
      {{ Form::text('url', $proyecto->url, ['class' => 'form-control mb-3' . ($errors->has('url') ? ' is-invalid' : ''), 'placeholder' => 'Url del proyecto']) }}
      {!! $errors->first('url', '<div class="invalid-feedback">:message</div>') !!}
    </div>
  </div>
  <div class="box-footer mt20">
    <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
  </div>
</div>