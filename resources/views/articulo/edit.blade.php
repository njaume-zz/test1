@extends ('master')

@section('content') 
 <div class="container" >

		<!-- model es como open, pero ya me va a cargar los campos con los datos del modelo
		 $articulos->idUsuario  es con loq busca -->
		{!!Form::model($articulo,['route'=>['articulo.update', $articulo->id],'method'=>'PUT'] )!!}

		<div class="form-group" >
			{!!Form::label('Nombre: ')!!}
			{!!Form::text('descripcion',null,['class'=>'form-control'])!!}
		</div>
		<div class="form-group" >
			{!!Form::label('Stock: ')!!}
			{!!Form::text('stock',null,['class'=>'form-control'])!!}
		</div>
		<div class="form-group" >
			{!!Form::label('unidad_medida: ')!!}
			{!!Form::text('unidad_medida',null,['class'=>'form-control'])!!}
		</div>	

			<div class="row">
	  			<div class="col-md-1">
			{!!Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
			{!!Form::close()!!}
				</div>
				<div class="col-md-1">
			{!!Form::open(['route'=>['articulo.destroy', $articulo->id],'method'=>'DELETE'] )!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}
			{!!Form::close()!!}
		</div>
<input type="button" value="Cancelar" class="btn btn-warning" onclick= "self.location.href = '../../articulo' "/>

		</div>
</div>
@stop