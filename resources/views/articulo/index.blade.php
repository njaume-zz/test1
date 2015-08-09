@extends('master')

@section('content')

<div align="center">
Listado Articulos
</div>

<div class="container">

	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Stock</th>
			<th>Unidad Medida</th>
			<th>Operaciones</th>
		</thead>
		@foreach ($articulo as $u)
		<tbody>
			<td>{{$u->descripcion}}</td>
			<td>{{$u->stock}}</td>
			<td>{{$u->unidad_medida}}</td>
			<td>
<a href="articulo/{{$u->id}}/edit" class= "btn btn-primary" method="post">Editar <span class="glyphicon glyphicon-pencil"></span> </a>
<a href="articulo/eliminar/{{$u->id}}" class= "btn btn-danger" method="post">Eliminar <span class="glyphicon glyphicon-remove"></span> </a>

		</td>
		</tbody>
		@endforeach

	</table>
</div>

<div class="container" >
	<a href="articulo/create" class= "btn btn-primary">Crear articulo <span class="glyphicon glyphicon-plus"></span></a>
</div>	
</div>
	



@endsection

