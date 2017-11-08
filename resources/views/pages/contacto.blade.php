@extends('layouts.app')

@section('content')
@include('flash::message')
	<div class="row">
		<div class="col-md-5">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1124.8633132051245!2d-69.91926770738182!3d18.50294072597357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eaf89a8a24671ff%3A0xc7958ae7c57addd8!2sHuellas+Del+Siglo!5e0!3m2!1ses-419!2sdo!4v1501704034032" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>

		<div class="col-md-5 col-md-push-2">
			<fieldset>
				<form action="/mensaje/store" method="POST">
					<legend>Envianos tu mensaje</legend>
						<dl>
						{{ csrf_field() }}

							<div class="form-group {{ $errors->has('nombre') ? ' has-error' : '' }}">
								<dt>Nombre:</dt> <dd><input type="text" class="form-control" name="nombre" required autofocus></dd>
								 @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
							</div>
							<div class="form-group {{ $errors->has('correo') ? ' has-error' : '' }}">
								<dt>Correo:</dt> <dd><input type="text" class="form-control" name="correo" required></dd>
								 @if ($errors->has('correo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('correo') }}</strong>
                                    </span>
                                @endif
							</div>

							<div class="form-group {{ $errors->has('asunto') ? ' has-error' : '' }}">
								<dt>Asunto:</dt> <dd><input type="text" class="form-control" name="asunto" required></dd>
								 @if ($errors->has('asunto'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('asunto') }}</strong>
                                    </span>
                                @endif
							</div>
							
							<div class="form-group {{ $errors->has('mensaje') ? ' has-error' : '' }}">
							<dt>Mensaje:</dt> <dd><textarea name="mensaje" class="form-control" resize="disable" style="resize: none;" id="" cols="30" rows="6" required></textarea></dd>
							 @if ($errors->has('mensaje'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mensaje') }}</strong>
                                    </span>
                                @endif
							</div>

							<div class="form-group">
								<input type="submit" name="btn-contact" class="btn btn-primary">
								<input type="reset" name="btn-reset" class="btn btn-default">
							</div>
						</dl>
				</form>
			</fieldset>
		</div>
	</div>
@endsection