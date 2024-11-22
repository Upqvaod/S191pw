@extends('layouts.plantilla2')

@section('titulo', 'Clientes')

@section('contenido2')

@if(session('success'))
    <div class="alert alert-success mt-3">
        {{ session('success') }}
    </div>
@endif

<div class="container mt-5 col-md-8">
    <h2 class="mb-4">Listado de Clientes</h2>
    @foreach ($consultaClientes as $cliente)
        <div class="card text-justify font-monospace mb-3">
            <div class="card-header fs-5 text-primary">
                {{ $cliente->id }}
            </div>

            <div class="card-body">
                <h5 class="fw-bold">Correo: {{ $cliente->correo }}</h5>
                <h5 class="fw-medium">Teléfono: {{ $cliente->telefono }}</h5>
            </div>

            <div class="card-footer text-muted">
                <!-- Botón Editar -->
                <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning btn-sm">
                    {{ __('Actualizar') }}
                </a>

                <!-- Botón Eliminar -->
                <form id="form-delete-{{ $cliente->id }}" action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $cliente->id }})">
                        {{ __('Eliminar') }}
                    </button>
                </form>
            </div>
        </div>
    @endforeach
</div>

<!-- Incluir SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    function confirmDelete(id) {
        Swal.fire({
            title: "¿Estás seguro?",
            text: "¡No podrás revertir esto!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Sí, eliminar",
            cancelButtonText: "Cancelar"
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById(`form-delete-${id}`).submit();
            }
        });
    }
</script>

@endsection
