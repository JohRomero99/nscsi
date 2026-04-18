<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Resumen de Deudores') }}
        </h2>

    </x-slot>

    <div class="grid grid-cols-2 gap-4 p-4">
        <div class="col-span-2 md:col-span-2 lg:col-span-2">
            <table class="w-full text-left text-gray-600">
                <!-- HEADER -->
                <thead class="bg-gray-300 text-center">
                    <tr>
                        <th class="px-6 py-3">Cedula</th>
                        <th class="px-6 py-3">Nombres</th>
                        <th class="px-6 py-3">Apellidos</th>
                        <th class="px-6 py-3">Total</th>
                        <th class="px-6 py-3">Realizar Pago</th>
                    </tr>
                </thead>

                <!-- BODY -->
                <tbody>
                    @foreach($resultado as $item)
                        <tr class="border-t odd:bg-white even:bg-gray-50 hover:bg-blue-50 transition text-center">
                            <td class="px-6 py-4">
                                {{ $item['estudiante']->persona->cedula }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item['estudiante']->persona->primer_nombre }} {{ $item['estudiante']->persona->segundo_nombre }}
                            </td>
                            <td class="px-6 py-4"> 
                                {{ $item['estudiante']->persona->apellido_paterno }} {{ $item['estudiante']->persona->apellido_materno }}
                            </td>

                            <td class="px-6 py-4">
                                ${{ number_format($item['total'], 2) }}
                            </td>

                            <td class="px-6 py-4">
                                <a href="{{ route('colector.show', $item['estudiante']->id ) }}" 
                                    class="flex justify-center  items-center gap-2 text-blue-600 hover:text-blue-800 font-medium">
                                        Seleccionar
                                    <i class="fa-solid fa-circle-arrow-right"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div> 

    <div class="mt-4 flex justify-center">
        {{ $resultado->links('pagination::tailwind') }}
    </div>

</x-app-layout>