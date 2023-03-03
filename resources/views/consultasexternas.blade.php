<?/**
*============================================================================
* Name        : welcome
* Author      : Yovan Y. enovore
* Version     : 1.01
* Copyright   : VANCLAMA Ⓒ 2022
* Description : Bienvenida.
*============================================================================
*/?>

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Consultas Externas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="text-white bg-danger">
                    <center>
                        <h1>Aun Estamos trabajando... muy proto estara Habilitado</h1>
                    </center>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
