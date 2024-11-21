<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //importamos la clase DB para Query Builder
use Carbon\Carbon; //importamos la clase Carbon para manejar fechas
use App\Http\Requests\validadorCliente; //importamos la clase validadorCliente para validar los campos

class clienteController extends Controller
{
    public function home(){
        return view('inicio');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $consultaClientes=DB::table('cliente')->get(); //obtenemos todos los registros de la tabla cliente
        return view('clientes', compact('consultaClientes'));
    }

    /**
     * Sirve para mostrar el formulario.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Aqui preparamos el insert
     */
    public function store(validadorCliente $request)
    {
        DB::table('cliente')->insert([
            'nombre' => $request->input('txtnombre'),
            'apellido' => $request->input('txtapellido'),
            'correo' => $request->input('txtcorreo'),
            'telefono' => $request->input('txttelefono'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        //redireccion enviando msj en session para que el usuario sepa que se guardo
        $usuario= $request->input('txtnombre');
        session()->flash('exito','Se guardo el usuario '.$usuario);

        return to_route('rutaformulario');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente = DB::findOrFail($id);
        return view('clientes.editar', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('cliente')->where('id', $id)->update([
            'nombre' => $request->input('txtnombre'),
            'apellido' => $request->input('txtapellido'),
            'correo' => $request->input('txtcorreo'),
            'telefono' => $request->input('txttelefono'),
            "updated_at" => Carbon::now()
        ]);}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('cliente')->where('id', $id)->delete();
        return redirect()->route('rutaconsulta');
    }
}
