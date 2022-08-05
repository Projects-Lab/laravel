<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\ClientesController;

use Illuminate\Support\Facades\Route;


Route::get('admin', [HomeController::class, 'index']);

Route::get('admin/cliente/index', [ClientesController::class, 'index'])->middleware('auth');
