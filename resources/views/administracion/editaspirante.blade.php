@extends('layouts.app')

@section('content')
<div class="row center blue-color white-text sin-espacio">
  <div class="col s1">
    <br><br>
    <a href="/administracion" class="btn-floating btn-large green-color"><i class="material-icons">chevron_left</i></a>
  </div>
  <div class="col s11">
    <h1 class="titulo">Id del Aspirante: {{ $aspirante->id }}</h1>
  </div>
</div>


<div class="row center sin-espacio blue-color">
  <div class="col s4 offset-s4">
    <div class="card blue-color-black white-text" id="card_editar">
    <form action="/administracion/aspirante/edit/save" method="post">
    {{ csrf_field() }}
        <div class="card-content">
            <div class="row">
              <input type="hidden" name="id_aspirante" value="{{ $aspirante->id }}">
              <div class="input-field col s12">
                <input name="tipo_cedula" id="tipo_cedula" type="text" value="{{ $aspirante->tipo_cedula }}" disabled class="white-text">
                <label for="tipo_cedula" class="white-text">Nombre</label>
              </div>
              <div class="input-field col s12">
                <input name="cedula" id="cedula" type="text" value="{{ $aspirante->numero_cedula }}" disabled class="white-text">
                <label for="cedula" class="white-text">Nombre</label>
              </div>
              <div class="input-field col s12">
                <input name="email" id="email" type="text" value="{{ $aspirante->email }}" disabled class="white-text">
                <label for="email" class="white-text">Nombre</label>
              </div>
              <div class="input-field col s12">
                <input name="fijo" id="fijo" type="text" value="{{ $aspirante->telefono }}" disabled class="white-text">
                <label for="fijo" class="white-text">Telefeno Fijo</label>
              </div>
              <div class="input-field col s12">
                <input name="direccion" id="direccion" type="text" value="{{ $aspirante->direccion }}" disabled class="white-text">
                <label for="direccion" class="white-text">Direccion</label>
              </div>
              <div class="input-field col s12">
                <input name="edad" id="edad" type="text" value="{{ $aspirante->edad }}" disabled class="white-text">
                <label for="edad" class="white-text">Edad</label>
              </div>
              <div class="input-field col s12">
                <select name="estado" class="@if ($errors->has('estado')) is-invalid    @endif">
                  @if ( $aspirante->estado  == 'enviado')
                    <option selected value="enviado">Enviado</option>
                    <option value="procesado">Procesado</option>
                  @endif
                </select>
                @if ($errors->has('estado'))
                    @foreach ($errors->get('estado') as $error)
                        <h5 class="left-align">
                          <blockquote>{{ $error }}</blockquote>
                        </h5>
                    @endforeach
                @endif
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