@extends('layouts.nav')

@section('titulo', 'Registro de libros')

@section('content')
    <h1>Registro de libros</h1>
    <form class="row g-3">
    @csrf
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Email de la editorial</label>
          <input type="email" class="form-control" name="txtemail">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Título</label>
          <input type="password" class="form-control"  name="txttitulo">
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Autor</label>
          <input type="text" class="form-control" name="txtautor">
        </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">Editorial</label>
          <input type="text" class="form-control" name="txteditorial">
        </div>
        <div class="col-md-4">
          <label for="inputCity" class="form-label">Año de publicacion</label>
          <input type="text" class="form-control" name="txtyear">
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">ISBN</label>
          <input type="text" class="form-control" name="txtisbn">
          </select>
        </div>
        <div class="col-md-2">
          <label for="inputZip" class="form-label">Paginas</label>
          <input type="text" class="form-control" name="txtpaginas">
        </div>
          </div>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Guardar Libro</button>
        </div>
      </form>
@endsection
