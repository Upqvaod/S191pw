<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    @vite(['resources/js/app.js'])
</head>
<body>
  <div class="d-flex justify-content-center align-items-center" style="height: 100vh;"> 
      <div class="card" style="text-align:center; width: 1000px;"> 
          <img src="{{ asset('img/Logo.png') }}" style="width: 200px; height: 200px; object-fit: cover;" class="card-img-top mx-auto d-block" alt="Logo">
          <div class="card-body">
              <h5 class="card-title">Repaso 1 Laravel</h5>
              <p class="card-text"></p>
          </div>
          <ul class="list-group list-group-flush">
              <li class="list-group-item">ASIGNATURA: Programación Web</li>
              <li class="list-group-item">Diego Valdelamar Olvera</li>
              <li class="list-group-item">S-191</li>
          </ul>
          <div class="d-grid gap-2 col-6 mx-auto">
              <button class="btn btn-info" type="button">Ir al convertidor de Almacenamiento</button>
          </div>
      </div>
  </div>
</body>

</html>