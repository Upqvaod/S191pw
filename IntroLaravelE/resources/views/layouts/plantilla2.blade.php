<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/fondo.css') }}">
    <title>@yield('titulo')</title>
</head>

<body>
    {{-- inicia navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('rutainicio')}}"> {{__('Turista sin Maps')}} </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('cliente.create')}}">{{__('Formulario de registro')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('cliente.index')}}">{{__('Consultar Clientes')}}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- Finaliza navbar --}}

    @yield('contenido2')

</body>
</html>