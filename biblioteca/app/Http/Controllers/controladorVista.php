<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVista extends Controller
{

    public function inicio()
    {
        return view('inicio'); 
    }

    public function registro()
    {
        return view('registro'); 
    }
}