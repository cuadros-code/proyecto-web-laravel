@extends('layouts.app')

@section('content')

    <h2 class="text-center mb-1 mt-2">Publicaciones</h2>

    <div class="col-md-10 mx-auto bg white p-3">
        <table class="table">
            <thead class="bg-primary text-light">
                <tr>
                    <th scole="col" class="text-center">Foto</th>
                    <th scole="col" class="text-center">Nombre</th>
                    {{-- <th scole="col" class="text-center">Fecha Publicación</th> --}}
                    <th scole="col" class="text-center">Acciones</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($adopciones as $adopcione)
                    <tr>
                        <td class="text-center">
                            <img src="{{ $adopcione->imagen }}" class="imagen-mascota" alt="" srcset="">
                        </td>
                        <td class="text-center align-middle font-weight-bolder"> {{ $adopcione->mascota }}</td>
                        {{-- <td class="text-center align-middle font-weight-bolder"> {{ $adopcione->created_at }}</td> --}}
                        <td class="text-center align-middle botones-tabla">
                            <a href="{{ route('adopcion.edit', ['adopcion' => $adopcione->id]) }}"
                                class="btn btn-primary">Editar</a>
                            <a href="" class="btn btn-danger">Eliminar</a>
                            <a href="{{ route('adopcion.show', ['adopcion' => $adopcione->id]) }}"
                                class="btn btn-info">Ver
                                publicación</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
