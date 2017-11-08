@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="row">
	
			@forelse($players as $player)
			<div class="col-md-3">
				<img class="img-circle img-responsive player-photo"  src="/player/{{ $player->foto }}" width="200px" height="200px">
				<p>{{ $player->nombre }} {{ $player->apellido }} {{ $player->fecha_nac }}</p>			
			</div>			
			@empty
			<h2>No se han agregado jugadores de esta categoria, estamos trabajando en ello!</h2>			
			@endforelse
		</div>

		<hr>
	</div>
@endsection