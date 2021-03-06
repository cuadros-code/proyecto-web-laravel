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
                    <p>Mi Información</p>

                    <div class="campo-info">
                        <label>Mi Edad</label>
                        <p>{{ $adopcion->edad }} años</p>
                    </div>

                    <div class="campo-info">
                        <label>Mi Peso</label>
                        <p>{{ $adopcion->peso }} kilos</p>
                    </div>
                    <div class="campo-info">
                        <label>Sexo</label>
                        <p>{{ $adopcion->sexo }} </p>
                    </div>
                    <div class="campo-info">
                        <label>Especie</label>
                        <p>{{ $adopcion->tipo }} </p>
                    </div>
                </div>

                <div class="info-mascota">

                    <p>Información Adicional</p>


                    <div class="campo-info">
                        <label>Vacunado</label>
                        <p>{{ $adopcion->vacunado }}</p>
                    </div>
                    <div class="campo-info">
                        <label>Desparasitado</label>
                        <p>{{ $adopcion->desparasitado }}</p>
                    </div>


                </div>



            </div>
        </div>
    </div>
@endsection
