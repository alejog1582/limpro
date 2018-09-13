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
				<p>Calificacion Global: {{ round ($calificacion, 2) }}</p>
			</div>
			<div class="col s12 m4">
				<p>Numero de Servicios: {{ $servicios_realizados }}</p>
			</div>
			<div class="col s12 m4">
				<p>Servicios Calificados: {{ $servicios_calificados }}</p>
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
	                    	<h3 class="titulo"><b>Calificacion Total:</b> {{ $calificacion->cal_total }}</h3>
	                    	<small>Fecha de Calificacion: {{ $calificacion->created_at }}</small>
	                    	<hr>
	                    	<p>Calificacion por calidad en el servicio: {{ $calificacion->cal_calidad_servicio }}</p>
	                    	<p>Calificacion por puntualidad: {{ $calificacion->cal_puntualidad }}</p>
	                    	<p>Calificacion por presentacion personal: {{ $calificacion->cal_presentacion_personal }}</p>
	                    	<p>Calificacion por amabilidad: {{ $calificacion->cal_amabilidad }}</p>
	                		<hr>
	                		<p>Comentario de calificacion:<br><br>{{ $calificacion->comentario }}</p>
	                	</div>

					</div>
				@endif
			@endforeach
		</div>
	</div>
</div>


@endsection