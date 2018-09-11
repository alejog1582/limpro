@extends('layouts.app')

@section('content')
<div class="row center blue-color white-text sin-espacio">
    <div class="col s12">
        <h2 class="titulo">Ingresa a tu cuenta</h2>
    </div>
</div>
<div class="row blue-color sin-espacio">
    <div class="col s12 m4 offset-m4">
        <div class="card-panel white">
            <div>{{ __('Login') }}</div>

            <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
            @csrf

            <div class="row">
                <div class="input-field col s12">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <label for="email" class="col-sm-4 col-form-label text-md-right black-text">Email</label>
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
                    <label for="password" class="col-md-4 col-form-label text-md-right black-text">Password</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <label>
                        <input type="checkbox" class="filled-in" name="remember" {{ old('remember') ? 'checked' : '' }}/>
                        <span class="black-text">Recuerdame</span>
                    </label>
                </div>
            </div>

            <div class="row center">
                <div class="input-field col s12 m6">
                    <button type="submit" class="btn green-color">Ingresar</button>

                </div>
                <div class="input-field col s12 m6">
                    <a class="btn green-color" href="{{ route('password.request') }}">Olvide Contraseña</a>
                </div>
            </div>
            </form>
        </div>
        <br>
    </div>
</div>
@endsection
