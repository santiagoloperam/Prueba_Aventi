@extends('layouts.app')

@section('content')
	<div class="container">
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

								<div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
									<label for="address" >Dirección</label>
									<input name="address" placeholder="Ingresa dirección del usuario" type="text" class="form-control" value="{{ old('address') }}">
									{!! $errors->first('address','<span class="help-block">:message</span>') !!}
								</div>

								<div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
									<label for="phone" >Teléfono</label>
									<input name="phone" placeholder="Ingresa el teleéfono del usuario" type="text" class="form-control" value="{{ old('phone') }}">
									{!! $errors->first('phone','<span class="help-block">:message</span>') !!}
								</div>	

								<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }} {{ $errors->has('confirm') ? 'has-error' : '' }}">
									<label for="password" >Password</label>
									<input name="password" placeholder="Ingresa un password para el usuario" type="password" class="form-control"><br>
									{!! $errors->first('password','<span class="help-block">:message</span>') !!}
									<input name="confirm" placeholder="confirma el password para el usuario" type="password" class="form-control">
									{!! $errors->first('confirm','<span class="help-block">:message</span>') !!}
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


@stop
