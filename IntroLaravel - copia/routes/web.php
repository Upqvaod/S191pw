<?php

use App\Http\Controllers\clienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

// rutas para trabajar con controladorVistas
Route::get('/', [controladorVistas::class, 'home'])->name('rutainicio');

Route::get('/consultas', [controladorVistas::class, 'select'])->name('rutaconsulta');
Route::post('/enviarCliente', [controladorVistas::class, 'procesarCliente'])->name('rutaenviar');



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