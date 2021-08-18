@extends('layouts.app')

@section('content')

	<div class="container">
			<form method="POST" action="{{route('products.update',$product)}}">
				@csrf
				{{ method_field('PUT') }}

				<div class="col-md-6">
					<div class="box box-primary">
						
							<div class="box-body">

								<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
										<label for="name" >Nombre del Producto</label>
										<input name="name" placeholder="Ingresa el nombre del producto" type="text" class="form-control" value="{{ old('name',$product->name) }}">
										{!! $errors->first('name','<span class="help-block">:message</span>') !!}
									</div>
									
									<div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
										<label for="slug" >Slug</label>
										<input name="slug" placeholder="Ingresa slug representativo" type="text" class="form-control" value="{{ old('slug',$product->slug) }}">
										{!! $errors->first('slug','<span class="help-block">:message</span>') !!}
									</div>

									<div class="form-group {{ $errors->has('details') ? 'has-error' : '' }}">
										<label for="details" >Detalle</label>
										<input name="details" placeholder="Ingresa detalle del producto" type="details" class="form-control" value="{{ old('details',$product->details) }}">
										{!! $errors->first('details','<span class="help-block">:message</span>') !!}
									</div>

									<div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
										<label for="price" >Precio</label>
										<input name="price" placeholder="Precio unitario" type="number" class="form-control" value="{{ old('price',$product->price) }}">
										{!! $errors->first('price','<span class="help-block">:message</span>') !!}
									</div>
									
									<div class="form-group {{ $errors->has('shipping_cost') ? 'has-error' : '' }}">
										<label for="shipping_cost" >Costo de envío</label>
										<input name="shipping_cost" placeholder="costo de envio" type="number" class="form-control" value="{{ old('shipping_cost',$product->shipping_cost) }}">
										{!! $errors->first('shipping_cost','<span class="help-block">:message</span>') !!}
									</div>

									<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
										<label for="description" >Descripción</label>
										<input name="description" placeholder="descripción" type="text" class="form-control" value="{{ old('description',$product->description) }}">
										{!! $errors->first('description','<span class="help-block">:message</span>') !!}
									</div>			

									<div class="form-group {{ $errors->has('category_id') ? 'has-error' : '' }}">
						              	<label>Categoria</label>
						              	<select name="category_id" id="pdv" class="form-control">
						              		<option value="">Computación</option>
						              	</select>
						              	{!! $errors->first('category_id','<span class="help-block">:message</span>') !!}
						              </div>

									<div class="form-group {{ $errors->has('brand_id') ? 'has-error' : '' }}">
						              	<label>Marca</label>
						              	<select name="brand_id" id="pdv" class="form-control">
						              		<option value="">Acme</option>
						              	</select>
						              	{!! $errors->first('brand_id','<span class="help-block">:message</span>') !!}
						              </div>

									<div class="form-group {{ $errors->has('ean') ? 'has-error' : '' }}">
										<label for="ean" >Código de barras (EAN)</label>
										<input name="ean" placeholder="Codigo EAN o PUK" type="number" class="form-control" value="{{ old('ean',$product->ean) }}">
										{!! $errors->first('ean','<span class="help-block">:message</span>') !!}
									</div>									

									<div class="form-group {{ $errors->has('quantity') ? 'has-error' : '' }}">
										<label for="quantity" >Stock</label>
										<input name="quantity" placeholder="descripción" type="quantity" class="form-control" value="{{ old('quantity',$product->quantity) }}">
										{!! $errors->first('quantity','<span class="help-block">:message</span>') !!}
									</div>	


									<div class="form-group {{ $errors->has('image_path') ? 'has-error' : '' }}">
										<label for="image_path" >URL IMAGEN</label>
										<input name="image_path" placeholder="url imagen" type="image_path" class="form-control" value="{{ old('image_path', $product->image_path) }}">
										{!! $errors->first('image_path','<span class="help-block">:message</span>') !!}
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