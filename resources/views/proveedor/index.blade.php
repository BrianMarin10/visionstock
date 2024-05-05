<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PROVEEDORES</title>
<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Proveedores') }}
            </h2>
        </x-slot>
        <div class="container">
            
             
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            <a href="{{ route('proveedores.create') }}"
                                class="bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded ml-2">Agregar
                                proveedor</a>
                            @if ($error ?? '')
                                <div class="alert alert-danger">{{ $error }}</div>
                            @endif
                            
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Código</th>
                                        <th scope="col">Nit</th>
                                        <th scope="col">Nombre Empresa</th>
                                        <th scope="col">Dirección</th>
                                        <th scope="col">Telefono</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($proveedores as $proveedor)
                                        <tr>
                                            <th scope="row">{{ $proveedor->id }}</th>
                                            <td>{{ $proveedor->nit }}</td>
                                            <td>{{ $proveedor->nombre_empresa }}</td>
                                            <td>{{ $proveedor->direccion }}</td>
                                            <td>{{ $proveedor->telefono }}</td>
                                            <td>{{ $proveedor->email }}</td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <a href="{{ route('proveedores.edit', ['proveedor' => $proveedor->id]) }}"
                                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                        Editar</a></li>


                                                    <form
                                                        action="{{ route('proveedores.destroy', ['proveedor' => $proveedor->id]) }}"
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
