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
            {{ __('Historia Clínica') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               <div class="container ">
                   <br>
	       	    <div class="row">
		    		    <div class="col-6">
		    	<h1 class="text-center">
                    Información Personal del Paciente
                </h1>
                <div class="conteiner text-center">
                    <br>
                    <div class="row">
                        <div class="col">
                <img class="h-100 w-100 rounded-full object-cover" src="{{Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" /> 

                        </div>
                        <div class="col">
                            <h1>Datos del Cliente</h1>
                            <br>
                            <div>
                             <h3>Nombre</h3>
                            <h3>Ap. Paterno:</h3>
                            <h3>Ap. MAterno:i</h3>
                            </div>
                        </div>
                    </div>
                </div>
		                  </div>
                    	    <div class="col-6">
		    	
                  <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Historial') }}
                    </x-jet-nav-link>
                    
                     <x-jet-nav-link href="{{ route('consultasexternas') }}" :active="request()->routeIs('consultasexternas')">
                        {{ __('Laboratorio') }}
                    </x-jet-nav-link>
                    
                     <x-jet-nav-link href="{{ route('compras') }}" :active="request()->routeIs('compras')">
                        {{ __('Vacunas') }}
                    </x-jet-nav-link>
                    
                     <x-jet-nav-link href="{{ route('tienda') }}" :active="request()->routeIs('tienda')">
                        {{ __('Episodios') }}
                    </x-jet-nav-link>
                    
                    
                    <x-jet-nav-link href="{{ route('tienda') }}" :active="request()->routeIs('tienda')">
                        {{ __('Imagenes') }}
                    </x-jet-nav-link>
                </div>
                                
                                
		    </div>
		    </div>
	       </div>
            </div>
        </div>
    </div>
</x-app-layout>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
