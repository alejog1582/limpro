<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Raleway:500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <!-- Styles -->
    <style type="text/css">
        body{
            font-size: 26px;
            font-family: 'Raleway', sans-serif;
        }
        nav ul a{
            font-size: 1em !important;
        }
        nav ul a:hover{
          color: #7AB518;
        }
        input{
          border-bottom: 2px #7AB518 solid !important;
        }
        .select-wrapper input.select-dropdown{
          color: white !important;
          font-size: 1.25rem !important;
        }
        #logo_500{
          width: 100px;
        }

        #slider1{
          background-image: url("../images/slider-1-C.jpg");
          background-repeat: round;
          height: 100%;

        }
        .ec-stars-wrapper {
          /* Espacio entre los inline-block (los hijos, los `a`)
             http://ksesocss.blogspot.com/2012/03/display-inline-block-y-sus-empeno-en.html */
          font-size: 0;
          /* Podríamos quitarlo,
            pero de esta manera (siempre que no le demos padding),
            sólo aplicará la regla .ec-stars-wrapper:hover a cuando
            también se esté haciendo hover a alguna estrella */
          display: inline-block;
        }
        .ec-stars-wrapper a {
          text-decoration: none;
          display: inline-block;
          /* Volver a dar tamaño al texto */
          font-size: 32px;
          font-size: 2rem;

          color: #888;
        }

        .ec-stars-wrapper:hover a {
          color: #7AB518;
        }
        /*
         * El selector de hijo, es necesario para aumentar la especifidad
         */
        .ec-stars-wrapper > a:hover ~ a {
          color: #888;
        }

        .tabs .indicator{
          background-color:  white !important;
          height: 4px !important;
        }
        .blue-color{
          background-color: #465057 !important;
        }
        .blue-texto{
          color: #465057 !important;
        }
        .blue-texto-oscuro{
          color: #252E30 !important;
        }
        .green-color{
          background-color: #7AB518 !important;
        }
        .green-texto{
          color: #7AB518 !important;
        }
        .icono-cabecera{
          margin-top: 0.5em;
          margin-left: 0.5em;
          color: #7AB518;
        }
        .sin-espacio{
          margin-bottom: 0px !important;
        }
        .sin-espacio-top{
          margin-top: 0px !important;
        }
        .sombra{
          background-color: #47515878;
        }
        .blue-color-light{
          background-color: #59646B !important;
        }
        .blue-color-black{
          background-color: #313A41 !important;
        }
        .blue-color-oscuro{
          background-color: #252E30 !important;
        }
        .planes:hover{
          background-color: #7AB518 !important;
        }
        .titulo{
          font-family: 'Abril Fatface', cursive;
          text-transform: uppercase;
        }
        .select-wrapper .caret{
          fill: white !important;
        }
        .dropdown-content li>a, .dropdown-content li>span{
          color: #7AB518 !important;
        }
        .select-month .select-dropdown.dropdown-trigger{
          color: black !important;
        }
        .select-year .select-dropdown.dropdown-trigger{
          color: black !important;
        }
        .datepicker-date-display{
          background-color:  #7AB518 !important;
        }
        .datepicker-cancel, .datepicker-clear, .datepicker-today, .datepicker-done{
          color: #7AB518 !important;
        }
        .datepicker-table td.is-selected{
            background-color: #7AB518 !important;
        }
        .datepicker-modal{
            margin-left: 1em !important;
            margin-right: 0 !important;
        }
        .input-field>label{
          font-size: 1.25rem !important;
        }
        [type="radio"]:not(:checked)+span, [type="radio"]:checked+span{
          font-size: 1.25rem !important;
        }
        [type="checkbox"]+span:not(.lever){
          font-size: 1.25rem !important;
        }
        [type="checkbox"].filled-in:checked+span:not(.lever):after{
          border: 2px solid #7AB518 !important;
          background-color: #7AB518 !important;
        }
        [type="checkbox"].filled-in:not(:checked)+span:not(.lever):after{
          background-color: white !important;
        }
    </style>
    <!--<link rel="stylesheet" href="{{ asset('css/estilos_propios.css') }}">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

