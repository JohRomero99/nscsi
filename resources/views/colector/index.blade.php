<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Colecturía') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-4 py-8">
        <div class="bg-neutral-primary-soft block p-6 border border-default rounded-base shadow-xs hover:bg-neutral-secondary-medium">
            <form action="{{ route('colector.buscarEstudiante') }}" method="GET">
                <div class="grid grid-cols-2 gap-4">
                    <div class="col-span-2 md:col-span-2 lg:col-span-2">
                        <h3 class="text-lg font-medium text-gray-900">Buscar Estudiante <i class="fa-regular fa-user"></i></h3>
                        <input 
                            type="text" 
                            name="buscarEstudiante"
                            placeholder="Ingrese el nombre o código del estudiante"
                            class="mt-1 block border-gray-300 w-full rounded-md mt-3"
                        >
                        @error('buscarEstudiante')
                            <p 
                                class="mt-2 text-pink-600 text-sm">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="col-span-2 md:col-span-2 lg:col-span-2">
                        <div class="text-center">
                            <button 
                                class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                                Buscar <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>

            @if(isset($cobroDetalle))
                
                    <!-- <div class="p-3 border-b hover:bg-gray-100 flex justify-between">
                        <div>
                            
                             <br>
                            <span class="text-sm text-gray-500">
                                
                            </span>
                        </div>
                    </div> -->
                    <div class="container mx-auto p-4 shadow bg-white mt-3 rounded-base">
                        <div class="grid grid-cols-6 gap-4 mt-2">
                            <div class="col-span-2 md:col-span-2 lg:col-span-1 rounded-base p-4 shadow-lg">
                                <h3 class="text-gray-900">Estudiante:</h3>
                                <p class="mt-1 text-gray-600"></p>
                            </div>
                            <div class="col-span-2 md:col-span-2 lg:col-span-1 shadow-lg rounded-base p-4">
                                <h3 class="text-gray-900">Número de cédula:</h3>
                                <p class="mt-1 text-gray-600"></p>
                            </div>
                            <div class="col-span-2 md:col-span-2 lg:col-span-1 shadow-lg rounded-base p-4">
                                <h3 class="text-gray-900">Monto Adeudado:</h3>
                                <p class="mt-1 text-gray-600">$150.00</p>
                            </div>
                            <div class="col-span-2 md:col-span-2 lg:col-span-1 shadow-lg rounded-base p-4">
                                <h3 class="text-gray-900">Fecha de Último Pago:</h3>
                                <p class="mt-1 text-gray-600">2024-05-15</p>
                            </div>
                            <div class="col-span-2 md:col-span-2 lg:col-span-1 shadow-lg rounded-base p-4">
                                <h3 class="text-gray-900">Seguro contra accidentes:</h3>
                                <p class="mt-1 text-gray-600">Si</p>
                            </div>
                            <div class="col-span-2 md:col-span-2 lg:col-span-1 shadow-lg rounded-base p-4">
                                <h3 class="text-gray-900">Ambiente Digital:</h3>
                                <p class="mt-1 text-gray-600">Si</p>
                            </div>
                        </div>
                    </div>
                
                <div class="grid grid-cols-2 gap-4 mt-5">
                    <div class="col-span-2 md:col-span-2 lg:col-span-2">
                        <table class="w-full text-left text-gray-600">
                            <!-- HEADER -->
                            <thead class="bg-gray-100 text-gray-700 text-center">
                                <tr>
                                    <th class="px-6 py-3">Concepto</th>
                                    <th class="px-6 py-3">Pensión</th>
                                    <th class="px-6 py-3">Fecha de vencimiento</th>
                                    <th class="px-6 py-3">Total a Pagar</th>
                                    <th class="px-6 py-3">Estado</th>
                                    <th class="px-6 py-3">Registrar Pago</th>
                                </tr>
                            </thead>
                        @foreach($cobroDetalle as $est)
                            <!-- BODY -->
                            <tbody>
                                
                                    <!-- fila -->
                                    <tr class="border-t odd:bg-white even:bg-gray-50 hover:bg-blue-50 transition text-center">
                                        <td class="px-6 py-4 text-left">
                                            {{ $est->concepto->concepto }}
                                            <br>
                                            Vto: 31 de Abril 2026
                                        </td>
                                        <!-- <td class="px-6 py-4"></td> -->
                                        <td class="px-6 py-4">${{ $est->estudiantePension->valorPension->pension_descuento }}</td>
                                        <td class="px-6 py-4">{{ $est->fecha_vencimiento }}</td>
                                        <td class="px-6 py-4">${{ $est->getSaldo() }}</td>
                                        <td class="px-6 py-4">
                                            <span class="bg-yellow-300 text-yellow-800 px-3 py-1 rounded-full font-semibold">
                                                {{ $est->getEstado() }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="flex justify-center">
                                                <!-- Modal toggle -->
                                                <button 
                                                    data-modal-target="modal-1" 
                                                    data-modal-toggle="modal-1" 
                                                    class="" 
                                                    type="button">
                                                    Registrar Pago 
                                                    <i class="fa-solid fa-coins"></i>
                                                </button>

                                                <!-- Main modal -->
                                                <div id="modal-1" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                                                        <!-- Modal content -->
                                                        <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                                                            <!-- Modal header -->
                                                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                                    Registrar Pago
                                                                </h3>
                                                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal-1">
                                                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                                    </svg>
                                                                    <span class="sr-only">Close modal</span>
                                                                </button>
                                                            </div>
                                                            <!-- Modal body -->
                                                            <div class="p-4">
                                                                <form action="{{ route('colector.pago') }}" method="POST">
                                                                    @csrf
                                                                    @method('POST')
                                                                    <div class="p-8 bg-white space-y-1 text-gray-700">
                                                                        <div class="grid grid-cols-4 gap-4">

                                                                            <!-- Cédula del Estudiante o DNI -->
                                                                            <div class="col-span-4 md:col-span-4 lg:col-span-4">
                                                                                <label 
                                                                                    class="block text-left"
                                                                                >   
                                                                                    Cédula
                                                                                </label>

                                                                                <input 
                                                                                    type="text" 
                                                                                    name="cedula" 
                                                                                    id="cedula"
                                                                                    placeholder="0955546601..."
                                                                                    value= "0955546601" 
                                                                                    class="mt-1 block border-gray-300 w-full rounded-md"
                                                                                >
                                                                                @error('cedula')
                                                                                    <p 
                                                                                        class="mt-2 text-pink-600 text-sm">
                                                                                        {{ $message }}
                                                                                    </p>
                                                                                @enderror
                                                                            </div>

                                                                            <!-- Nombres -->
                                                                            <div class="col-span-4 md:col-span-4 lg:col-span-4">
                                                                                <label 
                                                                                    class="block text-left"
                                                                                >   
                                                                                    Estudiante
                                                                                </label>

                                                                                <input 
                                                                                    type="text" 
                                                                                    name="nombres" 
                                                                                    id="nombres"
                                                                                    value = "John Jairo Romero Sanchez" 
                                                                                    class="mt-1 block border-gray-300 w-full rounded-md"
                                                                                >
                                                                                @error('nombres')
                                                                                    <p 
                                                                                        class="mt-2 text-pink-600 text-sm">
                                                                                        {{ $message }}
                                                                                    </p>
                                                                                @enderror
                                                                            </div>

                                                                            <!-- Pensión -->
                                                                            <div class="col-span-4 md:col-span-4 lg:col-span-4">
                                                                                <label 
                                                                                    class="block text-left"
                                                                                >   
                                                                                    Pensión
                                                                                </label>

                                                                                <input 
                                                                                    type="text" 
                                                                                    name="pensión" 
                                                                                    id="pensión"
                                                                                    value = "" 
                                                                                    class="mt-1 block border-gray-300 w-full rounded-md"
                                                                                >
                                                                                @error('pension')
                                                                                    <p 
                                                                                        class="mt-2 text-pink-600 text-sm">
                                                                                        {{ $message }}
                                                                                    </p>
                                                                                @enderror
                                                                            </div>

                                                                            <!-- Valor a pagar -->
                                                                            <div class="col-span-4 md:col-span-4 lg:col-span-4">
                                                                                <label 
                                                                                    class="block text-left"
                                                                                >   
                                                                                    Valor a pagar
                                                                                </label>

                                                                                <input 
                                                                                    type="text" 
                                                                                    name="valor_a_pagar" 
                                                                                    id="valor_a_pagar"
                                                                                    value = "$50.00" 
                                                                                    class="mt-1 block border-gray-300 w-full rounded-md"
                                                                                >
                                                                                @error('valor_a_pagar')
                                                                                    <p 
                                                                                        class="mt-2 text-pink-600 text-sm">
                                                                                        {{ $message }}
                                                                                    </p>
                                                                                @enderror
                                                                            </div>

                                                                            <div class="col-span-4 md:col-span-4 lg:col-span-4">
                                                                                <div class="text-center">
                                                                                    <button 
                                                                                        type="button" 
                                                                                        class="bg-blue-500 text-white font-bold p-3 px-4 rounded" 
                                                                                        data-modal-hide="modal-1"
                                                                                    >
                                                                                        <i class="fa-solid fa-trash-can"></i>
                                                                                        Cerrar
                                                                                    </button>

                                                                                    <button 
                                                                                        type="submit" 
                                                                                        class="bg-green-500 text-white font-bold p-3 px-4 rounded" 
                                                                                    >
                                                                                        Pagar
                                                                                        <i class="fa-solid fa-circle-check"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </form>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                        @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>  
                
            @else
                <p class="text-gray-500">Seleccione un estudiante para ver la información</p>
            @endif
        </div>
    </div>
    <script>
        // Mostrar mensaje de datos enviados.
        @if (session('create'))
            Swal.fire({
                title: "¡Exito!",
                text: "Usuario creado exitosamente.",
                icon: "success"
            });
        @endif
    </script>
</x-app-layout>