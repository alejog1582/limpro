@extends('layouts.app')

@section('content')
<div class="row blue-color sin-espacio center white-text">
	<div class="container">
		<div class="col s12">
			<h1 class="titulo">Aspirantes</h1>
			<p>Es un gusto para nosotros recibir tu solicitud de empleo. Procede a diligenciar el siguiente formulario para iniciar el proceso requerido y así ser parte de esta familia.</p>
		</div>
		<br>
		<div class="col s12">
			<form action="/aspirante/save" method="post">
                {{ csrf_field() }}
                <div class="row">
                	<div class="input-field col s12 m6">
                        <div class="row">
                            <div class="col s12">
                                <span class="white-text">Tipo de Documento:</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s6">
                                <p><label>
                                    <input name="tipo_cedula_aspirante" type="radio" checked value="cc" />
                                    <span class="white-text">CC</span>
                                </label></p>
                            </div>
                            <div class="col s6">
                                <p><label>
                                    <input name="tipo_cedula_aspirante" type="radio" value="ce" />
                                    <span class="white-text">CE</span>
                                </label></p>
                            </div>
                        </div>
                		@if ($errors->has('tipo_cedula_aspirante'))
            				@foreach ($errors->get('tipo_cedula_aspirante') as $error)
              						<h5 class="left-align red-text">
                						<blockquote>{{ $error }}</blockquote>
              						</h5>
            				@endforeach
        				@endif
        			</div>
                    <div class="input-field col s12 m6">
        				<input name="numero_cedula_aspirante" id="numero_cedula_aspirante" type="text" class="white-text @if ($errors->has('numero_cedula_aspirante')) is-invalid    @endif">
        				@if ($errors->has('numero_cedula_aspirante'))
        				   	@foreach ($errors->get('numero_cedula_aspirante') as $error)
        				   		<h5 class="left-align red-text">
        				   			<blockquote>{{ $error }}</blockquote>
        				   		</h5>
        				   	@endforeach
        				@endif
          				<label class="white-text" for="numero_cedula_aspirante">Numero de Cedula</label>
      				</div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input id="nombre_aspirante" name="nombre_aspirante" type="text" class="white-text @if ($errors->has('nombre_aspirante')) is-invalid    @endif">
                        <label class="white-text" for="nombre_aspirante">Nombre</label>
                        @if ($errors->has('nombre_aspirante'))
                            @foreach ($errors->get('nombre_aspirante') as $error)
                                <h5 class="left-align">
                                    <blockquote class="red-text">{{ $error }}</blockquote>
                                        </h5>
                            @endforeach
                        @endif
                    </div>
                    <div class="input-field col s12 m6">
                        <input id="email_aspirante" name="email_aspirante" type="email" class="white-text @if ($errors->has('email_aspirante')) is-invalid    @endif">
                        <label class="white-text" for="email_aspirante">Email</label>
                        @if ($errors->has('email_aspirante'))
                            @foreach ($errors->get('email_aspirante') as $error)
                                <h5 class="left-align">
                                    <blockquote class="red-text">{{ $error }}</blockquote>
                                </h5>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input id="celular_aspirante" name="celular_aspirante" type="number" class="white-text @if ($errors->has('celular_aspirante')) is-invalid    @endif">
                        <label class="white-text" for="celular_aspirante">Celular</label>
                        @if ($errors->has('celular_aspirante'))
                            @foreach ($errors->get('celular_aspirante') as $error)
                                <h5 class="left-align">
                                    <blockquote class="red-text">{{ $error }}</blockquote>
                                </h5>
                            @endforeach
                        @endif
                    </div>
                    <div class="input-field col s12 m6">
          				<input class="white-text" id="fijo_aspirante" type="text" name="fijo_aspirante">
          				<label class="white-text" for="fijo_aspirante">Telefeno FIjo</label>
        			</div>
                </div>
                <div class="row">
                	<div class="input-field col s12 m6">
                        <input id="direccion_aspirante" name="direccion_aspirante" type="text" class="white-text @if ($errors->has('direccion_aspirante')) is-invalid    @endif">
                        <label class="white-text" for="direccion_aspirante">Direccion de Residencia</label>
                        @if ($errors->has('direccion_aspirante'))
                            @foreach ($errors->get('direccion_aspirante') as $error)
                                <h5 class="left-align">
                                    <blockquote class="red-text">{{ $error }}</blockquote>
                                </h5>
                            @endforeach
                        @endif
                    </div>
                    <div class="input-field col s12 m6">
                        <input id="edad_aspirante" name="edad_aspirante" type="text" class="white-text @if ($errors->has('edad_aspirante')) is-invalid    @endif">
                        <label class="white-text" for="edad_aspirante">Edad</label>
                        @if ($errors->has('edad_aspirante'))
                            @foreach ($errors->get('edad_aspirante') as $error)
                                <h5 class="left-align">
                                    <blockquote class="red-text">{{ $error }}</blockquote>
                                </h5>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label>
                            <input type="checkbox" class="filled-in @if ($errors->has('privacidad')) is-invalid @endif" name="privacidad" />
                            <span><a class="green-texto" href="/politica/privacidad" target="_blank">Acepto los terminos y condiciones</a></span>
                            @if ($errors->has('privacidad'))
                                @foreach ($errors->get('privacidad') as $error)
                                    <h5 class="left-align">
                                        <blockquote class="red-text">{{ $error }}</blockquote>
                                    </h5>
                                @endforeach
                            @endif
                        </label>
                    </div>
                </div>
                <div class="row">
                    <br><br>
                    <button class="btn green-color" type="submit" name="action">Enviar<i class="material-icons right">send</i>
                	</button>
                    <br><br>
                </div>
            </form>
		</div>
	</div>
</div>
@endsection