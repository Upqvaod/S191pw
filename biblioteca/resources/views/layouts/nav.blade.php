<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>@yield('titulo')</title>
</head>
<body>
    <div class="container">
      <nav class="navbar navbar-light bg-light">
        <form class="container-fluid justify-content-start">
          <button class="btn btn-outline-success me-2" type="button">Pagina principal</button>
          <button class="btn btn-sm btn-outline-secondary" type="button">Registro de libros</button>
        </form>
      </nav>
        @yield('content')
    </div>
    <footer>
    
        <p> La musaraña &copy; Todos los derechos reservados {{ date('d-m-Y') }}    </p>
    </footer>
</body>
</html>
