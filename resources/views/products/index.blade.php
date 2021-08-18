@extends('layouts.app')

@section('content')

<h1>USUARIOS</h1>

	<a href="{{ route('products.create') }}"><button class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Crear Nuevo Producto</button></a>

	 <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Listado de Usuarios</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="users-table" class="table table-bordered table-striped">
                <thead>
	                <tr>
	                	<th>IMAGEN</th>
	                  <th>NOMBRE</th>
	                  <th>SLUG</th>
	                  <th>DETALLES</th>   
	                  <th>DESCRIPCIÓN</th> 
	                  <th>PRECIO</th> 
	                  <th>COSTO DE ENVIO</th> 
	                  <th>CÓDIGO EAN</th> 
	                  <th>CANTIDAD</th> 
	                  <th>CATEGORIA</th> 
	                  <th>MARCA</th> 
	                  <th>EDITAR</th> 
	                  <th>ELIMINAR</th> 
	                </tr>
                </thead>
                
                <tbody>
                	@if($products)
                	@foreach($products as $product)
						<tr>
							<td><img src="{{ $product->image_path }}" width="50px"></td>
							<td>{{ $product->name }}</td>
							<td>{{ $product->slug }}</td>
							<td>{{ $product->details }}</td>
							<td>{{ $product->description }}</td>
							<td>{{ $product->price }}</td>
							<td>{{ $product->shipping_cost }}</td>
							<td>{{ $product->ean }}</td>
							<td>{{ $product->quantity }}</td>
							<td>Computación</td>
							<td>Acme</td>
							<td>
								&nbsp;&nbsp;&nbsp;
								<a href="{{ route('products.edit',$product) }}"  class="btn btn-xs btn-info" ><i class="fa fa-pencil"></i></a> 
							</td>

							<td>
								<form method="post" action="{{ route('products.delete',$product) }}" class="pull-left">
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

	
@endpush

@ensection