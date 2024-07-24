<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Editar Facturas</title>
    <style>
 body {
            background-color: #f8f9fa;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
            border-radius: 10px 10px 0 0;
            padding: 1rem;
            display: flex;
            align-items: center;
        }

        .card-header i {
            font-size: 1.5rem;
            margin-right: 0.5rem;
        }

        .form-control:focus {
            border-color: #28a745;
            box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }

        .btn-warning {
            background-color: #28a745;
            border-color: #28a745;
            color: #fff;
        }

        .btn-warning:hover {
            background-color: #218838;
            border-color: #1e7e34;
            color: #fff;
        }
    </style>
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Facturas') }}
            </h2>
        </x-slot>
        <div class="container my-5">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">Editar Factura</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('facturas.update', ['factura'=>$factura->id]) }}">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="id" class="form-label">Código</label>
                            <input type="text" require class="form-control" maxlength="3" style="text-transform:uppercase" id="id" name="id"
                            disabled="disabled" value="{{ $factura->id }}">
                            <div id="idHelp" class="form-text">Código factura</div>
                        </div>

                        <div class="mb-3">
                            <label for="nombre_empresa" class="form-label">Proveedor</label>
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
                        </div>

                        <div class="mb-3">
                            <label for="nombre_producto" class="form-label">Producto</label>
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
                        </div>

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

                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                            <a href="{{ route('facturas.index') }}" class="btn btn-warning">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </x-app-layout>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>