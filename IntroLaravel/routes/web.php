<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;


Route::get('/', [controladorVistas::class, 'home'])->name('rutainicio');
Route::get('/formulario', [controladorVistas::class, 'insert'])->name('rutaformulario');
Route::get('/consultas', [controladorVistas::class, 'select'])->name('rutaconsulta');



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

