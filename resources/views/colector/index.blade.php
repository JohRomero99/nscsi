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
                    <h3 class="text-lg font-medium text-gray-900 mb-2">
                        Buscar Estudiante <i class="fa-regular fa-user"></i>
                    </h3>
                    <div class="flex gap-2">
                        <!-- Input -->
                        <input 
                            type="text" 
                            name="buscarEstudiante"
                            placeholder="Ingrese el nombre o cédula del estudiante"
                            class="flex-1 border-gray-300 rounded-md p-2"
                        >
                        <!-- Botón -->
                        <button 
                            class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 whitespace-nowrap">
                            Buscar <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                    @error('buscarEstudiante')
                        <p class="mt-2 text-pink-600 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                    <!--  -->
                    <div class="col-span-2 md:col-span-2 lg:col-span-2">
                        @if(isset($estudiantes))
                            @foreach($estudiantes as $es)
                                <div class="flex justify-between items-center p-4 hover:bg-gray-100 transition">
                                    <!-- Info estudiante -->
                                    <div>
                                        <p class="text-base font-semibold text-gray-800">
                                            {{ $es->persona->primer_nombre }} {{ $es->persona->segundo_nombre }} {{ $es->persona->apellido_paterno }} {{ $es->persona->apellido_materno }}
                                        </p>
                                        <p class="text-sm text-gray-500">
                                            {{ $es->persona->cedula }}
                                        </p>
                                    </div>
                                    <!-- Botón seleccionar -->
                                    <a href="{{ route('colector.show', $es->id ) }}" 
                                        class="flex items-center gap-2 text-blue-600 hover:text-blue-800 font-medium">
                                        Seleccionar
                                        <i class="fa-solid fa-circle-arrow-right"></i>
                                    </a>
                                </div>
                            @endforeach
                        @else
                            <p class="text-sm text-gray-600 mb-2">
                                Busque al estudiante ingresando su número de cédula o nombres.
                            </p>
                        @endif
                    </div>
                </div>
            </form>
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