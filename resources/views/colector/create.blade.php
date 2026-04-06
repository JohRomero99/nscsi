<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Nuevo Estudiante') }}
        </h2>
    </x-slot>

    <form action="{{ route('colector.store') }}" method="POST">
        @csrf
        @method('POST')

        <div class="p-8 bg-white space-y-2 text-gray-700">

            <div class="grid grid-cols-4 gap-4">

                <!-- Cédula del Estudiante o DNI -->
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
                    @error('apelledo_paterno')
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
                        <option value="">--Seleccionar--</option>
                        <option value="Beca">Normal</option>
                        <option value="Beca">Beca</option>
                        <option value="Amigo">Amigo</option>
                        <option value="Otro">Otro</option>
                    </select>

                    @error('motivo_matriculacion')
                        <p 
                            class="mt-2 text-pink-600 text-sm">
                            No puedes eligir la opción --seleccionar--
                        </p>
                    @enderror
                </div>

                <!-- Otro motivo matriculación -->
                <div class="col-span-4 md:col-span-4 lg:col-span-4" id="otro_motivo_matriculacion" style="display: none;">
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
                        <option value="">--Seleccionar--</option>
                        <option value="100.00">100.00</option>
                        <option value="70.00">70.00</option>
                        <option value="Otro">Otro</option>
                        
                    </select>

                    @error('valor_matriculacion')
                        <p 
                            class="mt-2 text-pink-600 text-sm">
                            No puedes eligir la opción --seleccionar--
                        </p>
                    @enderror
                </div>

                <!-- Otro valor matrícula -->
                <div class="col-span-4 md:col-span-4 lg:col-span-4" id="otro_matricula" style="display: none;">
                    <label 
                        class="block"
                    >   
                        Otro valor Matrícula
                    </label>

                    <input 
                        type="number" 
                        name="matricula" 
                        id="matricula"
                        placeholder="Otro valor matrícula..."
                        value = "{{ old('matricula') }}" 
                        class="mt-1 block border-gray-300 w-full rounded-md"
                    >
                    @error('matricula')
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
                        <option value="">--Seleccionar--</option>
                        <option value="100.00">100.00</option>
                        <option value="70.00">70.00</option>
                        <option value="Otro">Otro</option>
                        
                    </select>

                    @error('valor_pension')
                        <p 
                            class="mt-2 text-pink-600 text-sm">
                            No puedes eligir la opción --seleccionar--
                        </p>
                    @enderror
                </div>

                <!-- Otro valor pensión -->
                <div class="col-span-4 md:col-span-4 lg:col-span-4" id="nueva_pension" style="display: none;">
                    <label 
                        class="block"
                    >   
                        Otro valor Pensión
                    </label>

                    <input 
                        type="number" 
                        name="otra_pension" 
                        id="otra_pension"
                        placeholder="Otro valor pensión..."
                        value = "{{ old('otra_pension') }}" 
                        class="mt-1 block border-gray-300 w-full rounded-md"
                    >
                    @error('otra_pension')
                        <p 
                            class="mt-2 text-pink-600 text-sm">
                            {{ $message }}
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
                        <option value="">--Seleccionar--</option>
                        <option value="--seleccionar--">--seleccionar--</option>
                        <option value="Si">Si ($25.00)</option>
                        <option value="No">No</option>
                        
                    </select>

                    @error('seguro')
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

    <script>
        const select_uno = document.getElementById('valor_matriculacion');
        const otroDiv_uno = document.getElementById('otro_matricula');

        select_uno.addEventListener('change', function () {
            if (this.value === 'Otro') {
                otroDiv_uno.style.display = 'block';
            } else {
                otroDiv_uno.style.display = 'none';
            }
        });
    </script>

    <script>
        const select_dos = document.getElementById('valor_pension');
        const otroDiv_dos = document.getElementById('nueva_pension');

        select_dos.addEventListener('change', function () {
            if (this.value === 'Otro') {
                otroDiv_dos.style.display = 'block';
            } else {
                otroDiv_dos.style.display = 'none';
            }
        });
    </script>

    <script>
        const select_tres = document.getElementById('motivo_matriculacion');
        const otroDiv_tres = document.getElementById('otro_motivo_matriculacion');

        select_tres.addEventListener('change', function () {
            if (this.value === 'Otro') {
                otroDiv_tres.style.display = 'block';
            } else {
                otroDiv_tres.style.display = 'none';
            }
        });
    </script>
</x-app-layout>