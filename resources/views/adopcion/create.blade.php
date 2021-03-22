@extends('layouts.app')

@section('content')

    <div class="container py-3">
        <div class="row">
            <a href="{{ route('adopcion.index') }}" class="btn btn-primary">
                << Volver </a>
        </div>
        <div class="row">
            <div class="mx-auto col-sm-7">
                <!-- form user info -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0 text-center">Información de la mascota</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('adopcion.store') }}" class="form" novalidate
                            enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label form-control-label" for="mascota">Nombre
                                    mascota</label>
                                <div class="col-lg-8">
                                    <input id="mascota" class="form-control" name="mascota" type="text" placeholder="tommy">

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
                                    <input class="form-control" placeholder="5 años" type="number" name="edad" id="edad">
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
                                    <input id="peso" class="form-control" type="number" name="peso" placeholder="10 kg">
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
                                    <select id="sexo" class="form-control" size="0" name="sexo">
                                        <option value="">Seleccionar</option>
                                        <option value="macho">Macho</option>
                                        <option value="hembra">Hembra</option>
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
                                    <select id="tipo" name="tipo" class="form-control" size="0">
                                        <option value="">Seleccionar</option>
                                        <option value="perro">Perro</option>
                                        <option value="gato">Gato</option>
                                        <option value="otro">Otro</option>
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
                                    <select id="vacunado" name="vacunado" class="form-control" size="0">
                                        <option value="">Seleccionar</option>
                                        <option value="si">Si</option>
                                        <option value="no">No</option>
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
                                        <option value="">Seleccionar</option>
                                        <option value="si">Si</option>
                                        <option value="no">No</option>
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
                                        class="text-area-create w-100" cols="37" rows="4"></textarea>
                                    @error('descripcion')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
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
                                        {{ __('Publicar') }}
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
