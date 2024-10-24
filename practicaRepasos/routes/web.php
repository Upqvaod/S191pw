<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\controladorConv;

Route::view('/', 'inicio');
Route::view('/repaso1', 'repaso1');

Route::post('/convertir', [controladorConv::class, 'convertir'])->name('convertir');
