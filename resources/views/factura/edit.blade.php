<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Editar Facturas</title>
  </head>
  <body>
  <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Facturas') }}
        </h2>
    </x-slot>
    <div class="container">
    <h1>Editar</h1>
    <form method="POST" action="{{ route('facturas.update', ['factura'=>$factura->id]) }}">
        @method('put')
        @csrf
        <div class="mb-3">
        <label for="id" class="form-label">Código</label>
        <input type="text" require class="form-control" maxlength="3" style="text-transform:uppercase" id="id" name="id"
        disabled="disabled" value="{{ $factura->id }}">
        <div id="idHelp" class="form-text">Código factura</div>
        </div>

        <label for="nombre_empresa">Proveedor</label>
        <select class="form-select" id="nombre_empresa" name="nombre_empresa" required>
            <option selected disabled value="">Elegir uno...</option>
            @foreach ($proveedores as $proveedor)
                @if ($proveedor->id == $factura->id_proveedor)
                    <option selected value="{{ $proveedor->id }}">{{ $proveedor->nombre_empresa }}</option>
                @else
                    <option value="{{ $proveedor->id }}">{{ $proveedor->nombre_empresa }}</option>
                @endif
            @endforeach
        </select>

        <label for="nombre_producto">Producto</label>
        <select class="form-select" id="nombre_producto" name="nombre_producto" required>
            <option selected disabled value="">Elegir uno...</option>
            @foreach ($productos as $producto)
                @if ($producto->id == $factura->id_producto)
                    <option selected value="{{ $producto->id }}">{{ $producto->nombre_producto }}</option>
                @else
                    <option value="{{ $producto->id }}">{{ $producto->nombre_producto }}</option>
                @endif
            @endforeach
        </select>

        <div class="mb-3">
                    <label for="valor" class="form-label">Valor</label>
                    <input type="number" required class="form-control" id="valor" name="valor"
                        placeholder="Valor factura" value="{{ $factura->valor }}">
                </div>
                <div class="mb-3">
                    <label for="fecha" class="form-label">Fecha</label>
                    <input type="date" required class="form-control" id="fecha" name="fecha"
                        placeholder="Fecha factura" value="{{ $factura->fecha }}">
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <input type="text" required class="form-control" id="descripcion" name="descripcion"
                        placeholder="Descripción factura" value="{{ $factura->descripcion }}">
                </div>

        <div class="mt-3">
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('facturas.index') }}" class="btn btn-warning">Cancelar</a>
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
