<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Agregar factura</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #007bff;
            color: white;
            border-radius: 10px 10px 0 0;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .btn-warning {
            color: white;
            background-color: #ffc107;
            border-color: #ffc107;
        }
        .btn-warning:hover {
            color: white;
            background-color: #e0a800;
            border-color: #e0a800;
        }
    </style>
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Agregar Factura') }}
            </h2>
        </x-slot>
        <div class="container my-5">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">Nueva Factura</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('facturas.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="id" class="form-label">Código</label>
                            <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled="disabled">
                            <div id="idHelp" class="form-text">El código se generará automáticamente</div>
                        </div>

                        <div class="mb-3">
                            <label for="nombre_empresa" class="form-label">Nombre Proveedor</label>
                            <select class="form-select" id="nombre_empresa" name="nombre_empresa" required>
                                <option selected disabled value="">Elegir uno...</option>
                                @foreach ($proveedores as $proveedor)
                                    <option value="{{ $proveedor->id }}">{{ $proveedor->nombre_empresa }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="nombre_producto" class="form-label">Nombre Producto</label>
                            <select class="form-select" id="nombre_producto" name="nombre_producto" required>
                                <option selected disabled value="">Elegir uno...</option>
                                @foreach ($productos as $producto)
                                    <option value="{{ $producto->id }}">{{ $producto->nombre_producto }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="valor" class="form-label">Valor</label>
                            <input type="number" required class="form-control" id="valor" name="valor">
                        </div>

                        <div class="mb-3">
                            <label for="fecha" class="form-label">Fecha</label>
                            <input type="date" required class="form-control" id="fecha" name="fecha">
                        </div>

                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary">Guardar</button>
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