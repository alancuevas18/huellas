@extends('layouts.admin')

@section('content')
@include('flash::message')
	<div class="row">
<a href="/noticia/create" class="btn btn-primary">Agregar Noticia</a>
<br>
		<table class="table table-striped table-hover">
		<tr>
			<th>Tirulo</th>
			<th>Descripcion</th>
			<th>Fecha Evento</th>
			<th>Tiempo faltante</th>
			<th>Acciones</th>
		</tr> 
		@foreach($noticias as $noticia)
			<tr>
				<td>{{ $noticia->titulo }}</td>
				<td>{{ $noticia->descripcion }}</td>
				<td>{{ $noticia->fecha_even }}</td>
				@php
			        $now = \Carbon\Carbon::now();
			        $end = \Carbon\Carbon::parse($noticia->fecha_even);
			        $length = $end->diffInDays($now);
			        echo "<td> $length Dias restantes</td>";
				@endphp
				<td>
					<a href="/noticas/eliminar/{{ $noticia->id }}" onclick="return confirm('Desea eliminar?')" class="btn btn-xs btn-danger">
						<span class=" icon icon-bin"></span>
					</a>
					<a href="/noticias/modificar/{{ $noticia->id }}" class="btn btn-xs btn-warning">
						<span class=" icon icon-cog"></span>
					</a>
				</td>
			</tr>
		@endforeach
		</table>
  		{{ $noticias->links() }}
	</div>


@endsection