<x-app-layout>

    
<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
   <span class="sr-only">Open sidebar</span>
   <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
   <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
   </svg>
</button>

<div class="">
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
                    Para continuar con el proceso de admisión da click en el botón completar del o los estudiantes disponibles.
                </p>
            </div>
        </div>

        @foreach( $representanteEstudiante as $representanteEstudiante)
            <div class="col-span-4">
                <div class="flex justify-center">
                    <div class="bg-white shadow-md rounded-md overflow-hidden border border-gray-200 w-full max-w-4xl">
                        <!-- Header -->
                        <div class="bg-[#89462a] text-white px-5 py-3 flex items-center justify-between border-b">
                            <h5 class="text-lg text-dark font-extrabold">{{ $representanteEstudiante->estudiante->persona->primer_nombre }} {{ $representanteEstudiante->estudiante->persona->segundo_nombre }} {{ $representanteEstudiante->estudiante->persona->apellido_paterno }} {{ $representanteEstudiante->estudiante->persona->apellido_materno }}</h5>
                            <!-- <span class="text-sm bg-white text-brown-700 px-2 py-0.5 rounded-full font-medium">
                                Admisión
                            </span> -->
                        </div>

                        <!-- Body -->
                        <div class="p-5 space-y-2 text-gray-700">
                            <p><span class="font-semibold">Cédula:</span> {{ $representanteEstudiante->estudiante->persona->cedula }} </p>
                            <p><span class="font-semibold">Curso:</span> {{ $representanteEstudiante->estudiante->anioAcademico->anio_basica }} </p>
                            <p><span class="font-semibold">Estado:</span>
                                <span class="text-green-700 bg-green-100 px-2 py-0.5 rounded-full text-xs font-medium">
                                    Completo
                                </span>
                            </p>
                        </div>

                        <!-- Footer -->
                        <div class="bg-gray-50 border-t border-gray-200 px-5 py-3 flex justify-end gap-3">
                            <a href="{{ route('dashboard.ficha.estudiante.create', $representanteEstudiante->estudiante->id ) }}"
                                class="rounded-lg bg-[#89462a] text-white font-bold py-3 px-4 inline-block">
                                Completar <i class="fa-regular fa-circle-right"></i>
                            </a>
                            <form 
                                action="{{ route('dashboard.eliminar.estudiante.destroy', $representanteEstudiante->estudiante->persona->id) }}" 
                                method="POST" 
                                class="inline-block formulario-eliminar">
                                @csrf
                                <button 
                                    class="rounded-lg bg-red-500 text-white font-bold py-3 px-4 rounded"
                                    id="boton">
                                    Eliminar <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <!-- Table -->
        <div class="col-span-4">
            <div class="">

                <hr class="w-48 h-1 mx-auto my-2 bg-gray-300 border-0 rounded-sm md:my-10 dark:bg-gray-700">

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
                        class="rounded-lg bg-[#89462a] text-white font-bold py-4 px-4 rounded" 
                        href="{{ route('dashboard.agregar.estudiante.create') }}"
                        >
                        Nuevo estudiante <i class="fa-solid fa-user"></i>
                    </a>

                </div>
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
                        title: "¿Deseas eliminar a este postulante?",
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