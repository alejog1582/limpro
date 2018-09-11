@extends('layouts.app')

@section('content')
<div class="row center blue-color white-text sin-espacio">
    <div class="col s12">
        <h2 class="titulo">Crea tu cuenta</h2>
    </div>
</div>
<div class="row blue-color white-text sin-espacio center">
    <div class="col s12 m4 offset-m4">
        <div class="card-panel white">
            <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                @csrf

                <div class="row">
                    <div class="input-field col s12">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                        <label for="name" class="col-md-4 col-form-label text-md-right black-text">Nombre</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        <label for="email" class="col-md-4 col-form-label text-md-right black-text">Email</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        <label for="password" class="col-md-4 col-form-label text-md-right black-text">Contraseña</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right black-text">Confirma Contraseña</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <button type="submit" class="btn green-color">Registrar</button>
                    </div>
                </div>
            </form>


        </div>
        <br>
    </div>
</div>
@endsection
