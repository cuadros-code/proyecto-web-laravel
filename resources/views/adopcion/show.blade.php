@extends('layouts.app')

@section('content')
    {{-- {{ $adopcion }} --}}
    <div class="container mt-4">

        <div class="container-vista-mascota">


            <div>
                <p class="nombre-mascota">{{ $adopcion->mascota }}</p>
            </div>

            <div class="mascota-content ">

                <div class="foto-mascota">

                    <img src="{{ $adopcion->imagen }}" alt="" srcset="">
                </div>

                <div class="info-mascota">

                </div>

            </div>
        </div>
    </div>
@endsection
