@extends('layouts.app')

@section('content')
<div class="row center sin-espacio white-text blue-color">
	<div class="col s1">
		<br>
		<a href="/administracion" class="btn-floating btn-large green-color"><i class="material-icons">chevron_left</i></a>
	</div>
	<div class="col s11">
		<h2 class="titulo">Nuevo Funcionario</h2>
		<br>
	</div>
</div>

<div class="row blue-color sin-espacio">
    <form action="/administracion/funcionarios/new" method="post" enctype="multipart/form-data" class="col s8 offset-s2">
      {{ csrf_field() }}
      <div class="row sin-espacio">
        <div class="input-field col s4">
      	   <input name="url_foto" id="url_foto" type="url" class="white-text @if ($errors->has('url_foto')) is-invalid    @endif">
          @if ($errors->has('url_foto'))
              @foreach ($errors->get('url_foto') as $error)
                  <h5 class="left-align red-text">
                    <blockquote>{{ $error }}</blockquote>
                  </h5>
              @endforeach
            @endif
            <label class="white-text" for="url_foto">Url foto</label>
        </div>
      	<div class="input-field col s4">
      		<select name="tipo_cedula" class="@if ($errors->has('tipo_cedula')) is-invalid    @endif">
		     	<option disabled selected>Seleccione tipo de cedula</option>
		    	<option value="cc">CC</option>
		        <option value="ce">CE</option>
		    </select>
        	@if ($errors->has('tipo_cedula'))
            	@foreach ($errors->get('tipo_cedula') as $error)
              		<h5 class="left-align red-text">
                		<blockquote>{{ $error }}</blockquote>
              		</h5>
            	@endforeach
        	@endif
        </div>
        <div class="input-field col s4">
        	<input name="numero_cedula" id="numero_cedula" type="text" class="white-text @if ($errors->has('numero_cedula')) is-invalid    @endif">
         	@if ($errors->has('numero_cedula'))
            	@foreach ($errors->get('numero_cedula') as $error)
              		<h5 class="left-align red-text">
                		<blockquote>{{ $error }}</blockquote>
              		</h5>
            	@endforeach
          	@endif
          	<label class="white-text" for="numero_cedula">Numero de Cedula</label>
      	</div>
      </div>
      <div class="row sin-espacio">
        <div class="input-field col s6">
          	<input name="nombre_funcionario" id="nombre_funcionario" type="text" class=" white-text @if ($errors->has('nombre_funcionario')) is-invalid    @endif">
         	@if ($errors->has('nombre_funcionario'))
            	@foreach ($errors->get('nombre_funcionario') as $error)
              		<h5 class="left-align red-text">
                		<blockquote>{{ $error }}</blockquote>
              		</h5>
            	@endforeach
          	@endif
          	<label class="white-text" for="nombre_funcionario">Nombre de Funcionario</label>
        </div>
        <div class="input-field col s3">
        	<select name="sexo" class="@if ($errors->has('sexo')) is-invalid    @endif">
		     	<option disabled selected>Seleccione Sexo</option>
		    	<option value="masculino">Masculino</option>
		        <option value="femenino">Femenino</option>
		    </select>
        	@if ($errors->has('sexo'))
            	@foreach ($errors->get('sexo') as $error)
              		<h5 class="left-align red-text">
                		<blockquote>{{ $error }}</blockquote>
              		</h5>
            	@endforeach
        	@endif
        </div>
      <div class="input-field col s3">
          <select name="sangre" class="@if ($errors->has('sangre')) is-invalid    @endif">
		     	  <option disabled selected>Seleccione Tipo de Sangre</option>
		    	  <option value="a+">A+</option>
		        <option value="a-">A-</option>
            <option value="o+">O+</option>
		        <option value="o-">O-</option>
            <option value="b+">B+</option>
            <option value="b-">B-</option>
            <option value="ab+">AB+</option>
            <option value="ab-">AB-</option>
		    </select>
        	@if ($errors->has('sangre'))
            	@foreach ($errors->get('sangre') as $error)
              		<h5 class="left-align red-text">
                		<blockquote>{{ $error }}</blockquote>
              		</h5>
            	@endforeach
        	@endif
        </div>
    </div>
    <div class="row">
        <div class="input-field col s4">
        	<input id="fecha_vinculacion" name="fecha_vinculacion" type="text" class="white-text datepicker @if ($errors->has('fecha_vinculacion')) is-invalid    @endif">
            <label class="white-text" for="fecha_vinculacion"> Selecciona la fecha de vinculacion</label>
            @if ($errors->has('fecha_vinculacion'))
                @foreach ($errors->get('fecha_vinculacion') as $error)
                  	<h5 class="left-align red-text">
                        <blockquote>{{ $error }}</blockquote>
                    </h5>
                @endforeach
            @endif
        </div>
        <div class="input-field col s4">
        	<select name="tipo_contrato" class="@if ($errors->has('tipo_contrato')) is-invalid    @endif">
		     	<option disabled selected>Seleccione Tipo de Contrato</option>
		    	<option value="directo">Directo</option>
		        <option value="prestacion de servicio">Prestacion de Servicio</option>
		    </select>
        	@if ($errors->has('tipo_contrato'))
            	@foreach ($errors->get('tipo_contrato') as $error)
              		<h5 class="left-align red-text">
                		<blockquote>{{ $error }}</blockquote>
              		</h5>
            	@endforeach
        	@endif
        </div>
        <div class="input-field col s4">
          <select name="talla_uniforme" class="@if ($errors->has('talla_uniforme')) is-invalid    @endif">
          <option disabled selected>Talla Uniforme</option>
          <option value="xs">XS</option>
          <option value="s">S</option>
          <option value="m">M</option>
          <option value="l">L</option>
          <option value="xl">XL</option>
        </select>
          @if ($errors->has('talla_uniforme'))
              @foreach ($errors->get('talla_uniforme') as $error)
                  <h5 class="left-align red-text">
                    <blockquote>{{ $error }}</blockquote>
                  </h5>
              @endforeach
          @endif
        </div>
    </div>
    <div class="row">
        <div class="input-field col s4">
        	<select name="tipo_cuenta" class="@if ($errors->has('tipo_cuenta')) is-invalid    @endif">
		     	  <option disabled selected>Seleccione Tipo de Cuenta</option>
		    	  <option value="ahorro">Ahorro</option>
		        <option value="corriente">Corriente</option>
		        <option value="daviplata">Daviplata</option>
            <option value="nequi">Nequi</option>
            <option value="efectivo">Efectivo</option>
		    </select>
        	@if ($errors->has('tipo_cuenta'))
            	@foreach ($errors->get('tipo_cuenta') as $error)
              		<h5 class="left-align red-text">
                		<blockquote>{{ $error }}</blockquote>
              		</h5>
            	@endforeach
        	@endif
        </div>
        <div class="input-field col s4">
        	<input name="banco" id="banco" type="text" class="white-text @if ($errors->has('banco')) is-invalid    @endif">
         	@if ($errors->has('banco'))
            	@foreach ($errors->get('banco') as $error)
              		<h5 class="left-align red-text">
                		<blockquote>{{ $error }}</blockquote>
              		</h5>
            	@endforeach
          	@endif
          	<label class="white-text" for="banco">Ingrese Banco</label>
        </div>
        <div class="input-field col s4">
        	<input name="cuenta" id="cuenta" type="text" class="white-text @if ($errors->has('cuenta')) is-invalid    @endif">
         	@if ($errors->has('cuenta'))
            	@foreach ($errors->get('cuenta') as $error)
              		<h5 class="left-align red-text">
                		<blockquote>{{ $error }}</blockquote>
              		</h5>
            	@endforeach
          	@endif
          	<label class="white-text" for="cuenta">Ingrese Numero de Cuenta</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <select name="oficio" class="@if ($errors->has('oficio')) is-invalid    @endif">
            <option disabled selected>Seleccione el oficio del funcionario</option>
            <option value="aseo">Aseo</option>
            <option value="mantenimiento">Mantenimiento</option>
            <option value="chef">Chef</option>
          </select>
          @if ($errors->has('oficio'))
            @foreach ($errors->get('oficio') as $error)
              <h5 class="left-align red-text">
                <blockquote>{{ $error }}</blockquote>
              </h5>
            @endforeach
          @endif
        </div>
        <div class="input-field col s6">
        	<input id="fecha_nacimiento" name="fecha_nacimiento" type="text" class="white-text datepicker @if ($errors->has('fecha_nacimiento')) is-invalid    @endif">
            <label class="white-text" for="fecha_nacimiento"> Selecciona la fecha de nacimiento</label>
            @if ($errors->has('fecha_nacimiento'))
                @foreach ($errors->get('fecha_nacimiento') as $error)
                  	<h5 class="left-align red-text">
                        <blockquote>{{ $error }}</blockquote>
                    </h5>
                @endforeach
            @endif
        </div>
      </div>
      <div class="row">
      	<div class="input-field col s4">
      		<input name="direccion_residencia" id="direccion_residencia" type="text" class="white-text @if ($errors->has('direccion_residencia')) is-invalid    @endif">
         	@if ($errors->has('direccion_residencia'))
            	@foreach ($errors->get('direccion_residencia') as $error)
              		<h5 class="left-align red-text">
                		<blockquote>{{ $error }}</blockquote>
              		</h5>
            	@endforeach
          	@endif
          	<label class="white-text" for="direccion_residencia">Direccion de Residencia</label>
      	</div>
      	<div class="input-field col s4">
      		<input name="celular" id="celular" type="text" class="white-text @if ($errors->has('celular')) is-invalid    @endif">
         	@if ($errors->has('celular'))
            	@foreach ($errors->get('celular') as $error)
              		<h5 class="left-align red-text">
                		<blockquote>{{ $error }}</blockquote>
              		</h5>
            	@endforeach
          	@endif
          	<label class="white-text" for="celular">Celular</label>
      	</div>
      	<div class="input-field col s4">
      		<input class="white-text" name="fijo" id="fijo" type="text">
         	<label class="white-text" for="fijo">Fijo</label>
      	</div>
      </div>
      <div class="row">
      	<div class="input-field col s4">
      		<input name="email" id="email" type="email" class="white-text @if ($errors->has('email')) is-invalid    @endif">
         	@if ($errors->has('email'))
            	@foreach ($errors->get('email') as $error)
              		<h5 class="left-align red-text">
                		<blockquote>{{ $error }}</blockquote>
              		</h5>
            	@endforeach
          	@endif
          	<label class="white-text" for="email">Ingrese correo electronico</label>
      	</div>
      	<div class="input-field col s4">
      		<input name="nombre_acudiente" id="nombre_acudiente" type="text" class="white-text @if ($errors->has('nombre_acudiente')) is-invalid    @endif">
         	@if ($errors->has('nombre_acudiente'))
            	@foreach ($errors->get('nombre_acudiente') as $error)
              		<h5 class="left-align red-text">
                		<blockquote>{{ $error }}</blockquote>
              		</h5>
            	@endforeach
          	@endif
          	<label class="white-text" for="nombre_acudiente">Nombre de Acudiente</label>
      	</div>
      	<div class="input-field col s4">
      		<input name="numero_acudiente" id="numero_acudiente" type="text" class="white-text @if ($errors->has('numero_acudiente')) is-invalid    @endif">
         	@if ($errors->has('numero_acudiente'))
            	@foreach ($errors->get('numero_acudiente') as $error)
              		<h5 class="left-align red-text">
                		<blockquote>{{ $error }}</blockquote>
              		</h5>
            	@endforeach
          	@endif
          	<label class="white-text" for="numero_acudiente">Numero de Acudiente</label>
      	</div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input name="eps" id="eps" type="text" class="white-text @if ($errors->has('eps')) is-invalid    @endif">
          @if ($errors->has('eps'))
              @foreach ($errors->get('eps') as $error)
                  <h5 class="left-align red-text">
                    <blockquote>{{ $error }}</blockquote>
                  </h5>
              @endforeach
            @endif
            <label class="white-text" for="eps">Eps</label>
        </div>
        <div class="input-field col s6">
          <textarea id="antecedentes" class="materialize-textarea white-text" name="antecedentes"></textarea>
          <label for="antecedentes" class="white-text">Antecedentes Medicos y Observaciones</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <button class="btn green-color" type="submit">Enviar<i class="material-icons right">send</i>
          </button>
        </div>
      </div>
    </form>
  </div>

@endsection