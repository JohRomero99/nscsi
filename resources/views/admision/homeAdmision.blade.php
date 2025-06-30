<x-app-layout>

    <div class="grid grid-cols-4 gap-4 p-5">

        <!-- Imagen -->
        <div class="col-span-4 flex justify-center">
                <img 
                    src="{{ asset('imagenes/LogoPlataforma.png') }}" 
                    alt="LogoPlataforma"
                    width="30%"
                    height="30%"
                >
        </div>

        <!-- Título y Subtitulo -->
        <div class="col-span-4">
            <div class="">
                <h1 class="text-4xl text-center font-extrabold text-gray-700 mt-1">
                    ¡Bienvenido proceso de admisión y matriculación!
                </h1>
                <p class="mb-3 text-center text-gray-600 dark:text-gray-600 mt-2 text-1xl">
                    Para continuar con el proceso de admisión da click en el botón continuar del o los estudiantes disponibles
                </p>
            </div>
        </div>

        <!-- Table -->
        <div class="col-span-4">
            <div class="">
                <div class="overflow-x-auto flex justify-center">
                    <table class="w-full max-w-8xl border border-gray-300 rounded-lg shadow-lg">
                        <thead class="bg-gray-300 text-gray-700 uppercase text-sm text-center">
                            <tr class=""> 
                                <th class="px-6 py-4 border-b text-center">DNI</th>
                                <th class="px-6 py-4 border-b text-center">Nombres</th>
                                <th class="px-6 py-4 border-b text-center">Apellidos</th>
                                <th class="px-6 py-4 border-b text-center">Curso</th>
                                <th class="px-6 py-4 border-b text-center">Estado</th>
                                <th class="px-6 py-4 border-b text-center">Fcihas completadas</th>
                                <th class="px-6 py-4 border-b text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-800">
                            @foreach( $representanteEstudiante as $representanteEstudiante)
                                <tr class="bg-white hover:bg-gray-50 text-center">
                                    <td class="px-6 py-3 border-b">{{ $representanteEstudiante->estudiante->persona->cedula }}</td>
                                    <td class="px-6 py-3 border-b">{{ $representanteEstudiante->estudiante->persona->primer_nombre }} {{ $representanteEstudiante->estudiante->persona->segundo_nombre }}</td>
                                    <td class="px-6 py-3 border-b">{{ $representanteEstudiante->estudiante->persona->apellido_paterno }} {{ $representanteEstudiante->estudiante->persona->apellido_materno }}</td>
                                    <td class="px-6 py-3 border-b">{{ $representanteEstudiante->estudiante->anioAcademico->anio_basica }}</td>
                                    <td class="px-6 py-3 border-b">
                                        <div class="inline-block">
                                            <div class="inline-flex items-center bg-green-100 text-green-700 text-xs font-semibold uppercase tracking-wide px-3 py-1 rounded-full shadow-sm">
                                                <span><strong>Admisión</strong></span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-1 border-b"> 0/3</td>
                                    <td class="px-6 py-3 border-b text-center">
                                        <a href="{{ route('dashboard.ficha.estudiante.create', $representanteEstudiante->estudiante->id ) }}"
                                            class="rounded-lg bg-gray-500 hover:bg-gray-400 text-white font-bold py-3 px-4 border-b-4 border-gray-700 hover:border-gray-500 inline-block">
                                            Completar Fichas <i class="fa-regular fa-circle-right"></i>
                                        </a>

                                        <form 
                                            action="{{ route('dashboard.eliminar.estudiante.destroy', $representanteEstudiante->estudiante->persona->id) }}" 
                                            method="POST" 
                                            class="inline-block formulario-eliminar">
                                            @csrf
                                            <button 
                                                class="rounded-lg bg-red-500 hover:bg-red-400 text-white font-bold py-3 px-4 border-b-4 border-red-700 hover:border-red-500 rounded"
                                                id="boton">
                                                Eliminar <i class="fa-solid fa-trash-can"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- <hr class="w-48 h-1 mx-auto my-2 bg-gray-300 border-0 rounded-sm md:my-10 dark:bg-gray-700"> -->

                <!-- Agregar a otro estudiante -->
                <div class="text-center mb-5">

                    <!-- Título -->
                    <h3 
                        class="text-2xl font-bold text-gray-600 mb-3 mt-5">
                        ¿Deseas agregar a otro estudiante?
                    </h3>

                    <!-- Subtíttulo -->
                    <p 
                        class="mb-6 text-gray-500 dark:text-gray-400 ">
                        Puesdes agregar a un nuevo estudiante.
                    </p>

                    <!-- Boton de acción modal -->
                    <a 
                        class="rounded-lg bg-gray-500 hover:bg-gray-400 text-white font-bold py-4 px-4 border-b-4 border-gray-700 hover:border-gray-500 rounded" 
                        href="{{ route('dashboard.agregar.estudiante.create') }}"
                        >
                        Nuevo estudiante <i class="fa-solid fa-user-large"></i>
                    </a>

                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        @if(session()->has('guardado'))
            <script>
                Swal.fire({
                    title: "¡Éxito!",
                    text: "Estudiante registrado correctamente",
                    icon: "success"
                });
            </script>
        @endif
    @endpush

    @push('scripts')
        @if(session()->has('eliminado'))
            <script>
                Swal.fire({
                    title: "¡Éxito!",
                    text: "El estudiante ha sido eliminado con éxito",
                    icon: "success"
                });
            </script>
        @endif
    @endpush

    <!-- Eliminar un estudiante -->
    @push('scripts')
        <script>

            var formulario = document.querySelectorAll('.formulario-eliminar');

            for( var i = 0; i < formulario.length; i++){
                formulario[i].addEventListener('submit', function(e){

                    // Detengo el envío del formulario.
                    e.preventDefault();

                    const formularioActual = this; // Guardar referencia al formulario actual.

                    // Realizo la consulta antes de eliminar el estudiante.
                    Swal.fire({
                        title: "¿Deseas eliminar a este estudiante?",
                        text: "¡Todos sus datos serán eliminados por completo!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Si, eliminar!"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            formularioActual.submit(); // Enviar manualmente
                        }
                    });

                });
            }
        </script>
    @endpush
</x-app-layout>