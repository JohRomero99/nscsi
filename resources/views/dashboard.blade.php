<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Te damos la bienvenida a un nuevo sistema') }}
        </h2>
    </x-slot>

    <div class="container mx-auto bg-white p-6 mt-8">
        <div class="container mx-auto py-6 px-6">
            <h3>Bienvenido, {{$user->persona->primer_nombre}} {{$user->persona->apellido_paterno}}:</h3>
        </div>
        <table class="table-auto w-full">
            <thead>
                <tr class="bg-gray-300 text-center">
                    <th class="px-6 py-6">Cédula</th>                       
                    <th class="px-6 py-6">Nombres</th>
                    <th class="px-6 py-6">Curso</th>
                    <th class="px-6 py-6">Correo</th>
                    <th class="px-6 py-6">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($estuRepre as $estuRepre)
                    <tr class="bg-gray-100 text-center">
                        <td class="px-4 py-4"> {{$estuRepre->estudiante->persona->cedula}} </td>
                        <td class="px-4 py-4"> {{$estuRepre->estudiante->persona->primer_nombre}} {{$estuRepre->estudiante->persona->apellido_paterno}} </td>
                        <td class="px-4 py-4"> 5A </td>
                        <td class="px-4 py-4"> {{$estuRepre->representante->persona->user->email}} </td>
                        <td class="px-4 py-4">
                            <a class="bg-blue-500 hover:bg-blue-400 text-white font-bold px-3 py-3 border-b-4 border-blue-700 hover:border-blue-500 rounded" href="{{ route('ficha.aspirante.create',['id' => $estuRepre->estudiante->persona->id]) }}">
                                <i class="fas fa-id-badge"></i> Admisión
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
