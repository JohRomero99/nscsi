<x-setup colorFondo="bg-green-500" icono="fa-solid fa-check text-white" colorFondoTres="bg-gray-100" iconoTres="fa-solid fa-paper-plane">
    <div class="conatiner m-auto pt-6 pl-5">
        <h2 class="text-4xl text-center font-extrabold text-green-400 dark:text-white">Formulario de Inscripción</h2>
        <p class="mt-4 text-green-900">
            Estimado padre, madre o representante
            antes de completar el formulario de inscripción, le recordamos que todos los datos ingresados deben ser verídicos y corresponder a la información real del estudiante y su representante.
        </p>
    </div>

    <div class="block lg:hidden p-10">
        <x-setupmobil textoDos="text-green-900" borderDos="border-green-600"></x-setupmobil>
    </div>

    <form id="main-form" action="{{ route('admision.estudiante.store', ['id' => $id, 'email' => $email]) }}" method="POST">
        @csrf
        <div id="form-container">
            @for ($i = 0; $i < $numeroEstudiante; $i++)
                <div class="flex items-center justify-center">
                    <!-- Línea antes del número -->
                    <div class="w-20 border-t-2 border-gray-300"></div>
                
                    <!-- Número en el medio -->
                    <div class="mx-4 bg-white px-4 py-2 rounded-full border border-gray-300 text-gray-700 font-bold">
                        {{ $i + 1 }}
                    </div>
                
                    <!-- Línea después del número -->
                    <div class="w-20 border-t-2 border-gray-300"></div>
                </div>
                <div class="form-section">
                    {{-- <div class="py-3 flex items-center text-md text-gray-800 before:flex-1 before:border-t before:border-gray-200 before:me-6 after:flex-1 after:border-t after:border-gray-200 after:ms-6 dark:text-white dark:before:border-neutral-600 dark:after:border-neutral-600">Estudiante {{ $i + 1 }}</div> --}}
                    <div class="grid grid-cols-4 gap-4 pl-5 pt-1 pr-5">
                        <input type="hidden" name="setup" value="2"> <!-- Setup 2 --> 
                        
                        <!-- Cédula del Estudiante -->
                        <div class="col-span-4">
                            <label 
                                class="block"
                            >
                                Cédula
                            </label>
                            
                            <input 
                                type="text" 
                                name="cedula[]" 
                                value="{{ old("cedula.$i") }}" 
                                placeholder="032514568..." 
                                class="mt-1 block border-gray-300 w-full rounded-md cedula"
                            >
                            @error("cedula.$i")
                                <p 
                                    class="mt-2 text-pink-600 text-sm">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        
                        <!-- Primer Nombre del Estudiante -->
                        <div class="col-span-4">
                            <label 
                                class="block"
                            >
                                Primer Nombre
                            </label>

                            <input 
                                type="text" 
                                name="primer_nombre[]" 
                                value="{{ old("primer_nombre.$i") }}" 
                                placeholder="John..." 
                                class="mt-1 block border-gray-300 w-full rounded-md primer_nombre"
                            >
                            @error("primer_nombre.$i")
                                <p 
                                    class="mt-2 text-pink-600 text-sm">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        
                        <!-- Segundo Nombre del Estudiante -->
                        <div class="col-span-4">
                            <label 
                                class="block"
                            >
                                Segundo Nombre
                            </label>

                            <input 
                                type="text" 
                                name="segundo_nombre[]" 
                                value="{{ old("segundo_nombre.$i") }}"
                                id="segundo_nombre.$i" 
                                placeholder="Jairo..." 
                                class="mt-1 block border-gray-300 w-full rounded-md segundo_nombre"
                            >

                            @error("segundo_nombre.$i")
                                <p 
                                    class="mt-2 text-pink-600 text-sm">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        
                        <!-- Apellido Paterno del Estudiante -->
                        <div class="col-span-4">
                            <label 
                                class="block"
                            >
                                Apellido Paterno
                            </label>

                            <input 
                                type="text" 
                                name="apellido_paterno[]" 
                                value="{{ old("apellido_paterno.$i") }}" 
                                placeholder="Romero..."
                                class="mt-1 block border-gray-300 w-full rounded-md apellido_paterno"
                            >

                            @error("apellido_paterno.$i")
                                <p 
                                    class="mt-2 text-pink-600 text-sm">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        
                        <!-- Apellido Materno del Estudiante -->
                        <div class="col-span-4">
                            <label 
                                class="block"
                            >
                                Apellido Materno
                            </label>

                            <input type="text" 
                                name="apellido_materno[]" 
                                value="{{ old("apellido_materno.$i") }}"
                                placeholder="Sanchez..." 
                                class="mt-1 block border-gray-300 w-full rounded-md apellido_materno"
                            >

                            @error("apellido_materno.$i")
                                <p 
                                    class="mt-2 text-pink-600 text-sm">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        
                        <!-- Fecha de nacimiento del Estudiante -->
                        <div class="col-span-2">
                            <label 
                                class="block"
                            >
                                Fecha de nacimiento
                            </label>

                            <input 
                                type="date" 
                                name="fecha_nacimiento[]" 
                                value="{{ old("fecha_nacimiento.$i") }}"
                                class="mt-1 border-gray-300 block w-full rounded-md fecha_nacimiento"
                            >

                            @error("fecha_nacimiento.$i")
                                <p 
                                    class="mt-2 text-pink-600 text-sm">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        
                        <!-- Año de básica del estudiante -->
                        <div class="col-span-2">
                            <label 
                                class="block"
                            >
                                Año de basica
                            </label>

                            <select 
                                type="select" 
                                name="anio_basica[]"
                                class="mt-1 block border-gray-300 w-full rounded-md anio_basica"
                            >
                                @foreach ($anio_academico as $anio)
                                    <option 
                                        value="{{ $anio->id }}">

                                        {{ $anio->anio_basica }}
                                    </option>
                                @endforeach
                            </select>

                            @error("anio_basica.$i")
                                <p 
                                    class="mt-2 text-pink-600 text-sm">
                                    El campo --seleccionar-- no puede ser una opción
                                </p>
                            @enderror
                        </div>

                        <!-- Botones de acción -->
                        <div class="col-span-4">

                        </div>
                    </div> 
                </div>
            @endfor
        </div>
        <div class="container mt-4 flex justify-between gap-4 pb-6 pl-6 pr-6">
            <!-- Enalce para retroceder a la página principal -->
            <a 
                href="{{ route('admision.representante.create') }}" 
                class="bg-green-400 hover:bg-green-300 text-white font-bold p-3 px-4 rounded flex items-center">
                <i class="fas fa-arrow-circle-left mr-1"></i> 
                Atras
            </a>

            <!-- Botón para continuar -->
            <button 
                type="submit" 
                form="main-form" 
                class="bg-green-400 hover:bg-green-300 text-white font-bold p-3 px-4 rounded flex items-center"> 
                Continuar
                <i class="fa-solid fa-circle-arrow-right ml-1"></i>
            </button>
        </div>
    </form>

    @push('scripts')
        <!-- Buscar en tiempo real cédula del Estudiante -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const cedulaInput = document.querySelectorAll(".cedula");
                const primerNombreInput = document.querySelectorAll(".primer_nombre");
                const segundoNombreInput = document.querySelectorAll(".segundo_nombre");
                const apellidoPaternoInput = document.querySelectorAll(".apellido_paterno");
                const apellidoMaternoInput = document.querySelectorAll(".apellido_materno");
                const anoBasicaInput = document.querySelectorAll(".anio_basica");
                const fechaNacimientoInput = document.querySelectorAll(".fecha_nacimiento");

                // Recorremos solo los campos cédulas.
                for( let i = 0; i < cedulaInput.length; i++  ){
                    cedulaInput[i].addEventListener("input", function(){
   
                        // Validamos si el campo cédula tiene solo 10 Dígitos.
                        if( cedulaInput[i].value.length === 10){
                            
                            // Realizamos una petición para buscar la cédula en la base de datos.
                            fetch(`{{ route('buscar.cedula.estudiante') }}?cedula=${cedulaInput[i].value}`) 
                            .then(response => {
                                if (!response.ok) {
                                    throw new Error("No se encontró la cédula");
                                }
                                return response.json(); // Convertimos la respuesta en JSON
                            })
                            .then( data =>{
                                primerNombreInput[i].value = data.primer_nombre;
                                segundoNombreInput[i].value = data.segundo_nombre;
                                apellidoPaternoInput[i].value = data.apellido_paterno;
                                apellidoMaternoInput[i].value = data.apellido_materno;
                                anoBasicaInput[i].value = data.anio_basica;
                                fechaNacimientoInput[i].value = data.fecha_nacimiento;
                            })
                            .catch(error=>{
                                primerNombreInput[i].value = "";
                                segundoNombreInput[i].value = "";
                                apellidoPaternoInput[i].value = "";
                                apellidoMaternoInput[i].value = "";
                                anoBasicaInput[i].value = "";
                                fechaNacimientoInput[i].value = "";
                            })
                        }

                    });
                }

            });
        </script>
    @endpush
</x-setup>
