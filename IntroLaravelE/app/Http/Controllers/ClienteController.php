<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;


class ClienteController extends Controller
{
    public function home()
    {
        return view('inicio');
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Se realiza una consulta a la base de datos para obtener todos los registros de la tabla clientes con
        $consulta = cliente::all();
        return view('clientes', compact('consulta'));
        //Compact es una función de laravel que permite enviar variables a la vista
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   //Se crea un objeto de la clase cliente y se le asignan los valores de los campos del formulario
        $addCliente = new cliente();
    
        $addCliente->nombre = $request->input('txtnombre');
        $addCliente->apellido = $request->input('txtapellido');
        $addCliente->correo = $request->input('txtcorreo');
        $addCliente->telefono = $request->input('txttelefono');

        //Se guarda el objeto en la base de datos
        $addCliente->save();
        
        //Se muestra un mensaje de exito 
        $usuario = $request->input('txtnombre');
        session()->flash('exito', 'Se guardo el usuario: ' . $usuario);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(cliente $cliente)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage. Based on the id of the client
     */
    public function update(Request $request, $id)
    {
        //Se busca el cliente por el id
        $upCliente = cliente::find($id);
        //Se actualizan los campos del cliente
        $upCliente->nombre = $request->input('txtnombre');
        $upCliente->apellido = $request->input('txtapellido');
        $upCliente->correo = $request->input('txtcorreo');
        $upCliente->telefono = $request->input('txttelefono');
        //Se guarda el cliente
        $upCliente->update();
//Se muestra un mensaje de exito
        $usuario = $request->input('txtnombre');
        session()->flash('exito', 'Se actualizo el cliente: ' . $usuario);
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        //Se obtiene el nombre del cliente a eliminar antes de eliminarlo
        $usuario = $request->input('txtnombre');

        //Se busca el cliente por el id
        $delCliente = cliente::find($id);
        
        //Se elimina el cliente
        $delCliente->delete();
        
        //Se muestra un mensaje de exito
        session()->flash('exito', 'Se elimino el cliente'. $usuario);
        return redirect()->back();
    }
}
