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

Route::get('Dashboard_Administrador', function () {
    return view('Dashboard_Administrador');
});

Route::get('Dashboard_Logueado', function () {
    return view('Dashboard_Logueado');
});

Route::get('Dashboard_Doctor', function () {
    return view('Dashboard_Doctor');
});

Route::get('Cockies_Aviso', function () {
    return view('Cockies_Aviso');
});
