@extends('layouts.app')

@section('content')
    <div class=" mt-5">
        <div class="container emp-profile">
            <form method="POST" action="{{ route('profile.update', ['profile' => $dataProfile->id]) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">

                            @if ($dataProfile !== null)
                                <img src="{{ $dataProfile->imagen }}" alt="" />
                            @else
                                <img src="https://vista-urbana.com/wp-content/uploads/2019/11/imagen-no-disponible.jpg"
                                    alt="" />
                            @endif
                        </div>

                        <div class="form-group mt-4">
                            <div class="">
                                <input type="file" name="imagen" id="imagen" class="form-control">

                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                            <h5>
                                {{-- {{ $userProfile->name }} --}}
                            </h5>
                            <p class="proile-rating mb-4"> </p>
                            <ul class="nav nav-tabs mt-5" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                        aria-controls="home" aria-selected="true">Información personal</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a type="submit" class="profile-edit-btn" href="{{ route('profile.index') }}">
                            Volver
                        </a>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label>Nombre</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" disabled value={{ $userProfile->name }}>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label>Correo</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" disabled value={{ $userProfile->email }}>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="celular">Celular</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input id="celular" name="celular" class="form-control" type="number"
                                            value={{ $userProfile->telefono }}>

                                        @error('celular')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="Ubicación">Ubicación</label>
                                    </div>
                                    @php
                                        $ubicacion = '';
                                        if ($dataProfile !== null) {
                                            $ubicacion = $dataProfile->ubicacion;
                                        } else {
                                            $ubicacion = '';
                                        }
                                        
                                    @endphp
                                    <div class="col-md-6">
                                        <input id="Ubicación" name="ubicacion" value="{{ $ubicacion }}"
                                            class="form-control" type="text">
                                        @error('ubicacion')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="bio">Biografia</label>
                                    </div>
                                    <div class="col-md-6">
                                        <textarea class="form-control" name="bio" id="bio" cols="30"
                                            rows="5"> @if ($dataProfile !== null){{ $dataProfile->bio }}@else @endif</textarea>

                                        @error('bio')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <button class="button">Actualizar Información</button>
                </div>
            </form>
        </div>

    </div>
@endsection
