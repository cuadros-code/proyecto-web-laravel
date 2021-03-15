@extends('layouts.app')

@section('content')
    <div class="login-content">
        <div class="form-content">
            <h2>Mi<span>Mascota</span></h2>
            <form method="POST" action="{{ route('register') }}" autocomplete="off">
                @csrf

                <div class="">
                    <div class="">
                        <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name"
                            {{-- value="{{ old('name') }}" --}} required autocomplete="name" autofocus placeholder="Nombre" value="admin">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="">
                    <div class="">
                        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email"
                            {{-- value="{{ old('email') }}" --}} value="admin@gmail.com" required autocomplete="email" placeholder="Email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="">
                    <div class="">
                        <input id="telefono" type="number" class="@error('telefono') is-invalid @enderror" name="telefono"
                            {{-- value="{{ old('telefono') }}" --}} value="123" required autocomplete="telefono"
                            placeholder="Número de télefono">

                        @error('telefono')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="">

                    <div class="">
                        <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password"
                            required value="12345678" autocomplete="new-password" placeholder="Contraseña">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="">
                    <div class="">
                        <input id="password-confirm" type="password" class="" name="password_confirmation" required
                            value="12345678" autocomplete="new-password" placeholder="Confirmar contraseña">
                    </div>
                </div>

                <div class="mb-3">
                    <div class="">
                        <button type="submit" class="btn btn-primary d-block w-100">
                            {{ __('Registrarse') }}
                        </button>
                    </div>
                </div>
            </form>
            ¿Ya tienes una cuenta en MiMascota.com?
            <a href="{{ route('login') }}">Iniciar Sesión</a>
        </div>

        <div class="info-register">

            <div>
                <p class="title">MiMascota.com </p>
                <p>una plataforma para la adopción de mascotas</p>
            </div>

        </div>
    </div>
@endsection
