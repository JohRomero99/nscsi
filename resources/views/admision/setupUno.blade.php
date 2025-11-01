<x-setup colorFondo="bg-gray-100" icono="fa-solid fa-graduation-cap" colorFondoTres="bg-gray-100" iconoTres="fa-solid fa-paper-plane">
    <div class="conatiner m-auto pt-6 pl-5">
        <h2 class="text-4xl font-extrabold text-green-400 dark:text-white">Formulario de Inscripción</h2>
    </div>

    <div class="container flex items-center justify-center">
        <ol class="flex items-center w-full">
            <li class="flex w-full items-center text-blue-600 dark:text-blue-500 after:content-[''] after:w-full after:h-1 after:border-b after:border-blue-100 after:border-4 after:inline-block dark:after:border-blue-800">
                <span class="flex items-center justify-center w-10 h-10 bg-blue-100 rounded-full lg:h-12 lg:w-12 dark:bg-blue-800 shrink-0">
                    <svg class="w-3.5 h-3.5 text-blue-600 lg:w-4 lg:h-4 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                    </svg>
                </span>
            </li>
            <li class="flex w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-100 after:border-4 after:inline-block dark:after:border-gray-700">
                <span class="flex items-center justify-center w-10 h-10 bg-gray-100 rounded-full lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0">
                    <svg class="w-4 h-4 text-gray-500 lg:w-5 lg:h-5 dark:text-gray-100" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                        <path d="M18 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2ZM6.5 3a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5ZM3.014 13.021l.157-.625A3.427 3.427 0 0 1 6.5 9.571a3.426 3.426 0 0 1 3.322 2.805l.159.622-6.967.023ZM16 12h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2Zm0-3h-3a1 1 0 1 1 0-2h3a1 1 0 1 1 0 2Zm0-3h-3a1 1 0 1 1 0-2h3a1 1 0 1 1 0 2Z"/>
                    </svg>
                </span>
            </li>
            <li class="flex items-center w-full">
                <span class="flex items-center justify-center w-10 h-10 bg-gray-100 rounded-full lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0">
                    <svg class="w-4 h-4 text-gray-500 lg:w-5 lg:h-5 dark:text-gray-100" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                        <path d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2ZM7 2h4v3H7V2Zm5.7 8.289-3.975 3.857a1 1 0 0 1-1.393 0L5.3 12.182a1.002 1.002 0 1 1 1.4-1.436l1.328 1.289 3.28-3.181a1 1 0 1 1 1.392 1.435Z"/>
                    </svg>
                </span>
            </li>
        </ol>
    </div>



    <form action="{{ route('admision.representante.store') }}" method="POST" id="formulario">
        @csrf
        <div id="setup-1">
            <div class="grid grid-cols-4 gap-4 pl-5 pt-1 pr-5">
                <input type="hidden" name="setup" value="1"> <!-- Setup 1 -->
                <!-- <div class="col-span-4">
                    <p class="text-gray-500 text-center mt-5 text-green-900">Paso 1 de 3 - Datos del Representante</p>
                </div> -->

                <!-- Cédula del Representante -->
                <div class="col-span-4">
                    <label 
                        class="block"
                    >   
                        Cédula
                    </label>

                    <input 
                        type="text" 
                        name="cedula" 
                        id="cedula" 
                        value="{{ old('cedula') }}" 
                        placeholder="032514568..." 
                        class="mt-1 block border-gray-300 w-full rounded-md"
                    >
                    @error('cedula')
                        <p 
                            class="mt-2 text-pink-600 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Primer Nombre del Representante -->
                <div class="col-span-4">
                    <label 
                        class="block"
                    >
                        Primer Nombre
                    </label>

                    <input 
                        type="text" 
                        name="primer_nombre" 
                        id="primer_nombre" 
                        value="{{ old('primer_nombre') }}" 
                        placeholder="John..." 
                        class="mt-1 block border-gray-300 w-full rounded-md"
                    >

                    @error('primer_nombre')
                        <p 
                            class="mt-2 text-pink-600 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Segundo Nombre del Representante -->
                <div class="col-span-4">
                    <label 
                        class="block"
                    >
                        Segundo Nombre
                    </label>

                    <input 
                        type="text" 
                        name="segundo_nombre" 
                        id="segundo_nombre" 
                        value="{{ old('segundo_nombre') }}" 
                        placeholder="Jairo..." 
                        class="mt-1 block border-gray-300 w-full rounded-md"
                    >
                    @error('segundo_nombre')
                        <p 
                            class="mt-2 text-pink-600 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Apellido Paterno del Representante -->
                <div class="col-span-4">
                    <label 
                        class="block"
                    >
                        Apellido Paterno
                    </label>

                    <input 
                        type="text" 
                        name="apellido_paterno" 
                        id="apellido_paterno" 
                        value="{{ old('apellido_paterno') }}" 
                        placeholder="Romero..." 
                        class="mt-1 block border-gray-300 w-full rounded-md"
                    >

                    @error('apellido_paterno')
                        <p 
                            class="mt-2 text-pink-600 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Apellido Materno del Representante -->
                <div class="col-span-4">
                    <label 
                        class="block"
                    >
                        Apellido Materno
                    </label>

                    <input 
                        type="text" 
                        name="apellido_materno" 
                        id="apellido_materno" 
                        value="{{ old('apellido_materno') }}" 
                        placeholder="Sanchez..." 
                        class="mt-1 block border-gray-300 w-full rounded-md"
                    >

                    @error('apellido_materno')
                        <p 
                            class="mt-2 text-pink-600 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Correo del Representante -->
                <div class="col-span-2">
                    <label 
                        class="block"
                    >
                        Correo
                    </label>

                    <input 
                        type="email" 
                        name="email" 
                        id="email" 
                        value="{{ old('email') }}" 
                        placeholder="jjaixxx@xxxxx.xx..." 
                        class="mt-1 border-gray-300 block w-full rounded-md"
                    >

                    @error('email')
                        <p 
                            class="mt-2 text-pink-600 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Teléfono del Representante -->
                <div class="col-span-2">
                    <label 
                        class="block"
                    >
                        Teléfono
                    </label>

                    <input 
                        type="text" 
                        name="telefono_celular" 
                        id="telefono_celular" 
                        value="{{ old('telefono_celular') }}" 
                        placeholder="123456789..." 
                        class="mt-1 block border-gray-300 w-full rounded-md"
                    >

                    @error('telefono_celular')
                        <p 
                            class="mt-2 text-pink-600 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- ¿A cuantos estudiantes deseas inscribir? -->
                <div class="col-span-4">
                    <label 
                        class="block"
                    >
                        ¿A cuantos estudiantes deseas inscribir?
                    </label>

                    <input 
                        type="number" 
                        name="numero_inscripion" 
                        id="numero_inscripion" 
                        value="{{ old('numero_inscripion') }}" 
                        placeholder="Número de estudiantes a matricular" 
                        class="mt-1 block border-gray-300 w-full rounded-md"
                    >

                    @error('numero_inscripion')
                        <p  
                            class="mt-2 text-pink-600 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>

            <!-- Botón para continuar hacia el siguiente formulario -->
            <div class="text-right mt-4 pl-3 pr-3 pb-6" id="setup-1-button">
                <button 
                    type="submit" 
                    class="bg-green-400 hover:bg-green-300 text-white font-bold p-3 px-4 rounded" 
                    id="setpButton"
                >
                    Siguiente 
                    <i class="fas fa-arrow-alt-circle-right"></i>
                </button>
            </div>
        </div>
    </form>

    @push('scripts')
        <!-- Buscar en tiempo real cédula del representante -->
        <script>
            $(document).ready(function() {
                $('#cedula').on('input', function() {
                    let cedula = $(this).val();

                    if (cedula.length === 10) { // Verifica si la cédula tiene 10 dígitos
                        $.ajax({
                            url: "{{ route('buscar.cedula.representante') }}", // Ruta para la búsqueda
                            method: 'GET',
                            data: { cedula: cedula },
                            success: function(response) {
                                // Llenar los campos del formulario con los datos recibidos
                                $('#primer_nombre').val(response.primer_nombre);
                                $('#segundo_nombre').val(response.segundo_nombre);
                                $('#apellido_paterno').val(response.apellido_paterno);
                                $('#apellido_materno').val(response.apellido_materno);
                                $('#email').val(response.email);
                                $('#telefono_celular').val(response.telefono_celular);

                            },
                            error: function() {
                                // Limpiar los campos si no se encuentra la cédula
                                $('#primer_nombre, #segundo_nombre, #apellido_paterno, #apellido_materno, #email, #telefono_celular').val('');
                            }
                        });
                    }
                });
            });
        </script>
    @endpush
</x-setup>