@extends('layouts.app')

@section('content')
<div class="row center blue-color sin-espacio">
   	<div class="col s4 offset-s4">
   		<br>
     	<div class="card-panel blue-color-light">
        	<span class="white-text">El funcionario se a gurdado bajo el id: <b>	{{ $funcionario->id }}</b>.
        	</span>
        	<br><br>
        	<a href="/administracion" class="btn green-color">Aceptar</a>
      	</div>
      	<br>
    </div>
</div>


@endsection