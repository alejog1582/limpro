@extends('layouts.app')

@section('content')

<div class="row center">
	<div class="col s12">
		<h2 class="titulo">Detalle del Servicio</h2>
	</div>
</div>

<div class="row">
	<div class="card">
        <div class="card-content">
	        <div class="row center">
	          	<div class="col s3">
	          		<p><b>Fecha Servicio:</b> {{ $servicio->fecha_servicio }}</p>
	          	</div>
	          	<div class="col s3">
	          		<p><b>Hora Inicio:</b> {{ $servicio->hora_inicio }}</p>
	          	</div>
	          	<div class="col s3">
	          		<p><b>Plan:</b> {{ $servicio->plan }} Horas</p>
	          	</div>
	          	<div class="col s3">
	          		<p><b>Valor Plan:</b> {{ $servicio->valor_plan }}</p>
	          	</div>
	        </div>
	        <div class="row center">
	          	<div class="col s3">
	          		<p><b>Cliente:</b> {{ $servicio->nombre_cliente }}</p>
	          	</div>
	          	<div class="col s3">
          		<p><b>Direccion:</b> {{ $servicio->direccion_servicio }} {{ $servicio->detalle_direccion }}</p>
          		</div>
	          	<div class="col s3">
	          		<p><b>Email:</b> {{ $servicio->email }}</p>
	          	</div>
	          	<div class="col s3">
          			<p><b>Celular:</b> {{ $servicio->celular_contacto }}</p>
          		</div>
	        </div>
	        <div class="row center">
		        <div class="col s3">
		      		<p><b>Fijo:</b> {{ $servicio->fijo_contacto }}</p>
		      	</div>
          		<div class="col s3">
          			<p><b>Estado:</b> {{ $servicio->estado }}</p>
          		</div>
		      	<div class="col s3">
          			<p><b>Metodo de Pago:</b> {{ $servicio->metodo_pago }}</p>
          		</div>
          		<div class="col s3">
          			<p><b>Funcionario Seleccionado:</b> {{ $servicio->funcionario_selec->nombre_funcionario }}</p>
          		</div>
		    </div>
           	<div class="row center">
	           	<div class="col s3">
	          		<p><b>Fun-1:</b> {{ $servicio->funcionario_1->nombre_funcionario }}</p>
	          	</div>
	          	<div class="col s3">
	          		<p><b>Fun-2:</b> {{ $servicio->funcionario_2->nombre_funcionario }}</p>
	          	</div>
	          	<div class="col s3">
	          		<p><b>Fun-3:</b> {{ $servicio->funcionario_3->nombre_funcionario }} </p>
	          	</div>
	          	<div class="col s3">
	          		<p><b>Fun-4:</b> {{ $servicio->funcionario_4->nombre_funcionario }} </p>
	          	</div>
          	</div>
          	<div class="row center">
          		<div class="col s6">
          			<p><b>Calificacion:</b> {{ $servicio->calificacion->cal_total }} estrellas</p>
          		</div>
          		<div class="col s6">
          			<p><b>Comentario:</b> {{ $servicio->calificacion->comentario }}</p>
          		</div>
          	</div>
        </div>
        <div class="card-action">
          <a href="/administracion" class="btn waves-effect waves-light" type="button">Regresar<i class="material-icons right">send</i></a>
        </div>
      </div>
</div>

@endsection