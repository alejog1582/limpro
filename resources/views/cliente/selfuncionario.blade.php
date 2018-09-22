@extends('layouts.app')

@section('content')

<div class="row center blue-color sin-espacio">
    <br>
   	<div class="col s12 m4 offset-m4">
     	<div class="card-panel blue-color-black">
     		@if ($funcionario->id != 1)
     			<span class="white-text">Tu selección ha sido exitosa. La funcionaria: <b><span class="green-texto"> {{ $funcionario->nombre_funcionario }}</span></b> llegará a la direccion el dia <span class="green-texto"> {{ $servicio->fecha_servicio }}</span> a las <span class="green-texto">{{ $servicio->hora_inicio }}</span>, identificándose previamente como nuestra funcionaria.<br><br>Cualquier novedad por favor informarla inmediatamente al <span class="green-texto">350 459 10 97.</span> <br>   <br>Recuerda calificar el servicio una vez realizado, para poder brindar una mejor experiencia.

	        	<br><br>
	        	<a href="/micuenta" class="btn green-color">Aceptar</a>
	        	</span>
     		@endif
     		@if ($funcionario->id == 1)
     			<span class="white-text">Queremos generar satisfacción y confianza a nuestros clientes, por lo cual seleccionaremos una de nuestras funcionarias disponibles.<br><br>
     			Recibirás todos los datos de nuestra funcionaria via correo electronico. <br><br>
                <a href="/micuenta" class="btn green-color">Aceptar</a>
	        	</span>
     		@endif
      	</div>
    <br>
    </div>
</div>
@endsection