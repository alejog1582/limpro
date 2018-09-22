@extends('layouts.app')

@section('content')

<div class="row center blue-color white-text sin-espacio" id="planes">
        <br>
        <div class="container">
            <div class="col s12">
                <h2 class="sin-espacio-top titulo" >Nuestros Planes</h2>
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

@endsection