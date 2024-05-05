<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Proveedor</title>
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Proveedores') }}
            </h2>
        </x-slot>
        <div class="container">
            <form method="POST" action="{{ route('proveedores.update', ['proveedor' => $proveedor->id]) }}">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="codigo" class="form-label">Id</label>
                    <input type="hidden" class="form-control" id="id" aria-describedby="codigoHelp"
                        name="id" disabled="disabled" value="{{ $proveedor->id }}">
                    <div id="codigoHelp" class="form-text">Proveedor Id</div>
                </div>
                <div class="mb-3">
                    <label for="nit" class="form-label">Nit</label>
                    <input type="number" required class="form-control" id="nit" name="nit"
                        value="{{ $proveedor->nit }}">
                </div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre Empresa</label>
                    <input type="text" required class="form-control" id="nombre" name="nombre"
                        value="{{ $proveedor->nombre_empresa }}">
                </div>
                <div class="mb-3">
                    <label for="direccion" class="form-label">Dirección</label>
                    <input type="text" required class="form-control" id="direccion" name="direccion"
                        value="{{ $proveedor->direccion }}">
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Telefono</label>
                    <input type="number" required class="form-control" id="telefono" name="telefono"
                        min="1" max="9947483647" value="{{ $proveedor->telefono }}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" required class="form-control" id="email" name="email"
                        value="{{ $proveedor->email }}">
                </div>
                
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <a href="{{ route('proveedores.index') }}" class="btn btn-warning">Cancelar</a>
                </div>
            </form>
        </div>
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->
    </x-app-layout>
</body>

</html>
