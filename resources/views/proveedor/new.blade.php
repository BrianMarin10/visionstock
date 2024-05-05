<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Agregar nuevo proveedor</title>
  </head>
  <body>
  <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Proveedores') }}
        </h2>
    </x-slot>
    <div class="container">
    <form method="POST" action="{{ route('proveedores.store') }}">
        @csrf
        <div class="mb-3">
        <label for="id" class="form-label">Codigo</label>
        <input type="hidden" class="form-control" id="id" aria-describedby="idHelp" name="id"
        disabled="disabled">
        <div id="idHelp" class="form-text">Código Proveedor</div>
        </div>
        <div class="mb-3">
        <label for="nit" class="form-label">Nit</label>
        <input type="number" required class="form-control" id="nit" aria-describedby="nameHelp" name="nit"
        placeholder="Apellido proveedor">
        </div>
        <div class="mb-3">
        <label for="nombre" class="form-label">Nombre Empresa</label>
        <input type="text" required class="form-control" id="nombre" aria-describedby="nameHelp" name="nombre"
        placeholder="Nombre proveedor">
        </div>
        <div class="mb-3">
        <label for="direccion" class="form-label">Dirección</label>
        <input type="text" required class="form-control" id="direccion" aria-describedby="nameHelp" name="direccion"
        placeholder="Direccion proveedor">
        </div>
        <div class="mb-3">
        <label for="telefono" class="form-label">Telefono</label>
        <input type="number" required class="form-control" id="telefono" aria-describedby="nameHelp" name="telefono"
        placeholder="Telefono proveedor" min="1" max="9947483647" >
        </div>
        <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" required class="form-control" id="email" aria-describedby="nameHelp" name="email"
        placeholder="Email proveedor">
        </div>
        
        <div class="mt-3">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('proveedores.index') }}" class="btn btn-warning">Cancelar</a>
        </div>
</form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
</x-app-layout>
