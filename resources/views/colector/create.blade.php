<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Nuevo Estudiante') }}
        </h2>

    </x-slot>

    <form action="{{ route('colector.store') }}" method="POST">
        @csrf
        @method('POST')

        <div class="p-8 space-y-2 text-gray-700">

            <div class="grid grid-cols-4 gap-4">

                <!-- Cédula del Estudiante o DNI -->
                <label for="">Datos Estudiantes</label>
                <div class="col-span-4 md:col-span-4 lg:col-span-4">
                    <label 
                        class="block"
                    >   
                        Cédula
                    </label>

                    <input 
                        type="text" 
                        name="cedula" 
                        id="cedula"
                        placeholder="0955546601..."
                        value= "{{ old('cedula') }}" 
                        class="mt-1 block border-gray-300 w-full rounded-md"
                    >
                    @error('cedula')
                        <p 
                            class="mt-2 text-pink-600 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Primer Nombre -->
                <div class="col-span-4 md:col-span-4 lg:col-span-2">
                    <label 
                        class="block"
                    >   
                        Primer Nombre
                    </label>

                    <input 
                        type="text" 
                        name="primer_nombre" 
                        id="primer_nombre"
                        placeholder="John..."
                        value = "{{ old('primer_nombre') }}" 
                        class="mt-1 block border-gray-300 w-full rounded-md"
                    >
                    @error('primer_nombre')
                        <p 
                            class="mt-2 text-pink-600 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Segundo Nombre -->
                <div class="col-span-4 md:col-span-4 lg:col-span-2">
                    <label 
                        class="block"
                    >   
                        Segundo Nombre
                    </label>

                    <input 
                        type="text" 
                        name="segundo_nombre" 
                        id="segundo_nombre"
                        placeholder="Jairo..."
                        value = "{{ old('segundo_nombre') }}" 
                        class="mt-1 block border-gray-300 w-full rounded-md"
                    >
                    @error('segundo_nombre')
                        <p 
                            class="mt-2 text-pink-600 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Apellido Paterno -->
                <div class="col-span-4 md:col-span-4 lg:col-span-2">
                    <label 
                        class="block"
                    >   
                        Apellido Paterno
                    </label>

                    <input 
                        type="text" 
                        name="apellido_paterno" 
                        id="apellido_paterno"
                        placeholder="Romero..."
                        value = "{{ old('apellido_paterno') }}" 
                        class="mt-1 block border-gray-300 w-full rounded-md"
                    >
                    @error('apellido_paterno')
                        <p 
                            class="mt-2 text-pink-600 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Apellido Materno -->
                <div class="col-span-4 md:col-span-4 lg:col-span-2">
                    <label 
                        class="block"
                    >   
                        Apellido Materno
                    </label>

                    <input 
                        type="text" 
                        name="apellido_materno" 
                        id="apellido_materno"
                        placeholder="Sanchez..."
                        value = "{{ old('apellido_materno') }}" 
                        class="mt-1 block border-gray-300 w-full rounded-md"
                    >
                    @error('apellido_materno')
                        <p 
                            class="mt-2 text-pink-600 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="col-span-4 md:col-span-4 lg:col-span-4">
                    <hr class="w-48 h-1 mx-auto my-4 bg-gray-400 border-0 rounded-sm md:my-4 dark:bg-gray-700">
                </div> 

                <label for="">Datos Representante</label>
                <!-- Cédula del Estudiante o DNI -->
                <div class="col-span-4 md:col-span-4 lg:col-span-4">
                    <label 
                        class="block"
                    >   
                        Cédula
                    </label>

                    <input 
                        type="text" 
                        name="cedula_representante" 
                        id="cedula_representante"
                        placeholder="0955546601..."
                        value= "{{ old('cedula_representante') }}" 
                        class="mt-1 block border-gray-300 w-full rounded-md"
                    >
                    @error('cedula_representante')
                        <p 
                            class="mt-2 text-pink-600 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Primer Nombre -->
                <div class="col-span-4 md:col-span-4 lg:col-span-2">
                    <label 
                        class="block"
                    >   
                        Primer Nombre
                    </label>

                    <input 
                        type="text" 
                        name="primer_nombre_representante" 
                        id="primer_nombre_representante"
                        placeholder="John..."
                        value = "{{ old('primer_nombre_representante') }}" 
                        class="mt-1 block border-gray-300 w-full rounded-md"
                    >
                    @error('primer_nombre_representante')
                        <p 
                            class="mt-2 text-pink-600 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Segundo Nombre -->
                <div class="col-span-4 md:col-span-4 lg:col-span-2">
                    <label 
                        class="block"
                    >   
                        Segundo Nombre
                    </label>

                    <input 
                        type="text" 
                        name="segundo_nombre_representante" 
                        id="segundo_nombre_representante"
                        placeholder="Jairo..."
                        value = "{{ old('segundo_nombre_representante') }}" 
                        class="mt-1 block border-gray-300 w-full rounded-md"
                    >
                    @error('segundo_nombre_representante')
                        <p 
                            class="mt-2 text-pink-600 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Apellido Paterno -->
                <div class="col-span-4 md:col-span-4 lg:col-span-2">
                    <label 
                        class="block"
                    >   
                        Apellido Paterno
                    </label>

                    <input 
                        type="text" 
                        name="apellido_paterno_representante" 
                        id="apellido_paterno_representante"
                        placeholder="Romero..."
                        value = "{{ old('apellido_paterno_representante') }}" 
                        class="mt-1 block border-gray-300 w-full rounded-md"
                    >
                    @error('apellido_paterno_representante')
                        <p 
                            class="mt-2 text-pink-600 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Apellido Materno -->
                <div class="col-span-4 md:col-span-4 lg:col-span-2">
                    <label 
                        class="block"
                    >   
                        Apellido Materno
                    </label>

                    <input 
                        type="text" 
                        name="apellido_materno_representante" 
                        id="apellido_materno_representante"
                        placeholder="Sanchez..."
                        value = "{{ old('apellido_materno_representante') }}" 
                        class="mt-1 block border-gray-300 w-full rounded-md"
                    >
                    @error('apellido_materno_representante')
                        <p 
                            class="mt-2 text-pink-600 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Teléfono -->
                <div class="col-span-4 md:col-span-4 lg:col-span-2">
                    <label 
                        class="block"
                    >   
                        Teléfono
                    </label>

                    <input 
                        type="text" 
                        name="telefono" 
                        id="telefono"
                        placeholder="0991035787..."
                        value = "{{ old('telefono') }}" 
                        class="mt-1 block border-gray-300 w-full rounded-md"
                    >
                    @error('telefono')
                        <p 
                            class="mt-2 text-pink-600 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Correo -->
                <div class="col-span-4 md:col-span-4 lg:col-span-2">
                    <label 
                        class="block"
                    >   
                        Correo
                    </label>

                    <input 
                        type="text" 
                        name="email" 
                        id="email"
                        placeholder="ejemplo@gmail.com..."
                        value = "{{ old('email') }}" 
                        class="mt-1 block border-gray-300 w-full rounded-md"
                    >
                    @error('email')
                        <p 
                            class="mt-2 text-pink-600 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="col-span-4 md:col-span-4 lg:col-span-4">
                    <hr class="w-48 h-1 mx-auto my-4 bg-gray-400 border-0 rounded-sm md:my-4 dark:bg-gray-700">
                </div> 

                <!-- Curso -->
                <div class="col-span-4 md:col-span-4 lg:col-span-4">
                    <label 
                        class="block"
                    >   
                        Curso
                    </label>

                    <select 
                        name="curso" 
                        id="curso"
                        class="mt-1 block border-gray-300 w-full rounded-md"
                    >

                        @foreach($anioAcademico as $c)
                            <option 
                                value="{{ $c->id }}"
                                {{ old('curso') == $c->id ? 'selected' : '' }}
                            >
                                {{ $c->anio_basica }}
                            </option>
                        @endforeach
                        
                    </select>

                    @error('curso')
                        <p 
                            class="mt-2 text-pink-600 text-sm">
                            No puedes eligir la opción --seleccionar--
                        </p>
                    @enderror
                </div>

                <!-- Motivo Matriculación -->
                <div class="col-span-4 md:col-span-4 lg:col-span-4">
                    <label 
                        class="block"
                    >   
                        Motivo
                    </label>

                    <select 
                        name="motivo_matriculacion" 
                        id="motivo_matriculacion"
                        class="mt-1 block border-gray-300 w-full rounded-md"
                    >
                        @foreach($motivo as $m)
                            <option 
                                value="{{ $m->id }}"
                                {{ old('motivo_matriculacion') == $m->id ? 'selected' : '' }}
                            >
                                {{ $m->motivo_concepto }}
                            </option>
                        @endforeach
                    </select>

                    @error('motivo_matriculacion')
                        <p 
                            class="mt-2 text-pink-600 text-sm">
                            No puedes eligir la opción --seleccionar--
                        </p>
                    @enderror
                </div>

                <!-- Otro motivo matriculación -->
                <div class="col-span-4 md:col-span-4 lg:col-span-4" id="otro_motivo_matriculacion" style="{{ old('motivo_matriculacion') == '5' || $errors->has('otro_motivo_matriculacion') ? 'display: block;' : 'display: none;' }}">
                    <label 
                        class="block"
                    >   
                        Otro Motivo Matriculación
                    </label>

                    <input 
                        type="number" 
                        name="otro_motivo_matriculacion" 
                        id="otro_motivo_matriculacion"
                        placeholder="Otro motivo matrícula..."
                        value = "{{ old('otro_motivo_matriculacion') }}" 
                        class="mt-1 block border-gray-300 w-full rounded-md"
                    >
                    @error('otro_motivo_matriculacion')
                        <p 
                            class="mt-2 text-pink-600 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Valor Matriculación -->
                <div class="col-span-4 md:col-span-4 lg:col-span-4">
                    <label 
                        class="block"
                    >   
                        Valor Matrículación
                    </label>

                    <select 
                        name="valor_matriculacion" 
                        id="valor_matriculacion"
                        class="mt-1 block border-gray-300 w-full rounded-md"
                    >

                        @foreach($valorMatriculacion as $valor)
                            <option 
                                value="{{ $valor->id }}"
                                {{ old('valor_matriculacion') == $valor->id ? 'selected' : '' }}
                            >
                                {{ $valor->matriculacion_valor }} 
                            </option>
                        @endforeach

                    </select>

                    @error('valor_matriculacion')
                        <p 
                            class="mt-2 text-pink-600 text-sm">
                            No puedes eligir la opción --seleccionar--
                        </p>
                    @enderror
                </div>

                <!-- Otro valor matrícula -->
                <div class="col-span-4 md:col-span-4 lg:col-span-4" id="otro_matricula" style="{{ old('valor_matriculacion') == '12' || $errors->has('otro_valor_matricula') ? 'display: block;' : 'display: none;' }}"
