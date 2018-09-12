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
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Raleway:500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

</head>
<body>
    <div id="app">
        <div class="row blue-color sin-espacio hide-on-small-only">
            <div class="col s12 right-align">
                <a href=""><i class="fab fa-whatsapp icono-cabecera"></i></a>
                <span class="white-text"><a href="tel:+573504591097" class="white-text">+ 57 350 4591097</a></span>
                <a href=""><i class="far fa-envelope icono-cabecera"></i></a>
                <span class="white-text"><a href="mailto:servicios@limpro.com.co" class="white-text">servicios@limpro.com.co</a></span>
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
                    <ul class="right hide-on-med-and-up">
                        <li>
                            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                        </li>
                    </ul>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="/"><b>Inicio</b></a></li>
                        <li><a href="#planes"><b>Nuestros Planes</b></a></li>
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
                            <p>- Bogotá, D.C. - Colombia<br><a href="tel:+573504591097" class="white-text">- Ventas: (+57) 350 4591097<br></a>- Carrera 7 No. 156 - 10 Torre Krystal Oficina 1707<br><a href="mailto:servicios@limpro.com.co" class="white-text">- servicios@limpr.com.co</a></p>
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
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
