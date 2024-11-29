<?php

use App\Http\Controllers\clienteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [clienteController::class, 'home'])->name('rutainicio');
Route::resource('cliente', clienteController::class);
