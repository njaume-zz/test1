@extends ('master')

@section('content') 
 <div class="container" >

		<!-- model es como open, pero ya me va a cargar los campos con los datos del modelo
		 $recetas->idUsuario  es con loq busca -->
		{!!Form::model($receta,['route'=>['receta.update', $receta->id],'method'=>'PUT'] )!!}

		<div class="form-group" >
			{!!Form::label('Nombre: ')!!}
			{!!Form::text('descripcion_r',null,['class'=>'form-control'])!!}
		</div>
		<div class="form-group" >
			{!!Form::label('Precio: ')!!}
			{!!Form::text('precio',null,['class'=>'form-control'])!!}
		</div>
		<div class="form-group" >
			{!!Form::label('costo: ')!!}
			{!!Form::text('costo',null,['class'=>'form-control'])!!}
		</div>	
		<div class="form-group" >
			{!!Form::label('id_tipo_receta: ')!!}
			{!!Form::text('id_tipo_receta',null,['class'=>'form-control'])!!}
		</div>
			<div class="row">
	  			<div class="col-md-2">
			{!!Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
			{!!Form::close()!!}
				</div>
				<div class="col-md-2">
			{!!Form::open(['route'=>['receta.destroy', $receta->id],'method'=>'DELETE'] )!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}
			{!!Form::close()!!}
		</div>
<input type="button" value="Cancelar" class="btn btn-warning" onclick= "self.location.href = '../../receta' "/>

		</div>
</div>
@stop