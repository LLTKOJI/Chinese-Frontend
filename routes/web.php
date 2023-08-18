<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registrocliente', function () {
    return view('registrocliente');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/ladingpage', function () {
    return view('ladingpage');
});

Route::get('/MoD', function () {
    return view('MoD');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/listadoorden', function () {
    return view('listadoorden');
});

Route::get('/ordeneslyc', function () {
    return view('ordeneslyc');
});


Route::get('/ordenrecibida', function () {
    return view('ordenrecibida');
});

Route::get('/agregaringresientes', function () {
    return view('agregaringresientes');
});

Route::get('/ingredientes', function () {
    return view('ingredientes');
});

Route::get('/mesasdod', function () {
    return view('mesasdod');
});
