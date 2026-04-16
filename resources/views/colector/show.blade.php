<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Colecturía') }}
        </h2>
    </x-slot>
                @if(isset($estudiante->estudiantePension->cobroDetalle))
                    <div class="container mx-auto p-4 shadow bg-white mt-3 rounded-base">
                        <div class="grid grid-cols-6 gap-4 mt-2">
                            <div class="col-span-2 md:col-span-2 lg:col-span-1 rounded-base p-4 shadow-lg">
                                <h3 class="text-gray-900">Estudiante: </h3>
                                <p class="mt-1 text-gray-600"> {{ $estudiante->persona->primer_nombre }} {{ $estudiante->persona->segundo_nombre }} {{ $estudiante->persona->apellido_paterno }} {{ $estudiante->persona->apellido_materno }}</p>
                            </div>
                            <div class="col-span-2 md:col-span-2 lg:col-span-1 shadow-lg rounded-base p-4">
                                <h3 class="text-gray-900">Número de cédula:</h3>
                                <p class="mt-1 text-gray-600"> {{ $estudiante->persona->cedula }} </p>
                            </div>
                            <div class="col-span-2 md:col-span-2 lg:col-span-1 shadow-lg rounded-base p-4">
                                <h3 class="text-gray-900">Monto Adeudado:</h3>
                                <p class="mt-1 text-gray-600">${{ number_format($totalAdeudado, 2) }}</p>
                            </div>
                            <div class="col-span-2 md:col-span-2 lg:col-span-1 shadow-lg rounded-base p-4">
                                <h3 class="text-gray-900">Fecha de Último Pago:</h3>
                                <p class="mt-1 text-gray-600"></p>
                            </div>
                            <div class="col-span-2 md:col-span-2 lg:col-span-1 shadow-lg rounded-base p-4">
                                <h3 class="text-gray-900">Seguro contra accidentes:</h3>
                                <p class="mt-1 text-gray-600"></p>
                            </div>
                            <div class="col-span-2 md:col-span-2 lg:col-span-1 shadow-lg rounded-base p-4">
                                <h3 class="text-gray-900">Ambiente Digital:</h3>
                                <p class="mt-1 text-gray-600"></p>
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
                                    <th class="px-6 py-3">Fecha de vencimiento</th>
                                    <th class="px-6 py-3">Pensión</th>
                                    <th class="px-6 py-3">Cancelado</th>
                                    <th class="px-6 py-3">Estado</th>
                                    <th class="px-6 py-3">Registrar Pago</th>
                                </tr>
                            </thead>
                        @foreach($estudiante->estudiantePension->cobroDetalle as $est)
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
                                        <td class="px-6 py-4">{{ $est->fecha_vencimiento }}</td>
                                        <td class="px-6 py-4">${{ $est->getMontoActual() }}</td>
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
                                                <div id="modal-{{ $est->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                                                        <!-- Modal content -->
                                                        <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                                                            <!-- Modal header -->
                                                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                                    Registrar Pago
                                                                </h3>
                                                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal-{{ $est->id }}">
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

                                                                            <input type="hidden" name="cob_detalle_id" value="{{ $est->id }}">

                                                                            <!-- Valor a pagar -->
                                                                            <div class="col-span-4 md:col-span-4 lg:col-span-4">
                                                                                <label 
                                                                                    class="block text-left"
                                                                                >   
                                                                                    Valor a cancelar
                                                                                </label>

                                                                                <input 
                                                                                    type="text" 
                                                                                    name="pago_en_caja" 
                                                                                    id="pago_en_caja"
                                                                                    placeholder="50.00"
                                                                                    class="mt-1 block border-gray-300 w-full rounded-md"
                                                                                >
                                                                                @error('pago_en_caja')
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
                                                                                        data-modal-target="modal-{{ $est->id }}"
                                                                                    >
                                                                                        Registar Pago
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
                
            @endif
</x-app-layout>