<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Inventario</title>
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Inventarios') }}
            </h2>
        </x-slot>
        <div class="container">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            <a href="{{ route('inventarios.create') }}"
                                class="bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded ml-2">Agregar
                                </a>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Código</th>
                                        <th scope="col">Nombre Proveedor</th>
                                        <th scope="col">Nombre Producto</th>
                                        <th scope="col">Stock</th>
                                        <th scope="col">Fecha Vencimiento</th>
                                        <th scope="col">Acciones </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($inventarios as $inventario)
                                        <tr>
                                            <th scope="row">{{ $inventario->id }}</th>
                                            <td>{{ $inventario->nombre_empresa }}</td>
                                            <td>{{ $inventario->nombre_producto }}</td>
                                            <td>{{ $inventario->stock }}</td>
                                            <td>{{ $inventario->fecha_vencimiento }}</td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <a href="{{ route('inventarios.edit', ['inventario' => $inventario->id]) }}"
                                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                        Editar </a> </li>
                                                    <form
                                                        action="{{ route('inventarios.destroy', ['inventario' => $inventario->id]) }}"
                                                        method="POST" style="display:inline-block">
                                                        @method('delete')
                                                        @csrf
                                                        <input
                                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-2"
                                                            type="submit" value="Delete">
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

