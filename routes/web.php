<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return view('welcome');
});

//- Inicio

Route::get('/inicio', 'InicioController@index')->name('inicio.index');

Route::post('/inicio', 'InicioController@show')->name('inicio.show');


//- Admin
Route::get('/admin', 'AdminController@index')->name('admin.index');

Route::delete('/admin/{user}', 'AdminController@deleteActivoUser')->name('admin.activo');

Route::delete('/admin/mascota/{adopcion}', 'AdminController@deleteActivoPet')->name('admin.activomascota');


//- Adopcion
Route::get('/adopcion', 'AdopcionController@index')->name('adopcion.index');

Route::get('/adopcion/create', 'AdopcionController@create')->name('adopcion.create');

Route::post('/adopcion', 'AdopcionController@store')->name('adopcion.store');

Route::get('/adopcion/{adopcion}', 'AdopcionController@show')->name('adopcion.show');

Route::get('/adopcion/{adopcion}/edit', 'AdopcionController@edit')->name('adopcion.edit');

Route::put('/adopcion/{adopcion}', 'AdopcionController@update')->name('adopcion.update');

Route::delete('/adopcion/{adopcion}', 'AdopcionController@destroy')->name('adopcion.destroy');


//- Profile
Route::get('/profile', 'ProfileController@index')->name('profile.index');

Route::get('/profile/create', 'ProfileController@create')->name('profile.create');

Route::post('/profile', 'ProfileController@store')->name('profile.store');

Route::get('/profile/${profile}/edit', 'ProfileController@edit')->name('profile.edit');

Route::put('/profile/${profile}', 'ProfileController@update')->name('profile.update');

Route::get('/profile/${profile}', 'ProfileController@show')->name('profile.show');

Route::delete('/profile/{profile}', 'ProfileController@destroy')->name('profile.destroy');

Auth::routes();
