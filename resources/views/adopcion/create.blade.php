@extends('layouts.app')

@section('content')

    <div class="container py-3">
        <div class="row">
            <div class="mx-auto col-sm-6">
                <!-- form user info -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0 text-center">Información de la mascota</h4>
                    </div>
                    <div class="card-body">
                        <form class="form" role="form" autocomplete="off">
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label form-control-label">Nombre mascota</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="text" placeholder="tommy" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label form-control-label">Edad mascota</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label form-control-label">Peso(kg)</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="number" placeholder="10 kg">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label form-control-label">Sexo</label>
                                <div class="col-lg-8">
                                    <select id="user_time_zone" class="form-control" size="0">
                                        <option value="macho">Macho</option>
                                        <option value="hembra">Hembra</option>
                                    </select>
                                </div>
                            </div>
                          
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label form-control-label">Tipo de mascota</label>
                                <div class="col-lg-8">
                                    <select id="user_time_zone" class="form-control" size="0">
                                        <option value="perro">Perro</option>
                                        <option value="gato">Gato</option>
                                        <option value="otro">Otro</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label form-control-label">Descripción</label>
                                <div class="col-lg-8">
                                    <textarea name="descripcion" class="text-area-create" cols="37" rows="4"></textarea>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label form-control-label"></label>
                                <div class="col-lg-8">
                                    <input type="button"  class="btn btn-primary" value="Guardar Datos">
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
