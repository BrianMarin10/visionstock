<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Home</title>
</head>

<body>

<ul class="nav nav-tabs">
  <li class="nav-item">
  <a class="navbar-brand" href="#" >
      <img src="{{ asset('images/vision-48.png') }}" alt="" width="30" height="24" class="d-inline-block text-align: left">
      Vision Stock
    </a>
  </li>
  <li class="nav-item">
  <a class="navbar-brand" href="#" >
    <img src="{{ asset('images/home-48.png') }}" alt="" width="30" height="24" class="d-inline-block text-align: left">
    Home
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>
<div class="container my-5">

<style>
  .card-container {
    display: flex;
    justify-content: space-between; /* Distribuye los elementos horizontalmente */
    margin-bottom: 20px; /* Margen entre las filas */
  }

  .card {
    flex: 0 0 calc(33.333% - 10px); /* Ajusta el tamaño de las tarjetas para que haya espacio entre ellas */
  }
</style>

<div class="card-container">
  <div class="card" style="width: 18rem;">
    <img src="{{ asset('images/user/lentes.jpg') }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Lentes de contacto</h5>
      <p class="card-text">Hola mundo</p>
      <a href="{{ route('usuario_producto1') }}" class="btn btn-primary">Detalle</a>
    </div>
  </div>

  <div class="card" style="width: 18rem;">
    <img src="{{ asset('images/user/gota_hidratante.jpg') }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Gotas hidratantes</h5>
      <p class="card-text">Hola mundo</p>
      <a href="{{ route('usuario_producto2') }}" class="btn btn-primary">Detalle</a>
    </div>
  </div>

  <div class="card" style="width: 18rem;">
    <img src="{{ asset('images/user/gafa.jpeg') }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Gafas</h5>
      <p class="card-text">Hola mundo</p>
      <a href="{{ route('usuario_producto3') }}" class="btn btn-primary">Detalle</a>
    </div>
  </div>

</div>



</div>
</body>