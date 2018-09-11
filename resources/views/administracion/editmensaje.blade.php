@extends('layouts.app')

@section('content')
<div class="row center blue-color white-text sin-espacio">
	<div class="col s1">
		<br><br>
		<a href="/administracion" class="btn-floating btn-large green-color"><i class="material-icons">chevron_left</i></a>
	</div>
	<div class="col s11">
		<h1 class="titulo">Id del Mensaje: {{ $mensaje->id }}</h1>
	</div>
</div>


<div class="row center sin-espacio blue-color">
    <div class="col s4 offset-s4">
		<div class="card blue-color-black white-text" id="card_editar">
		<form action="/administracion/mensajes/edit/save" method="post">
		{{ csrf_field() }}
        <div class="card-content">
        		<div class="row">
        			<input type="hidden" name="id_mensaje" value="{{ $mensaje->id }}">
        			<div class="input-field col s12">
			        	<input name="nombre" id="nombre" type="text" value="{{ $mensaje->nombre }}" disabled class="white-text @if ($errors->has('nombre')) is-invalid    @endif">
			         	@if ($errors->has('nombre'))
			            	@foreach ($errors->get('nombre') as $error)
			              		<h5 class="left-align">
			                		<blockquote>{{ $error }}</blockquote>
			              		</h5>
			            	@endforeach
			          	@endif
			          	<label for="nombre" class="white-text">Nombre</label>
			        </div>
			    </div>
			    <div class="row">
        			<div class="input-field col s12">
			        	<input disabled name="celular" id="celular" type="text" value="{{ $mensaje->celular }}" class="white-text @if ($errors->has('celular')) is-invalid    @endif">
			         	@if ($errors->has('celular'))
			            	@foreach ($errors->get('celular') as $error)
			              		<h5 class="left-align">
			                		<blockquote>{{ $error }}</blockquote>
			              		</h5>
			            	@endforeach
			          	@endif
			          	<label for="celular" class="white-text">Celular</label>
			        </div>
			    </div>
			    <div class="row">
        			<div class="input-field col s12">
			        	<input disabled name="email" id="email" type="text" value="{{ $mensaje->email }}" class="white-text @if ($errors->has('email')) is-invalid    @endif">
			         	@if ($errors->has('email'))
			            	@foreach ($errors->get('email') as $error)
			              		<h5 class="left-align">
			                		<blockquote>{{ $error }}</blockquote>
			              		</h5>
			            	@endforeach
			          	@endif
			          	<label for="email" class="white-text">Email</label>
			        </div>
			    </div>
			    <div class="row">
        			<div class="input-field col s12">
			        	<input disabled name="mensaje" id="mensaje" type="text" value="{{ $mensaje->mensaje }}" class="white-text @if ($errors->has('mensaje')) is-invalid    @endif">
			         	@if ($errors->has('mensaje'))
			            	@foreach ($errors->get('mensaje') as $error)
			              		<h5 class="left-align">
			                		<blockquote>{{ $error }}</blockquote>
			              		</h5>
			            	@endforeach
			          	@endif
			          	<label for="mensaje" class="white-text">Mensaje</label>
			        </div>
			    </div>
			    <div class="row">
        			<div class="input-field col s12">
			        	<select name="estado" class="@if ($errors->has('estado')) is-invalid    @endif">
			        		@if ( $mensaje->estado	== 'enviado')
			        			<option selected value="enviado">Enviado</option>
						        <option value="procesado">Procesado</option>
			        		@endif
					    </select>
			        	@if ($errors->has('estado'))
			            	@foreach ($errors->get('estado') as $error)
			              		<h5 class="left-align">
			                		<blockquote>{{ $error }}</blockquote>
			              		</h5>
			            	@endforeach
			        	@endif
			        </div>
			    </div>

		</div>
        <div class="card-action">
        	<button class="btn green-color" type="submit">Guardar<i class="material-icons right">send</i>
          	</button>
        </div>
    	</form>
      </div>
   	</div>
  </div>

@endsection