@extends('layouts.app')

@section('content')

<ul id="tabs-swipe-demo" class="tabs center green-color">
    <li class="tab col s3"><a class="active white-text" href="#servicios">Servicios</a></li>
    <li class="tab col s3"><a class="white-text" href="#funcionarios">Funcionarios</a></li>
    <li class="tab col s3"><a class="white-text" href="#calificaciones">Calificaciones</a></li>
    <li class="tab col s3"><a class="white-text" href="#mensajes">Mensajes</a></li>
    <li class="tab col s3"><a class="white-text" href="#aspirantes">Aspirantes</a></li>
    <!--<li class="tab col s3"><a href="#facturas">Facturacion</a></li>-->
  </ul>
  <div id="funcionarios" class="col s12 blue-color">
    <br>
  	<a style="margin-left: 1em;" href="/administracion/funcionarios" class="btn-floating btn-large green-color"><i class="material-icons">add</i></a>
    <br><br>
    <ul id="tabs-swipe-demo" class="tabs green-color">
        <li class="tab col s3"><a class="active white-text" href="#activos">Activos</a></li>
        <li class="tab col s3"><a class="white-text" href="#desactivos">Desactivos</a></li>
    </ul>
    <div id="activos" class="col s12 white-text">
      <div class="row center sin-espacio">
      <br><br>
        <div class="col s3"><b>Nombre</b></div>
        <div class="col s1"><b>Id</b></div>
        <div class="col s2"><b>Oficio</b></div>
        <div class="col s4"><b>Email</b></div>
        <div class="col s2"><b>Celular</b></div>
      </div>
      @foreach ($funcionarios as $funcionario)
      @if ($funcionario->estado == 'activo')
        <div class="row center sin-espacio">
          <div class="col s3"><a class="green-texto" href="/administracion/funcionarios/edit/{{ $funcionario->id }}">{{ $funcionario->nombre_funcionario }}</a></div>
          <div class="col s1">{{ $funcionario->id }}</div>
          <div class="col s2">{{ $funcionario->oficio }}</div>
          <div class="col s4">{{ $funcionario->email }}</div>
          <div class="col s2">{{ $funcionario->celular_contacto }}</div>

        </div>
      @endif
      @endforeach
      <br>
    </div>
    <div id="desactivos" class="col s12 white-text">
      <div class="row center sin-espacio">
      <br><br>
        <div class="col s3"><b>Nombre</b></div>
        <div class="col s1"><b>Id</b></div>
        <div class="col s2"><b>Oficio</b></div>
        <div class="col s4"><b>Email</b></div>
        <div class="col s2"><b>Celular</b></div>
      </div>
      @foreach ($funcionarios as $funcionario)
      @if ($funcionario->estado == 'desactivo')
        <div class="row center sin-espacio">
          <div class="col s3"><a class="green-texto" href="/administracion/funcionarios/edit/{{ $funcionario->id }}">{{ $funcionario->nombre_funcionario }}</a></div>
          <div class="col s1">{{ $funcionario->id }}</div>
          <div class="col s2">{{ $funcionario->oficio }}</div>
          <div class="col s4">{{ $funcionario->email }}</div>
          <div class="col s2">{{ $funcionario->celular_contacto }}</div>
        </div>
      @endif
      @endforeach
      <br>
    </div>
 </div>
  <div id="servicios" class="col s12 blue-color white-text">
    <br><br>
    <ul id="tabs-swipe-demo" class="tabs green-color">
    <li class="tab col s3"><a class="active white-text" href="#solicitados">Solicitados</a></li>
    <li class="tab col s3"><a href="#pagados" class="white-text">Pagados</a></li>
    <li class="tab col s3"><a href="#realizados" class="white-text">Realizados</a></li>
    <li class="tab col s3"><a href="#cancelados" class="white-text">Cancelados</a></li>
  </ul>
  <div id="solicitados" class="col s12">
    <div class="row center sin-espacio">
        <br>  <br>
        <div class="col s2"><b>Fecha Servicio</b></div>
        <div class="col s2"><b>Hora Servicio</b></div>
        <div class="col s2"><b>Plan</b></div>
        <div class="col s3"><b>Direccion</b></div>
        <div class="col s3"><b>Metodo Pago</b></div>
      </div>
      @foreach ($servicios as $servicio)
      @if ($servicio->estado == 'solicitado' )
        <div class="row center sin-espacio">
          <div class="col s2"><a class="green-texto" href="/administracion/servicios/{{ $servicio->id }}">{{ $servicio->fecha_servicio }}</a></div>
          <div class="col s2">{{ $servicio->hora_inicio }}</div>
          <div class="col s2">{{ $servicio->plan }}</div>
          <div class="col s3">{{ $servicio->direccion_servicio }} {{ $servicio->detalle_direccion }}</div>
          <div class="col s3">{{ $servicio->metodo_pago }}</div>
        </div>
      @endif
      @endforeach
      <br>
  </div>
  <div id="pagados" class="col s12">
    <div class="row center sin-espacio">
        <br>  <br>
        <div class="col s2"><b>Fecha Servicio</b></div>
        <div class="col s2"><b>Hora Servicio</b></div>
        <div class="col s2"><b>Plan</b></div>
        <div class="col s3"><b>Direccion</b></div>
        <div class="col s3"><b>Metodo Pago</b></div>
      </div>
      @foreach ($servicios as $servicio)
      @if ($servicio->estado == 'pagado' )
        <div class="row center sin-espacio">
          <div class="col s2"><a class="green-texto" href="/administracion/servicios/{{ $servicio->id }}">{{ $servicio->fecha_servicio }}</a></div>
          <div class="col s2">{{ $servicio->hora_inicio }}</div>
          <div class="col s2">{{ $servicio->plan }}</div>
          <div class="col s3">{{ $servicio->direccion_servicio }} {{ $servicio->detalle_direccion }}</div>
          <div class="col s3">{{ $servicio->metodo_pago }}</div>
        </div>
      @endif
      @endforeach
      <br>
  </div>
  <div id="realizados" class="col s12">
    <div class="row center sin-espacio">
        <br>  <br>
        <div class="col s2"><b>Fecha Servicio</b></div>
        <div class="col s2"><b>Hora Servicio</b></div>
        <div class="col s2"><b>Plan</b></div>
        <div class="col s3"><b>Direccion</b></div>
        <div class="col s3"><b>Metodo Pago</b></div>
      </div>
      @foreach ($servicios as $servicio)
      @if ($servicio->estado == 'realizado' )
        <div class="row center sin-espacio">
          <div class="col s2"><a class="green-texto" href="/administracion/servicios/{{ $servicio->id }}">{{ $servicio->fecha_servicio }}</a></div>
          <div class="col s2">{{ $servicio->hora_inicio }}</div>
          <div class="col s2">{{ $servicio->plan }}</div>
          <div class="col s3">{{ $servicio->direccion_servicio }} {{ $servicio->detalle_direccion }}</div>
          <div class="col s3">{{ $servicio->metodo_pago }}</div>
        </div>
      @endif
      @endforeach
      <br>
  </div>
  <div id="cancelados" class="col s12">
    <div class="row center sin-espacio">
        <br>  <br>
        <div class="col s2"><b>Fecha Servicio</b></div>
        <div class="col s2"><b>Hora Servicio</b></div>
        <div class="col s2"><b>Plan</b></div>
        <div class="col s3"><b>Direccion</b></div>
        <div class="col s3"><b>Metodo Pago</b></div>
      </div>
      @foreach ($servicios as $servicio)
      @if ($servicio->estado == 'cancelado' )
        <div class="row center sin-espacio">
          <div class="col s2"><a class="green-texto" href="/administracion/servicios/{{ $servicio->id }}">{{ $servicio->fecha_servicio }}</a></div>
          <div class="col s2">{{ $servicio->hora_inicio }}</div>
          <div class="col s2">{{ $servicio->plan }}</div>
          <div class="col s3">{{ $servicio->direccion_servicio }} {{ $servicio->detalle_direccion }}</div>
          <div class="col s3">{{ $servicio->metodo_pago }}</div>
        </div>
      @endif
      @endforeach
      <br>
  </div>
  </div>
  <div id="calificaciones" class="col s12 blue-color">
    <br><br>
    <ul id="tabs-swipe-demo" class="tabs green-color">
    <li class="tab col s3"><a class="active white-text" href="#test-swipe-1">Malas</a></li>
    <li class="tab col s3"><a href="#test-swipe-2" class="white-text">Buenas</a></li>
  </ul>
  <div id="test-swipe-1" class="col s12 white-text">
    <div class="row center sin-espacio">
        <br>  <br>
        <div class="col s3"><b>id_servicio</b></div>
        <div class="col s3"><b>Funcionario</b></div>
        <div class="col s3"><b>Calificacion</b></div>
        <div class="col s3"><b>Comentario</b></div>
        </div>
    @foreach ($calificaciones as $calificacion)
      @if ($calificacion->cal_total < 3)
        <div class="row center sin-espacio">
          <div class="col s3"><a class="green-texto" href="/administracion/calificaciones/servicios/{{ $calificacion->id_servicio }}">{{ $calificacion->id_servicio }}</a></div>
          <div class="col s3">{{ $calificacion->cal_funcionario->nombre_funcionario }}</div>
          <div class="col s3"><a class="green-texto" href="/administracion/calificaciones/funcionarios/{{ $calificacion->id }}">{{ $calificacion->cal_total }}</a></div>
          <div class="col s3">{{ $calificacion->comentario }}</div>
        </div>
      @endif
    @endforeach
    <br>
  </div>
  <div id="test-swipe-2" class="col s12 white-text">
    <div class="row center sin-espacio">
        <br>  <br>
        <div class="col s3"><b>id_servicio</b></div>
        <div class="col s3"><b>Funcionario</b></div>
        <div class="col s3"><b>Calificacion</b></div>
        <div class="col s3"><b>Comentario</b></div>
        </div>
    @foreach ($calificaciones as $calificacion)
      @if ($calificacion->cal_total >= 3)
        <div class="row center sin-espacio">
          <div class="col s3"><a class="green-texto" href="/administracion/calificaciones/servicios/{{ $calificacion->id_servicio }}">{{ $calificacion->id_servicio }}</a></div>
          <div class="col s3">{{ $calificacion->cal_funcionario->nombre_funcionario }}</div>
          <div class="col s3"><a class="green-texto" href="/administracion/calificaciones/funcionarios/{{ $calificacion->id }}">{{ $calificacion->cal_total }}</a></div>
          <div class="col s3">{{ $calificacion->comentario }}</div>
        </div>
      @endif
    @endforeach
    <br>
  </div>

  </div>


  <div id="mensajes" class="col s12 blue-color">
    <br><br>
    <ul id="tabs-swipe-demo" class="tabs green-color">
    <li class="tab col s3"><a class="active white-text" href="#test-swipe-3">Recibidos</a></li>
    <li class="tab col s3"><a href="#test-swipe-4" class="white-text">Procesado</a></li>
  </ul>
  <div id="test-swipe-3" class="col s12 white-text">
    <div class="row center sin-espacio">
      <br>
      @foreach ($mensajes as $mensaje)
        @if ($mensaje->estado == 'enviado')
          <div class="col s12 m4">
            <div class="card-panel blue-color-light white-text">
              <div class="row">
                <div class="col s12">
                  <p><b><span class="green-texto">Fecha de envio:</span></b> {{ $mensaje->created_at }}</p>
                  <p><b><span class="green-texto">Nombre:</span></b> {{ $mensaje->nombre }}</p>
                  <p><b><span class="green-texto">Celular:</span></b> {{ $mensaje->celular }}</p>
                  <p><b><span class="green-texto">Email:</span></b> {{ $mensaje->email }}</p>
                  <p><b><span class="green-texto">Mensaje:</span></b> {{ $mensaje->mensaje }}</p>
                  <p><a class="btn green-color white-text" href="/administracion/mensajes/edit/{{ $mensaje->id }}">Procesar</a></p>
                </div>
              </div>
            </div>
          </div>
        @endif
      @endforeach
      <br>
    </div>
  </div>
  <div id="test-swipe-4" class="col s12 white-text">
    <div class="row center sin-espacio">
      <br>
      @foreach ($mensajes as $mensaje)
        @if ($mensaje->estado == 'procesado')
          <div class="col s12 m4">
            <div class="card-panel blue-color-light white-text">
              <div class="row">
                <div class="col s12">
                  <p><b><span class="green-texto">Fecha de envio:</span></b> {{ $mensaje->created_at }}</p>
                  <p><b><span class="green-texto">Nombre:</span></b> {{ $mensaje->nombre }}</p>
                  <p><b><span class="green-texto">Celular:</span></b> {{ $mensaje->celular }}</p>
                  <p><b><span class="green-texto">Email:</span></b> {{ $mensaje->email }}</p>
                  <p><b><span class="green-texto">Mensaje:</span></b> {{ $mensaje->mensaje }}</p>
                </div>
              </div>
            </div>
          </div>
        @endif
      @endforeach
      <br>
    </div>
    <br>
  </div>

