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
<nav class="navbar navbar-dark bg-warning">
    <div class="container">
        <a class="navbar-brand" href="#">Repaso 1 - Conversor</a>
    </div>
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/">Inicio</a>
    </li>
</nav>
  <div class="container mt-5">
    <h2>Convertidor de unidades de Datos</h2>
    <form>
        <div class="form-group">
            <label for="cantidad">Cantidad</label>
            <input type="text" class="form-control" id="cantidad" name="cantidad" required>
        </div>
        <div class="form-group mt-3">
            <label for="conversion">Convertir:</label>
            <select class="form-control" id="conversion" name="conversion">
                <option value="mb-to-gb">MB a GB</option>
                <option value="gb-to-mb">GB a MB</option>
                <option value="gb-to-tb">GB a TB</option>
                <option value="tb-to-gb">TB a GB</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Convertir</button>
    </form>
</body>
</html>