<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\ClientesController;

use Illuminate\Support\Facades\Route;


//Route::get('admin', [HomeController::class, 'index']);

Route::get('admin/cliente/index', [ClientesController::class, 'index'])->middleware('auth');
Route::get('admin/cliente/create', [ClientesController::class, 'create'])->middleware('auth');
Route::get('admin/cliente/store', [ClientesController::class, 'store'])->middleware('auth');
//Route::resource('clientes','App\Http\Controllers\ClientesController');

//Route::resource('salas','App\Http\Controllers\PlatoController');