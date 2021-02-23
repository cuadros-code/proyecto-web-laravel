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
                <a href="" class="btn btn-primary">Adoptar</a>
                
                <a href="{{ route('adopcion.create') }}" class="btn btn-primary">Dar en adopción</a>
            </div>
        </div>


        <div class="image-content">
            <img src="https://www.miwuki.com/wp-content/uploads/2020/06/adopta-en-miwuki.png" alt="">
        </div>


    </div>
@endsection
