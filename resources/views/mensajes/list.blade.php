@extends('layouts.admin')

@section('content')
@include('flash::message')
	<div class="row">
		<table class="table table-striped table-hover">
		<tr>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Descripcion</th>
			<th>Recibido en</th>
			<th>Acciones</th>
		</tr> 
		@foreach($mensajes as $mensaje)
			<tr>
				<td>{{ $mensaje->nombre }}</td>

				<td>{{ $mensaje->correo }}</td>
				<td>{{ $mensaje->mensaje }}</td>
				<td>{{ $mensaje->created_at }}</td>
				<td>
					<a href="/mensaje/eliminar/{{ $mensaje->id }}" onclick="return confirm('Desea eliminar?')">
								
						<span class=" icon icon-bin"></span>
					</a>
					<a href="/mensaje/modificar/{{ $mensaje->id }}" class="btn btn-xs btn-warning">
						<span class=" icon icon-cog"></span>
					</a>
				</td>
			</tr>
		@endforeach
		</table>
  		{{ $mensajes->links() }}
	</div>


@endsection