@extends('layouts.app')

@section('content')


<div class="row center">
	<div class="col- s12">
		<h1>Solicitud de Sevicio</h1>
	</div>
</div>


<div class="row center">
   	<div class="col s4 offset-s4">
     	<div class="card-panel teal">
        	<span class="white-text">La Fecha Seleccionada para el servicio es: <b>	{{ $fecha_seleccionada }}</b>. Diligencia el formulario para finalizar la solicitud.
        	</span>
      	</div>
    </div>
</div>

<div class="row">
    <form class="col s8 offset-s2">
      <div class="row">
      	<div class="input-field col s4">
      		<ul class="collapsible">
    			<li>
      				<div class="collapsible-header">
      					<label>
        					<input class="with-gap" name="plan" type="radio"  />
        					<span>Plan 4 Horas</span>
      					</label> - -
      					 Ver Detalle
      				</div>
      				<div class="collapsible-body">
      					<span>Lorem ipsum dolor sit amet.</span>
      				</div>
    			</li>
    		</ul>

      	</div>
      	<div class="input-field col s4">
      		<ul class="collapsible">
    			<li>
      				<div class="collapsible-header">
      					<label>
        					<input class="with-gap" name="plan" type="radio"  />
        					<span>Plan 8 Horas</span>
      					</label>- -
      					 Ver Detalle
      				</div>
      				<div class="collapsible-body">
      					<span>Lorem ipsum dolor sit amet.</span>
      				</div>
    			</li>
    		</ul>
      	</div>
      	<div class="input-field col s4">
      		<select>
		     	<option value="" disabled selected>Seleccione la hora de inicio del servicio</option>
		    	<option value="1">8 a.m</option>
		        <option value="2">9 a.m</option>
		        <option value="3">1 p.m</option>
		        <option value="3">2 p.m</option>
		    </select>
      	</div>
        <div class="input-field col s6">
          <input id="nombre_cliente" type="text" class="validate" name="nombre_cliente">
          <label for="nombre_cliente">Nombre Cliente</label>
        </div>
        <div class="input-field col s6">
          <input id="email" type="email" class="validate" name="email">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="celular" type="text" class="validate" name="celular">
          <label for="celular">Celular de Contacto</label>
        </div>
        <div class="input-field col s6">
          <input id="fijo" type="text" class="validate" name="fijo">
          <label for="fijo">Fijo de Contacto</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="direccion" type="text" class="validate" name="direccion">
          <label for="direccion">Direccion donde se realizara el servicio</label>
        </div>
        <div class="input-field col s6">
          <input id="detalle_dir" type="text" class="validate" name="detalle_dir">
          <label for="detalle_dir">Detalle de Direccion (ej: In 7 Ap 501)</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
    <i class="material-icons right">send</i>
  </button>
        </div>
      </div>
    </form>
  </div>

@endsection