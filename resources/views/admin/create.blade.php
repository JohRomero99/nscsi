<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista de Usuarios') }}
        </h2>
    </x-slot>

    <div class="container bg-white p-4">
        <div class="overflow-x-auto rounded-lg border border-gray-200 shadow-sm">
            <table class="w-full text-left text-gray-600">

                <!-- HEADER -->
                <thead class="bg-gray-100 text-gray-700 text-center">
                    <tr>
                        <th class="p-4">
                            <input type="checkbox" class="w-4 h-4">
                        </th>
                        <th class="px-6 py-3">Cédula</th>
                        <th class="px-6 py-3">Nombres</th>
                        <th class="px-6 py-3">Apellidos</th>
                        <th class="px-6 py-3">correo</th>
                        <th class="px-6 py-3">rol</th>
                        <th class="px-6 py-3">Acción</th>
                    </tr>
                </thead>

                <!-- BODY -->
                <tbody>

                    <!-- fila -->
                    @foreach( $user as $user)
                        <tr class="border-t odd:bg-white even:bg-gray-50 hover:bg-blue-50 transition text-center">
                            <td class="p-4"><input type="checkbox" class="w-4 h-4"></td>
                            <td class="px-6 py-4 font-medium text-gray-800">{{ $user->persona->cedula }}</td>
                            <td class="px-6 py-4 font-medium text-gray-800">{{ $user->persona->primer_nombre }} {{ $user->persona->segundo_nombre }}</td>
                            <td class="px-6 py-4 font-medium text-gray-800">{{ $user->persona->apellido_paterno }} {{ $user->persona->apellido_materno }}</td>
                            <td class="px-6 py-4">{{ $user->email }}</td>
                            <td class="px-6 py-4 font-semibold">$2999</td>
                            <td class="px-6 py-4">
                                <a href="{{ route('admin.edit', $user->id) }}"
                                    class="text-white bg-blue-700 hover:bg-blue-800 font-bold py-3 px-4 inline-block">
                                    Editar <i class="fa-regular fa-pen-to-square"></i>
                                </a>
                                <button 
                                    class="rounded-lg bg-red-900 text-white font-bold py-3 px-4 rounded-sm"
                                    id="boton">
                                    Eliminar <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>