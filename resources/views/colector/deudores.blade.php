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
                
                <p class="text-1xl text-gray-500 mb-1">1 Mes de Mora</p>

                <h2 class="text-3xl font-bold">
                    ${{ number_format($cards[1]['total'], 2) }}
                </h2>

                <p class="text-sm text-gray-400 mt-1">
                    {{ count($cards[1]['estudiantes']) }} estudiantes
                </p>

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
                
                <p class="text-1xl text-gray-500 mb-1">2 Meses de Mora</p>

                <h2 class="text-3xl font-bold">
                    ${{ number_format($cards[2]['total'], 2) }}
                </h2>

                <p class="text-sm text-gray-400 mt-1">
                    {{ count($cards[2]['estudiantes']) }} estudiantes
                </p>

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
                
                <p class="text-1xl text-gray-500 mb-1">3 Meses de Mora</p>

                <h2 class="text-3xl font-bold">
                    ${{ number_format($cards[3]['total'], 2) }}
                </h2>

                <p class="text-sm text-gray-400 mt-1">
                    {{ count($cards[3]['estudiantes']) }} estudiantes
                </p>

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
                
                <p class="text-1xl text-gray-500 mb-1">4+ Meses de Mora en adelante</p>

                <h2 class="text-3xl font-bold">
                    ${{ number_format($cards[4]['total'], 2) }}
                </h2>

                <p class="text-sm text-gray-400 mt-1">
                    {{ count($cards[4]['estudiantes']) }} estudiantes
                </p>

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
                    <thead class="bg-gray-200 text-center">
                        <tr>
                            <th class="px-6 py-4">Nivel de Mora</th>
                            <th class="px-6 py-4">Estudiante</th>
                            <th class="px-6 py-4">Monto adeudado</th>
                            <th class="px-6 py-4">Mas detalles</th>
                        </tr>
                    </thead>

                    <!-- BODY -->
                    <tbody>
                        @foreach($nivelesTabla as $nivel)
                            <tr class="border-t odd:bg-white even:bg-gray-50 hover:bg-blue-50 transition text-center">

                                <!-- Nivel -->
                                <td class="px-6 py-2">
                                    {{ $nivel['meses'] }} Mes(es)
                                </td>

                                <!-- Estudiantes -->
                                <td class="px-6 py-2">
                                    {{ count($nivel['estudiantes']) }} Estudiantes
                                </td>

                                <!-- Total -->
                                <td class="px-6 py-2">
                                    ${{ number_format($nivel['total'], 2) }}
                                </td>

                                <!-- Botón -->
                                <td class="px-6 py-2">
                                    <a href="{{ route('colector.deudores.detalle', $nivel['meses']) }}" 
                                        class="bg-gray-500 text-white px-4 py-2 rounded-md inline-block">
                                        <i class="fa-solid fa-list"></i> Ver detalles
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>  

    <div class="grid grid-cols-2 gap-4 mt-2 p-5 m-10">
        <div class="col-span-2 md:col-span-2 lg:col-span-1">
            <div class="bg-gray-100 shadow-lg rounded-xl p-5 hover:shadow-xl transition">
                
                <!-- Header -->
                <div class="flex justify-between items-center">
                    <p class="text-sm text-gray-500">Total de Estudiantes</p>
                    <i class="fa-solid fa-users text-gray-400"></i>
                </div>

                <!-- Número -->
                <h2 class="text-4xl font-bold text-heading mt-2">
                    {{ count($totalEstudiantes) }}
                </h2>

                <!-- Línea + detalle -->
                <div class="border-t mt-4 pt-3 flex justify-between items-center text-sm text-gray-500">
                    <span>Con deuda registrada</span>
                </div>
            </div>
        </div>

        <div class="col-span-2 md:col-span-2 lg:col-span-1">
            <div class="bg-gray-800 shadow-lg rounded-xl p-5 hover:shadow-xl transition">
                
                <!-- Header -->
                <div class="flex justify-between items-center">
                    <p class="text-sm text-white">Deuda Total</p>
                    <i class="fa-solid fa-dollar-sign text-green-200"></i>
                </div>

                <!-- Número -->
                <h2 class="text-4xl text-white font-bold mt-2">
                    ${{ number_format($deudaTotal, 2) }}
                </h2>

                <!-- Línea + detalle -->
                <div class="border-t border-white-700 mt-4 pt-3 flex justify-between items-center text-sm text-green-200">
                    <span>Total acumulado</span>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>