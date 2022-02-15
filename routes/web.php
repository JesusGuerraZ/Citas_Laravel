<?php

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

Route::get('/',function(){
return view('login');
});


Route::get('Inicio', function () {
    return view('inicio');
});

Route::get('Cita', function () {
    return view('citas');
});

Route::get('Agenda', function (){
    return view('agenda');
});

Route::get('Admin', function (){
return view('AgregarMedico');
});
