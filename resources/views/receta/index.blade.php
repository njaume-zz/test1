@extends('master')

@section('content')

<div align="center">
Listado receta
</div>

<div class="container">

	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Precio</th>
			<th>Costo</th>
			<th>Tipo de receta</th>
			<th>Operaciones</th>
		</thead>
		@foreach ($receta as $u)



			<tbody>
			<td>{{$u->descripcion_r}}</td>
			<td>{{$u->precio}}</td>
			<td>{{$u->costo}}</td>
			<td>{{ $u->id_tipo_receta}}</td>
			<td>
<a href="{{$url = action('RecetaController@edit', $u->id) }}" class= "btn btn-primary" method="post">Editar <span class="glyphicon glyphicon-pencil"></span> </a>
<a href="{{$url = action('RecetaController@destroy', $u->id) }}" class= "btn btn-danger" method="post">Eliminar <span class="glyphicon glyphicon-remove"></span> </a>

		</td>
		</tbody>
		@endforeach

	</table>
</div>

<div class="container" >
	<a href="{{$url = action('RecetaController@create') }}" class= "btn btn-primary">Crear receta <span class="glyphicon glyphicon-plus"></span></a>
</div>	
</div>
	



@endsection

