@extends('layouts.app')

@section('content')
@include('flash::message')
	<div class="row">

	</div>
	<div class="row">
		
		@foreach($noticias as $noticia)


        <!-- First Featurette -->
        <div class="featurette" id="about">
            <img class="featurette-image img-rounded img-responsive pull-right minuatura" src="player/{{ $noticia->imagen }}">
            <h2 class="featurette-heading text-capitalize">{{ $noticia->titulo }}
            </h2>
            <p class="lead text-capitalize">{{ $noticia->descripcion }}</p>
            <b>Publicado :</b> {{ $noticia->created_at }} 	
                 @php
			        $now = \Carbon\Carbon::now();
			        $end = \Carbon\Carbon::parse($noticia->fecha_even);
			        $length = $end->diffInDays($now);
			        echo "<td> <b>Faltan :</b> $length Dias para el evento</td>";
				@endphp

        </div>

				<br>
			
		@endforeach

		{{ $noticias->links() }}
		</div>


@endsection