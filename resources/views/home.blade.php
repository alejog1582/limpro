@extends('layouts.app')

<script type="text/javascript">
function new_servicio_4(){
document.getElementById('titulo_new_servicio').innerHTML= 'Nuevo servicio plan 4 horas'
document.getElementById('plan_new_servicio').value = '4'};
function new_servicio_8(){
document.getElementById('titulo_new_servicio').innerHTML= 'Nuevo servicio plan 8 horas'
document.getElementById('plan_new_servicio').value = '8'};
function canje_servicio_4(){
document.getElementById('titulo_canje').innerHTML= 'Canje servicio plan 4 horas'
document.getElementById('plan_canje').value = '4'};
function canje_servicio_8(){
document.getElementById('titulo_canje').innerHTML= 'Canje servicio plan 8 horas'
document.getElementById('plan_canje').value = '8'};
</script>

@section('content')
<div class="row center blue-color white-text sin-espacio">
    <div class="col s12">
        <h4 class="titulo">Bienvenid@ a tu cuenta {{ $user->name }}</h4>
    </div>
</div>
<div class="row center blue-color white-text sin-espacio">
    <div class="col s12 center">
        <ul class="tabs center green-color">
            <li class="tab col s12 m3"><a style="color: #006064" class="active white-text" href="#test1">Servicios Activos</a></li>
            <li class="tab col s12 m3"><a style="color: #006064" href="#test4" class="white-text">Historial de Servicio</a></li>
            <li class="tab col s12 m3"><a style="color: #006064" href="#test5" class="white-text">Servicio Gratis</a></li>
        </ul>
    </div>
    <div id="test1" class="col s12">
        @if ($errors->has('fecha_servicio'))
            @foreach ($errors->get('fecha_servicio') as $error)
                <h5 class="left-align">
                    <blockquote style="text-transform: uppercase;">No se pudo generar el servicio. El campo fecha de servicio no se diligencio. Intentalo de Nuevo</blockquote>
                </h5>
            @endforeach
        @endif
        @if ($errors->has('hora_inicio'))
            @foreach ($errors->get('hora_inicio') as $error)
                <h5 class="left-align">
                    <blockquote style="text-transform: uppercase;">No se pudo generar el servicio. El campo hora de inicio no se diligencio. Intentalo de Nuevo</blockquote>
                </h5>
            @endforeach
        @endif
        @if ($errors->has('plan'))
            @foreach ($errors->get('plan') as $error)
                <h5 class="left-align">
                    <blockquote style="text-transform: uppercase;">No se pudo generar el servicio. El campo plan no se diligencio. Intentalo de Nuevo</blockquote>
                </h5>
            @endforeach
        @endif
        @if ($errors->has('nombre_cliente'))
            @foreach ($errors->get('nombre_cliente') as $error)
                <h5 class="left-align">
                    <blockquote style="text-transform: uppercase;">No se pudo generar el servicio. El campo nombre de cliente no se diligencio. Intentalo de Nuevo</blockquote>
                </h5>
            @endforeach
        @endif
        @if ($errors->has('email'))
            @foreach ($errors->get('email') as $error)
                <h5 class="left-align">
                    <blockquote style="text-transform: uppercase;">No se pudo generar el servicio. El campo email no se diligencio. Intentalo de Nuevo</blockquote>
                </h5>
            @endforeach
        @endif
        @if ($errors->has('celular'))
            @foreach ($errors->get('celular') as $error)
                <h5 class="left-align">
                    <blockquote style="text-transform: uppercase;">No se pudo generar el servicio. El campo celular no se diligencio. Intentalo de Nuevo</blockquote>
                </h5>
            @endforeach
        @endif
        @if ($errors->has('direccion'))
            @foreach ($errors->get('direccion') as $error)
                <h5 class="left-align">
                    <blockquote style="text-transform: uppercase;">No se pudo generar el servicio. El campo direccion no se diligencio. Intentalo de Nuevo</blockquote>
                </h5>
            @endforeach
        @endif
        @if ($errors->has('metodo_pago'))
            @foreach ($errors->get('metodo_pago') as $error)
                <h5 class="left-align">
                    <blockquote style="text-transform: uppercase;">No se pudo generar el servicio. El campo metodo de pago no se diligencio. Intentalo de Nuevo</blockquote>
                </h5>
            @endforeach
        @endif
        @if ($errors->has('privacidad'))
            @foreach ($errors->get('privacidad') as $error)
                <h5 class="left-align">
                    <blockquote style="text-transform: uppercase;">No se pudo generar el servicio. Debe leer y aceptar la politica de privacidad. Intentalo de Nuevo</blockquote>
                </h5>
            @endforeach
        @endif
        @if ($activos == false)
            <div class="container">
                <div class="row">
                    <div class="col">
                        <br>
                        <div class="card-panel blue-color-black">
                            <span class="white-text"> LIMPRO te da la bienvenida a tu cuenta.  Te invitamos a acceder a tu primer servicio, para que puedas conocer  nuestra novedosa propuesta de servicio. Para mayor informacion revisa la pagina principal.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <div class="row">
        <br>
            @foreach ($servicios as $servicio)
                @if ($servicio->email == $user->email)
                    @if ($servicio->id_calificacion == null)
                        @if ($servicio->estado != 'cancelado')
                            <div class="col s12 m6">
                                @if ($servicio->estado == 'pagado')
                                    @if ($servicio->id_funcionario_selec == null)
                                        <h5 class="left-align">
                                            <blockquote style="border-left: 5px solid #7AB518 !important; text-transform: uppercase;">
                                                Agradecemos tu pago. A continuacion encontraras informacion basica de nuestras funcionarias disponibles, con el fin que puedas seleccionar la de tu preferencia.
                                            </blockquote>
                                        </h5>
                                    @endif
                                    @if ($servicio->id_funcionario_selec != null)
                                        <h5 class="left-align">
                                            <blockquote style="border-left: 5px solid #7AB518 !important; text-transform: uppercase;">
                                                El funcionario que prestara el servicio a sido seleccionado exitosamente y estara en la direccion indicada el dia del servicio.
                                            </blockquote>
                                        </h5>
                                    @endif
                                @endif
                                @if ($servicio->estado == 'solicitado')
                                    <h5 class="left-align">
                                        <blockquote style="border-left: 5px solid yellow !important; text-transform: uppercase;">
                                            Tu servicio a sido solcitado exitosamente, quedamos atentos de la confirmación del pago.
                                        </blockquote>
                                    </h5>
                                @endif
                                @if ($servicio->estado == 'realizado')
                                    <h5 class="left-align">
                                        <blockquote style="border-left: 5px solid orange !important; text-transform: uppercase;">
                                            Agradecemos tu colaboración realizando la calificación del servicio prestado.
                                        </blockquote>
                                    </h5>
                                @endif
                                <div class="card blue-color-light">
                                    <div class="card-content">
                                        <div class="row">
                                            <div class="col s12 m6">
                                                <p><b><span class="green-texto">    Fecha Servicio:</span></b> {{ $servicio->fecha_servicio }}</p>
                                            </div>
                                            <div class="col s12 m6">
                                                <p><b><span class="green-texto">Hora Inicio:</span></b> {{ $servicio->hora_inicio }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s12 m6">
                                                <p><b><span class="green-texto">Plan:</span></b> {{ $servicio->plan }} Horas</p>
                                            </div>
                                            <div class="col s12 m6">
                                                <p><b><span class="green-texto">Valor Plan:</span></b> {{ $servicio->valor_plan }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s12 m6">
                                                <p><b><span class="green-texto">Metodo de Pago:</span></b> {{ $servicio->metodo_pago }}</p>
                                            </div>
                                            <div class="col s12 m6">
                                                <p><b><span class="green-texto">Estado:</span></b> {{ $servicio->estado }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s12">
                                                <p><b><span class="green-texto">Direccion:</span></b> {{ $servicio->direccion_servicio }} {{ $servicio->detalle_direccion }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s12">
                                                @if ($servicio->id_funcionario_selec != null)
                                                    <p><b><span class="green-texto">Funcionario Seleccionado:</span></b> {{ $servicio->funcionario_selec->nombre_funcionario }}</p>
                                                @endif
                                            </div>
                                        </div>
                                        @if ($servicio->estado == 'pagado')
                                            <div class="card-action">
                                                @if ($servicio->id_funcionario_selec == null)
                                                <a class="btn green-color" href="/seleccion/servicio/{{ $servicio->id }}" type="button">Seleccionar Funcionario<i class="material-icons right">send</i></a>
                                                @endif

                                                @if ($errors->has('funcionario'))
                                                @foreach ($errors->get('funcionario') as $error)
                                                    <h5 class="left-align">
                                                        <blockquote>{{ $error }}</blockquote>
                                                    </h5>
                                                @endforeach
                                            @endif
                                            </div>
                                        @endif
                                        @if ($servicio->estado == 'realizado')
                                            <div class="card-action">
                                                <a class="btn green-color" href="/seleccion/servicio/{{ $servicio->id }}" type="button">Calificar Servicio<i class="material-icons right">send</i></a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endif
                @endif
            @endforeach
        </div>
    </div>

    <div id="test4" class="col s12">
        @if ($historial == false)
            <div class="container">
                <div class="row">
                    <div class="col">
                        <br>
                        <div class="card-panel blue-color-black">
                            <span class="white-text">Aqui encontraras el historial de servicios que te hemos brindado.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @foreach ($servicios as $servicio)
            @if ($servicio->email == $user->email)
                @if ($servicio->id_calificacion != null)

                        <div class="col s12 m4">
                            <br>
                            <div class="card blue-color-light">
                                <div class="card-content">
                                    <div class="row">
                                        <div class="col s12 m6">
                                            <p><b><span class="green-texto">    Fecha Servicio:</span></b> {{ $servicio->fecha_servicio }}</p>
                                        </div>
                                        <div class="col s12 m6">
                                            <p><b><span class="green-texto">Hora Inicio:</span></b> {{ $servicio->hora_inicio }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m6">
                                            <p><b><span class="green-texto">Plan:</span></b> {{ $servicio->plan }} Horas</p>
                                        </div>
                                        <div class="col s12 m6">
                                            <p><b><span class="green-texto">Valor Plan:</span></b> {{ $servicio->valor_plan }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m6">
                                            <p><b><span class="green-texto">Metodo de Pago:</span></b> {{ $servicio->metodo_pago }}</p>
                                        </div>
                                        <div class="col s12 m6">
                                            <p><b><span class="green-texto">Estado:</span></b> {{ $servicio->estado }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m6">
                                            <p><b><span class="green-texto">Direccion:</span></b> {{ $servicio->direccion_servicio }}</p>
                                        </div>
                                        <div class="col s12 m6">
                                            @if ($servicio->id_funcionario_selec != null)
                                                <p><b><span class="green-texto">Funcionario Seleccionado:</span></b> {{ $servicio->funcionario_selec->nombre_funcionario }}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m6">
                                            <p><b><span class="green-texto">Calificacion del servicio:</span></b> {{ $servicio->calificacion->cal_total }}</p>
                                        </div>
                                        <div class="col s12 m6">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endif
            @endif
        @endforeach
    </div>
    <div id="test5" class="col s12">
        <div class="row">
            <div class="col m4 offset-m2">
                @if ($canje_4 == null)
                    <h3 class="titulo">Plan de 4 Horas</h3>
                    <span style="font-size: 50px">
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a><br>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a></span>
                    <p>Inicia tu plan de canje para solicitar uno totalmente gratis, con las mismas caracteristicas.</p><p><a class="btn-floating btn-large waves-effect waves-light green-color modal-trigger" onclick="new_servicio_4()" href="#new_servicio" ><i class="material-icons">add</i></a></p>
                @endif
                @if ($canje_4 == 1)
                    <h3 class="titulo">Plan de 4 Horas</h3>
                    <span style="font-size: 50px">
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a><br>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a></span>
                    <p>Te hacen falta 9 servicios para recibir uno totalmente gratis, con las mismas caracteristicas. Solicitalo aqui:</p><p><a class="btn-floating btn-large waves-effect waves-light green-color modal-trigger" onclick="new_servicio_4()" href="#new_servicio" ><i class="material-icons">add</i></a></p>
                @endif
                @if ($canje_4 == 2)
                    <h3 class="titulo">Plan de 4 Horas</h3>
                    <span style="font-size: 50px">
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a><br>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a></span>
                    <p>Te hacen falta 8 servicios para recibir uno totalmente gratis, con las mismas caracteristicas. Solicitalo aqui:</p><p><a class="btn-floating btn-large waves-effect waves-light green-color modal-trigger" onclick="new_servicio_4()" href="#new_servicio" ><i class="material-icons">add</i></a></p>
                @endif
                @if ($canje_4 == 3)
                    <h3 class="titulo">Plan de 4 Horas</h3>
                    <span style="font-size: 50px">
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a><br>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a></span>
                    <p>Te hacen falta 7 servicios para recibir uno totalmente gratis, con las mismas caracteristicas. Solicitalo aqui:</p><p><a class="btn-floating btn-large waves-effect waves-light green-color modal-trigger" onclick="new_servicio_4()" href="#new_servicio" ><i class="material-icons">add</i></a></p>
                @endif
                @if ($canje_4 == 4)
                    <h3 class="titulo">Plan de 4 Horas</h3>
                    <span style="font-size: 50px">
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a><br>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a></span>
                    <p>Te hacen falta 6 servicios para recibir uno totalmente gratis, con las mismas caracteristicas. Solicitalo aqui:</p><p><a class="btn-floating btn-large waves-effect waves-light green-color modal-trigger" onclick="new_servicio_4()" href="#new_servicio" ><i class="material-icons">add</i></a></p>
                @endif
                @if ($canje_4 == 5)
                    <h3 class="titulo">Plan de 4 Horas</h3>
                    <span style="font-size: 50px">
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a><br>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a></span>
                    <p>Te hacen falta 5 servicios para recibir uno totalmente gratis, con las mismas caracteristicas. Solicitalo aqui:</p><p><a class="btn-floating btn-large waves-effect waves-light green-color modal-trigger" onclick="new_servicio_4()" href="#new_servicio" ><i class="material-icons">add</i></a></p>
                @endif
                @if ($canje_4 == 6)
                    <h3 class="titulo">Plan de 4 Horas</h3>
                    <span style="font-size: 50px">
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a><br>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a></span>
                    <p>Te hacen falta 4 servicios para recibir uno totalmente gratis, con las mismas caracteristicas. Solicitalo aqui:</p><p><a class="btn-floating btn-large waves-effect waves-light green-color modal-trigger" onclick="new_servicio_4()" href="#new_servicio" ><i class="material-icons">add</i></a></p>
                @endif
                @if ($canje_4 == 7)
                    <h3 class="titulo">Plan de 4 Horas</h3>
                    <span style="font-size: 50px">
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a><br>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a></span>
                    <p>Te hacen falta 3 servicios para recibir uno totalmente gratis, con las mismas caracteristicas. Solicitalo aqui:</p><p><a class="btn-floating btn-large waves-effect waves-light green-color modal-trigger" onclick="new_servicio_4()" href="#new_servicio" ><i class="material-icons">add</i></a></p>
                @endif
                @if ($canje_4 == 8)
                    <h3 class="titulo">Plan de 4 Horas</h3>
                    <span style="font-size: 50px">
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a><br>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a></span>
                    <p>Te hacen falta 2 servicios para recibir uno totalmente gratis, con las mismas caracteristicas. Solicitalo aqui:</p><p><a class="btn-floating btn-large waves-effect waves-light green-color modal-trigger" onclick="new_servicio_4()" href="#new_servicio" ><i class="material-icons">add</i></a></p>
                @endif
                @if ($canje_4 == 9)
                    <h3 class="titulo">Plan de 4 Horas</h3>
                    <span style="font-size: 50px">
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a><br>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a></span>
                    <p>Te hacen falta 1 servicio para recibir uno totalmente gratis, con las mismas caracteristicas. Solicitalo aqui:</p><p><a class="btn-floating btn-large waves-effect waves-light green-color modal-trigger" onclick="new_servicio_4()" href="#new_servicio" ><i class="material-icons">add</i></a></p>
                @endif
                @if ($canje_4 >= 10)
                    <h3 class="titulo">Plan de 4 Horas</h3>
                    <span style="font-size: 50px">
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a><br>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a></span>
                    <p>Has completado 10 sevicios en plan de 4 horas. Canjealos por un servicio gratis con las mismas caracteristicas:</p><p><a class="btn green-color modal-trigger" onclick="canje_servicio_4()" href="#canje_servicio" >Canjear<i class="material-icons">add</i></a></p>
                @endif
            </div>
            <div class="col m4">
                @if ($canje_8 == null)
                    <h3 class="titulo">Plan de 8 Horas</h3>
                    <span style="font-size: 50px">
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a><br>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a></span>
                    <p>Inicia tu plan de canje para solicitar uno totalmente gratis, con las mismas caracteristicas. </p><p><a class="btn-floating btn-large waves-effect waves-light green-color modal-trigger" onclick="new_servicio_8()" href="#new_servicio" ><i class="material-icons">add</i></a></p>
                @endif
                @if ($canje_8 == 1)
                    <h3 class="titulo">Plan de 8 Horas</h3>
                    <span style="font-size: 50px"><a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a><br>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a></span>
                    <p>Te hacen falta 9 servicios para recibir uno totalmente gratis, con las mismas caracteristicas. Solicitalo aqui:</p><p><a class="btn-floating btn-large waves-effect waves-light green-color modal-trigger" onclick="new_servicio_8()" href="#new_servicio" ><i class="material-icons">add</i></a></p>
                @endif
                @if ($canje_8 == 2)
                    <h3 class="titulo">Plan de 8 Horas</h3>
                    <span style="font-size: 50px"><a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a><br>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a></span>
                    <p>Te hacen falta 8 servicios para recibir uno totalmente gratis, con las mismas caracteristicas. Solicitalo aqui:</p><p><a class="btn-floating btn-large waves-effect waves-light green-color modal-trigger" onclick="new_servicio_8()" href="#new_servicio" ><i class="material-icons">add</i></a></p>
                @endif
                @if ($canje_8 == 3)
                    <h3 class="titulo">Plan de 8 Horas</h3>
                    <span style="font-size: 50px"><a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a><br>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a></span>
                    <p>Te hacen falta 7 servicios para recibir uno totalmente gratis, con las mismas caracteristicas. Solicitalo aqui:</p><p><a class="btn-floating btn-large waves-effect waves-light green-color modal-trigger" onclick="new_servicio_8()" href="#new_servicio" ><i class="material-icons">add</i></a></p>
                @endif
                @if ($canje_8 == 4)
                    <h3 class="titulo">Plan de 8 Horas</h3>
                    <span style="font-size: 50px"><a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a><br>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a></span>
                    <p>Te hacen falta 6 servicios para recibir uno totalmente gratis, con las mismas caracteristicas. Solicitalo aqui:</p><p><a class="btn-floating btn-large waves-effect waves-light green-color modal-trigger" onclick="new_servicio_8()" href="#new_servicio" ><i class="material-icons">add</i></a></p>
                @endif
                @if ($canje_8 == 5)
                    <h3 class="titulo">Plan de 8 Horas</h3>
                    <span style="font-size: 50px"><a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a><br>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a></span>
                    <p>Te hacen falta 5 servicios para recibir uno totalmente gratis, con las mismas caracteristicas. Solicitalo aqui:</p><p><a class="btn-floating btn-large waves-effect waves-light green-color modal-trigger" onclick="new_servicio_8()" href="#new_servicio" ><i class="material-icons">add</i></a></p>
                @endif
                @if ($canje_8 == 6)
                    <h3 class="titulo">Plan de 8 Horas</h3>
                    <span style="font-size: 50px"><a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a><br>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a></span>
                    <p>Te hacen falta 4 servicios para recibir uno totalmente gratis, con las mismas caracteristicas. Solicitalo aqui:</p><p><a class="btn-floating btn-large waves-effect waves-light green-color modal-trigger" onclick="new_servicio_8()" href="#new_servicio" ><i class="material-icons">add</i></a></p>
                @endif
                @if ($canje_8 == 7)
                    <h3 class="titulo">Plan de 8 Horas</h3>
                    <span style="font-size: 50px"><a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a><br>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a></span>
                    <p>Te hacen falta 3 servicios para recibir uno totalmente gratis, con las mismas caracteristicas. Solicitalo aqui:</p><p><a class="btn-floating btn-large waves-effect waves-light green-color modal-trigger" onclick="new_servicio_8()" href="#new_servicio" ><i class="material-icons">add</i></a></p>
                @endif
                @if ($canje_8 == 8)
                    <h3 class="titulo">Plan de 8 Horas</h3>
                    <span style="font-size: 50px"><a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a><br>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a></span>
                    <p>Te hacen falta 2 servicios para recibir uno totalmente gratis, con las mismas caracteristicas. Solicitalo aqui:</p><p><a class="btn-floating btn-large waves-effect waves-light green-color modal-trigger" onclick="new_servicio_8()" href="#new_servicio" ><i class="material-icons">add</i></a></p>
                @endif
                @if ($canje_8 == 9)
                    <h3 class="titulo">Plan de 8 Horas</h3>
                    <span style="font-size: 50px"><a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a><br>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #888" href="#">&#10003;</a></span>
                    <p>Te hacen falta 1 servicio para recibir uno totalmente gratis, con las mismas caracteristicas. Solicitalo aqui:</p><p><a class="btn-floating btn-large waves-effect waves-light green-color modal-trigger" onclick="new_servicio_8()" href="#new_servicio" ><i class="material-icons">add</i></a></p>
                @endif
                @if ($canje_8 >= 10)
                    <h3 class="titulo">Plan de 8 Horas</h3>
                    <span style="font-size: 50px"><a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a><br>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a>
                    <a style="color: #7AB518" href="#">&#10003;</a></span>
                    <p>Has completado 10 sevicios en plan de 8 horas. Canjealos por un servicio gratis con las mismas caracteristicas:</p><p><a class="btn green-color modal-trigger" onclick="canje_servicio_8()" href="#canje_servicio" >Canjear<i class="material-icons">add</i></a></p>
                @endif
            </div>
        </div>


        <div id="new_servicio" class="modal">
            <div class="modal-content blue-color-black">
                <h4 id="titulo_new_servicio" class="titulo"></h4>
                <p>
                    <form action="/newservicio/pago" method="post">
                    {{ csrf_field() }}
                        <div class="row">
                            <input id="plan_new_servicio" name="plan" type="hidden" value="0">
                            <input name="email" type="hidden" value="{{ $user->email }}">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">date_range</i>
                                <input id="fecha_servicio" name="fecha_servicio" type="text" class="white-text datepicker @if ($errors->has('fecha_servicio')) is-invalid    @endif">
                                <label class="white-text" for="fecha_servicio"> Fecha para tu servicio</label>
                                @if ($errors->has('fecha_servicio'))
                                    @foreach ($errors->get('fecha_servicio') as $error)<h5 class="left-align">
                                        <blockquote>{{ $error }}</blockquote></h5>
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
                                        <blockquote>{{ $error }}</blockquote>
                                        </h5>
                                    @endforeach
                                @endif
                                <label class="white-text" for="nombre_cliente">Nombre Cliente</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <select name="hora_inicio" class="@if ($errors->has('hora_inicio')) is-invalid    @endif">
                                    <option disabled selected>Hora inicio del servicio</option>
                                    <option value="8 a.m">8 a.m</option>
                                    <option value="9 a.m">9 a.m</option>
                                    <option value="1 p.m">1 p.m</option>
                                    <option value="2 p.m">2 p.m</option>
                                </select>
                                @if ($errors->has('hora_inicio'))
                                    @foreach ($errors->get('hora_inicio') as $error)
                                        <h5 class="left-align">
                                        <blockquote>{{ $error }}</blockquote>
                                        </h5>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m6">
                                <input id="direccion" type="text" name="direccion" class="white-text @if ($errors->has('direccion')) is-invalid    @endif">
                                @if ($errors->has('direccion'))
                                    @foreach ($errors->get('direccion') as $error)
                                        <h5 class="left-align">
                                            <blockquote>{{ $error }}</blockquote>
                                        </h5>
                                    @endforeach
                                @endif
                                <label class="white-text" for="direccion">Direccion del servicio</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <input id="detalle_dir" type="text" name="detalle_dir" class="white-text">
                                <label class="white-text" for="detalle_dir">Detalle de Direccion (ej: In 7 Ap 501)</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m6">
                                <input id="celular" type="text" name="celular" class="white-text @if ($errors->has('celular')) is-invalid    @endif">
                                @if ($errors->has('celular'))
                                    @foreach ($errors->get('celular') as $error)
                                        <h5 class="left-align">
                                            <blockquote>{{ $error }}</blockquote>
                                        </h5>
                                    @endforeach
                                @endif
                                <label class="white-text" for="celular">Celular de Contacto</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <input id="fijo" type="text" name="fijo" class="white-text">
                                <label class="white-text" for="fijo">Fijo de Contacto</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m6 offset-m3">
                                <select name="metodo_pago" class="@if ($errors->has('metodo_pago')) is-invalid    @endif">
                                    <option disabled selected>Seleccione el metodo de pago</option>
                                    <option value="consignacion">Consignacion</option>
                                    <option value="payu">PayU</option>
                                </select>
                                @if ($errors->has('metodo_pago'))
                                    @foreach ($errors->get('metodo_pago') as $error)
                                        <h5 class="left-align">
                                            <blockquote>{{ $error }}</blockquote>
                                        </h5>
                                    @endforeach
                                @endif
                            </div>
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
                            <div class="input-field col s12">
                                <br>
                                <button class="btn green-color" type="submit">Solicitar<i class="material-icons right">send</i>
                                </button>
                            </div>
                        </div>
                    </form>
                </p>
            </div>
        </div>
        <div id="canje_servicio" class="modal">
            <div class="modal-content blue-color-black">
                <h4 id="titulo_canje" class="titulo"></h4>
                <p>
                    <form action="/newservicio/canje" method="post">
                    {{ csrf_field() }}
                        <div class="row">
                            <input id="plan_canje" name="plan" type="hidden" value="0">
                            <input name="metodo_pago" type="hidden" value="canje">
                            <input name="email" type="hidden" value="{{ $user->email }}">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">date_range</i>
                                <input id="fecha_servicio_canje" name="fecha_servicio" type="text" class="white-text datepicker @if ($errors->has('fecha_servicio')) is-invalid    @endif">
                                <label class="white-text" for="fecha_servicio_canje"> Fecha para tu servicio</label>
                                @if ($errors->has('fecha_servicio'))
                                    @foreach ($errors->get('fecha_servicio') as $error)<h5 class="left-align">
                                        <blockquote>{{ $error }}</blockquote></h5>
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
                                        <blockquote>{{ $error }}</blockquote>
                                        </h5>
                                    @endforeach
                                @endif
                                <label class="white-text" for="nombre_cliente">Nombre Cliente</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <select name="hora_inicio" class="white-text @if ($errors->has('hora_inicio')) is-invalid    @endif">
                                    <option disabled selected>Hora inicio del servicio</option>
                                    <option value="8 a.m">8 a.m</option>
                                    <option value="9 a.m">9 a.m</option>
                                    <option value="1 p.m">1 p.m</option>
                                    <option value="2 p.m">2 p.m</option>
                                </select>
                                @if ($errors->has('hora_inicio'))
                                    @foreach ($errors->get('hora_inicio') as $error)
                                        <h5 class="left-align">
                                        <blockquote>{{ $error }}</blockquote>
                                        </h5>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m6">
                                <input id="direccion" type="text" name="direccion" class="white-text @if ($errors->has('direccion')) is-invalid    @endif">
                                @if ($errors->has('direccion'))
                                    @foreach ($errors->get('direccion') as $error)
                                        <h5 class="left-align">
                                            <blockquote>{{ $error }}</blockquote>
                                        </h5>
                                    @endforeach
                                @endif
                                <label class="white-text" for="direccion">Direccion del servicio</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <input id="detalle_dir" type="text" name="detalle_dir" class="white-text">
                                <label class="white-text" for="detalle_dir">Detalle de Direccion (ej: In 7 Ap 501)</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m6">
                                <input id="celular" type="text" name="celular" class="white-text @if ($errors->has('celular')) is-invalid    @endif">
                                @if ($errors->has('celular'))
                                    @foreach ($errors->get('celular') as $error)
                                        <h5 class="left-align">
                                            <blockquote>{{ $error }}</blockquote>
                                        </h5>
                                    @endforeach
                                @endif
                                <label class="white-text" for="celular">Celular de Contacto</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <input id="fijo" type="text" name="fijo" class="white-text">
                                <label class="white-text" for="fijo">Fijo de Contacto</label>
                            </div>
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
                            <div class="input-field col s12">
                                <br>
                                <button class="btn green-color" type="submit">Solicitar<i class="material-icons right">send</i>
                                </button>
                            </div>
                        </div>
                    </form>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
