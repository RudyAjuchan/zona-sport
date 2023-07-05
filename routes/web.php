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
    return view('index');
});
Route::get('/alquilar', function () {
    return view('alquiler');
});
Route::get('/acercade', function () {
    return view('acercade');
});
Route::get('/contacto', function () {
    return view('contacto');
});