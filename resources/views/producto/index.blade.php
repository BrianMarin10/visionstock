<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PRODUCTOS</title>
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Productos') }}
            </h2>
        </x-slot>
        <div class="container">
            <h1>Listado de Productos</h1>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            <a href="{{ route('productos.create') }}"
                                class="bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded ml-2">Agregar
                                producto</a>
                            @if ($error ?? '')
                                <div class="alert alert-danger">{{ $error }}</div>
                            @endif
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Código</th>
                                        <th scope="col">Nombre Producto</th>
                                        <th scope="col">Tipo Producto</th>
                                        <th scope="col">Descripción</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productos as $producto)
                                        <tr>
                                            <th scope="row">{{ $producto->id }}</th>
                                            <td>{{ $producto->nombre_producto }}</td>
                                            <td>{{ $producto->tipo_producto }}</td>
                                            <td>{{ $producto->descripcion }}</td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <a href="{{ route('productos.edit', ['producto' => $producto->id]) }}"
                                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                        Editar</a></li>


                                                    <form
                                                        action="{{ route('productos.destroy', ['producto' => $producto->id]) }}"
                                                        method='POST' style="display: inline-block">
                                                        @method('delete')
                                                        @csrf
                                                        <input
                                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-2"
                                                            type="submit" value="Eliminar">
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </x-app-layout>
</body>
