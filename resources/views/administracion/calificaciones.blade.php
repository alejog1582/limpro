@extends('layouts.app')

@section('content')

<div class="row text-center">
	<div class="col-12">
		<h2 class="titulo">soy Calificaciones</h2>
		<br>
		<br>
		<a class="btn btn-primary" href="/administracion">Volver</a>
		<div class="row">
			<div class="col-6">
				<a class="btn btn-primary" href="/administracion/calificaciones/funcionarios">Buscador por funcionario</a>
			</div>
			<div class="col-6">
				<a class="btn btn-primary" href="/administracion/calificaciones/servicios">Buscador por servicio</a>
			</div>
		</div>
		<br><br>
	</div>
</div>

@endsection