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
			<th>id_tipo_receta</th>
			<th>Operaciones</th>
		</thead>
		@foreach ($receta as $u)
		<tbody>
			<td>{{$u->descripcion_r}}</td>
			<td>{{$u->precio}}</td>
			<td>{{$u->costo}}</td>
			<td>{{$u->descripcion}}</td>
			<td>
<a href="receta/{{$u->id}}/edit" class= "btn btn-primary" method="post">Editar <span class="glyphicon glyphicon-pencil"></span> </a>
<a href="receta/eliminar/{{$u->id}}" class= "btn btn-danger" method="post">Eliminar <span class="glyphicon glyphicon-remove"></span> </a>

		</td>
		</tbody>
		@endforeach

	</table>
</div>

<div class="container" >
	<a href="receta/create" class= "btn btn-primary">Crear receta <span class="glyphicon glyphicon-plus"></span></a>
</div>	
</div>
	



@endsection

