<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorUtiles;
use App\Http\Requests\validadorUtiles;


Route::get('/', [controladorUtiles::class, 'inicio']);

Route::post('/UtilesEscolares', [controladorUtiles::class, 'procesarFomulario']);