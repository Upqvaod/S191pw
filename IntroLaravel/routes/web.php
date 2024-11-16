<?php

use App\Http\Controllers\clienteController;
use Illuminate\Support\Facades\Route;

// rutas para trabajar con controladorVistas




/*Route::get('/', function () {
    return view('welcome');
});
*/

/*el primer parametro es la vista y el segundo es la ruta.
Funciona tanto la sintaxis de arriba como la de abajo*/

/* Route::view('/','inicio') ->name('rutainicio');

Route::view('/formulario','formulario')->name('rutaformulario');

Route::view('/consultas','clientes')->name('rutaconsulta'); */

Route::view('/component', 'componentes');

Route::view('/component2', 'componentes2');


// rutas para trabajar con clienteController
Route::get('/cliente/create', [clienteController::class, 'create'])->name('rutaformulario');

Route::post('/cliente', [clienteController::class, 'store'])->name('rutaenviar');

Route::get('/', [clienteController::class, 'home'])->name('rutainicio');

Route::get('/cliente', [clienteController::class, 'index'])->name('rutaconsulta');