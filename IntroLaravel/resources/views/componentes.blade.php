@extends('layouts.plantilla1')

@section('titulo', 'Componentes Blade')

@section('contenido')

    <x-Card encabezado="componente 1" titulo="titulo 1" textoBoton="Guardar">  
        Contenido de la tarjeta 1 
    </x-Card>

    <x-Card encabezado="componente 2" titulo="titulo 2" textoBoton="Guardar">
        Contenido de la tarjeta 2
    </x-Card>

    
    <x-Alert tipo="danger">Soy un alerta de peligro</x-Alert>

    <x-Alert tipo="success">Soy un alerta de confirmacion</x-Alert>

@endsection