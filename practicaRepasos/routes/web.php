<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::view('/', 'inicio');
Route::view('/repaso1', 'repaso1');

Route::post('/convertir', [App\Http\Controllers\controladorConv::class, 'convertir'])->name('convertir');
