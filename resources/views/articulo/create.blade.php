@extends('master')

@section('content')

<div align="center">
Crear Articulo
</div>

{!!Form::open(['route'=>'articulo.store','method'=>'POST'])!!}
	<div class="form-group" >
		{!!Form::label('Nombre: ')!!}
		{!!Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Nombre Articulo'])!!}
	</div>
	<div class="form-group" >
		{!!Form::label('Stock: ')!!}
		{!!Form::text('stock',null,['class'=>'form-control','placeholder'=>'Stock del articulo'])!!}
	</div>
	<div class="form-group" >
		{!!Form::label('unidad_medida: ')!!}
		{!!Form::text('unidad_medida',null,['class'=>'form-control','placeholder'=>'unidad_medida'])!!}
	</div>		

		
	{!!Form::submit('Registrar',['class'=>'btn btn-primary']) !!}

	<input type="button" value="Cancelar" class="btn btn-danger" onclick= "self.location.href = '../articulo' "/>

{!!Form::close()!!}



@endsection

