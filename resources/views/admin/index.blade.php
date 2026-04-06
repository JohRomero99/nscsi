<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista de Usuarios') }}
        </h2>
    </x-slot>

    <div class="container bg-white p-4">
        <a href="{{ route('admin.create') }}"
            class="text-white bg-green-700 hover:bg-green-800 font-bold py-3 px-4 mb-5 inline-block">
            Crear Usuario <i class="fa-solid fa-user-plus"></i>
        </a>
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
                            <td class="px-6 py-4 font-semibold">{{ $user->getRoleNames()->first() }}</td>
                            <td class="px-6 py-4">
                                <a href="{{ route('admin.edit', $user->id) }}"
                                    class="text-white bg-blue-700 hover:bg-blue-800 font-bold py-3 px-4 inline-block">
                                    Editar <i class="fa-regular fa-pen-to-square"></i>
                                </a>

                                <a href="{{ route('admin.destroy', $user->id) }}"
                                    class="rounded-lg bg-red-900 text-white font-bold py-3 px-4 rounded-sm inline-block">
                                    Eliminar <i class="fa-solid fa-trash-can"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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
        @if (session('update'))
            Swal.fire({
                title: "¡Exito!",
                text: "Usuario actualizado exitosamente.",
                icon: "success"
            });
        @endif
        @if (session('delete'))
            Swal.fire({
                title: "¡Exito!",
                text: "Usuario eliminado exitosamente.",
                icon: "success"
            });
        @endif
    </script>
</x-app-layout>