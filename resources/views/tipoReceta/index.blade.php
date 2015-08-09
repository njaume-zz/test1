@extends('master')

@section('content')

<div align="center">
Listado tipoReceta
</div>

<div class="container">

	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>tiempo de preparacion</th>
			<th>cocina?</th>
			<th>Operaciones</th>
		</thead>
		@foreach ($tipoReceta as $u)
		<tbody>
			<td>{{$u->descripcion}}</td>
			<td>{{$u->tiempo_preparacion}}</td>
			<td>{{$u->cocina}}</td>
			<td>
<a href="tipoReceta/{{$u->id}}/edit" class= "btn btn-primary" method="post">Editar <span class="glyphicon glyphicon-pencil"></span> </a>
<a href="tipoReceta/eliminar/{{$u->id}}" class= "btn btn-danger" method="post">Eliminar <span class="glyphicon glyphicon-remove"></span> </a>

		</td>
		</tbody>
		@endforeach

	</table>
</div>

<div class="container" >
	<a href="tipoReceta/create" class= "btn btn-primary">Crear tipoReceta <span class="glyphicon glyphicon-plus"></span></a>
</div>	
</div>
	



@endsection

