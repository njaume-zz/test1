@extends('master')

@section('content')

<div align="center">
Crear tipoReceta
</div>

{!!Form::open(['route'=>'tipoReceta.store','method'=>'POST'])!!}
	<div class="form-group" >
		{!!Form::label('Nombre: ')!!}
		{!!Form::text('descripcion_r',null,['class'=>'form-control','placeholder'=>'Nombre receta','autofocus'])!!}
	</div>
	<div class="form-group" >
		{!!Form::label('Tiempo de prepracion: ')!!}
		{!!Form::text('tiempo_preparacion',null,['class'=>'form-control','placeholder'=>'tiempo cocina del plato'])!!}
	</div>
	<div class="form-group" >
		{!!Form::label('Cocina: ')!!}
		{!!Form::text('cocina',null,['class'=>'form-control','placeholder'=>'cocin?'])!!}
	</div>		

		
	{!!Form::submit('Registrar',['class'=>'btn btn-primary']) !!}

	<input type="button" value="Cancelar" class="btn btn-danger" onclick= "self.location.href = '../tipoReceta' "/>

{!!Form::close()!!}



@endsection

