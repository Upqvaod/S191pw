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
    //reedireccion usando la ruta    
    //return redirect('/');

    //redireccion usando el nombre de la ruta
    //return redirect()->route('rutaconsulta');

    //redireccion al origen de la peticion
    //return back();

    //redireccion con valor adjunto (variables, arreglos, etc.)
    $id=[['usuario'=>'1'], ['usuario'=>'2']];
    return view('formulario', compact('id'));
    
    //redireccion enviando msj en session
    //$usuario=$peticion->input('txtnombre');
    //session()->flash('exito','Se guardo el usuario '.$usuario);

    //return to_route('rutaformulario');

    }
}
