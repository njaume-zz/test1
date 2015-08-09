@extends ('master')

@section('content') 
 <div class="container" >

		<!-- model es como open, pero ya me va a cargar los campos con los datos del modelo
		 $tipoRecetas->idUsuario  es con loq busca -->
		{!!Form::model($tipoReceta,['route'=>['tipoReceta.update', $tipoReceta->id],'method'=>'PUT'] )!!}

		<div class="form-group" >
			{!!Form::label('Nombre: ')!!}
			{!!Form::text('descripcion',null,['class'=>'form-control'])!!}
		</div>
		<div class="form-group" >
			{!!Form::label('Stock: ')!!}
			{!!Form::text('tiempo_preparacion',null,['class'=>'form-control'])!!}
		</div>
		<div class="form-group" >
			{!!Form::label('unidad_medida: ')!!}
			{!!Form::text('cocina',null,['class'=>'form-control'])!!}
		</div>	

			<div class="row">
	  			<div class="col-md-2">
			{!!Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
			{!!Form::close()!!}
				</div>
				<div class="col-md-2">
			{!!Form::open(['route'=>['tipoReceta.destroy', $tipoReceta->id],'method'=>'DELETE'] )!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}
			{!!Form::close()!!}
		</div>
<input type="button" value="Cancelar" class="btn btn-warning" onclick= "self.location.href = '../../tipoReceta' "/>

		</div>
</div>
@stop