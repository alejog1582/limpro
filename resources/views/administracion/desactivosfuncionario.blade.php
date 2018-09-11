@extends('layouts.app')

@section('content')

<div class="row center-align">
	<div class="col s1">
		<br><br>
		<a href="/administracion" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">chevron_left</i></a>
	</div>
	<div class="col s10">
		<h1 class="titulo">Funcionarios Desactivos</h1>
	</div>
</div>

<div class="row center-align">
	@foreach ($funcionarios as $funcionario)
		<div class="col s4">
			<div class="card">
		        <div class="card-image center-align">
		          <img style="height: 150px; width: 150px" src="{{ $funcionario->url_foto }}">
		        </div>
		        <div class="card-content">
		        	<div class="row">
		        		<div class="col s2">
		        			<p><b>Id:</b> {{ $funcionario->id }}</p>
		        		</div>
		        		<div class="col s10">
		        			<p><b>Nombre Funcionario:</b> {{ $funcionario->nombre_funcionario }}</p>
		        		</div>
		        	</div>
		          	<div class="row">
		          		<div class="col s4">
		          			<p><b>Tipo de documento:</b> {{ $funcionario->tipo_cedula }}</p>
		          		</div>
		          		<div class="col s4">
		          			<p><b>Numero de documento:</b> {{ $funcionario->numero_cedula }}</p>
		          		</div>
		          		<div class="col s4">
		          			<p><b>Fecha de Nacimiento:</b> {{ $funcionario->fecha_nacimiento }}</p>
		          		</div>
		          	</div>
		          	<div class="row">
			          	<div class="col s6">
			          		<p><b>Sexo:</b> {{ $funcionario->sexo }}</p>
			          	</div>
			          	<div class="col s6">
			          		<p><b>Tipo de Sangre:</b> {{ $funcionario->tipo_sangre }}</p>
			          	</div>
		          	</div>
		          	<div class="row">
			          	<div class="col s4">
			          		<p><b>Tipo de cuenta:</b> {{ $funcionario->tipo_cuenta }}</p>
			          	</div>
			          	<div class="col s4">
			          		<p><b>Banco:</b> {{ $funcionario->banco }}</p>
			          	</div>
			          	<div class="col s4">
			          		<p><b>Numero de Cuenta:</b> {{ $funcionario->numero_cuenta }}</p>
			          	</div>
		          	</div>
		          	<div class="row">
			          	<div class="col s6">
			          		<p><b>Direccion Casa:</b> {{ $funcionario->direccion_residencia }}</p>
			          	</div>
			          	<div class="col s6">
			          		<p><b>Email:</b> {{ $funcionario->email }}</p>
			          	</div>
		          	</div>
		          	<div class="row">
			          	<div class="col s6">
			          		<p><b>Celular:</b> {{ $funcionario->celular_contacto }}</p>
			          	</div>
			          	<div class="col s6">
			          		<p><b>Fijo:</b> {{ $funcionario->fijo_contacto }}</p>
			          	</div>
		          	</div>
		          	<div class="row">
			          	<div class="col s6">
			          		<p><b>Acudiente:</b> {{ $funcionario->nombre_acudiente }}</p>
			          	</div>
			          	<div class="col s6">
			          		<p><b>Celular Acudiente:</b> {{ $funcionario->celular_acudiente }}</p>
			          	</div>
		          	</div>
		          	<div class="row">
			          	<div class="col s6">
			          		<p><b>Tipo de Contrato:</b> {{ $funcionario->tipo_contrato }}</p>
			          	</div>
			          	<div class="col s6">
			          		<p><b>Oficio:</b> {{ $funcionario->oficio }}</p>
			          	</div>
		          	</div>
		          	<div class="row">
		          		<div class="col s6">
		          			<p><b>Fecha Vinculacion:</b> {{ $funcionario->fecha_vinculacion }}</p>
		          		</div>
		          		<div class="col s6">
		          			<p><b>Fecha Desvinculacion:</b> {{ $funcionario->fecha_desvinculacion }}</p>
		          		</div>
		          	</div>
		        </div>
		      </div>
		</div>
	@endforeach
</div>

@endsection