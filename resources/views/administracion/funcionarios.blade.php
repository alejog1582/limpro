@extends('layouts.app')

@section('content')

<div class="row text-center">
	<div class="col-12">
		<h2>soy funcionarios</h2>
		<br>
		<a class="btn btn-primary" href="/administracion/funcionarios/new">Nuevo</a>
		<br><br>
		<a class="btn btn-primary" href="/administracion/funcionarios/edit">Editar</a>
		<br><br>
		<a class="btn btn-primary" href="/administracion">Volver</a>
	</div>
</div>

@endsection