</div>



<div id="aspirantes" class="col s12 blue-color">
    <br><br>
    <ul id="tabs-swipe-demo" class="tabs green-color">
    <li class="tab col s3"><a class="active white-text" href="#test-swipe-5">Recibidos</a></li>
    <li class="tab col s3"><a href="#test-swipe-6" class="white-text">Procesado</a></li>
  </ul>
  <div id="test-swipe-5" class="col s12 white-text">
    <div class="row center sin-espacio">
      <br>
      @foreach ($aspirantes as $aspirante)
        @if ($aspirante->estado == 'enviado')
          <div class="col s12 m4">
            <div class="card-panel blue-color-light white-text">
              <div class="row">
                <div class="col s12">
                  <p><b><span class="green-texto">Fecha de envio:</span></b> {{ $aspirante->created_at }}</p>
                  <p><b><span class="green-texto">Tipo Cedula:</span></b> {{ $aspirante->tipo_cedula }}</p>
                  <p><b><span class="green-texto">Numero Cedula:</span></b> {{ $aspirante->numero_cedula }}</p>
                  <p><b><span class="green-texto">Nombre:</span></b> {{ $aspirante->nombre }}</p>
                  <p><b><span class="green-texto">Email:</span></b> {{ $aspirante->email }}</p>
                  <p><b><span class="green-texto">Celular:</span></b> {{ $aspirante->celular }}</p>
                  <p><b><span class="green-texto">Telefono Fijo:</span></b> {{ $aspirante->telefono }}</p>
                  <p><b><span class="green-texto">Direccion:</span></b> {{ $aspirante->direccion }}</p>
                  <p><b><span class="green-texto">Edad:</span></b> {{ $aspirante->edad }}</p>
                  <p><a class="btn green-color white-text" href="/administracion/aspirante/edit/{{ $aspirante->id }}">Procesar</a></p>
                </div>
              </div>
            </div>
          </div>
        @endif
      @endforeach
      <br>
    </div>
  </div>
  <div id="test-swipe-6" class="col s12 white-text">
    <div class="row center sin-espacio">
      <br>
      @foreach ($aspirantes as $aspirante)
        @if ($aspirante->estado == 'procesado')
          <div class="col s12 m4">
            <div class="card-panel blue-color-light white-text">
              <div class="row">
                <div class="col s12">
                <p><b><span class="green-texto">Fecha de envio:</span></b> {{ $aspirante->created_at }}</p>
                  <p><b><span class="green-texto">Tipo Cedula:</span></b> {{ $aspirante->tipo_cedula }}</p>
                  <p><b><span class="green-texto">Numero Cedula:</span></b> {{ $aspirante->numero_cedula }}</p>
                  <p><b><span class="green-texto">Nombre:</span></b> {{ $aspirante->nombre }}</p>
                  <p><b><span class="green-texto">Email:</span></b> {{ $aspirante->email }}</p>
                  <p><b><span class="green-texto">Celular:</span></b> {{ $aspirante->celular }}</p>
                  <p><b><span class="green-texto">Telefono Fijo:</span></b> {{ $aspirante->telefono }}</p>
                  <p><b><span class="green-texto">Direccion:</span></b> {{ $aspirante->direccion }}</p>
                  <p><b><span class="green-texto">Edad:</span></b> {{ $aspirante->edad }}</p>
                </div>
              </div>
            </div>
          </div>
        @endif
      @endforeach
      <br>
    </div>
    <br>
  </div>

</div>


@endsection