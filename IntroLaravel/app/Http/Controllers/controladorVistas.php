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
    //respuesta de la peticion POST
    //return 'La info del cliente llego al controlador';
        
        //regresa todo lo que se envio en el formulario
        return $peticion->all();
        //return $peticion->ip();
        //return $peticion->url();
    
    }
}
