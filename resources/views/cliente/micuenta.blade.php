@extends('layouts.app')

@section('content')

<div class="row text-center">
	<div class="col-12">
		<p>
		  <a class="btn btn-primary" href="/micuenta/selfuncionario">
		    Seleccionar Empleado
		  </a>
		  <a class="btn btn-primary" href="/micuenta/calificar">
		    Calificar
		  </a>
		</p>
	</div>
</div>

<div class="row text-center">
	<div class="col-12">
		<h1>Soy Mi cuenta</h1>
		<br>
		<br>
		<a class="btn btn-primary" href="/">Regresa</a>
	</div>
</div>

@endsection