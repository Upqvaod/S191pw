<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorUtiles extends Controller
{
    public function index()
    {
        return view('UtilesEscolares');
    }

    public function store(Request $request)
    {
        $request->validate([
            'txtnombre' => 'required',
            'txtmarca' => 'required',
            'txtcantidad' => 'required|numeric'
        ]);

        return $request->all();
    }
}
