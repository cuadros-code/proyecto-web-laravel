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
@endsection
