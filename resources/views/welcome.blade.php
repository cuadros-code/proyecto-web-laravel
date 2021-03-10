@extends('layouts.app')

@section('content')

    <div class="content-inicio">

        <div class="banner">

            <div class="info-banner text-center">
                <h3 class=""> Ayuda a un amigo a tener una mejor vida</h3>
                <p>
                    Esta aplicacion te permitira buscar a un amigo y dar en adopción permitiendo
                    mejorar la calidad de vida
                </p>
            </div>
            <div class="button-banner">
                <a href="" class="button">Adoptar</a>

                <a href="{{ route('adopcion.create') }}" class="button">Dar en adopción</a>
            </div>
        </div>
        <div class="image-content">
            {{-- <img src="https://www.miwuki.com/wp-content/uploads/2020/06/adopta-en-miwuki.png" alt=""> --}}
            <img src="https://mi-mascota.s3.amazonaws.com/estaticos/casa-de-mascotas.png" alt="">
        </div>

    </div>


    <div class="content-footer">
        <div class="info-marca">

            <img src="https://mi-mascota.s3.amazonaws.com/estaticos/perro.png" width="30" height="30"
                class="d-inline-block align-top" alt="">
            <strong class="d-inline-block">MiMascota</strong>
            <p>A que nos dedicamos?</p>
            <p>Mi mascota es un proyecto desarrollado por estudiantes
                de la universidad del valle, para ayudar a todas
                aquellas mascotas que se encuentran sin hogar,
                en mimascota podras adoptar y encontrar aquellos
                amigos que se encuentrar perdidos.
            </p>

        </div>

        <div class="info-contacto">

            <p class="title">Información de Contacto</p>

            <p>Correo electronico: <span>mimascota@gmail.com </span></p>
            <p>Redes de contacto: <a href="/"> <i class="fab fa-instagram"></i> <i class="fab fa-facebook-square"></i>
                    <i class="fab fa-twitter-square"></i></a></p>

        </div>

    </div>
    <div class="copyright">
        @php
            $fecha = date('Y');
        @endphp
        <p>Desarrolladores Kevin Cuadros - Alejandra Agudelo </p>
        <p> &#169; Copyright {{ $fecha }}</p>
    </div>

@endsection

{{-- @section('footer')
    @extends('layouts.footer')
@endsection --}}
