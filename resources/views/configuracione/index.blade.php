@extends('layouts.app')

@section('template_title')
  Configuración
@endsection

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">
              <span id="card_title">
                {{ __('Configuración') }}
              </span>
            </div>
          </div>
          @if ($message = Session::get('success'))
          	<div class="alert alert-success">
              <p>{{ $message }}</p>
            </div>
          @endif
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-hover" id="tabla_id">
                <thead class="thead">
                  <tr>
                    <th>#</th>            
										<th>Nombre de la configuración</th>
										<th>Valor</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($configuraciones as $configuracione)
                    <tr>
                      <td>{{ ++$i }}</td>
											<td>{{ $configuracione->nombreconfiguracion }}</td>
											<td>{{ $configuracione->valor }}</td>
                      <td>
                        <form action="{{ route('configuraciones.destroy',$configuracione->id) }}" method="POST">
                          <a class="btn btn-sm btn-success" href="{{ route('configuraciones.edit',$configuracione->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
        {!! $configuraciones->links() !!}
      </div>
    </div>
  </div>
@endsection
