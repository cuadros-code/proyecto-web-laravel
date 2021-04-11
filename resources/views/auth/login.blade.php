@extends('layouts.app')

@section('content')
    <div class="login-content">
        <div class="form-content">
            <h2>Mi<span>Mascota</span></h2>
            <form method="POST" action="{{ route('login') }}" autocomplete="off">
                @csrf

                <div class="">
                    <div class="">
                        <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" required
                            value="{{ old('email') }}" autofocus placeholder="Email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="">

                    <div class="">
                        <input id="password" type="password" class=" @error('password') is-invalid @enderror"
                            name="password" required placeholder="Contraseña">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>



                <div class="mb-3">
                    <div class="">
                        <button type="submit" class="btn btn-primary d-block w-100">
                            {{ __('Iniciar Sesión') }}
                        </button>
                    </div>
                </div>


            </form>
            ¿No tienes una cuenta todavía en MiMascota.com?
            <a href="{{ route('register') }}">Regístrate</a>
        </div>

        <div class="info-login">

            <div>
                <p class="title">MiMascota.com </p>
                <p>una plataforma para la adopción de mascotas</p>
            </div>

        </div>
    </div>
@endsection
