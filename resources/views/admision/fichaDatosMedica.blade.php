<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Unidad Educativa Nuestra Señora del Carmen') }}
        </h2>
    </x-slot>

    <div class="flex justify-center">
        <div class="bg-white shadow-md rounded-md overflow-hidden border border-gray-200 w-full m-5">
            <!-- Header -->
            <div class="bg-gray-200 text-gray-500 px-5 py-3 border-b">
                <!-- Wizard -->
                <x-setupFichas></x-setupFichas>
            </div>

            <!-- Body -->
            <div class="p-5 space-y-2 text-gray-700">
                <form action="" method="POST"  enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-4 gap-4">

                        <!-- Titulo -->
                        <div class="col-span-4 flex justify-center">
                            <div class="">
                                <h1 class="text-4xl text-center font-extrabold text-gray-700 mt-7">
                                    Ficha Médica del Estudiante
                                </h1>
                                <p class="mb-3 text-center text-gray-600 dark:text-gray-600 mt-2 text-1xl">
                                    Comepleta cada uno de los campos con información verídica.
                                </p>
                            </div>
                        </div>

                        <!-- Cédula del padre o DNI -->
                        <div class="col-span-4 md:col-span-4 lg:col-span-4 opacity-75">
                            <label 
                                class="block font-medium"
                            >   
                                Cédula
                            </label>

                            <input 
                                type="text" 
                                name="cedula" 
                                id="cedula"
                                value="0955546601"
                                class="mt-1 block border-gray-300 w-full rounded-md"
                                disabled
                            >
                            @error('cedula')
                                <p 
                                    class="mt-2 text-pink-600 text-sm">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Primer nombre estudiante -->
                        <div class="col-span-4 md:col-span-2 lg:col-span-1 opacity-75">
                            <label 
                                class="block font-medium"
                            >   
                                Primero Nombre
                            </label>

                            <input 
                                type="text" 
                                name="primer_nombre"
                                id="primer_nombre"
                                value="John"
                                class="mt-1 block border-gray-300 w-full rounded-md"
                                disabled
                            >
                            @error('primer_nombre')
                                <p 
                                    class="mt-2 text-pink-600 text-sm">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Segundo nombre estudiante -->
                        <div class="col-span-4 md:col-span-2 lg:col-span-1 opacity-75">
                            <label 
                                class="block font-medium"
                            >   
                                Segundo Nombre
                            </label>

                            <input 
                                type="text" 
                                name="segundo_nombre" 
                                id="segundo_nombre"
                                value="Jairo"
                                class="mt-1 block border-gray-300 w-full rounded-md"
                                disabled
                            >
                            @error('segundo_nombre')
                                <p 
                                    class="mt-2 text-pink-600 text-sm">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- apellido paterno estudiante -->
                        <div class="col-span-4 md:col-span-2 lg:col-span-1 opacity-75">
                            <label 
                                class="block font-medium"
                            >   
                                Apellido paterno
                            </label>

                            <input 
                                type="text" 
                                name="apellido_paterno" 
                                id="apellido_paterno"
                                value="Romero"
                                class="mt-1 block border-gray-300 w-full rounded-md"
                                disabled
                            >
                            @error('apellido_paterno')
                                <p 
                                    class="mt-2 text-pink-600 text-sm">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- apellido materno estudiante -->
                        <div class="col-span-4 md:col-span-2 lg:col-span-1 opacity-75">
                            <label 
                                class="block font-medium"
                            >   
                                Apellido materno
                            </label>

                            <input 
                                type="text" 
                                name="apellido_materno" 
                                id="apellido_materno"
                                value="Sanchez"
                                class="mt-1 block border-gray-300 w-full rounded-md"
                                disabled
                            >
                            @error('apellido_materno')
                                <p 
                                    class="mt-2 text-pink-600 text-sm">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- peso estudiante -->
                        <div class="col-span-4 md:col-span-2 lg:col-span-2">
                            <label 
                                class="block font-medium"
                            >   
                                Peso
                            </label>

                            <input 
                                type="text" 
                                name="peso" 
                                id="peso"
                                placeholder="peso..." 
                                class="mt-1 block border-gray-300 w-full rounded-md"
                            >
                            @error('peso')
                                <p 
                                    class="mt-2 text-pink-600 text-sm">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- peso estudiante -->
                        <div class="col-span-4 md:col-span-2 lg:col-span-2">
                            <label 
                                class="block font-medium"
                            >   
                                Estatura
                            </label>

                            <input 
                                type="text" 
                                name="estatura" 
                                id="estatura"
                                placeholder="estatura..." 
                                class="mt-1 block border-gray-300 w-full rounded-md"
                            >
                            @error('estatura')
                                <p 
                                    class="mt-2 text-pink-600 text-sm">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Si o No - discapacidad -->
                        <div class="col-span-4 md:col-span-4 lg:col-span-4">
                            <label 
                                class="block font-medium"
                            >   
                                ¿Es estudiante tiene algún tipo de discapacidad?
                            </label>

                            <select 
                                name="discapacidad_si_no" 
                                id="discapacidad_si_no"
                                class="mt-1 block border-gray-300 w-full rounded-md"
                            >
                       
                                <option value="--seleccionar--">--seleccionar--</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                    
                            </select>

                            @error('discapacidad_id')
                                <p 
                                    class="mt-2 text-pink-600 text-sm">
                                    No puedes eligir la opción "--seleccionar--"
                                </p>
                            @enderror
                        </div>

                        <!-- discapacidad estudiante -->
                        <div class="col-span-4 md:col-span-4 lg:col-span-4" id="discapacidad_contenedor" style="display: none;">
                            
                            <div class="grid grid-cols-4 gap-4 border-gray-600 p-6">
                                <div class="col-span-2 md:col-span-3 lg:col-span-4 shadow-md">
                                    <label 
                                        class="block font-medium bg-gray-700 text-white p-3"
                                    >   
                                        Tipo de discapacidad
                                    </label>
                                </div>
                                <div class="col-span-2 md:col-span-4 lg:col-span-2">
                                    <label 
                                        class="block font-medium"
                                    >   
                                        ¿Cuál es el tipo de discapacidad que tiene el estudiante?
                                    </label>

                                    <select 
                                        name="discapacidad_id" 
                                        id="discapacidad_id"
                                        class="mt-1 block border-gray-300 w-full rounded-md"
                                    >
                                        @foreach($tiposDiscapacidad as $tiposDiscapacidad)
                                            <option 
                                                value="{{$tiposDiscapacidad->id}}"
                                                {{ old('tiposDiscapacidad') == $tiposDiscapacidad->id ? 'selected' : '' }}    
                                            >
                                                {{$tiposDiscapacidad->tipos_discapacidad}}
                                            </option>
                                        @endforeach

                                    </select>

                                    @error('discapacidad_id')
                                        <p 
                                            class="mt-2 text-pink-600 text-sm">
                                            No puedes eligir la opción "--seleccionar--"
                                        </p>
                                    @enderror
                                </div>

                                <div class="col-span-4 md:col-span-4 lg:col-span-2">
                                    <label 
                                        class="block font-medium"
                                    >   
                                        Porcentaje de discapacidad
                                    </label>

                                    <div class="flex rounded-lg overflow-hidden border border-gray-300">
                                        
                                        <!-- Cuadro gris del icono con más padding -->
                                        <span class="bg-gray-200 text-gray-600 px-4 py-2 flex items-center">
                                            %
                                        </span>

                                        <!-- Input con más padding -->
                                        <input 
                                            type="number"
                                            id="porcentaje"
                                            name="porcentaje"
                                            min="0" 
                                            max="100"
                                            class="w-full px-4 py-2 focus:ring-blue-500 focus:border-blue-500 outline-none"
                                            placeholder="0"
                                        >
                                    </div>
                                </div>

                                <div class="col-span-4 md:col-span-4 lg:col-span-4">
                                    <label 
                                        class="block font-medium"
                                    >   
                                        Mas detalle sobre el tipo de discapacidad del estudiante
                                    </label>

                                    <textarea 
                                        name="detalle_discapacidad"
                                        id="detalle_discapacidad"
                                        class="mt-1 block border-gray-300 w-full rounded-md">
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Si o No - Medicación estudiante -->
                        <div class="col-span-4 md:col-span-4 lg:col-span-4">
                            <label 
                                class="block font-medium"
                            >   
                                ¿Es estudiante está bao algún tipo de medicación?
                            </label>

                            <select 
                                name="medicacion_si_no" 
                                id="medicacion_si_no"
                                class="mt-1 block border-gray-300 w-full rounded-md"
                            >
                       
                                <option value="--seleccionar--">--seleccionar--</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                    
                            </select>

                            @error('medicacion_id')
                                <p 
                                    class="mt-2 text-pink-600 text-sm">
                                    No puedes eligir la opción "--seleccionar--"
                                </p>
                            @enderror
                        </div>

                        <!-- Medicación detalle -->
                        <div class="col-span-4 md:col-span-4 lg:col-span-4" id="medicacion_contenedor" style="display: none;">
                            <label 
                                class="block font-medium"
                            >   
                               Deatlle la medicación del estudiante
                            </label>

                            <textarea 
                                name="detalle_medicacion"
                                id="detalle_medicacion"
                                class="mt-1 block border-gray-300 w-full rounded-md">
                            </textarea>
                        </div>

                        <!-- Si o No - Alergia estudiante -->
                        <div class="col-span-4 md:col-span-4 lg:col-span-4">
                            <label 
                                class="block font-medium"
                            >   
                                ¿Es estudiante tiene algún tipo de alergia?
                            </label>

                            <select 
                                name="alergia_si_no" 
                                id="alergia_si_no"
                                class="mt-1 block border-gray-300 w-full rounded-md"
                            >
                       
                                <option value="--seleccionar--">--seleccionar--</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                    
                            </select>

                            @error('alergia_id')
                                <p 
                                    class="mt-2 text-pink-600 text-sm">
                                    No puedes eligir la opción "--seleccionar--"
                                </p>
                            @enderror
                        </div>

                        <!-- Tipos de Alergia -->
                        <div class="col-span-2 md:col-span-4 lg:col-span-4" id="alergia_contenedor" style="display: none;">
                            <label 
                                class="block font-medium"
                            >   
                                ¿Cuál es el tipo de alergia que tiene el estudiante?
                            </label>

                            <select 
                                name="tiposAlergia" 
                                id="tiposAlergia"
                                class="mt-1 block border-gray-300 w-full rounded-md"
                            >
                                @foreach($tiposAlergia as $tiposAlergia)
                                    <option 
                                        value="{{$tiposAlergia->id}}"
                                        {{ old('tiposAlergia') == $tiposAlergia->id ? 'selected' : '' }}    
                                    >
                                        {{ $tiposAlergia->alergias }}
                                    </option>
                                @endforeach

                            </select>

                            @error('tiposAlergia')
                                <p 
                                    class="mt-2 text-pink-600 text-sm">
                                    No puedes eligir la opción "--seleccionar--"
                                </p>
                            @enderror
                        </div>

                        <!-- Si o No - Condiciones médicas estudiante -->
                        <div class="col-span-4 md:col-span-4 lg:col-span-4">
                            <label 
                                class="block font-medium"
                            >   
                                ¿Es estudiante padece algún tipo de condición médica?
                            </label>

                            <select 
                                name="condicion_medica_si_no" 
                                id="condicion_medica_si_no"
                                class="mt-1 block border-gray-300 w-full rounded-md"
                            >
                       
                                <option value="--seleccionar--">--seleccionar--</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                    
                            </select>

                            @error('condicion_medica_si_no')
                                <p 
                                    class="mt-2 text-pink-600 text-sm">
                                    No puedes eligir la opción "--seleccionar--"
                                </p>
                            @enderror
                        </div>

                        <!-- Condiciones médicas detalle estudiante -->
                        <div class="col-span-4 md:col-span-4 lg:col-span-4" id="condicion_medica_contenedor" style="display: none;">
                            <label 
                                class="block font-medium"
                            >   
                               Deatlle las condicones médicas
                            </label>

                            <textarea 
                                name="detalle_condicion_medica"
                                id="detalle_condicion_medica"
                                class="mt-1 block border-gray-300 w-full rounded-md">
                            </textarea>
                        </div>

                        <!-- Si o No - Intervenciones Quirurgicas -->
                        <div class="col-span-4 md:col-span-4 lg:col-span-4">
                            <label 
                                class="block font-medium"
                            >   
                                ¿Es estudiante ha pasado por algún tipo de intervención quirurgica?
                            </label>

                            <select 
                                name="intervencion_quirurgica_si_no" 
                                id="intervencion_quirurgica_si_no"
                                class="mt-1 block border-gray-300 w-full rounded-md"
                            >
                       
                                <option value="--seleccionar--">--seleccionar--</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                    
                            </select>

                            @error('intervencion_quirurgica_si_no')
                                <p 
                                    class="mt-2 text-pink-600 text-sm">
                                    No puedes eligir la opción "--seleccionar--"
                                </p>
                            @enderror
                        </div>

                        <!-- Detalle Intervenciones Quirurgicas -->
                        <div class="col-span-4 md:col-span-4 lg:col-span-4" id="detalle_intervenciones_quirurgicas" style="display: none;">
                            <label 
                                class="block font-medium"
                            >   
                               Detalle las Intervenciones quirurgicas por las que ha pasado el estudiante
                            </label>

                            <textarea 
                                name="detalle_intervenciones_quirurgicas"
                                id="detalle_intervenciones_quirurgicas"
                                class="mt-1 block border-gray-300 w-full rounded-md">
                            </textarea>
                        </div>

                        <!-- Fecha última desparacitación -->
                        <div class="col-span-4 md:col-span-4 lg:col-span-4">
                            <label 
                                class="block"
                            >   
                                ¿Cuál fue la fecha de la última desparacitación del estudiante?
                            </label>

                            <input 
                                type="date" 
                                name="fecha_ultima_desparacitacion" 
                                id="fecha_ultima_desparacitacion" 
                                value="{{ old('fecha_nacimiento') }}" 
                                class="mt-1 block border-gray-300 w-full rounded-md"
                            >
                            @error('fecha_ultima_desparacitacion')
                                <p 
                                    class="mt-2 text-pink-600 text-sm">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Si o No - Vacunas Estudiante -->
                        <div class="col-span-4 md:col-span-4 lg:col-span-4">
                            <label 
                                class="block font-medium"
                            >   
                                ¿El estudiante tiene vacunas?
                            </label>

                            <select 
                                name="vacuna_si_no" 
                                id="vacuna_si_no"
                                class="mt-1 block border-gray-300 w-full rounded-md"
                            >
                       
                                <option value="--seleccionar--">--seleccionar--</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                    
                            </select>

                            @error('vacuna_si_no')
                                <p 
                                    class="mt-2 text-pink-600 text-sm">
                                    No puedes eligir la opción "--seleccionar--"
                                </p>
                            @enderror
                        </div>

                        <!-- Tipos de vacunas estudiante -->
                        <div class="col-span-4 md:col-span-4 lg:col-span-4 p-6" id="detalle_vacuna" style="display: none;">
                            <label 
                                class="block font-medium"
                            >   
                                Seleccione el tipo de vacunas que tiene el estudiante.
                            </label>

                            @foreach($tipoVacuna as $tipoVacuna)
                                <div class="flex items-center ps-4 border border-gray-200 rounded-sm dark:border-gray-700">
                                    <input id="bordered-checkbox-{ $tipoVacuna->id }" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="bordered-checkbox-{ $tipoVacuna->id }" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $tipoVacuna->tipo_vacunas }}</label>
                                </div>
                            @endforeach
                        </div>

                        <!-- Dificultad para dormir si o no -->
                        <div class="col-span-4 md:col-span-4 lg:col-span-4">
                            <label 
                                class="block font-medium"
                            >   
                                ¿El estudiante presenta alguna dificultad para dormir?
                            </label>

                            <select 
                                name="dificultad_dormir_si_no"
                                id="dificultad_dormir_si_no"
                                class="mt-1 block border-gray-300 w-full rounded-md"
                            >
                       
                                <option value="--seleccionar--">--seleccionar--</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                    
                            </select>
                        </div>

                        <!-- Detalle dificultad para dormir -->
                        <div class="col-span-4 md:col-span-4 lg:col-span-4" id="detalle_dificultad_dormir" style="display: none;">
                            <div class="grid grid-cols-4 gap-4 border-gray-600 p-7">

                                <div class="col-span-4 md:col-span-4 lg:col-span-4">
                                    <label 
                                        class="block font-medium"
                                    >   
                                        ¿Cuáles son los problemas que el estudiante tiene al momento de dormir?
                                    </label>

                                    <textarea 
                                        name="problemas_dormir"
                                        id="problemas_dormir"
                                        class="mt-1 block border-gray-300 w-full rounded-md">
                                    </textarea>
                                </div>

                                <div class="col-span-4 md:col-span-4 lg:col-span-4">
                                    <label 
                                        class="block font-medium"
                                    >   
                                        ¿Con que frecuencía el estudiante presenta este problemas?
                                    </label>

                                    <select 
                                        name="" 
                                        id=""
                                        class="mt-1 block border-gray-300 w-full rounded-md"
                                    >
                            
                                        <option value="">--seleccionar--</option>
                                        <option value="raras_veces">Raras veces</option>
                                        <option value="a_veces">A veces</option>
                                        <option value="frecuente">Frecuente</option>
                                        <option value="siempre">Siempre</option>
                            
                                    </select>
                                </div>

                                <div class="col-span-4 md:col-span-4 lg:col-span-4">
                                    <label 
                                        class="block font-medium"
                                    >   
                                        ¿El estudiante se encuentra bajo algún tipo de tratamiento?
                                    </label>

                                    <select 
                                        name=""
                                        id=""
                                        class="mt-1 block border-gray-300 w-full rounded-md"
                                    >
                            
                                        <option value="--seleccionar--">--seleccionar--</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>

                                <div class="col-span-4 md:col-span-4 lg:col-span-4">
                                    <label 
                                        class="block font-medium"
                                    >   
                                        ¿Cuál es el tratamiento que sigue el estudiante? 
                                    </label>

                                    <textarea 
                                        name=""
                                        id=""
                                        class="mt-1 block border-gray-300 w-full rounded-md">
                                    </textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Historial Patológico -->
                        <div class="col-span-4 md:col-span-4 lg:col-span-4">
                            <label 
                                class="block font-medium"
                            >   
                                ¿El estudiante presenta algún historial patológico?
                            </label>

                            <select 
                                name="historial_patologico_si_no"
                                id="historial_patologico_si_no"
                                class="mt-1 block border-gray-300 w-full rounded-md"
                            >
                       
                                <option value="--seleccionar--">--seleccionar--</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </div>

                        

                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Me permite ocultar y mostrar el select de "discapacidad estudiante" -->
    @push('scripts')
        <script>
            var discapacidad_si_no = document.getElementById('discapacidad_si_no');
            var discapacidad_contenedor = document.getElementById('discapacidad_contenedor');

            discapacidad_si_no.addEventListener('change', function () {
                if (this.value === 'Si') {
                    discapacidad_contenedor.style.display = 'block';
                } else {
                    discapacidad_contenedor.style.display = 'none';
                }
            });
        </script>
    @endpush

    <!-- Me permite ocultar y mostrar el select de "Medicación estudiante" -->
    @push('scripts')
        <script>
            var medicacion_si_no = document.getElementById('medicacion_si_no');
            var medicacion_contenedor = document.getElementById('medicacion_contenedor');

            medicacion_si_no.addEventListener('change', function () {
                if (this.value === 'Si') {
                    medicacion_contenedor.style.display = 'block';
                } else {
                    medicacion_contenedor.style.display = 'none';
                }
            });
        </script>
    @endpush

    <!-- Me permite ocultar y mostrar el select de "Alergia estudiante" -->
    @push('scripts')
        <script>
            var alergia_si_no = document.getElementById('alergia_si_no');
            var alergia_contenedor = document.getElementById('alergia_contenedor');

            alergia_si_no.addEventListener('change', function () {
                if (this.value === 'Si') {
                    alergia_contenedor.style.display = 'block';
                } else {
                    alergia_contenedor.style.display = 'none';
                }
            });
        </script>
    @endpush

    <!-- Me permite ocultar y mostrar el text area de "detalle condiciones médcias" -->
    @push('scripts')
        <script>
            var condicion_medica_si_no = document.getElementById('condicion_medica_si_no');
            var condicion_medica_contenedor = document.getElementById('condicion_medica_contenedor');

            condicion_medica_si_no.addEventListener('change', function () {
                if (this.value === 'Si') {
                    condicion_medica_contenedor.style.display = 'block';
                } else {
                    condicion_medica_contenedor.style.display = 'none';
                }
            });
        </script>
    @endpush

    <!-- Me permite ocultar y mostrar el text area de "detalle intervenciones quirurgicas" -->
    @push('scripts')
        <script>
            var intervencion_quirurgica_si_no = document.getElementById('intervencion_quirurgica_si_no');
            var detalle_intervenciones_quirurgicas = document.getElementById('detalle_intervenciones_quirurgicas');

            intervencion_quirurgica_si_no.addEventListener('change', function () {
                if (this.value === 'Si') {
                    detalle_intervenciones_quirurgicas.style.display = 'block';
                } else {
                    detalle_intervenciones_quirurgicas.style.display = 'none';
                }
            });
        </script>
    @endpush

    <!-- Me permite ocultar y mostrar el imput radio de "Tipos de vacunas" -->
    @push('scripts')
        <script>
            var vacuna_si_no = document.getElementById('vacuna_si_no');
            var detalle_vacuna = document.getElementById('detalle_vacuna');

            vacuna_si_no.addEventListener('change', function () {
                if (this.value === 'Si') {
                    detalle_vacuna.style.display = 'block';
                } else {
                    detalle_vacuna.style.display = 'none';
                }
            });
        </script>
    @endpush

    <!-- Me permite ocultar y mostrar el imput radio de "Dificultad para dormir" -->
    @push('scripts')
        <script>
            var dificultad_dormir_si_no = document.getElementById('dificultad_dormir_si_no');
            var detalle_dificultad_dormir = document.getElementById('detalle_dificultad_dormir');

            dificultad_dormir_si_no.addEventListener('change', function () {
                if (this.value === 'Si') {
                    detalle_dificultad_dormir.style.display = 'block';
                } else {
                    detalle_dificultad_dormir.style.display = 'none';
                }
            });
        </script>
    @endpush

</x-app-layout>