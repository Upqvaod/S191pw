<?php

use App\Http\Controllers\controladorVista;
use App\Http\Controllers\controladorLibros;
use Illuminate\Support\Facades\Route;

// Ruta para la página de inicio
Route::get('/', [controladorVista::class, 'inicio'])->name('inicio');

// Ruta para el formulario de registro de libros
Route::get('/registro-libro', [controladorLibros::class, 'crear'])->name('registro');

// Ruta para procesar el formulario de registro de libros
Route::post('/registro-libro', [controladorLibros::class, 'guardar'])->name('guardar-libro');
