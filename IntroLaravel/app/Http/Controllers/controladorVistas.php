<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function home(){
        return view('inicio');
    }

    public function insert(){
        return view('formulario');
    }

    public function select(){
        return view('clientes');
    }

    public function procesarCliente(Request $peticion){     
    //validacion de campos en el formulario
    $validacion= $peticion-> validate([ 
        'txtnombre'=>'required|min:3|max:50', 
        'txtapellido'=>'required',
        'txtcorreo'=>'required|email',
        'txttelefono'=>'required|numeric',
    ]);

    //redireccion enviando msj en session
    $usuario=$peticion->input('txtnombre');
    session()->flash('exito','Se guardo el usuario '.$usuario);

    return to_route('rutaformulario');

    }
}
