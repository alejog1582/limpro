@extends('layouts.app')

@section('content')

<div class="row center blue-color sin-espacio">
   	<div class="col s4 offset-s4">
        <br>
     	<div class="card-panel blue-color-black">
        	<span class="white-text">La calificacion al funcionario <b>{{ $calificacion->cal_funcionario->nombre_funcionario }}</b> se ha registrado satisfactoriamiente.
        		<br><br>
        		@if ($cal_total >= 3)
        			Agradecemos tu calificacion y es un placer para nosotros cumplir con las expectativas de nuestros clientes y seguiremos trabajando para ser mejores cada dia.
        		@endif
        		@if ($cal_total < 3)
        			Agradecemos tu calificacion, la cual nos permite realizar un acompañamiento constructivo con nuestro equipo humano y asi poder brindar una mejor experiencia a nuestros clientes. <br> <br>  En caso que presentaras una novedad puntal que desees compartirnos, agradecemos tus comentarios a nuestro correo servicios@limpro.co
        		@endif
        	</span>
        	<br><br>
        	<a href="/micuenta" class="btn green-color">Aceptar</a>
      	</div>
        <br>
    </div>
</div>

@endsection

