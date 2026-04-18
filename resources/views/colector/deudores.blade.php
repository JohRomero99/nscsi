<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Resumen de Deudores') }}
        </h2>
    </x-slot>

    <div class="grid grid-cols-4 gap-4 mt-2 p-5">
        <div class="col-span-2 md:col-span-2 lg:col-span-1">
            <!-- CARD -->
            <div class="bg-gray-50 shadow-lg rounded-xl p-5">
                
                <!-- Título -->
                <p class="text-sm text-gray-500 mb-1">1 Mes de Mora</p>

                <!-- Número principal -->
                <h2 class="text-3xl font-bold text-heading">$1,250.00</h2>

                <!-- Sub info -->
                <p class="text-sm text-gray-400 mt-1">10 estudiantes</p>

                <!-- Línea -->
                <div class="border-t mt-4 pt-3 flex justify-end items-center">

                    <!-- Acción -->
                    <a href="#" class="text-sm text-brand hover:underline">
                        Ver →
                    </a>

                </div>
            </div>
        </div>

        <div class="col-span-2 md:col-span-2 lg:col-span-1">
            <!-- CARD -->
            <div class="bg-gray-50 shadow-lg rounded-xl p-5">
                
                <!-- Título -->
                <p class="text-sm text-gray-500 mb-1">1 Mes de Mora</p>

                <!-- Número principal -->
                <h2 class="text-3xl font-bold text-heading">$1,250.00</h2>

                <!-- Sub info -->
                <p class="text-sm text-gray-400 mt-1">10 estudiantes</p>

                <!-- Línea -->
                <div class="border-t mt-4 pt-3 flex justify-end items-center">

                    <!-- Acción -->
                    <a href="#" class="text-sm text-brand hover:underline">
                        Ver →
                    </a>

                </div>
            </div>
        </div>

        <div class="col-span-2 md:col-span-2 lg:col-span-1">
            <!-- CARD -->
            <div class="bg-gray-50 shadow-lg rounded-xl p-5">
                
                <!-- Título -->
                <p class="text-sm text-gray-500 mb-1">1 Mes de Mora</p>

                <!-- Número principal -->
                <h2 class="text-3xl font-bold text-heading">$1,250.00</h2>

                <!-- Sub info -->
                <p class="text-sm text-gray-400 mt-1">10 estudiantes</p>

                <!-- Línea -->
                <div class="border-t mt-4 pt-3 flex justify-end items-center">

                    <!-- Acción -->
                    <a href="#" class="text-sm text-brand hover:underline">
                        Ver →
                    </a>

                </div>
            </div>
        </div>

        <div class="col-span-2 md:col-span-2 lg:col-span-1">
            <!-- CARD -->
            <div class="bg-gray-50 shadow-lg rounded-xl p-5">
                
                <!-- Título -->
                <p class="text-sm text-gray-500 mb-1">1 Mes de Mora</p>

                <!-- Número principal -->
                <h2 class="text-3xl font-bold text-heading">$1,250.00</h2>

                <!-- Sub info -->
                <p class="text-sm text-gray-400 mt-1">10 estudiantes</p>

                <!-- Línea -->
                <div class="border-t mt-4 pt-3 flex justify-end items-center">

                    <!-- Acción -->
                    <a href="#" class="text-sm text-brand hover:underline">
                        Ver →
                    </a>

                </div>
            </div>
        </div>
    </div>

        <div class="grid grid-cols-2 gap-4 p-4">
            <div class="col-span-2 md:col-span-2 lg:col-span-2">
                <table class="w-full text-left text-gray-600">
                    <!-- HEADER -->
                    <thead class="bg-gray-100 text-gray-700 text-center">
                        <tr>
                            <th class="px-6 py-3">Nivel de Mora</th>
                            <th class="px-6 py-3">Estudiante</th>
                            <th class="px-6 py-3">Monto adeudado</th>
                            <th class="px-6 py-3">Mas detalles</th>
                        </tr>
                    </thead>

                    <!-- BODY -->
                    <tbody>
                        @foreach($niveles as $nivel)
                            <tr class="border-t odd:bg-white even:bg-gray-50 hover:bg-blue-50 transition text-center">

                                <!-- Nivel -->
                                <td class="px-6 py-2">
                                    {{ $nivel['meses'] }} Mes(es)
                                </td>

                                <!-- Cantidad estudiantes -->
                                <td class="px-6 py-2">
                                    {{ count($nivel['estudiantes']) }} Estudiantes
                                </td>

                                <!-- Total deuda -->
                                <td class="px-6 py-2">
                                    ${{ number_format($nivel['total'], 2) }}
                                </td>

                                <!-- Botón -->
                                <td class="px-6 py-2">
                                    <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                                        Ver detalles
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>  

    <div class="grid grid-cols-2 gap-4 mt-2 p-5">
        <!-- Total de Estudiantes -->
        <div class="col-span-2 md:col-span-2 lg:col-span-1">
            <!-- CARD -->
            <div class="bg-gray-100 shadow-lg rounded-xl p-5">
                
                <!-- Título -->
                <p class="text-sm text-gray-500 mb-1">Total de Estudiantes</p>

                <!-- Número principal -->
                <h2 class="text-3xl font-bold text-heading">$1,250.00</h2>

                <!-- Línea -->
                <div class="border-t mt-4 pt-3 flex justify-end items-center">

                </div>
            </div>
        </div>

        <!-- Deuda Total -->
        <div class="col-span-2 md:col-span-2 lg:col-span-1">
            <!-- CARD -->
            <div class="bg-green-800 shadow-lg rounded-xl p-5">
                
                <!-- Título -->
                <p class="text-sm text-white mb-1">Deuda Total</p>

                <!-- Número principal -->
                <h2 class="text-3xl text-white font-bold text-heading">$1,250.00</h2>

                <!-- Línea -->
                <div class="border-t mt-4 pt-3 flex justify-end items-center">

                </div>
            </div>
        </div>
    </div>

</x-app-layout>