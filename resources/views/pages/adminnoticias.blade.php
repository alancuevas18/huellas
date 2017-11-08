@extends('layouts.admin')
@section('content')
<div class="col-md-8 col-md-push-2">
	<fieldset>
		<legend>Agregar Noticia</legend>
		
                @include('flash::message')
		<form action="/noticia/store" method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="form-group">
				Titulo: <input type="text" name="titulo" class="form-control" required>
			</div>
			<div class="form-group">
				Descripcion: <textarea name="descripcion" id="" class="form-control" required  cols="30" rows="10"></textarea>
			</div>
			<div class="form-group">
				Fecha Evento: <input type="date" name="fecha_even" class="form-control" required>
			</div>
			<div class="form-group">
				Imagen: <input type="file" name="imagen" class="form-control" required>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" class="form-control">
				<a href="/admin/jugadores" class="btn btn-default">Regresar</a>
			</div>
		</form>
	</fieldset>
</div>
@endsection