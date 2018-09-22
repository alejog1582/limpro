@extends('layouts.app')

@section('content')


<div class="row center blue-color white-text sin-espacio">
	<div class="col- s12">
		<h1 class="sin-espacio-top titulo">Solicitud de Sevicio</h1>
	</div>
</div>


<div class="row center blue-color sin-espacio">
   	<div class="col s12 m4 offset-m4">
     	<div class="card-panel green-color">
        	<span class="white-text">La Fecha Seleccionada para el servicio es: <b>	{{ $fecha_seleccionada }}</b>. Diligencia el formulario para finalizar la solicitud.
        	</span>
      	</div>
    </div>
</div>
<div class="row blue-color sin-espacio">
    <form action="/newservicio/pago" method="post" class="col s12 m8 offset-m2">
      {{ csrf_field() }}
      <input type="hidden" name="fecha_servicio" value="{{ $fecha_seleccionada }}">
      <div class="row">
        <div class="input-field col s12 m6">
      		<ul class="collapsible">
    			<li>
      				<div class="collapsible-header blue-color-black white-text">
                <label>
        					<input class="white-text @if ($errors->has('plan')) is-invalid    @endif" name="plan" type="radio" value="4" />
        					<span class="white-text">Plan 4 Horas</span>
      					</label>
      					 | Ver Detalle
      				</div>
      				<div class="collapsible-body">
      					<span class="white-text">En este plan se excluye el servicio de planchado. La hora de inicio del servicio puede ser a las 8 am, 9 am, 1 pm o 2 pm. <br><br><a  class="green-texto" href="/politica/servicio">Política de Servicio</a></span>
      				</div>
    			</li>
    		</ul>
        @if ($errors->has('plan'))
            @foreach ($errors->get('plan') as $error)
              <h5 class="left-align">
                <blockquote class="red-text">{{ $error }}</blockquote>
              </h5>
            @endforeach
          @endif
      	</div>
      	<div class="input-field col s12 m6">
      		<ul class="collapsible">
    			<li>
      				<div class="collapsible-header blue-color-black white-text">
      					<label>
        					<input class="white-text @if ($errors->has('plan')) is-invalid    @endif" name="plan" type="radio" value="8" />
        					<span class="white-text">Plan 8 Horas</span>
      					</label>|
      					 Ver Detalle
      				</div>
      				<div class="collapsible-body">
      					<span class="white-text">En este plan se incluye el servicio de planchado únicamente en horas de la mañana. La hora de inicio del servicio puede ser a las 8 am o 9 am. <br><br><a  class="green-texto" href="/politica/servicio">Politica de Servicio</a></span>
      				</div>
    			</li>
    		</ul>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <select name="hora_inicio" class="white-text @if ($errors->has('hora_inicio')) is-invalid    @endif">
          <option disabled selected>Seleccione la hora de inicio del servicio</option>
          <option value="8 a.m">8 a.m</option>
            <option value="9 a.m">9 a.m</option>
            <option value="1 p.m">1 p.m</option>
          </select>
        @if ($errors->has('hora_inicio'))
            @foreach ($errors->get('hora_inicio') as $error)
              <h5 class="left-align">
                <blockquote class="red-text">{{ $error }}</blockquote>
              </h5>
            @endforeach
          @endif
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m6">
          <input name="nombre_cliente" id="nombre_cliente" type="text" class="white-text @if ($errors->has('nombre_cliente')) is-invalid    @endif">
          @if ($errors->has('nombre_cliente'))
            @foreach ($errors->get('nombre_cliente') as $error)
              <h5 class="left-align">
                <blockquote class="red-text">{{ $error }}</blockquote>
              </h5>
            @endforeach
          @endif
          <label class="white-text" for="nombre_cliente">Nombre Cliente</label>
        </div>
        <div class="input-field col s12 m6">
          <input id="email" type="email" name="email" class="white-text @if ($errors->has('email')) is-invalid    @endif">
          @if ($errors->has('email'))
            @foreach ($errors->get('email') as $error)
              <h5 class="left-align">
                <blockquote class="red-text">{{ $error }}</blockquote>
              </h5>
            @endforeach
          @endif
          <label class="white-text" for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m6">
          <input id="celular" type="text" name="celular" class="white-text @if ($errors->has('celular')) is-invalid    @endif">
          @if ($errors->has('celular'))
            @foreach ($errors->get('celular') as $error)
              <h5 class="left-align">
                <blockquote class="red-text">{{ $error }}</blockquote>
              </h5>
            @endforeach
          @endif
          <label class="white-text" for="celular">Celular de Contacto</label>
        </div>
        <div class="input-field col s12 m6">
          <input class="white-text" id="fijo" type="text" name="fijo">
          <label class="white-text" for="fijo">Fijo de Contacto</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m6">
          <input id="direccion" type="text" name="direccion" class="white-text @if ($errors->has('direccion')) is-invalid    @endif">
          @if ($errors->has('direccion'))
            @foreach ($errors->get('direccion') as $error)
              <h5 class="left-align">
                <blockquote class="red-text">{{ $error }}</blockquote>
              </h5>
            @endforeach
          @endif
          <label class="white-text" for="direccion">Direccion donde se realizara el servicio</label>
        </div>
        <div class="input-field col s12 m6">
          <input class="white-text" id="detalle_dir" type="text" name="detalle_dir">
          <label class="white-text" for="detalle_dir">Detalle de Direccion (ej: In 7 Ap 501)</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m6">
          <select name="metodo_pago" class="@if ($errors->has('metodo_pago')) is-invalid    @endif">
            <option disabled selected>Seleccione el metodo de pago</option>
            <option value="consignacion">Consignacion</option>
            <option value="payu">PayU</option>
          </select>
          @if ($errors->has('metodo_pago'))
            @foreach ($errors->get('metodo_pago') as $error)
              <h5 class="left-align">
                <blockquote class="red-text">{{ $error }}</blockquote>
              </h5>
            @endforeach
          @endif
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
            <label>
                <input type="checkbox" class="filled-in @if ($errors->has('privacidad')) is-invalid @endif" name="privacidad" />
                <span><a class="green-texto" href="/politica/privacidad" target="_blank">Acepto los terminos y condiciones</a></span>
                @if ($errors->has('privacidad'))
                  @foreach ($errors->get('privacidad') as $error)
                    <h5 class="left-align">
                      <blockquote class="red-text">{{ $error }}</blockquote>
                    </h5>
                  @endforeach
                @endif
            </label>
        </div>
      </div>
      <br>
      <div class="row center">
        <div class="input-field col s12">
          <button class="btn green-color" type="submit">Enviar<i class="material-icons right">send</i>
          </button>
        </div>
      </div>
    </form>
  </div>

@endsection