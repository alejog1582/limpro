@extends('layouts.app')

@section('content')
    @if (Auth::check())
        @if ($user->email == 'alejog1582@gmail.com')
        <ul class="collection">
            <li class="collection-item">
                <a href="/administracion">Administracion</a>
            </li>
        </ul>
        @endif
    @endif
    <div class="carousel carousel-slider center">
        <!--<div class="carousel-fixed-item center">
          <a class="btn waves-effect white grey-text darken-text-2">button</a>
        </div>-->
        <div class="carousel-item" href="#one!">
            <div class="row" id="slider1">
                    <div class="col s12 m6 offset-m1">
                        <h1 class="white-text sombra titulo">Limpieza profesional para hogares y empresas</h1>
                    </div>
                    <div class="col s4 hide-on-small-only">
                        <div style="margin-bottom: 0" class="row green-color white-text">
                            <h4>Solicita tu Servicio</h4>
                        </div>
                        <div class="row white">
                            <form action="/newservicio" method="get">
                                {{ csrf_field() }}
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">date_range</i>
                                    <input id="icon_prefix" name="fecha_servicio" type="text" class="datepicker @if ($errors->has('fecha_servicio')) is-invalid    @endif">
                                    <label for="icon_prefix"> Selecciona la fecha para tu servicio</label>
                                    @if ($errors->has('fecha_servicio'))
                                        @foreach ($errors->get('fecha_servicio') as $error)<h5 class="left-align">
                                            <blockquote>{{ $error }}</blockquote></h5>
                                        @endforeach
                                    @endif
                                    <button class="btn green-color" type="submit" name="action">Seleccionar<i class="material-icons right">send</i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col s1 hide-on-small-only">   </div>

          </div>
        </div>
        <!--<div class="carousel-item amber white-text" href="#two!">
          <h2>Second Panel</h2>
          <p class="white-text">This is your second panel</p>
        </div>
     4  <div class="carousel-item green        <h2>Third Panel<</p>
        </div>
        <div class="carousel-item blue white-text" href="#four!">
          <h2>Fourth Panel</h2>
          <p class="white-text">This is your fourth panel</p>
        </div>-->
    </div>
    <div class="row hide-on-med-and-up">
        <div style="margin-bottom: 0" class="row center green-color white-text">
            <h4>Solicita tu Servicio</h4>
        </div>
        <div class="row white center">
            <form action="/newservicio" method="get" class="blue-color">
            {{ csrf_field() }}
                <div class="input-field col s12">
                    <i class="material-icons prefix">date_range</i>
                    <input id="icon_prefixx" name="fecha_servicio" type="text" class="datepicker @if ($errors->has('fecha_servicio')) is-invalid    @endif">
                    <label class="black-text" for="icon_prefixx"> Selecciona la fecha para tu servicio</label>
                    @if ($errors->has('fecha_servicio'))
                        @foreach ($errors->get('fecha_servicio') as $error)
                            <h5 class="left-align">
                                <blockquote>{{ $error }}</blockquote>
                            </h5>
                        @endforeach
                    @endif
                    <button class="btn green-color" type="submit" name="action">Seleccionar<i class="material-icons right">send</i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="row green-color center white-text sin-espacio">
        <div class="container">
            <div class="col s12">
                <h3>Contamos con los siguientes medios para que solicites tus servicio: nuestra pagina web, por whatsapp al numero 350 4591097 o a nuestro correo electronico: servicios@limpro.co</h3>
            </div>
        </div>
    </div>

    <div class="row white-text center sin-espacio blue-color-oscuro">
        <div class="row">
            <br>
            <h2 class="sin-espacio-top titulo">Por Que Con Nosotros</h2>
            <div class="col s12 m6">
                    <h3 class="titulo">Disponibilidad 7/24</h3>
                    <br>
                    <p>Ofrecemos lo mejor en servicios generales de aseo y contamos con la disponibilidad de nuestros colaboradores de acuerdo a tu necesidad ya sea por días o por horas.</p>
            </div>
            <div class="col s12 m6">
                <img width="60%" src="{{ asset('images/24horas.jpg') }}">
            </div>
        </div>
        <div class="row">
            <hr>
            <div class="col s12 m6">
                <img width="60%" src="{{ asset('images/comodidad.jpg') }}">
            </div>
            <div class="col s12 m6">
                    <h3 class="titulo">Comodidad</h3>
                    <br>
                    <p>Puedes realizar la reserva y el pago de tus servicios de forma cómoda, desde cualquier lugar y con cualquiera de nuestros medios dispuestos para ti.</p>
            </div>
        </div>
        <div class="row">
            <hr>
            <div class="col s12 m6">
                    <h3 class="titulo">Seleccion de Personal</h3>
                    <p>Una vez el servicio sea solicitado y pagado, podrás conocer información de nuestros colaboradores disponibles para tu servicio y así escoger el colaborador de tu preferencia.</p>
            </div>
            <div class="col s12 m6">
                <img width="60%" src="{{ asset('images/seleccion.jpg') }}">
            </div>
        </div>
        <div class="row">
            <hr>
            <div class="col s12 m6">
                <img width="60%" src="{{ asset('images/capacitacion.jpg') }}">
            </div>
            <div class="col s12 m6">
                    <h3 class="titulo">Personal Capacitado</h3>
                    <br>
                    <p>Contamos con recurso humano capacitado constantemente para el desempeño de las funciones de servicios generales.</p>
            </div>
        </div>
        <div class="row">
            <hr>
            <div class="col s12 m6">
                    <h3 class="titulo">Poliza de Seguro</h3>
                    <br>
                    <p>Contamos con una póliza de aseguramiento de nuestros servicios. El cual cubre cualquier daño y/o perdida que se halla evidenciado que fue causado por nuestra funcionaria en el desarrollo de su labor.</p>
            </div>
            <div class="col s12 m6">
                <img width="60%" src="{{ asset('images/seguro.jpg') }}">
            </div>
        </div>
        <div class="row">
            <hr>
            <div class="col s12 m6">
                    <h3 class="titulo">Sistema de Calificacion</h3>
                    <br>
                    <p>Tu opinión y comentarios son vitales para nosotros, por eso con el ánimo de brindar una experiencia inolvidable a nuestros clientes, podrás calificar el servicio prestado y visualizar las calificaciones de otros usuarios.</p>
            </div>
            <div class="col s12 m6">
                <img width="60%" src="{{ asset('images/calificacion.jpg') }}">
            </div>
        </div>
    </div>
    </div>
    <div class="row center blue-color white-text sin-espacio" id="planes">
        <br>
        <div class="container">
            <div class="col s12">
                <h2 class="sin-espacio-top titulo" >Nuestos Planes</h2>
                <a class="green-texto" href="/politica/servicio">Politica de Servicio</a>
            </div>
            <div class="col s12 m6">
                <br>
                <div class="card-panel green-color planes">
                    <span class="white-text">
                        <h2 class="titulo">Plan 4 Horas</h2>
                        <br>
                        <h4 class="titulo">Valor: $50.000</h4>
                        <!--Nuesto plan de 4 horas esta diseñado para la limpieza general de tu hogar, ahorrandote tiempo y dinero. Nuestro plan de 4 horas incluye:<br>
                        <p class="left-align">
                            <i class="material-icons">carrow_forward</i>   Barrida y trapeada de todos los espacios de la casa.
                            <hr>
                        </p>
                        <p class="left-align">
                            <i class="material-icons">carrow_forward</i>   Limpieza de baño.
                            <hr>
                        </p>
                        <p class="left-align">
                            <i class="material-icons">carrow_forward</i>   Limpieza de cocina.
                            <hr>
                        </p>
                        <p class="left-align">
                            <i class="material-icons">carrow_forward</i>   Limpieza de polvo.
                            <br>
                        </p>-->
                    </span>
                </div>
            </div>
            <div class="col s12 m6">
                <br>
                <div class="card-panel green-color planes">
                    <span class="white-text">
                        <h2 class="titulo">Plan 8 Horas</h2>
                        <br>
                        <h4 class="titulo">Valor: $80.000</h4>
                        <!--Nuesto plan de 8 horas esta diseñado para la limpieza general y <b>especificas</b> de tu hogar, dedicandole mayor tiempo a tareas especificas que necesites. Nuestro plan de 8 horas incluye:<br><br>
                        <p class="left-align">
                            <i class="material-icons">carrow_forward</i>   Barrida y trapeada de todos los espacios de la casa.
                            <hr>
                        </p>
                        <p class="left-align">
                            <i class="material-icons">carrow_forward</i>   Limpieza de baño.
                            <hr>
                        </p>
                        <p class="left-align">
                            <i class="material-icons">carrow_forward</i>   Limpieza de cocina.
                            <hr>
                        </p>
                        <p class="left-align">
                            <i class="material-icons">carrow_forward</i>   Limpieza de polvo.
                            <hr>
                        </p>
                        <p class="left-align">
                            <i class="material-icons">carrow_forward</i>   Planchado (solo a.m).
                            <hr>
                        </p>
                        <p class="left-align">
                            <i class="material-icons">carrow_forward</i>   Tareas especificas del cliente.
                            <br>
                        </p>-->
                    </span>
                </div>
            </div>
            <div class="col s12">
                <br>
                <p>Posterior a un análisis de las necesidades específicas de cada cliente, ejecutamos un servicio a medida, lo que garantiza un nivel óptimo de limpieza. Por lo cual brindamos planes de 4 y 8 horas de aseo con la experta de limpieza de tu preferencia, quien realizará las actividades que le indiques durante el tiempo contratado.</p>
                <ul class="collapsible">
                    <li class="">
                        <div class="collapsible-header blue-color-oscuro"><i class="fas fa-coffee"></i>Cocina</div>
                        <div class="collapsible-body blue-color-light">
                            <span>
                                Aseo general de cocina (barrer, trapear)
                                <hr>
                                Lavado, secado y guardado de loza.
                                <hr>
                                Limpieza de mesones y muebles.
                                <hr>
                                Botar basura y cambiar bolsa.
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header blue-color-oscuro"><i class="fas fa-bed"></i>Habitaciones</div>
                        <div class="collapsible-body blue-color-light">
                            <span>
                                Aseo general de habitación (Barrer, trapear y encerar)
                                <hr>
                                Tendido de cama
                                <hr>
                                Limpieza exterior de muebles
                                <hr>
                                Orden general.
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header blue-color-oscuro"><i class="fas fa-bath"></i>Baños</div>
                        <div class="collapsible-body blue-color-light">
                            <span>
                                Aseo general del Baño (Barrer y trapear).
                                <hr>
                                Lavado y desinfección de baños.
                                <hr>
                                Limpieza de espejos, lavamanos y tina.
                                <hr>
                                Limpieza de superficies.
                                <hr>
                                Botar basura y cambiar bolsa.
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header blue-color-oscuro"><i class="fas fa-tshirt"></i>Ropa</div>
                        <div class="collapsible-body blue-color-light">
                            <span>
                                Clasificado y lavado de ropa por textura y colores (Lavadora).
                                <hr>
                                Tendido de ropa y/o uso de secadora doméstica.
                                <hr>
                                Planchado y doblado de ropa (Incluye máximo 4 horas de planchado realizando pausas activas cada 30 minutos y el servicio debe solicitarse en la jornada de la mañana)
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header blue-color-oscuro"><i class="fas fa-couch"></i>Areas Comunes</div>
                        <div class="collapsible-body blue-color-light">
                            <span>
                                Limpieza de pisos. (Barrer, trapear y encerar).
                                <hr>
                                Limpieza de paredes, barandas, muros y divisiones modulares).
                                <hr>
                                Limpieza de Escaleras y muebles en general.
                                <hr>
                                Recolección de basuras internas.
                                <hr>
                                Limpieza de vidrios internos.
                                <hr>
                                Botar basura y cambiar bolsa.
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header blue-color-oscuro"><i class="fas fa-building"></i>Oficinas</div>
                        <div class="collapsible-body blue-color-light">
                            <span>
                                Zonas comunes (Barrer, trapear y encerar).
                                <hr>
                                Limpieza de Escaleras y muebles en general.
                                <hr>
                                Limpieza de sillas, muebles y mesas.
                                <hr>
                                Limpieza de ventanas y vidrios de interiores de oficinas.
                                <hr>
                                Limpieza de módulos y puertas.
                                <hr>
                                Limpieza exterior de computadores, teléfonos, impresoras y fotocopiadoras.
                                <hr>
                                Recolección de basuras internas
                            </span>
                        </div>
                    </li>
                </ul>
                <br>
            </div>
        </div>
    </div>

    <div class="row green-color center white-text sin-espacio">
        <div class="container">
            <div class="col s12">
                <h2 class="titulo">Selecciona el Personal</h2>
                <p>Una vez el servicio sea solicitado y pagado, podrás conocer información de nuestros colaboradores disponibles para tu servicio y así escoger el colaborador de tu preferencia al visualizar las calificaciones y comentarios de los servicios que a prestado a otros usuarios. Recuerda que esta opción la podrás realizar al registrarse como usuario o por medio del link que recibirá vía email una vez recibamos el pago del servicio.</p>
            </div>
        </div>
    </div>

    <div class="row center blue-color white-text sin-espacio">
        <div class="container">
            <div class="col s12">
                <h3 class="titulo">Calificacion de Servicios</h3>
            </div>
            <div class="col s12">
                <p> La experiencia de nuestros clientes se convierte en una prioridad para nosotros. Por eso con el fin de evaluar una experiencia más integral del uso de nuestros servicios, te invitamos a evaluar el servicio de nuestros colaboradores y dejar las observaciones que desees al respecto.</p>
            </div>
        </div>
    </div>

    <div class="row green-color center white-text sin-espacio">
        <div class="container">
            <div class="col s12">
                <h2 class="titulo">Canje de servicios</h2>
                <p>Beneficio exclusivo para clientes de Limpro. Por cada 10 servicios acumulados, puedes canjearlos por un servicio totalmente gratis de las mismas caracteristicas (Plan 4 o 8 horas). Para poder realizar el canje debe estar <a href="/register" class="blue-texto-oscuro">registrado</a> como usuario  y recuerda que los 10 servicios acumulados deben ser calificados.</p>
            </div>
        </div>
    </div>

    <div class="row center blue-color white-text sin-espacio">
        <div class="container">
            <div class="col s12">
                <h3 class="titulo">Que puedo hacer al crear mi cuenta</h3>
            </div>
            <div class="col s12">
                <p>Contaras con varios beneficios al crear tu cuenta, como conocer el Equipo Humano disponible para el servicio de acuerdo con tus necesidades, visualizar las calificaciones de otros usuarios y proceder a calificar el tuyo. Igualmente, con esta cuenta, te permitirá llevar el control de tus servicios y realizar el canje una vez se cumpla la política establecida.</p>
                <a class="btn green-color" type="submit" name="action">Crear Cuenta<i class="material-icons right">send</i></a>
                <br><br>
            </div>
        </div>
    </div>


@endsection