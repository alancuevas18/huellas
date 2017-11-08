@extends('layouts.admin')

@section('content')
@include('flash::message')
	<div class="row">
		<a href="/player/create" class="btn btn-primary">Agregar un jugador</a>
		<br>
		<br>
		<div class="row">
			<h3><a href="/admin/jugadores">Listado de Jugadores</a></h3>
			@include('flash::message')
			<span class="pull-right">
				<form class="form-inline" action="">
					<div class="form-grup">
						<label for="buscador">Buscar Jugador </label>
						<input id="buscador" type="text" name="nombre" class="form-control" placeholder="Nombre del jugador">
						<input type="submit" class="btn btn-primary" class="form-control">
					</div>

				</form>
					
				</span>
				<form class="form-inline" action="">
			<div class="form-group">
				<label for="select">Buscar por año: </label><select name="ano_nac" id="select" class="form-control">
				{{ $now = Carbon\Carbon::now() }}
					@for($i = 1980; $i <= $now->year; $i++)
						<option value={{ $i }}>{{ $i }}</option> 
					@endfor
				</select>
				<input type="submit" class="btn btn-primary" class="form-control">

			</div>
			</form>
		</div>
	</div>
	<div class="row">
		<table class="table table-striped table-hover">
		<tr>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Fecha Nacimiento</th>
			<th>Edad</th>
			<th>Dirección</th>
			<th>Telefono</th>
			<th>Correo</th>
			<th>Foto</th>
			<th>Acta Nacimiento</th>
			<th>Acciones</th>
		</tr>
		@foreach($players as $player)
			<tr>
				<td>{{ $player->nombre }}</td>
				<td>{{ $player->apellido }}</td>
				<td>{{ $player->fecha_nac }}</td>
				<td>{{ \Carbon\Carbon::parse($player->fecha_nac)->age }}</td>

				<td>{{ $player->direccion }}</td>
				<td>{{ $player->telefono }}</td>
				<td>{{ $player->correo }}</td>
				<td>
					<img class="minuatura" src="/player/{{ $player->foto }}">
				</td>
				<td>
					<img class="minuatura" src="/player/{{ $player->acta_nac }}">
				<td>
					<a href="/jugadores/eliminar/{{ $player->id }}" onclick="return confirm('Desea eliminar?')" class="btn btn-xs btn-danger">
						<span class=" icon icon-bin"></span>
					</a>
					<a href="/jugadores/modificar/{{ $player->id }}" class="btn btn-xs btn-warning">
						<span class=" icon icon-cog"></span>
					</a>
				</td>
			</tr>
		@endforeach
		</table>
		{{ $players->links() }}
	</div>


@endsection