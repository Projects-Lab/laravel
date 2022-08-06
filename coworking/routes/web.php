<?php

use App\Http\Controllers\AsignacionesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\SalasController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/inicial', function () {
    return view('inicial');
});

Route::get('/inicio', function () {
    return view('auth.login');
})->name('inicio');

//Rutas clientes
Route::get('/cliente/index', [ClientesController::class, 'index'])->middleware('auth');
Route::get('/cliente/create', [ClientesController::class, 'create'])->middleware('auth');
Route::post('/cliente/store', [ClientesController::class, 'store'])->middleware('auth');
Route::get('/cliente/{id}/edit', [ClientesController::class, 'edit'])->middleware('auth');
Route::put('/cliente/{id}/update', [ClientesController::class, 'update'])->middleware('auth');
Route::delete('/cliente/{id}/destroy', [ClientesController::class, 'destroy'])->middleware('auth');

//Rutas salas
Route::get('/sala/index', [SalasController::class, 'index'])->middleware('auth');
Route::get('/sala/create', [SalasController::class, 'create'])->middleware('auth');
Route::post('/sala/store', [SalasController::class, 'store'])->middleware('auth');
Route::get('/sala/{id}/edit', [SalasController::class, 'edit'])->middleware('auth');
Route::put('/sala/{id}/update', [SalasController::class, 'update'])->middleware('auth');
Route::delete('/sala/{id}/destroy', [SalasController::class, 'destroy'])->middleware('auth');

//Asignacion
Route::get('/asignacion/index', [AsignacionesController::class, 'index'])->middleware('auth');
Route::get('/asignacion/create', [AsignacionesController::class, 'create'])->middleware('auth');
Route::post('/asignacion/store', [AsignacionesController::class, 'store'])->middleware('auth');
Route::get('/asignacion/{id}/edit', [AsignacionesController::class, 'edit'])->middleware('auth');
Route::put('/asignacion/{id}/update', [AsignacionesController::class, 'update'])->middleware('auth');
Route::delete('/asignacion/{id}/destroy', [AsignacionesController::class, 'destroy'])->middleware('auth');

Route::view('/', 'landingpage')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::view('/service', 'service')->name('service');
