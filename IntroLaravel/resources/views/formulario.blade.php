@extends('layouts.plantilla1')

  @section('titulo','Formulario Clientes')

  @section('contenido')

      <div class="container mt-5 col-md-6">
        {{--@dump($id)--}}

      @if (session('exito'))
      <x-Alert tipo='info'>{{session('exito')}}</x-Alert> 
      @endif

      @session('exito')
      <x-Alert tipo='warning'>{{$value}}</x-Alert> 
      @endsession

      @session('exito')
      <script>
        Swal.fire({
          title: "Good job!",
          text: '{{$value}}',
          icon: "success"
          
        });
      </script>
      @endsession

        <div class="card font-monospace">
        
          <div class="card-header fs-5 text-center text-primary">
            Registro de Clientes
          </div>

          <div class="card-body text-justify ">

          <form method="POST"  action="/enviarCliente">
          @csrf
              <div class="mb-3">
                <label for="nombre" class="form-label">Nombre: </label>
                <input type="text"  class="form-control" name="txtnombre" value="{{old('txtnombre')}}">
                <small class="text-danger fst-italic">{{$errors->first('txtnombre')}}</small>
              </div>

              <div class="mb-3">
                <label for="apellido" class="form-label">Apellido: </label>
                <input type="text" class="form-control" name="txtapellido" value="{{old('txtapellido')}}">
                <small class="text-danger fst-italic">{{$errors->first('txtapellido')}}</small>
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Correo: </label>
                <input type="text" class="form-control" name="txtcorreo" value="{{old('txtcorreo')}}">
                <small class="text-danger fst-italic">{{$errors->first('txtcorreo')}}</small>
              </div>

              <div class="mb-3">
                <label for="telefono" class="form-label">Telefono: </label>
                <input type="text" class="form-control" name="txttelefono"  value="{{old('txttelefono')}}">
                <small class="text-danger fst-italic">{{$errors->first('txttelefono')}}</small>
              </div>

            </div>
            <div class="card-footer text-muted">

            <div class="d-grid gap-2 mt-2 mb-1">
              <button type="submit" class="btn btn-primary success btn sm"> Guardar Cliente </button>
            </div>

          </form>
        
        </div>
      </div>
    </div>

  @endsection