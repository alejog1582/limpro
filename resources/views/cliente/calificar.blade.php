@extends('layouts.app')

@section('content')

<div class="row center blue-color sin-espacio">
   	<div class="col s4 offset-s4">
        <br>
     	<div class="card-panel blue-color-black">
        	<span class="white-text">La calificacion de tu servicio realizado por el funcionario <b>{{ $calificacion->cal_funcionario->nombre_funcionario }}</b> a sido de: <b>{{ $cal_total }}</b>
        		<br><br>
        		@if ($cal_total >= 3.5)
        			Nuestro servicio a cumplido las expectativas.
        		@endif
        		@if ($cal_total < 3.5)
        			Realizaremos el acompañamiento pertinente a nuestros funcionarios con el fin de ofrecerte un mejor servicio.
        		@endif
        	</span>
        	<br><br>
        	<a href="/micuenta" class="btn green-color">Aceptar</a>
      	</div>
        <br>
    </div>
</div>

@endsection

