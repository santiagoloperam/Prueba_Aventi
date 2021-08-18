@extends('layouts.app')

@section('content')

<h1>USUARIOS</h1>

	<a href="{{ route('users.create') }}"><button class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Crear Nuevo Usuario</button></a>

	 <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Listado de Usuarios</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="users-table" class="table table-bordered table-striped">
                <thead>
	                <tr>
	                  <th>NOMBRE</th>
	                  <th>APELLIDO</th>
	                  <th>DIRECCIÓN</th>
	                  <th>TELÉFONO</th>
	                  <th>EMAIL</th>   
	                  <th>EDITAR</th> 
	                  <th>ELIMINAR</th> 
	                </tr>
                </thead>
                
                <tbody>
                	@if($users)
                	@foreach($users as $user)
						<tr>
							<td>{{ $user->name }}</td>
							<td>{{ $user->last_name }}</td>
							<td>{{ $user->address }}</td>
							<td>{{ $user->phone }}</td>
							<td>{{ $user->email }}</td>
							<td>
								&nbsp;&nbsp;&nbsp;
								<a href="{{ route('users.edit',$user) }}"  class="btn btn-xs btn-info" ><i class="fa fa-pencil"></i></a> 
							</td>

							<td>
								<form method="post" action="{{ route('users.delete',$user) }}" class="pull-left">
								    {!! csrf_field() !!} {{ method_field('DELETE') }}
								    <div>
								        <button type="submit" class="btn btn-warning btn btn-xs btn-info" onclick="return confirm('Está seguro de eliminar el registro?')"><i class="fa fa-times"></i></button>
								    </div>                
								</form>
							</td>
								
						</tr>
                	@endforeach  
                	@endif              	
                </tbody>


              </table>
            </div>
            <!-- /.box-body -->
          </div>

@stop

@push('styles')
	<!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
  <!-- MIS ESTILOS -->
  <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

@endpush
 
@push('scripts')
		<!-- DataTables -->
	<script src="{{ asset('AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('AdminLTE/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
	<script>
	  $(function () {
	    $('#users-table').DataTable()({
	      'paging'      : true,
	      'lengthChange': false,
	      'searching'   : false,
	      'ordering'    : true,
	      'info'        : true,
	      'autoWidth'   : false
	    })
	  })
	</script>

	

	<!-- Modal CREAR-->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Crear Usuario</h4>
	      </div>

	      
	      <div class="modal-body">
	        <div class="row">
				<form method="POST" action="{{route('users.store')}}">
					@csrf

					<div class="col-md-6">
						<div class="box box-primary">
							
								<div class="box-body">

									<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
										<label for="name" >Nombre</label>
										<input name="name" placeholder="Ingresa el nombre del usuario" type="text" class="form-control" value="{{ old('name') }}">
										{!! $errors->first('name','<span class="help-block">:message</span>') !!}
									</div>
									
									<div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
										<label for="last_name" >Apellidos</label>
										<input name="last_name" placeholder="Ingresa los apellidos del usuario" type="text" class="form-control" value="{{ old('last_name') }}">
										{!! $errors->first('last_name','<span class="help-block">:message</span>') !!}
									</div>

									<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
										<label for="email" >Email</label>
										<input name="email" placeholder="Ingresa el email del usuario" type="email" class="form-control" value="{{ old('email') }}">
										{!! $errors->first('email','<span class="help-block">:message</span>') !!}
									</div>									
										

							</div>
						</div>
					</div>
			
			<div class="modal-footer">
	       		<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        		<button type="submit" class="btn btn-primary">Crear Usuario</button>
	      	</div>

	      </form>
				
		</div>
      </div>
	      
    </div>
  </div>
	  @if($errors->any())
	    <script>
	        $('#myModal').modal('show');
	    </script>
	    @endif
	</div>
	{{-- FIN MODAL CREAR --}}
@endpush

@ensection