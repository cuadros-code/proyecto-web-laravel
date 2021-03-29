<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Adopcion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:administrator');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mascotas = DB::table('adopcions')
            ->where('activo', 1)
            ->simplePaginate(3);

        $users = DB::table('users')
            ->where('id', '!=', auth()->user()->id)
            ->where('activo', 1)
            ->simplePaginate(3);

        return view('admin.index')
            ->with('users', $users)
            ->with('mascotas', $mascotas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Display the specified resource.
     *
    //  * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function deleteActivoUser(User $user)
    {
        $user->activo = 0;
        $user->save();
        return redirect()->action('AdminController@index');
    }

    public function deleteActivoPet(Adopcion $adopcion)
    {
        $adopcion->activo = 0;
        $adopcion->save();
        return redirect()->action('AdminController@index');
    }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Admin  $admin
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Admin $admin)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Admin  $admin
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Admin $admin)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Admin  $admin
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Admin $admin)
    // {
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Admin  $admin
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Admin $admin)
    // {
    // }
}
