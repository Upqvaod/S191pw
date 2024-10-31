@extends('layouts.nav')

@section('titulo', 'Registro de libros')

@section('content')
    <h1>Registro de libros</h1>
    <form>
        @csrf
        <div class="mb-3">
            <label for="titulo" class="form-label">Titulo</label>
            <input type="text" class="form-control" id="titulo" name="titulo">
        </div>
        <div class="mb-3">
            <label for="autor" class="form-label">Autor</label>
            <input type="text" class="form-control" id="autor" name="autor">
        </div>
        <div class="mb-3">
            <label for="editorial" class="form-label">Editorial</label>
            <input type="text" class="form-control" id="editorial" name="editorial">
        </div>
        <div class="mb-3">
            <label for="anio" class="form-label">Año</label>
            <input type="text" class="form-control" id="anio" name="anio">
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@endsection
