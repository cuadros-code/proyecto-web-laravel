<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{

   public function __construct()
   {
      $this->middleware('role:user|administrator');
      // $this->middleware('role:user|administrator', ['except' => ['show']]);
   }
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      $userProfile = auth()->user();
      $dataProfile = auth()->user()->perfil;

      $existePerfil = DB::table('profiles')
         ->where('user_id', auth()->user()->id)
         ->exists();

      return view('profile.index')
         ->with('userProfile', $userProfile)
         ->with('existePerfil', $existePerfil)
         ->with('dataProfile', $dataProfile);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      $userProfile = auth()->user();
      $dataProfile = auth()->user()->perfil;
      return view('profile.create')
         ->with('userProfile', $userProfile)
         ->with('dataProfile', $dataProfile);
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {

      DB::table('users')
         ->where('id', auth()->user()->id)
         ->update(['telefono' => $request['celular']]);

      if ($request['imagen']) {
         $ruta_img = $request['imagen']->store('perfiles', 's3');
         auth()->user()->perfil()->create([
            'imagen' => Storage::disk('s3')->url($ruta_img),
            'bio' => $request['bio'],
            'ubicacion' => $request['ubicacion']
         ]);
      }
      return redirect()->action('ProfileController@index');
   }

   public function show($user)
   {
      $userProfile = DB::table('users')
         ->where('id', $user)
         ->get();

      // dd($userProfile[0]);

      $dataProfile = DB::table('profiles')
         ->where('user_id', $userProfile[0]->id)
         ->get();

      // dd($dataProfile->isEmpty());


      if ($dataProfile->isEmpty()) {
         return view('profile.show')
            ->with('userProfile', $userProfile[0])
            ->with('dataProfile', null);
      } else {
         return view('profile.show')
            ->with('userProfile', $userProfile[0])
            ->with('dataProfile', $dataProfile[0]);
      }
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Profile  $profile
    * @return \Illuminate\Http\Response
    */
   public function edit(Profile $profile)
   {
      $userProfile = auth()->user();
      $dataProfile = $profile;

      return view('profile.edit')
         ->with('userProfile', $userProfile)
         ->with('dataProfile', $dataProfile);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Profile  $profile
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, Profile $profile)
   {
      $data = $request->validate([
         'celular' => 'required',
         'bio' => 'required',
         'ubicacion' => 'required',
      ]);

      DB::table('users')
         ->where('id', auth()->user()->id)
         ->update(['telefono' => $data['celular']]);

      if ($request['imagen']) {
         $ruta_img = $request['imagen']->store('perfiles', 's3');
         $profile->imagen = Storage::disk('s3')->url($ruta_img);
      }

      $profile->ubicacion = $data['ubicacion'];
      $profile->bio = $data['bio'];
      $profile->save();

      return redirect()->action('ProfileController@index');
   }

   public function destroy($profile)
   {
      DB::table('users')
         ->where('id', auth()->user()->id)
         ->update(['activo' => false]);

      Auth::logout();
   }
}
