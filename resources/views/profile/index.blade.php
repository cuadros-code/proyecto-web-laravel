@extends('layouts.app')

@section('content')
    <div class=" mt-5">
        <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-12">
                        <div class="profile-img">

                            @if ($dataProfile !== null)
                                <img src="{{ $dataProfile->imagen }}" alt="" />
                            @else
                                <img src="https://mi-mascota.s3.amazonaws.com/estaticos/foto-no-disponible.png" alt="user image" />
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row text-center mt-5">

                    <div class="col-md-12">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nombre</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $userProfile->name }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Correo</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $userProfile->email }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Celular</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $userProfile->telefono }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Ubicacion</label>
                                    </div>
                                    <div class="col-md-6">
                                        @if ($dataProfile !== null)
                                            <p>{{ $dataProfile->ubicacion }}</p>
                                        @else
                                            <p></p>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Biografia</label>
                                    </div>
                                    <div class="col-md-6">
                                        @if ($dataProfile !== null)
                                            <p>{{ $dataProfile->bio }}</p>
                                        @else
                                            <p></p>
                                        @endif
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-md-12 mt-4">

                                        @if ($existePerfil)
                                            <a type="submit" class="btn btn-primary"
                                                href="{{ route('profile.edit', ['profile' => $dataProfile->id]) }}">
                                                Editar Perfil
                                            </a>
                                        @else
                                            <a type="submit" class="btn btn-primary" href="{{ route('profile.create') }}">
                                                Completar Perfil
                                            </a>
                                        @endif


                                        {{-- <form action="" method="post"> --}}
                                        {{-- @method('delete') --}}
                                        {{-- @csrf --}}

                                        {{-- <perfil-usuario id-usuario={{ $dataProfile->id }}>
                                        </perfil-usuario> --}}
                                        @if ($dataProfile !== null)
                                            <perfil-usuario id-profile={{ $dataProfile->id }}>
                                            </perfil-usuario>
                                        @endif

                                        {{-- </form> --}}
                                        {{-- <a type="submit" class="btn btn-danger"
                                            href="{{ route('profile.delete', ['profile' => $userProfile->id]) }}">
                                            Eliminar Perfil
                                        </a> --}}
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection
