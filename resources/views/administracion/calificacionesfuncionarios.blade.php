@extends('layouts.app')

@section('content')

<div class="row center">
	<div class="col s12">
		<h2 class="titulo">Detalle de calificacion: {{ $calificacion->cal_funcionario->nombre_funcionario }}</h2>
	</div>
</div>

<div class="row center">
	<div class="card">
        <div class="row center">
            <div class="col s6">
	            <div class="row">
	                <div class="col s12">
	                    <p>Calidad: <b>	{{ $calificacion->cal_calidad_servicio }} <a href="#">&#9733;</a></b></p>
	                </div>
	            </div>
	            <div class="row">
	                <div class="col s12">
	                    <p>Puntualiadad: <b>	{{ $calificacion->cal_puntualidad }} <a href="#">&#9733;</a></b></p>
	                </div>
	            </div>
	            <div class="row">
	                <div class="col s12">
	                    <p>Presentacion Personal: <b>	{{ $calificacion->cal_presentacion_personal }} <a href="#">&#9733;</a></b></p>
	                </div>
	            </div>
	            <div class="row">
	                <div class="col s12">
	                    <p>Amabilidad: <b>	{{ $calificacion->cal_amabilidad }} <a href="#">&#9733;</a></b></p>
	                </div>
	            </div>
	            <div class="row">
	                <div class="col s12">
	                    <p><b>Calificacion Total: 	{{ $calificacion->cal_total }} <a href="#">&#9733;</a></b></p>
	                </div>
	            </div>
            </div>
            <div class="col s6">
                <br><br><br><br><br>
                <p><b>Comentario:</b> {{ $calificacion->comentario }}</p>
            </div>
        </div>
        <div class="row center">
            <a href="/administracion" class="btn waves-effect waves-light" type="submit">Regresar<i class="material-icons right">send</i></a>
            <br><br>
        </div>
    </div>
</div>

@endsection