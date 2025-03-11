<x-app-layout>

<div class="text-center pt-4 pb-8">
    <div class="flex justify-center items-center gap-2">
        <div class="w-16 border-t-2 border-gray-200"></div>
        <span class="bg-blue-200 text-blue-700 rounded-full w-12 h-12 flex items-center justify-center text-2xl shadow-md">
            🎓
        </span>
        <div class="w-16 border-t-2 border-gray-200"></div>
    </div>
    <h1 class="text-4xl font-bold text-gray-800 mt-2">
        Proceso de Admisión 2025 - 2026
    </h1>
    <p class="text-lg text-gray-600 mt-4 max-w-6xl mx-auto leading-relaxed">
    Aquí podrá revisar la lista de estudiantes matriculados y gestionar los datos registrados para el ciclo escolar 2025 - 2026.
    </p>
    <div class="w-20 h-1 bg-blue-300 rounded-full mx-auto mt-3"></div>
</div>


<div class="relative overflow-x-auto shadow-lg rounded-md mx-auto mt-3 max-w-7xl">
    <table class="min-w-full text-left text-gray-700">
        <thead class="bg-gray-200 text-gray-900">
            <tr class="text-center">
                <th scope="col" class="px-6 py-6 text-md font-semibold">
                    Cédula
                </th>
                <th scope="col" class="px-6 py-6 text-md font-semibold">
                    Nombres
                </th>
                <th scope="col" class="px-6 py-6 text-md font-semibold">
                    Apellidos
                </th>
                <th scope="col" class="px-6 py-6 text-md font-semibold">
                    Año de básica
                </th>
                <th scope="col" class="px-6 py-6 text-md font-semibold">
                    Usuario
                </th>
                <th scope="col" class="px-6 py-6 text-md font-semibold">
                    Contraseña
                </th>
                <th scope="col" class="px-6 py-6 text-md font-semibold">
                    Descargar
                </th>
            </tr>
        </thead>
        <tbody>
            @if ($matriculacion->isEmpty())
                <tr>
                    <td colspan="5" class="text-center bg-white py-6 text-gray-600 text-md">
                        <i class="fa-solid fa-circle-exclamation text-red-500"></i>  
                        No existen registros por el momento
                    </td>
                </tr>
            @else
                @foreach ($matriculacion as $registro)
                    <tr class="text-center bg-white border-b hover:bg-gray-50 transition-colors duration-300">
                        <th scope="row" class="px-8 py-3 text-gray-900 font-medium">
                            {{ $registro->cedula_estudiante }}
                        </th>
                        <td class="px-8 py-3">
                            {{ $registro->primer_nombre_estudiante }} {{ $registro->egundo_nombre_estudiante }}
                        </td>
                        <td class="px-8 py-3">
                            {{ $registro->apellido_paterno_estudiante }} {{ $registro->apellido_materno_estudiante }}
                        </td>
                        <td class="px-8 py-3">
                            {{ $registro->ano_basica }}
                        </td>
                        <td class="px-8 py-3">
                            Nsc.ejemplo
                        </td>
                        <td class="px-8 py-3">
                            Nsc.contraseña
                        </td>
                        <td class="px-8 py-3">
                            <a href="{{ route('matriculacion.pdf', $registro->id) }}" class="bg-green-600 hover:bg-green-500 text-white font-medium py-3 px-6 rounded-sm shadow-md inline-flex items-center">
                                F. matrícula <i class="fa-solid fa-download ml-2"></i>    
                            </a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    @if ($matriculacion->count())
        <div class="mt-6 flex justify-center mb-8">
            {!! $matriculacion->links() !!}
        </div>
    @endif
</div>


</x-app-layout>
