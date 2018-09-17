@extends('layouts.app')

@section('content')

<div class="row center white-text blue-color sin-espacio">
	<div class="container">
		<div class="row sin-espacio">
			<div class="col s12">
				<h1 class="titulo">Calificaciones de: {{$funcionario->nombre_funcionario}}</h1>
			</div>
		</div>
		<div class="row sin-espacio">
			<div class="col s12 m4">
				<p><span class="green-texto">Calificacion Global:</span> {{ round ($calificacion, 2) }}</p>
			</div>
			<div class="col s12 m4">
				<p><span class="green-texto">Numero de Servicios:</span> {{ $servicios_realizados }}</p>
			</div>
			<div class="col s12 m4">
				<p><span class="green-texto">Servicios Calificados:</span> {{ $servicios_calificados }}</p>
			</div>
		</div>
		<div class="row sin-espacio">
			<div class="col s12">
				<h2 class="titulo">
					Detalle de Calificaciones
				</h2>
			</div>
		</div>
		<div class="row sin-espacio">
			@foreach ($calificaciones as $calificacion)
				@if ($calificacion->id_empleado == $funcionario->id)
					<div class="col s12">
						<div class="card-panel blue-color-light">
	                    	<h3 class="titulo"><b><span class="green-texto">Calificacion Total:</span></b> {{ $calificacion->cal_total }}</h3>
	                    	<small><span class="green-texto">Fecha de Calificacion:</span> {{ $calificacion->created_at }}</small>
	                    	<hr>
	                    	<p><span class="green-texto">Calificacion por calidad en el servicio:</span> {{ $calificacion->cal_calidad_servicio }}</p>
	                    	<p><span class="green-texto">Calificacion por puntualidad:</span> {{ $calificacion->cal_puntualidad }}</p>
	                    	<p><span class="green-texto">Calificacion por presentacion personal:</span> {{ $calificacion->cal_presentacion_personal }}</p>
	                    	<p><span class="green-texto">Calificacion por amabilidad: </span>{{ $calificacion->cal_amabilidad }}</p>
	                		<hr>
	                		<p><span class="green-texto">Comentario de calificacion:</span><br><br>{{ $calificacion->comentario }}</p>
	                	</div>

					</div>
				@endif
			@endforeach
		</div>
	</div>
</div>


@endsection