>
                    <label 
                        class="block"
                    >   
                        Otro valor Matrícula
                    </label>

                    <input 
                        type="number" 
                        name="otro_valor_matricula" 
                        id="otro_valor_matricula"
                        placeholder="Otro valor matrícula..."
                        value = "{{ old('otro_valor_matricula') }}" 
                        class="mt-1 block border-gray-300 w-full rounded-md"
                    >
                    @error('otro_valor_matricula')
                        <p 
                            class="mt-2 text-pink-600 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Valor pensión -->
                <div class="col-span-4 md:col-span-4 lg:col-span-4">
                    <label 
                        class="block"
                    >   
                        Valor Pensión
                    </label>

                    <select 
                        name="valor_pension" 
                        id="valor_pension"
                        class="mt-1 block border-gray-300 w-full rounded-md"
                    >
                        <option value="--seleccionar--" {{ old('valor_pension') == '--seleccionar--' ? 'selected' : '' }}>
                            --seleccionar--
                        </option>

                        @foreach($valorPension as $valor)
                            <option 
                                value="{{ $valor->id }}"
                                {{ old('valor_pension') == $valor->id ? 'selected' : '' }}
                            >
                                {{ $valor->concepto }} - ${{ $valor->pension_descuento }} 
                            </option>
                        @endforeach
                        
                    </select>

                    @error('valor_pension')
                        <p 
                            class="mt-2 text-pink-600 text-sm">
                            No puedes eligir la opción --seleccionar--
                        </p>
                    @enderror
                </div>

                <!-- Seguro -->
                <div class="col-span-4 md:col-span-4 lg:col-span-4">
                    <label 
                        class="block"
                    >   
                        Seguro
                    </label>

                    <select 
                        name="seguro" 
                        id="seguro"
                        class="mt-1 block border-gray-300 w-full rounded-md"
                    >

                        @foreach ($valorSeguro as $seguro)
                            <option 
                                value="{{ $seguro->id }}"
                                {{ old('seguro') == $seguro->id ? 'selected' : '' }}
                            >
                                {{ $seguro->valor_seguro }}
                            </option>
                        @endforeach
                    </select>

                    @error('seguro')
                        <p 
                            class="mt-2 text-pink-600 text-sm">
                            No puedes eligir la opción --seleccionar--
                        </p>
                    @enderror
                </div>

                <!-- Ambiente Digital -->
                <div class="col-span-4 md:col-span-4 lg:col-span-4">
                    <label 
                        class="block"
                    >   
                        Ambiente digital
                    </label>

                    <select 
                        name="ambiente_digital" 
                        id="ambiente_digital"
                        class="mt-1 block border-gray-300 w-full rounded-md"
                    >

                        @foreach ($valorAmbienteDigital as $valor)
                            <option 
                                value="{{ $valor->id }}"
                                {{ old('ambiente_digital') == $valor->id ? 'selected' : '' }}
                            >
                                {{ $valor->valor_ambiente_digital }}
                            </option>
                        @endforeach
                        
                    </select>

                    @error('ambiente_digital')
                        <p 
                            class="mt-2 text-pink-600 text-sm">
                            No puedes eligir la opción --seleccionar--
                        </p>
                    @enderror
                </div>

                <div class="col-span-4 md:col-span-4 lg:col-span-4">
                    <div class="text-center">
                        <button 
                            type="submit" 
                            class="bg-[#89462a] text-white font-bold p-3 px-4 rounded" 
                        >
                            <i class="fa-solid fa-circle-left"></i>
                            Regresar
                        </button>

                        <button 
                            type="submit" 
                            class="bg-[#89462a] text-white font-bold p-3 px-4 rounded" 
                        >
                            Guardar
                            <i class="fa-solid fa-circle-check"></i>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </form>

    @if ($errors->any())
        <script>
            Swal.fire({
                title: "!Error!",
                text: "Revisa nuevamente los campos.",
                icon: "error"
            });
        </script>
    @endif

    <script>
        const select_uno = document.getElementById('valor_matriculacion');
        const otroDiv_uno = document.getElementById('otro_matricula');

        function toggleOtro() {
            if (select_uno.value === '12') {
                otroDiv_uno.style.display = 'block';
            } else {
                otroDiv_uno.style.display = 'none';
            }
        }

        // Cuando cambia
        select_uno.addEventListener('change', toggleOtro);

        // 👇 Cuando carga la página
        document.addEventListener('DOMContentLoaded', toggleOtro);
    </script>

    <!-- <script>
        const select_dos = document.getElementById('valor_pension');
        const otroDiv_dos = document.getElementById('nueva_pension');

        select_dos.addEventListener('change', function () {
            if (this.value === 'Otro') {
                otroDiv_dos.style.display = 'block';
            } else {
                otroDiv_dos.style.display = 'none';
            }
        });
    </script> -->

    <script>
        const select_tres = document.getElementById('motivo_matriculacion');
        const otroDiv_tres = document.getElementById('otro_motivo_matriculacion');

        function toggleMotivo() {
            if (select_tres.value === '5') {
                otroDiv_tres.style.display = 'block';
            } else {
                otroDiv_tres.style.display = 'none';
            }
        }

        // Cuando cambia
        select_tres.addEventListener('change', toggleMotivo);

        // 👇 Cuando carga la página
        document.addEventListener('DOMContentLoaded', toggleMotivo);
    </script>
</x-app-layout>