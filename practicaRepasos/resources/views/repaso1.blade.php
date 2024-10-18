<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Repaso 1 -Conversor</title>
    @vite(['resources/js/app.js'])
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand">Repaso 1 - Conversor</a>
    </div>
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/">Inicio</a>
    </li>
</nav>
  <div class="container mt-5">
    <h2>Convertidor de unidades de Datos</h2>
    <form method="POST" action="/convertir">
    @csrf
        <div class="form-group">
            <label for="cantidad">Cantidad</label>
            <input type="text" class="form-control" name="cantidad" required>
        </div>
        <div class="form-group mt-3">
            <label for="conversion" class="form-label">Convertir:</label>
            <select class="form-control" name="conversion">
                <option value="mb-a-gb">MB a GB</option>
                <option value="gb-a-mb">GB a MB</option>
                <option value="gb-a-tb">GB a TB</option>
                <option value="tb-a-gb">TB a GB</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Convertir</button>
    </form>
</body>
</html>