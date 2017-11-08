@extends('layouts.admin')
@section('content')
<div class="col-md-8 col-md-push-2">
	<fieldset>
		<legend>Agregar Jugador</legend>
		
                @include('flash::message')
		<form action="/player/store" method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="form-group {{ $errors->has('nombre') ? ' has-error' : '' }}">
				Nombre: <input type="text" name="nombre" class="form-control" required>
				@if ($errors->has('nombre'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nombre') }}</strong>
                    </span>
                @endif
			</div>
			<div class="form-group {{ $errors->has('apellido') ? ' has-error' : '' }}">
				Apellido: <input type="text" name="apellido" class="form-control" required>
				@if ($errors->has('apellido'))
                    <span class="help-block">
                        <strong>{{ $errors->first('apellido') }}</strong>
                    </span>
                @endif
			</div>
			<div class="form-group {{ $errors->has('fecha_nac') ? ' has-error' : '' }}">
				Fecha Nacimiento: <input type="date" name="fecha_nac" class="form-control" required>
				@if ($errors->has('fecha_nac'))
                    <span class="help-block">
                        <strong>{{ $errors->first('fecha_nac') }}</strong>
                    </span>
                @endif
			</div>
			<div class="form-group {{ $errors->has('direccion') ? ' has-error' : '' }}">
				Direccion: <input type="text" name="direccion" class="form-control" required>
				@if ($errors->has('direccion'))
                    <span class="help-block">
                        <strong>{{ $errors->first('direccion') }}</strong>
                    </span>
                @endif
			</div>
			<div class="form-group {{ $errors->has('telefono') ? ' has-error' : '' }}">
				Telefono: <input type="text" name="telefono" class="form-control" required>
				@if ($errors->has('telefono'))
                    <span class="help-block">
                        <strong>{{ $errors->first('telefono') }}</strong>
                    </span>
                @endif
			</div>
			<div class="form-group {{ $errors->has('correo') ? ' has-error' : '' }}">
				Correo: <input type="mail" name="correo" class="form-control" required>
				@if ($errors->has('correo'))
                    <span class="help-block">
                        <strong>{{ $errors->first('correo') }}</strong>
                    </span>
                @endif
			</div>
			<div class="form-group {{ $errors->has('foto') ? ' has-error' : '' }}">
				Foto: <input type="file" name="foto" class="form-control" required>
				@if ($errors->has('foto'))
                    <span class="help-block">
                        <strong>{{ $errors->first('foto') }}</strong>
                    </span>
                @endif
			</div>
			<div class="form-group {{ $errors->has('acta_nac') ? ' has-error' : '' }}">
				Acta Nacimiento: <input type="file" name="acta_nac" class="form-control" required>
				@if ($errors->has('acta_nac'))
                    <span class="help-block">
                        <strong>{{ $errors->first('acta_nac') }}</strong>
                    </span>
                @endif
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" class="form-control">
				<a href="/admin/jugadores" class="btn btn-default">Regresar</a>
			</div>
		</form>
	</fieldset>
</div>
@endsection