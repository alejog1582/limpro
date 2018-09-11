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
		<h1 class="titulo">{{ $funcionario->nombre_funcionario }}</h1>
	</div>
</div>


<div class="row center sin-espacio blue-color">
    <div class="col s6">
      <div class="card blue-color-light white-text">
        <div class="card-image center-align">
          <img style="height: 100%; width: 100%" src="{{ $funcionario->url_foto }}">
        </div>
        <div class="card-content">
          <div class="row">
          	<div class="col s4">
          		<p><b>Tipo de documento:</b> {{ $funcionario->tipo_cedula }}</p>
          	</div>
          	<div class="col s4">
          		<p><b>Numero de documento:</b> {{ $funcionario->numero_cedula }}</p>
          	</div>
          	<div class="col s4">
          		<p><b>Fecha de Nacimiento:</b> {{ $funcionario->fecha_nacimiento }}</p>
          	</div>
          </div>
          <div class="row">
          	<div class="col s6">
          		<p><b>Sexo:</b> {{ $funcionario->sexo }}</p>
          	</div>
          	<div class="col s6">
          		<p><b>Tipo de Sangre:</b> {{ $funcionario->tipo_sangre }}</p>
          	</div>
          </div>
          <div class="row">
          	<div class="col s4">
          		<p><b>Tipo de cuenta:</b> {{ $funcionario->tipo_cuenta }}</p>
          	</div>
          	<div class="col s4">
          		<p><b>Banco:</b> {{ $funcionario->banco }}</p>
          	</div>
          	<div class="col s4">
          		<p><b>Numero de Cuenta:</b> {{ $funcionario->numero_cuenta }}</p>
          	</div>
          </div>
          <div class="row">
          	<div class="col s6">
          		<p><b>Direccion Casa:</b> {{ $funcionario->direccion_residencia }}</p>
          	</div>
          	<div class="col s6">
          		<p><b>Email:</b> {{ $funcionario->email }}</p>
          	</div>
          </div>
          <div class="row">
          	<div class="col s6">
          		<p><b>Celular:</b> {{ $funcionario->celular_contacto }}</p>
          	</div>
          	<div class="col s6">
          		<p><b>Fijo:</b> {{ $funcionario->fijo_contacto }}</p>
          	</div>
          </div>
          <div class="row">
          	<div class="col s6">
          		<p><b>Acudiente:</b> {{ $funcionario->nombre_acudiente }}</p>
          	</div>
          	<div class="col s6">
          		<p><b>Celular Acudiente:</b> {{ $funcionario->celular_acudiente }}</p>
          	</div>
          </div>
          <div class="row">
          	<div class="col s4">
          		<p><b>Tipo de Contrato:</b> {{ $funcionario->tipo_contrato }}</p>
          	</div>
          	<div class="col s4">
          		<p><b>Oficio:</b> {{ $funcionario->oficio }}</p>
          	</div>
          	<div class="col s4">
          		<p><b>Fecha Vinculacion:</b> {{ $funcionario->fecha_vinculacion }}</p>
          	</div>
          </div>
          <div class="row">
          	<div class="col s4">
          		<p><b>Servicios Realizados:</b> {{ $servicios_realizados }}</p>
          	</div>
          	<div class="col s4">
          		<p><b>Servicios Calificados:</b> {{ $servicios_calificados }}</p>
          	</div>
          	<div class="col s4">
          		<p><b>Calificacion:</b> {{ $calificacion }}</p>
          	</div>
          </div>
        </div>
        <div class="card-action">
        	@if ($funcionario->estado == 'activo')
                <a class="btn green-color" onclick="editar()" type="button">Editar<i class="material-icons right">send</i></a>
        	@endif
        	<a href="/calificacion/funcionario/{{ $funcionario->id }}" class="btn green-color" target="_blank">Ver Calificaciones</a>
        </div>
      </div>
    </div>
    <div class="col s4 offset-s1">
		<div class="card blue-color-black white-text" id="card_editar" style="display: none;">
		<form action="/administracion/funcionarios/edit/save" method="post">
		{{ csrf_field() }}
        <div class="card-content">
        		<div class="row">
        			<input type="hidden" name="id_funcionario" value="{{ $funcionario->id }}">
        			<div class="input-field col s4">
        				<select name="tipo_cuenta" class="@if ($errors->has('tipo_cuenta')) is-invalid    @endif">
			        		@if ( $funcionario->tipo_cuenta	== 'ahorro')
			        			<option selected value="ahorro">Ahorro</option>
						        <option value="corriente">Corriente</option>
						        <option value="daviplata">Daviplata</option>
			        		@endif
			        		@if ( $funcionario->tipo_cuenta	== 'corriente')
			        			<option value="ahorro">Ahorro</option>
						        <option selected value="corriente">Corriente</option>
						        <option value="daviplata">Daviplata</option>
			        		@endif
			        		@if ( $funcionario->tipo_cuenta	== 'daviplata')
			        			<option value="ahorro">Ahorro</option>
						        <option value="corriente">Corriente</option>
						        <option selected value="daviplata">Daviplata</option>
			        		@endif
					    </select>
			        	@if ($errors->has('tipo_cuenta'))
			            	@foreach ($errors->get('tipo_cuenta') as $error)
			              		<h5 class="left-align">
			                		<blockquote>{{ $error }}</blockquote>
			              		</h5>
			            	@endforeach
			        	@endif
        			</div>
        			<div class="input-field col s4">
			        	<input name="banco" id="banco" type="text" value="{{ $funcionario->banco }}" class="white-text @if ($errors->has('banco')) is-invalid    @endif">
			         	@if ($errors->has('banco'))
			            	@foreach ($errors->get('banco') as $error)
			              		<h5 class="left-align">
			                		<blockquote>{{ $error }}</blockquote>
			              		</h5>
			            	@endforeach
			          	@endif
			          	<label for="banco" class="white-text">Banco</label>
			        </div>
			        <div class="input-field col s4">
			        	<input name="cuenta" id="cuenta" type="text" value="{{ $funcionario->numero_cuenta }}" class="white-text @if ($errors->has('cuenta')) is-invalid    @endif">
			         	@if ($errors->has('cuenta'))
			            	@foreach ($errors->get('cuenta') as $error)
			              		<h5 class="left-align">
			                		<blockquote>{{ $error }}</blockquote>
			              		</h5>
			            	@endforeach
			          	@endif
			          	<label class="white-text" for="cuenta">Numero de Cuenta</label>
			        </div>
        		</div>
        		<div class="row">
        			<div class="input-field col s6">
			      		<input name="direccion_residencia" id="direccion_residencia" type="text" value="{{ $funcionario->direccion_residencia }}" class="white-text @if ($errors->has('direccion_residencia')) is-invalid    @endif">
			         	@if ($errors->has('direccion_residencia'))
			            	@foreach ($errors->get('direccion_residencia') as $error)
			              		<h5 class="left-align">
			                		<blockquote>{{ $error }}</blockquote>
			              		</h5>
			            	@endforeach
			          	@endif
			          	<label class="white-text" for="direccion_residencia">Direccion Casa</label>
			      	</div>
			      	<div class="input-field col s6">
			      		<input name="email" id="email" type="email" value="{{ $funcionario->email }}" class="white-text @if ($errors->has('email')) is-invalid    @endif">
			         	@if ($errors->has('email'))
			            	@foreach ($errors->get('email') as $error)
			              		<h5 class="left-align">
			                		<blockquote>{{ $error }}</blockquote>
			              		</h5>
			            	@endforeach
			          	@endif
			          	<label class="white-text" for="email">Email</label>
			      	</div>
        		</div>
        		<div class="row">
        			<div class="input-field col s6">
			      		<input name="celular" id="celular" type="text" value="{{ $funcionario->celular_contacto }}" class="white-text @if ($errors->has('celular')) is-invalid    @endif">
			         	@if ($errors->has('celular'))
			            	@foreach ($errors->get('celular') as $error)
			              		<h5 class="left-align">
			                		<blockquote>{{ $error }}</blockquote>
			              		</h5>
			            	@endforeach
			          	@endif
			          	<label class="white-text" for="celular">Celular</label>
			      	</div>
			      	<div class="input-field col s6">
			      		<input class="white-text" name="fijo" id="fijo" value="{{ $funcionario->fijo_contacto }}" type="text">
			         	<label class="white-text" for="fijo">Fijo</label>
			      	</div>
			    </div>
        		<div class="row">
        			<div class="input-field col s6">
			      		<input name="nombre_acudiente" id="nombre_acudiente" type="text" value="{{ $funcionario->nombre_acudiente }}" class="white-text @if ($errors->has('nombre_acudiente')) is-invalid    @endif">
			         	@if ($errors->has('nombre_acudiente'))
			            	@foreach ($errors->get('nombre_acudiente') as $error)
			              		<h5 class="left-align">
			                		<blockquote>{{ $error }}</blockquote>
			              		</h5>
			            	@endforeach
			          	@endif
			          	<label class="white-text" for="nombre_acudiente">Acudiente</label>
			      	</div>
			      	<div class="input-field col s6">
			      		<input name="numero_acudiente" id="numero_acudiente" type="text" value="{{ $funcionario->celular_acudiente }}" class="white-text @if ($errors->has('numero_acudiente')) is-invalid    @endif">
			         	@if ($errors->has('numero_acudiente'))
			            	@foreach ($errors->get('numero_acudiente') as $error)
			              		<h5 class="left-align">
			                		<blockquote>{{ $error }}</blockquote>
			              		</h5>
			            	@endforeach
			          	@endif
			          	<label class="white-text" for="numero_acudiente">Numero Acudiente</label>
			      	</div>
        		</div>
        		<div class="row">
        			<div class="input-field col s6">
			        	<select name="tipo_contrato" class="@if ($errors->has('tipo_contrato')) is-invalid    @endif">
			        		@if ( $funcionario->tipo_contrato == 'directo'	)
			        			<option selected value="directo">Directo</option>
					        	<option value="hora">Por Hora</option>
			        		@endif
					     	@if ( $funcionario->tipo_contrato == 'hora'	)
			        			<option value="directo">Directo</option>
					        	<option selected value="hora">Por Hora</option>
			        		@endif
					    </select>
			        	@if ($errors->has('tipo_contrato'))
			            	@foreach ($errors->get('tipo_contrato') as $error)
			              		<h5 class="left-align">
			                		<blockquote>{{ $error }}</blockquote>
			              		</h5>
			            	@endforeach
			        	@endif
			        </div>
			        <div class="input-field col s6">
			        	<select name="oficio" class="@if ($errors->has('oficio')) is-invalid    @endif">
			        		@if ( $funcionario->oficio == 'aseo' )
			        			<option selected value="aseo">Aseo</option>
					            <option value="mantenimiento">Mantenimiento</option>
					            <option value="chef">Chef</option>
			        		@endif
			        		@if ( $funcionario->oficio == 'mantenimiento' )
			        			<option value="aseo">Aseo</option>
					            <option selected value="mantenimiento">Mantenimiento</option>
					            <option value="chef">Chef</option>
			        		@endif
			        		@if ( $funcionario->oficio == 'chef' )
			        			<option value="aseo">Aseo</option>
					            <option value="mantenimiento">Mantenimiento</option>
					            <option selected value="chef">Chef</option>
			        		@endif
			          </select>
			          @if ($errors->has('oficio'))
			            @foreach ($errors->get('oficio') as $error)
			              <h5 class="left-align">
			                <blockquote>{{ $error }}</blockquote>
			              </h5>
			            @endforeach
			          @endif
			        </div>
        		</div>
        		<div class="row">
        			<div class="input-field col s12">
			        	<input id="fecha_desvinculacion" name="fecha_desvinculacion" type="text" class="datepicker">
            			<label class="white-text" for="fecha_desvinculacion"> Selecciona la fecha de vinculacion</label>
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