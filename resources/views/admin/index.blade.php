@extends('layouts.app')

@section('content')

    <h2 class="text-center mb-1 mt-2">Administración de usuarios</h2>

    <div class="col-md-10 mx-auto bg white p-3">
        <table class="table table-striped">
            <thead class="bg-color text-dark">
                <tr>
                    <th scole="col" class="text-center">Nombre</th>
                    <th scole="col" class="text-center">Email</th>
                    <th scole="col" class="text-center"></th>
                </tr>
            </thead>

            <tbody>

                @foreach ($users as $user)
                    <tr>
                        <td class="text-center align-middle font-weight-bolder"> {{ $user->name }}</td>
                        <td class="text-center">
                            {{ $user->email }}
                        </td>


                        <td class="text-center align-middle botones-tabla">

                            {{-- <a href="{{ route('admin.activo', ['user' => $user->id]) }}" class="btn btn-danger">Eliminar
                                Usuario</a> --}}

                            <eliminar-usuario id-usuario={{ $user->id }}>
                            </eliminar-usuario>

                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        {{ $users->links() }}
    </div>


    <h2 class="text-center mb-1 mt-2">Administración de Mascotas</h2>

    <div class="col-md-10 mx-auto bg white p-3">
        <table class="table table-striped">
            <thead class="bg-color text-dark">
                <tr>
                    <th scole="col" class="text-center">Nombre</th>
                    <th scole="col" class="text-center">Tipo</th>
                    <th scole="col" class="text-center"></th>
                </tr>
            </thead>

            <tbody>

                @foreach ($mascotas as $mascota)
                    <tr>
                        <td class="text-center align-middle font-weight-bolder"> {{ $mascota->mascota }}</td>
                        <td class="text-center">
                            {{ $mascota->tipo }}
                        </td>

                        <td class="text-center align-middle botones-tabla">
                            {{-- <a href="{{ route('admin.activomascota', ['adopcion' => $mascota->id]) }}"
                                class="btn btn-danger">Eliminar
                                Mascota</a> --}}

                            <eliminar-mascota id-mascota={{ $mascota->id }}>
                            </eliminar-mascota>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        {{ $mascotas->links() }}
    </div>

@endsection
