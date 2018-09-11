@extends('layouts.app')

@section('content')

<div class="row center blue-color sin-espacio">
    <br>
   	<div class="col s4 offset-s4">
     	<div class="card-panel blue-color-black">
     		@if ($funcionario->id != 1)
     			<span class="white-text">Se a asignado a tu servicio el funcionario: <b>	{{ $funcionario->nombre_funcionario }}</b>.<br><br> Recuerda calificar el servicio una vez realizado para poder brindar el mejor servicio.

	        	<br><br>
	        	<a href="/micuenta" class="btn green-color">Aceptar</a>
	        	</span>
     		@endif
     		@if ($funcionario->id == 1)
     			<span class="white-text">Nosotros seleccionaremos el mejor funcionario para tu servicio.<br><br>
     			Recibiras todos los datos del funcionario via correo electronico. <br><br>
     			Recuerda calificar el servicio una vez realizado para poder brindar el mejor servicio.
	        	<br><br>
	        	<a href="/micuenta" class="btn green-color">Aceptar</a>
	        	</span>
     		@endif
      	</div>
    <br>
    </div>
</div>
@endsection