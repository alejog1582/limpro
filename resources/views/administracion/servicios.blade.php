@extends('layouts.app')

<script type="text/javascript">
function editar(){
document.getElementById('card_editar').style.display = 'block';}
</script>

@section('content')

<div class="row center blue-color white-text sin-espacio">
	<div class="col s1">
		<br><br>
		<a href="/administracion" class="btn-floating btn-large green-color"><i class="material-icons">chevron_left</i></a>
	</div>
	<div class="col s11">
		<h1 class="titulo">Servicio ID: {{ $servicio->id }}</h1>
	</div>
</div>


<div class="row center blue-color sin-espacio">
    <div class="col s6">
      <br>
      <div class="card">
        <div class="card-content blue-color-light white-text">
          <div class="row">
          	<div class="col s3">
          		<p><b>Fecha Servicio:</b> {{ $servicio->fecha_servicio }}</p>
          	</div>
          	<div class="col s3">
          		<p><b>Hora Inicio:</b> {{ $servicio->hora_inicio }}</p>
          	</div>
          	<div class="col s3">
          		<p><b>Plan:</b> {{ $servicio->plan }}</p>
          	</div>
          	<div class="col s3">
          		<p><b>Valor Plan:</b> {{ $servicio->valor_plan }}</p>
          	</div>
          </div>
          <div class="row">
          	<div class="col s6">
          		<p><b>Cliente:</b> {{ $servicio->nombre_cliente }}</p>
          	</div>
          	<div class="col s6">
          		<p><b>Email:</b> {{ $servicio->email }}</p>
          	</div>
          </div>
          <div class="row">
          	<div class="col s4">
          		<p><b>Direccion:</b> {{ $servicio->direccion_servicio }} {{ $servicio->detalle_direccion }}</p>
          	</div>
          	<div class="col s4">
          		<p><b>Celular:</b> {{ $servicio->celular_contacto }}</p>
          	</div>
          	<div class="col s4">
          		<p><b>Fijo:</b> {{ $servicio->fijo_contacto }}</p>
          	</div>
          </div>
          <div class="row">
          	<div class="col s6">
          		<p><b>Metodo de Pago:</b> {{ $servicio->metodo_pago }}</p>
          	</div>
          	<div class="col s6">
          		<p><b>Estado:</b> {{ $servicio->estado }}</p>
          	</div>
          </div>
          <div class="row">
          	<div class="col s6">
          		<p><b>Funcionario Seleccionado:</b> {{ $servicio->id_funcionario_selec }}</p>
          	</div>
          	<div class="col s6">
          		<p><b>Id Calificacion:</b> {{ $servicio->id_calificacion }}</p>
          	</div>
          </div>
           <div class="row">
           	<div class="col s3">
          		<p><b>Fun-1:</b> {{ $servicio->id_funcionario_1 }}</p>
          	</div>
          	<div class="col s3">
          		<p><b>Fun-2:</b> {{ $servicio->id_funcionario_2 }}</p>
          	</div>
          	<div class="col s3">
          		<p><b>Fun-3:</b> {{ $servicio->id_funcionario_3 }}</p>
          	</div>
          	<div class="col s3">
          		<p><b>Fun-4:</b> {{ $servicio->id_funcionario_4 }}</p>
          	</div>
          </div>
        </div>
        <div class="card-action blue-color-light">
          <a class="btn green-color" onclick="editar()" type="button">Editar<i class="material-icons right">send</i></a>
        </div>
      </div>
        <br>
    </div>
    <div class="col s4 offset-s1">
		<div class="card blue-color-black" id="card_editar" style="display: none;">
		<form action="/administracion/servicios/edit" method="post">
		{{ csrf_field() }}
        <div class="card-content">
        		<div class="row">
        			<input type="hidden" name="id_servicio" value="{{ $servicio->id }}">
              <input type="hidden" name="nombre" value="{{ $servicio->nombre_cliente }}">
              <input type="hidden" name="email" value="{{ $servicio->email }}">
        			<div class="input-field col s6">
        				<select name="estado">
			        		@if ( $servicio->estado	== 'solicitado')
			        			<option selected value="solicitado">Solicitado</option>
						        <option value="pagado">Pagado</option>
                    <option value="cancelado">Cancelado</option>
			        		@endif
			        		@if ( $servicio->estado	== 'pagado')
			        			<option selected value="pagado">Pagado</option>
						        <option value="realizado">Realizado</option>
			        		@endif
			        		@if ( $servicio->estado	== 'realizado')
			        			<option selected value="realizado">Realizado</option>
			        		@endif
					    </select>
        			</div>
        			<div class="input-field col s6">
			        	<input class="white-text" name="funcionario_seleccionado" id="funcionario_seleccionado" type="text" value="{{ $servicio->id_funcionario_selec }}" >
			         	<label class="white-text" for="funcionario_seleccionado">funcionario_seleccionado</label>
			        </div>
        		</div>
        		<div class="row">
        			<div class="input-field col s3">
			      		<input class="white-text" name="id_fun_1" id="id_fun_1" type="text" value="{{ $servicio->id_funcionario_1 }}">
			          	<label class="white-text" for="id_fun_1">Id Fun 1</label>
			      	</div>
			      	<div class="input-field col s3">
			      		<input class="white-text" name="id_fun_2" id="id_fun_2" type="text" value="{{ $servicio->id_funcionario_2 }}">
			          	<label class="white-text" for="id_fun_2">Id Fun 2</label>
			      	</div>
			      	<div class="input-field col s3">
			      		<input class="white-text" name="id_fun_3" id="id_fun_3" type="text" value="{{ $servicio->id_funcionario_3 }}">
			          	<label class="white-text" for="id_fun_3">Id Fun 3</label>
			      	</div>
			      	<div class="input-field col s3">
			      		<input class="white-text" name="id_fun_4" id="id_fun_4" type="text" value="{{ $servicio->id_funcionario_4 }}">
			          	<label class="white-text" for="id_fun_4">Id Fun 4</label>
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