<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorLibro;
use Illuminate\Http\Request;

class controladorLibros extends Controller
{
    public function crear()
    {
        return view('registro'); 
    }

    public function guardar(validadorLibro $request)
    {
        return redirect()->route('registro')->with('success', 'Libro registrado exitosamente');
    }
}
