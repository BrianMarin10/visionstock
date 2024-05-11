<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>PQRS</title>

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
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('PQRS') }}</h2>
        </x-slot>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-edit"></i> Solución PQRS
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('pqrss.update', ['pqrs'=>$pqrs->id]) }}">
                                @method('put')
                                @csrf
                                <div class="mb-3">
                                    <label for="id" class="form-label">Código</label>
                                    <input type="text" require class="form-control" maxlength="3" style="text-transform:uppercase" id="id" name="id" disabled="disabled" value="{{ $pqrs->id }}">
                                    <div id="idHelp" class="form-text">Código PQRS</div>
                                </div>

                                <label for="nombre">Nombre</label>
                                <select class="form-select" id="nombre" name="nombre" required>
                                    <option selected disabled value="">Elegir uno...</option>
                                    @foreach ($clientes as $cliente)
                                        @if ($cliente->id == $pqrs->id_cliente)
                                            <option selected value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                                        @else
                                            <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                                        @endif
                                    @endforeach
                                </select>

                                <div class="mb-3">
                                    <label for="estado" class="form-label">Estado</label>
                                    <select class="form-select" name="estado">
                                        <option selected>{{ $pqrs->estado }}</option>
                                        <option value="Pendiente">Pendiente</option>
                                        <option value="En Espera">En Espera</option>
                                        <option value="Atendido">Atendido</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="fecha" class="form-label">Fecha PQRS</label>
                                    <input type="date" required class="form-control" id="fecha" name="fecha" value="{{ $pqrs->fecha }}">
                                </div>
                                <div class="mb-3">
                                    <label for="observacion" class="form-label">Observación</label>
                                    <input type="text" required class="form-control" id="observacion" name="observacion" value="{{ $pqrs->observacion }}">
                                </div>
                                <div class="mb-3">
                                    <label for="solucion" class="form-label">Solución</label>
                                    <input type="text" class="form-control" id="solucion" name="solucion" value="{{ $pqrs->solucion }}">
                                </div>

                                <div class="mt-3 text-center">
                                    <button type="submit" class="btn btn-primary">Solucionar</button>
                                    <a href="{{ route('pqrss.index') }}" class="btn btn-warning">Cancelar</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>