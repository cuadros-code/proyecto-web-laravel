<?php

namespace App\Http\Controllers;

use App\Adopcion;
use Illuminate\Http\Request;

class AdopcionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adopcion.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Adopcion  $adopcion
     * @return \Illuminate\Http\Response
     */
    public function show(Adopcion $adopcion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Adopcion  $adopcion
     * @return \Illuminate\Http\Response
     */
    public function edit(Adopcion $adopcion)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Adopcion  $adopcion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adopcion $adopcion)
    {
        //
    }
}
