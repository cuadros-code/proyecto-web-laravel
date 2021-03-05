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

Route::get('/adopcion', 'AdopcionController@index')->name('adopcion.index');

Route::get('/adopcion/create', 'AdopcionController@create')->name('adopcion.create');

Route::post('/adopcion', 'AdopcionController@store')->name('adopcion.store');

Route::get('/adopcion/{adopcion}', 'AdopcionController@show')->name('adopcion.show');

Auth::routes();