</head>
<body>
    <div id="app">
        <div class="row blue-color sin-espacio hide-on-small-only">
            <div class="col s12 right-align">
                <a href=""><i class="fab fa-whatsapp icono-cabecera"></i></a>
                <span class="white-text"><a href="tel:+573504591097" class="white-text">+ 57 350 4591097</a></span>
                <a href=""><i class="far fa-envelope icono-cabecera"></i></a>
                <span class="white-text"><a href="mailto:servicios@limpro.co" class="white-text">servicios@limpro.co</a></span>
                <hr>
            </div>
        </div>
        <ul id="dropdown1" class="dropdown-content">
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Salir</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
          </ul>
          <ul id="dropdown2" class="dropdown-content">
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Salir</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
          </ul>
        <nav style="height: 180px; line-height: 180px">
            <div class="nav-wrapper blue-color">
                <a class="brand-logo left" href="{{ url('/') }}">
                    <img style="width: 170px" src="{{ asset('images/logo_500.png') }}">
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar
                    <ul class="center hide-on-med-and-up">
                        <li>
                            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                        </li>
                    </ul>
                    <ul class="center hide-on-med-and-down">
                        <li><a href="/">Inicio</a></li>
                        <li><a href="#planes">Nuestros Planes</a></li>
                        <li><a href="#contacto">Contacto</a></li>
                    </ul>-->

                    <!-- Right Side Of Navbar -->
                    <ul class="right show-on-small">
                        <li>
                            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                        </li>
                    </ul>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="/"><b>Inicio</b></a></li>
                        <li><a href="#planes"><b>Nuestros Planes</b></a></li>
                        <li><a href="/sobrenosotros"><b>Sobre Nosotros</b></a></li>
                        <li><a href="#contacto"><b>Contacto</b></a></li>
                        @guest
                            <li>
                                <a href="{{ route('login') }}"><b>Ingresar</b></a>
                            </li>
                            <li >
                                <a href="{{ route('register') }}"><b>Registro</b></a>
                            </li>
                        @else
                            <li>
                                <a href="/micuenta"><b>Mi Cuenta</b></a>
                            </li>
                            <li>
                                <a class="dropdown-trigger" href="#!" data-target="dropdown2"><b>
                                    {{ Auth::user()->name }}</b> <span class="caret"></span>
                                </a>
                            </li>
                        @endguest
                    </ul>
                    <ul class="right hide-on-med-and-down">
                        <!-- Authentication Links -->
                        <!--@guest
                            <li>
                                <a href="{{ route('login') }}">Ingresar</a>
                            </li>
                            <li >
                                <a href="{{ route('register') }}">Registro</a>
                            </li>
                        @else
                            <li>
                                <a href="/micuenta"><b>Mi Cuenta</b></a>
                            </li>
                            <li>
                                <a class="dropdown-trigger" href="#!" data-target="dropdown2">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                            </li>
                        @endguest-->
                    </ul>
                </div>
            </div>
        </nav>

        <!--Menu Desplegable-->
        <ul id="slide-out" class="sidenav">
            <li>
                <a href="/">Inicio</a>
            </li>
            <li>
                <a href="#planes">Nuestros Planes</a>
            </li>
            <li>
                <a href="/sobrenosotros">Sobre Nosotros</a>
            </li>
            <li>
                <a href="#contacto">Contacto</a>
            </li>
            <hr>
            <li>
                <div class="user-view">
                    @guest
                            <li>
                                <a href="{{ route('login') }}">Ingresar</a>
                            </li>
                            <li >
                                <a href="{{ route('register') }}">Registro</a>
                            </li>
                        @else
                            <li>
                                <a href="/micuenta">Mi Cuenta</a>
                            </li>
                            <li>
                                <a class="dropdown-trigger" href="#!" data-target="dropdown1">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                            </li>
                        @endguest
                </div>
            </li>
        </ul>


        <div class="content">
           @yield('content')
        </div>
        <footer class="page-footer blue-color-oscuro white-text" id="footer">
            <div class="row center">
                <div class="col m3 s12">
                    <img style="width: 100%" src="{{ asset('images/logo_500.png') }}"><hr>
                    <p>Siguenos en nuestras redes sociales:<br><br><a href="https://web.facebook.com/limprocolombia/" target="_blank"><i style="font-size: 2em; margin-right: 0.5em" class="fab fa-facebook green-texto"></i></a><a href="https://www.instagram.com/limprocolombia/" target="_blank"><i style="font-size: 2em; margin-right: 0.5em" class="fab fa-instagram green-texto"></i></a><a href="https://twitter.com/limprocolombia" target="_blank"><i style="font-size: 2em; margin-right: 0.5em" class="fab fa-twitter green-texto"></i></a><hr></p>
                </div>

                <div id="contacto" class="col m6 s12">
                    <h5 class="titulo">Formulario de contacto</h5>
                    <form action="/contactenos" method="post" class="col s12">
                    {{ csrf_field() }}
                        <div class="row">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="nombre_contactenos" name="nombre_contactenos" type="text" class="white-text @if ($errors->has('nombre_contactenos')) is-invalid    @endif">
                                <label class="white-text" for="nombre_contactenos">Nombre</label>
                                @if ($errors->has('nombre_contactenos'))
                                    @foreach ($errors->get('nombre_contactenos') as $error)
                                        <h5 class="left-align">
                                            <blockquote class="red-text">{{ $error }}</blockquote>
                                        </h5>
                                    @endforeach
                                @endif
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix">phone</i>
                                <input id="celular_contactenos" name="celular_contactenos" type="number" class="white-text @if ($errors->has('celular_contactenos')) is-invalid    @endif">
                                <label class="white-text" for="celular_contactenos">Celular</label>
                                @if ($errors->has('celular_contactenos'))
                                    @foreach ($errors->get('celular_contactenos') as $error)
                                        <h5 class="left-align">
                                            <blockquote class="red-text">{{ $error }}</blockquote>
                                        </h5>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">email</i>
                                <input id="email_contactenos" name="email_contactenos" type="email" class="white-text @if ($errors->has('email_contactenos')) is-invalid    @endif">
                                <label class="white-text" for="email_contactenos">email</label>
                                @if ($errors->has('email_contactenos'))
                                    @foreach ($errors->get('email_contactenos') as $error)
                                        <h5 class="left-align">
                                            <blockquote class="red-text">{{ $error }}</blockquote>
                                        </h5>
                                    @endforeach
                                @endif
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix">mode_edit</i>
                                <textarea id="mensaje_contactenos" name="mensaje_contactenos" class="materialize-textarea white-text  @if ($errors->has('mensaje_contactenos')) is-invalid    @endif"></textarea>
                                <label class="white-text" for="mensaje_contactenos">Mensje</label>
                                @if ($errors->has('mensaje_contactenos'))
                                    @foreach ($errors->get('mensaje_contactenos') as $error)
                                        <h5 class="left-align">
                                            <blockquote class="red-text">{{ $error }}</blockquote>
                                        </h5>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <button class="btn green-color" type="submit" name="action">Enviar<i class="material-icons right">send</i>
                            </button>
                            <br><br>
                            <hr>
                        </div>
                    </form>
                    <br>
                    <a class="white-text" href="/politica/privacidad">Politica de Privacidad</a>
                    <br>
                    <a class="white-text" href="/aspirante">Trabaje con Nosotros</a>
                    <br><br>
                    <hr>

                </div>

                <div class="col m3 s12">
                    <div class="row">
                        <div class="col s12">
                            <h5 class="titulo">Contacto</h5>
                            <p>- Bogotá, D.C. - Colombia<br><a href="tel:+573504591097" class="white-text">- Ventas: (+57) 350 4591097<br></a>- Carrera 7 No. 156 - 10 Torre Krystal Oficina 1707<br><a href="mailto:servicios@limpro.co" class="white-text">- servicios@limpr.co</a></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <img width="100%" src="{{ asset('images/payu.png') }}">
                        </div>
                    </div>
                </div>

            </div>

        <div class="row blue-color center">
            <div class="col s12">Esta magina a sido desarrollada por <a class="green-texto" href="http://www.tekquo.com.co/">TekQuo</a> © 2018 TekQuo Todos los derechos reservados.</div>
        </div>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <!--<script src="{{ asset('js/js_propios.js') }}"></script>-->
    <script type="text/javascript">
        $('.carousel.carousel-slider').carousel({
                fullWidth: true,
                indicators: true
            });
            setInterval(function(){
                //$('.carousel.carousel-slider').carousel('next');
            },5000)
    $(document).ready(function(){
        $('.datepicker').datepicker({
            format: 'dd-mm-yyyy',
            firstDay: 1,
            disableDayFn: function(date) {
                return date.getDay() === 0 || date.toISOString().split('T')[0] === '2018-10-15' || date.toISOString().split('T')[0] === '2018-11-05' || date.toISOString().split('T')[0] === '2018-11-12' || date.toISOString().split('T')[0] === '2018-12-08' || date.toISOString().split('T')[0] === '2018-12-25';
            },
            yearRange: 100,
            i18n: ({
                cancel: "cancelar",
                months: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                monthsShort: [ 'Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                weekdays: [ 'Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'],
                weekdaysShort: [ 'Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
                    weekdaysAbbrev:  ['D','L','M','M','J','V','S']

            })
        });
    });
    $(document).ready(function(){
        $('.collapsible').collapsible();
      });

    $(document).ready(function(){
        $('select').formSelect();
      });

    $(document).ready(function(){
        $('.tabs').tabs();
      });

    $(".dropdown-trigger").dropdown();

    $(document).ready(function(){
        $('.modal').modal();
      });
    $(document).ready(function(){
        $('.sidenav').sidenav();
      });
    </script>
</body>
</html>
