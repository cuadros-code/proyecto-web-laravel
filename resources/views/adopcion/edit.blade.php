@extends('layouts.app')

@section('content')

    <div class="container py-3">
        <div class="row">
            <div class="mx-auto col-sm-7">
                <!-- form user info -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0 text-center">Actualizar informacion de <strong> {{ $adopcion->mascota }} </strong>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('adopcion.update', ['adopcion' => $adopcion->id]) }}"
                            class="form" novalidate enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label form-control-label" for="mascota">Nombre
                                    mascota</label>
                                <div class="col-lg-8">
                                    <input id="mascota" value="{{ $adopcion->mascota }}" class="form-control"
                                        name="mascota" type="text" placeholder="tommy">

                                    @error('mascota')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label form-control-label" for="edad">Edad mascota</label>
                                <div class="col-lg-8">
                                    <input class="form-control" value="{{ $adopcion->edad }}" placeholder="5 años"
                                        type="number" name="edad" id="edad">
                                    @error('edad')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label form-control-label" for="peso">Peso(kg)</label>
                                <div class="col-lg-8">
                                    <input id="peso" value="{{ $adopcion->peso }}" class="form-control" type="number"
                                        name="peso" placeholder="10 kg">
                                    @error('peso')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label form-control-label" for="sexo">Sexo</label>
                                <div class="col-lg-8">
                                    <select id="sexo" value="{{ $adopcion->sexo }}" class="form-control" size="0"
                                        name="sexo">
                                        @if ($adopcion->sexo == 'macho')
                                            <option value="macho" selected>Macho</option>
                                            <option value="hembra">Hembra</option>
                                        @endif
                                        @if ($adopcion->sexo == 'hembra')
                                            <option value="macho">Macho</option>
                                            <option value="hembra" selected>Hembra</option>
                                        @endif

                                    </select>
                                    @error('sexo')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="tipo" class="col-lg-4 col-form-label form-control-label">Tipo de mascota</label>
                                <div class="col-lg-8">
                                    <select id="tipo" value="{{ $adopcion->tipo }}" name="tipo" class="form-control"
                                        size="0">

                                        @if ($adopcion->tipo == 'perro')
                                            <option value="perro" selected>Perro</option>
                                            <option value="gato">Gato</option>
                                            <option value="otro">Otro</option>
                                        @endif
                                        @if ($adopcion->tipo == 'gato')
                                            <option value="perro">Perro</option>
                                            <option value="gato" selected>Gato</option>
                                            <option value="otro">Otro</option>
                                        @endif
                                        @if ($adopcion->tipo == 'otro')
                                            <option value="perro">Perro</option>
                                            <option value="gato">Gato</option>
                                            <option value="otro" selected>Otro</option>
                                        @endif


                                    </select>
                                    @error('tipo')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="vacunado" class="col-lg-4 col-form-label form-control-label">Vacunado</label>
                                <div class="col-lg-8">
                                    <select id="vacunado" value="{{ $adopcion->vacunado }}" name="vacunado"
                                        class="form-control" size="0">
                                        @if ($adopcion->vacunado === 'no')
                                            <option value="no" selected>No</option>
                                            <option value="si">Si</option>
                                        @else
                                            <option value="si" selected>Si</option>
                                            <option value="no">No</option>
                                        @endif
                                    </select>
                                    @error('vacunado')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="desparasitado"
                                    class="col-lg-4 col-form-label form-control-label">Desparasitado</label>
                                <div class="col-lg-8">
                                    <select id="desparasitado" name="desparasitado" class="form-control" size="0">

                                        @if ($adopcion->desparasitado === 'no')
                                            <option value="no" selected>No</option>
                                            <option value="si">Si</option>
                                        @else
                                            <option value="si" selected>Si</option>
                                            <option value="no">No</option>
                                        @endif

                                    </select>
                                    @error('desparasitado')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label form-control-label"
                                    for="descripcion">Descripción</label>
                                <div class="col-lg-8">
                                    <textarea placeholder="descripcion de las mascota" id="descripcion" name="descripcion"
                                        class="text-area-create w-100" cols="37"
                                        rows="4">{{ $adopcion->descripcion }}</textarea>
                                    @error('descripcion')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label form-control-label" for="descripcion">Imagen
                                    actual</label>
                                <div class="col-lg-8">
                                    <img class="img-thumbnail" style="width: 120px" src="{{ $adopcion->imagen }}" alt=""
                                        srcset="">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="imagen" class="col-lg-4 col-form-label form-control-label">Imagen</label>
                                <div class="col-lg-8">
                                    <input type="file" name="imagen" id="imagen" class="form-control">
                                    @error('imagen')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="form-group  ">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary ">
                                        {{ __('Editar publicación') }}
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <!-- /form user info -->
            </div>
        </div>
    </div>

@endsection
