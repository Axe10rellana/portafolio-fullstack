@extends('layouts.app')

@section('template_title')
  Postulante
@endsection

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">
	            <span id="card_title">
	                {{ __('Postulante') }}
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
										<th>Nombre</th>
										<th>Imagen</th>
										<th>Puesto</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($postulantes as $postulante)
                    <tr>
                      <td>{{ ++$i }}</td>              
											<td>{{ $postulante->nombre }}</td>
											<td>{{ $postulante->imagen }}</td>
											<td>{{ $postulante->puesto }}</td>
                      <td>
                        <form action="{{ route('postulantes.destroy',$postulante->id) }}" method="POST">
                          <a class="btn btn-sm btn-primary " href="{{ route('postulantes.show',$postulante->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                          <a class="btn btn-sm btn-success" href="{{ route('postulantes.edit',$postulante->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
        {!! $postulantes->links() !!}
      </div>
    </div>
  </div>
@endsection
