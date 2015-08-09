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
{!!link_to_route('articulo.edit', $title = 'Editar', $parameters = $u->id, $attributes = ['class'=>'btn btn-primary'])!!}
{!!link_to_route('articulo.destroy', $title = 'Eliminar', $parameters = $u->id, $attributes = ['class'=>'btn btn-danger'])!!}
<a href="articulo/eliminar/{{$u->id}}" class= "btn btn-primary" method="post">eliminar articulo <span class="glyphicon glyphicon-plus"></span>
			<!-- ya me hace de una la indexacion del us con su id corresp, y eso se lo paso a usuario.editar -->
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

