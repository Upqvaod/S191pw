<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});
*/

/*el primer parametro es la vista y el segundo es la ruta.
Funciona tanto la sintaxis de arriba como la de abajo*/
Route::view('/','welcome');

Route::view('/formulario','formulario');