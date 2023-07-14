<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservaController;

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

Route::get('/welcome', function () {
    return view('welcome');
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

Route::get('/terminos', function () {
    return view('terminoscondiciones');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/getReserva',[ReservaController::class, 'index'])->name('Horario.get');
Route::post('/guardarReserva', [ReservaController::class, 'store'])->name('guardar.reserva');
Route::post('/obtenerHoras', [ReservaController::class, 'obtenerHoras'])->name('buscar.horas');
Route::get('/getDivisa', [ReservaController::class, 'getDivisa'])->name('buscar.horas');
Route::post('/insertDivisa', [ReservaController::class, 'insertDivisa'])->name('buscar.horas');
Route::post('/insertDivisa2', [ReservaController::class, 'insertDivisa2'])->name('buscar.horas');
Route::get('/pruebaPDF', [ReservaController::class, 'pruebaPDF'])->name('buscar.horas');

require __DIR__.'/auth.php';
