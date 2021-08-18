@extends('layouts.app')

@section('content')

	<div class="container">
			<form method="POST" action="{{route('users.update',$user)}}">
				@csrf
				{{ method_field('PUT') }}

				<div class="col-md-6">
					<div class="box box-primary">
						
							<div class="box-body">

								<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
									<label for="name" >Nombre</label>
									<input name="name" placeholder="Ingresa el nombre del usuario" type="text" class="form-control" value="{{ old('name', $user->name) }}">
									{!! $errors->first('name','<span class="help-block">:message</span>') !!}
								</div>
								
								<div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
									<label for="last_name" >Apellidos</label>
									<input name="last_name" placeholder="Ingresa los apellidos del usuario" type="text" class="form-control" value="{{ old('last_name', $user->last_name) }}">
									{!! $errors->first('last_name','<span class="help-block">:message</span>') !!}
								</div>

								<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
									<label for="email" >Email</label>
									<input name="email" placeholder="Ingresa el email del usuario" type="email" class="form-control" value="{{ old('email', $user->email) }}">
									{!! $errors->first('email','<span class="help-block">:message</span>') !!}
								</div>

								<div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
									<label for="address" >Dirección</label>
									<input name="address" placeholder="Ingresa el número de documento del usuario" type="text" class="form-control" value="{{ old('address', $user->address) }}">
									{!! $errors->first('dni','<span class="help-block">:message</span>') !!}
								</div>

								<div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
									<label for="phone" >Teléfono</label>
									<input name="phone" placeholder="Ingresa numero de teléfono o celular del usuario" type="text" class="form-control" value="{{ old('phone', $user->phone) }}">
									{!! $errors->first('telefono','<span class="help-block">:message</span>') !!}
								</div> 
								

						</div>

					</div>
				</div>
		<div class="modal-footer">
       		<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
    		<button type="submit" class="btn btn-primary">Guardar</button>
      	</div>

      </form>	
			
	</div>
@stop