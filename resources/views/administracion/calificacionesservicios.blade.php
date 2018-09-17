@extends('layouts.app')

@section('content')

<div class="row center blue-color white-text sin-espacio">
	<div class="col s1">
		<br><br>
		<a href="/administracion" class="btn-floating btn-large green-color"><i class="material-icons">chevron_left</i></a>
	</div>
	<div class="col s11">
		<h2 class="titulo">Detalle del Servicio</h2>
	</div>
</div>

<div class="row center blue-color white-text sin-espacio">
	<div class="col s10 offset-s1">
		<div class="card blue-color-light">
        	<div class="card-content">
        		<br>
		        <div class="row center">
		          	<div class="col s3">
		          		<p><b><span class="green-texto">Fecha Servicio:</span></b> {{ $servicio->fecha_servicio }}</p>
		          	</div>
		          	<div class="col s3">
		          		<p><b><span class="green-texto">Hora Inicio:</span></b> {{ $servicio->hora_inicio }}</p>
		          	</div>
		          	<div class="col s3">
		          		<p><b><span class="green-texto">Plan:</span></b> {{ $servicio->plan }} Horas</p>
		          	</div>
		          	<div class="col s3">
		          		<p><b><span class="green-texto">Valor Plan:</span></b> {{ $servicio->valor_plan }}</p>
		          	</div>
		        </div>
		        <br>
		        <div class="row center">
		          	<div class="col s3">
		          		<p><b><span class="green-texto">Cliente:</span></b> {{ $servicio->nombre_cliente }}</p>
		          	</div>
		          	<div class="col s3">
	          		<p><b><span class="green-texto">Direccion:</span></b> {{ $servicio->direccion_servicio }} {{ $servicio->detalle_direccion }}</p>
	          		</div>
		          	<div class="col s3">
		          		<p><b><span class="green-texto">Email:</span></b> {{ $servicio->email }}</p>
		          	</div>
		          	<div class="col s3">
	          			<p><b><span class="green-texto">Celular:</span></b> {{ $servicio->celular_contacto }}</p>
	          		</div>
		        </div>
		        <br>
		        <div class="row center">
			        <div class="col s3">
			      		<p><b><span class="green-texto">Fijo:</span></b> {{ $servicio->fijo_contacto }}</p>
			      	</div>
	          		<div class="col s3">
	          			<p><b><span class="green-texto">Estado:</span></b> {{ $servicio->estado }}</p>
	          		</div>
			      	<div class="col s3">
	          			<p><b><span class="green-texto">Metodo de Pago:</span></b> {{ $servicio->metodo_pago }}</p>
	          		</div>
	          		<div class="col s3">
	          			<p><b><span class="green-texto">Funcionario Seleccionado:</span></b> {{ $servicio->funcionario_selec->nombre_funcionario }}</p>
	          		</div>
			    </div>
			    <br>
           		<div class="row center">
		           	<div class="col s3">
		          		<p><b><span class="green-texto">Fun-1:</span></b> {{ $servicio->funcionario_1->nombre_funcionario }}</p>
		          	</div>
		          	@if ($servicio->id_funcionario_2 != null)
		          		<div class="col s3">
		          			<p><b><span class="green-texto">Fun-2:</span></b> {{ $servicio->funcionario_2->nombre_funcionario }}</p>
		          		</div>
		          	@endif
		          	@if ($servicio->id_funcionario_3 != null)
			          	<div class="col s3">
			          		<p><b><span class="green-texto">Fun-3:</span></b> {{ $servicio->funcionario_3->nombre_funcionario }} </p>
			          	</div>
		        	@endif
		        	@if ($servicio->id_funcionario_4 != null)
			          	<div class="col s3">
			          		<p><b><span class="green-texto">Fun-4:</span></b> {{ $servicio->funcionario_4->nombre_funcionario }} </p>
			          	</div>
		        	@endif
          		</div>
          		<br>
          		<div class="row center">
	          		<div class="col s6">
	          			<p><b><span class="green-texto">Calificacion:</span></b> {{ round($servicio->calificacion->cal_total,2) }} estrellas</p>
	          		</div>
	          		<div class="col s6">
	          			<p><b><span class="green-texto">Comentario:</span></b> {{ $servicio->calificacion->comentario }}</p>
	          		</div>
	          	</div>
        	</div>
	        <div class="card-action">
	        	<a href="/administracion" class="btn green-color" type="button">Regresar<i class="material-icons right">send</i></a>
	        </div>
      	</div>
	</div>
</div>

@endsection