@extends('layouts.app')

@section('content')
    <div class=" mt-5">
        <div class="container emp-profile">
            <form method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            {{-- @if ($condition)

                            @else

                            @endif --}}
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog"
                                alt="" />
                        </div>
                        <input type="file">
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

                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">

                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label>Nombre</label>
                                    </div>
                                    <div class="col-md-6">
                                        {{-- <p>{{ $userProfile->name }}</p> --}}
                                        <input type="text">

                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label>Correo</label>
                                    </div>
                                    <div class="col-md-6">
                                        {{-- <p>{{ $userProfile->email }}</p> --}}
                                        <input type="text">

                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label>Celular</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text">
                                        {{-- <p>{{ $userProfile->telefono }}</p> --}}
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
