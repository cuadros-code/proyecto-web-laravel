@extends('layouts.app')

@section('content')

    <div>
        <form method="get" action="{{ route('inicio.index') }}">
            @csrf
            <div class="select">
                <label for="standard-select">Tipo de mascota</label>
                <select name="tipo" id="" value="{{ old('tipo') }}">
                    <option value="" disabled selected>Seleccione</option>
                    <option value="todos">Todos</option>
                    <option value="perro">Perros</option>
                    <option value="gato">Gatos</option>
                </select>
                <button type="submit" class="btn btn-primary">Filtar</button>
            </div>
        </form>
    </div>

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
