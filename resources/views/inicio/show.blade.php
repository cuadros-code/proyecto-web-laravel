@extends('layouts.app')

@section('content')


    <div class="content-inicio-pet">

        @foreach ($mascotas as $mascota)

            <div class="card" style="width: 18rem;">
                <img src="{{ $mascota->imagen }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $mascota->mascota }}</h5>
                    <p class="card-text">{{ $mascota->tipo }}</p>
                    <a href="{{ route('adopcion.show', ['adopcion' => $mascota->id]) }}"
                        class="btn btn-info w-100 text-white">Adoptar</a>
                </div>
            </div>
        @endforeach


    </div>

@endsection
