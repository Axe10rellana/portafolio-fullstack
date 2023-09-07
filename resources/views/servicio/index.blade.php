@extends('layouts.app')

@section('template_title')
  Servicio
@endsection

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">
              <span id="card_title">
                {{ __('Servicio') }}
              </span>
              <div class="float-right">
              	<a href="{{ route('servicios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Icono</th>
										<th>Descripción</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
            		<tbody>
                  @foreach ($servicios as $servicio)
                    <tr>
                      <td>{{ ++$i }}</td>                                    
											<td>{{ $servicio->nombre }}</td>
											<td>{{ $servicio->icono }}</td>
											<td>{{ $servicio->descripcion }}</td>
                      <td>
                      	<form action="{{ route('servicios.destroy',$servicio->id) }}" method="POST">
                          <a class="btn btn-sm btn-primary " href="{{ route('servicios.show',$servicio->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                          <a class="btn btn-sm btn-success" href="{{ route('servicios.edit',$servicio->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
        {!! $servicios->links() !!}
      </div>
    </div>
  </div>
@endsection
