<?php

namespace App\Http\Controllers;

use App\Adopcion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdopcionController extends Controller
{

    public function __construct()
    {
        $this->middleware('role:user|administrator');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        // if (auth()->user()->activo == 0) {
        //     Auth::logout();
        //     return redirect('/');
        // }

        //- adopciones del usuario autenticado
        $adopciones = auth()->user()->adopciones;

        return view('adopcion.index')->with('adopciones', $adopciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adopcion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'mascota' => 'required',
            'edad' => 'required',
            'peso' => 'required',
            'sexo' => 'required',
            'tipo' => 'required',
            'vacunado' => 'required',
            'desparasitado' => 'required',
            'descripcion' => 'required',
            'imagen' => 'image|mimes:jpeg,png,jpg,git,svg|required'
        ]);

        // $ruta_img = $request['imagen']->store('imagenes', 's3');
        $ruta_img = $request['imagen']->store('imagenes', 's3');

        auth()->user()->adopciones()->create([
            'mascota' => $data['mascota'],
            'edad' => $data['edad'],
            'peso' => $data['peso'],
            'sexo' => $data['sexo'],
            'tipo' => $data['tipo'],
            'vacunado' => $data['vacunado'],
            'desparasitado' => $data['desparasitado'],
            'descripcion' => $data['descripcion'],
            'imagen' => Storage::disk('s3')->url($ruta_img),
        ]);

        // DB::table('adopcions')->insert([
        //     'nombre_mascota' => $data['mascota'],
        //     'edad_mascota' => $data['edad'],
        //     'peso_mascota' => $data['peso'],
        //     'sexo_mascota' => $data['sexo'],
        //     'tipo_mascota' => $data['tipo'],
        //     'user_id' => Auth::user()->id,
        //     'descripcion' => $data['descripcion'],
        //     'imagen' => Storage::disk('s3')->url($ruta_img),
        // ]);

        return redirect()->action('AdopcionController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Adopcion  $adopcion
     * @return \Illuminate\Http\Response
     */
    public function show(Adopcion $adopcion)
    {
        return view('adopcion.show')->with('adopcion', $adopcion);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Adopcion  $adopcion
     * @return \Illuminate\Http\Response
     */
    public function edit(Adopcion $adopcion)
    {
        return view('adopcion.edit')->with('adopcion', $adopcion);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Adopcion  $adopcion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adopcion $adopcion)
    {

        $data = $request->validate([
            'mascota' => 'required',
            'edad' => 'required',
            'peso' => 'required',
            'sexo' => 'required',
            'tipo' => 'required',
            'vacunado' => 'required',
            'desparasitado' => 'required',
            'descripcion' => 'required',
        ]);

        if ($request['imagen']) {
            $ruta_img = $request['imagen']->store('imagenes', 's3');
            $adopcion->imagen = Storage::disk('s3')->url($ruta_img);
        }

        $adopcion->mascota = $data['mascota'];
        $adopcion->edad = $data['edad'];
        $adopcion->peso = $data['peso'];
        $adopcion->sexo = $data['sexo'];
        $adopcion->tipo = $data['tipo'];
        $adopcion->descripcion = $data['descripcion'];
        $adopcion->vacunado = $data['vacunado'];
        $adopcion->desparasitado = $data['desparasitado'];

        $adopcion->save();

        return redirect()->action('AdopcionController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Adopcion  $adopcion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adopcion $adopcion)
    {
        $adopcion->delete();
        return redirect()->action('AdopcionController@index');
    }
}
