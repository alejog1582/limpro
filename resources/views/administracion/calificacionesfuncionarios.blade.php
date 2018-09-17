@extends('layouts.app')

@section('content')

<div class="row center blue-color white-text sin-espacio">
	<div class="col s12">
		<h2 class="titulo">Detalle de calificacion: {{ $calificacion->cal_funcionario->nombre_funcionario }}</h2>
	</div>
</div>

<div class="row center blue-color white-text sin-espacio">
	<div class="col s10 offset-s1">
		<div class="card blue-color-light">
	        <div class="row center">
	            <div class="col s6">
		            <div class="row">
		                <div class="col s12">
		                    <p><b><span class="green-texto">Calidad:</span></b>	{{ $calificacion->cal_calidad_servicio }} <span class="green-texto">	&#9733;</span></p>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col s12">
		                    <p><b><span class="green-texto">Puntualiadad:</span></b> 	{{ $calificacion->cal_puntualidad }} <span class="green-texto">	&#9733;</span></p>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col s12">
		                    <p><b><span class="green-texto">Presentacion Personal:</span></b> 	{{ $calificacion->cal_presentacion_personal }}<span class="green-texto">	&#9733;</span></p>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col s12">
		                    <p><b><span class="green-texto">Amabilidad:</span></b> {{ $calificacion->cal_amabilidad }} <span class="green-texto">	&#9733;</span></p>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col s12">
		                    <p><b><span class="green-texto">Calificacion Total:</span></b> 	{{ $calificacion->cal_total }} <span class="green-texto">	&#9733;</span></p>
		                </div>
		            </div>
	            </div>
	            <div class="col s6">
	                <br><br><br><br><br>
	                <p><b><span class="green-texto">Comentario:</span></b> {{ $calificacion->comentario }}</p>
			        <div class="row center">
			            <a href="/administracion" class="btn green-color" type="submit">Regresar<i class="material-icons right">send</i></a>
			            <br><br>
			        </div>
	            </div>
	        </div>
	</div>
    </div>
</div>

@endsection