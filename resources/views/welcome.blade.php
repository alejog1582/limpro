@extends('layouts.app')

@section('content')
    <div class="carousel carousel-slider center">
        <!--<div class="carousel-fixed-item center">
          <a class="btn waves-effect white grey-text darken-text-2">button</a>
        </div>-->
        <div class="carousel-item" href="#one!">
            <div class="row" id="slider1">
                <div class="valign-wrapper" id="sombra">
                    <div class="col s1"></div>
                    <div class="col s6">
                        <h4 class="white-text">Hacemos el oficio por ti</h4>
                        <h1 class="white-text">Servicio Domestico</h1>
                        <h4 class="white-text">Califica el servicio prestado y selecciona la persona que te prestara el servicio </h4>
                    </div>
                    <div class="col s4">
                        <div style="margin-bottom: 0" class="row light-blue darken-4 white-text">
                            <h4>Solicita tu Servicio</h4>
                        </div>
                        <div class="row white">
                            <form action="/newservicio" method="post">
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
                                    <button class="btn waves-effect waves-light" type="submit" name="action">Seleccionar<i class="material-icons right">send</i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col s1"></div>
                </div>
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

@endsection