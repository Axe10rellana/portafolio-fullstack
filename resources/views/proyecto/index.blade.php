@extends('layouts.app')

@section('template_title')
  Proyectos
@endsection

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">
              <span id="card_title">
                {{ __('Proyectos') }}
              </span>

             <div class="float-right">
                <a href="{{ route('proyectos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                  {{ __('Agregar') }}
                </a>
              </div>
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
										<th>Descripción</th>
										<th>Url</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($proyectos as $proyecto)
                  	<tr>
                      <td>{{ ++$i }}</td>              
											<td>{{ $proyecto->nombre }}</td>
											<td>{{ $proyecto->imagen }}</td>
											<td>{{ $proyecto->descripcion }}</td>
											<td>{{ $proyecto->url }}</td>
                      <td>
                        <form action="{{ route('proyectos.destroy',$proyecto->id) }}" method="POST">
                          <a class="btn btn-sm btn-primary " href="{{ route('proyectos.show',$proyecto->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                          <a class="btn btn-sm btn-success" href="{{ route('proyectos.edit',$proyecto->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Borrar') }}</button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
        {!! $proyectos->links() !!}
      </div>
    </div>
  </div>
@endsection
