@extends('layouts.nav')

@section('titulo', 'Registro de libros')

@section('content')

@if(session('exito'))
    <div class="alert alert-info">
        {{ session('exito') }}
    </div>

    <script>
        Swal.fire({
            title: "¡LOGRADO!",
            text: "{{ session('exito') }}", 
            icon: "success"
        });
    </script>
@endif


<h1>Registro de libros</h1>
<form action="{{ route('registro.libro') }}" method="POST" class="row g-3">
    @csrf
    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Email de la editorial</label>
        <input type="email" class="form-control" name="txtemail" >
        <small class="text-danger fst-italic">{{$errors->first('txtemail')}}</small>
    </div>
    <div class="col-md-6">
        <label for="inputTitle" class="form-label">Título</label>
        <input type="text" class="form-control" name="txttitulo">
        <small class="text-danger fst-italic">{{$errors->first('txttitulo')}}</small>
    </div>
    <div class="col-12">
        <label for="inputAuthor" class="form-label">Autor</label>
        <input type="text" class="form-control" name="txtautor">
        <small class="text-danger fst-italic">{{$errors->first('txtautor')}}</small>
    </div>
    <div class="col-12">
        <label for="inputEditorial" class="form-label">Editorial</label>
        <input type="text" class="form-control" name="txteditorial">
        <small class="text-danger fst-italic">{{$errors->first('txteditorial')}}</small>
    </div>
    <div class="col-md-4">
        <label for="inputYear" class="form-label">Año de publicación</label>
        <input type="number" class="form-control" name="txtyear">
        <small class="text-danger fst-italic">{{$errors->first('txtyear')}}</small>
    </div>
    <div class="col-md-4">
        <label for="inputISBN" class="form-label">ISBN</label>
        <input type="text" class="form-control" name="txtisbn">
        <small class="text-danger fst-italic">{{$errors->first('txtisbn')}}</small>
    </div>
    <div class="col-md-2">
        <label for="inputPages" class="form-label">Páginas</label>
        <input type="number" class="form-control" name="txtpaginas">
        <small class="text-danger fst-italic">{{$errors->first('txtpaginas')}}</small>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Guardar Libro</button>
    </div>
</form>
@endsection
