<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('TotalHealth') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Bienvenido a TotalHealth Administrador!") }}
                    <div class="bg-image"></div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .bg-image {
            background-image: url('{{ asset('images/Admin.png') }}');
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 420px; /* Ajusta la altura según tus necesidades */
        }
    </style>
</x-app-layout>
