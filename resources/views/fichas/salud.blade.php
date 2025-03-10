<x-fichas>
    <div class="container mx-auto">
        <div class="px-10 pb-10 pt-1">
            <form action="{{ route('ficha.salud.store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-4 gap-4">
                    <div class="col-span-4 md:col-span-4 lg:col-span-4">
                        <div class="text-center py-10">
                            <div class="flex justify-center items-center gap-2">
                                <div class="w-16 border-t-2 border-gray-200"></div>
                                <span class="bg-blue-200 text-blue-700 rounded-full w-12 h-12 flex items-center justify-center text-2xl shadow-md">
                                    🏥 
                                </span>
                                <div class="w-16 border-t-2 border-gray-200"></div>
                            </div>

                            <h1 class="text-4xl font-bold text-gray-800 mt-4">
                                Ficha de Salud
                            </h1>

                            <p></p>
                            <p class="text-lg text-gray-600 mt-4 max-w-6xl mx-auto leading-relaxed">
                                Bienvenido(a) al proceso de matriculación de la 
                                <span class="font-semibold text-green-500">Unidad Educativa Nuestra Señora del Carmen</span>. Agradecemos su confianza para la formación académica de su representado(a). Le pedimos que complete cuidadosamente la información solicitada,
                                asegurándose de que los datos ingresados sean correctos y estén actualizados. 
                            </p>

                            <p class="text-sm text-gray-500 mt-4 italic">
                                "Comprometidos con la excelencia educativa"
                            </p>
                            <!-- <span class="font-semibold text-red-500">Los campos marcados con * son obligatorios.</span> -->

                            <div class="w-20 h-1 bg-blue-300 rounded-full mx-auto mt-6"></div>
                        </div>
                    </div>

                    <!-- Cédula Estudiante -->
                    <div class="col-span-4 md:col-span-4 lg:col-span-4">
                        <label class="block font-medium text-gray-700">Cédula</label>
                        <input 
                            type="text" 
                            id="cedula_estudiante" 
                            name="cedula_estudiante" 
                            placeholder="Ingrese su cédula"
                            class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                            value = "{{ old('cedula_estudiante') }}"
                        >
                        @error('cedula_estudiante')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror

                    </div>

                    <!-- Primer Nombre Estudiante -->
                    <div class="col-span-4 md:col-span-4 lg:col-span-1">
                        <label class="block  font-medium text-gray-700">Primer Nombre</label>
                        <input 
                            type="text" 
                            id="primer_nombre_estudiante" 
                            name="primer_nombre_estudiante"  
                            placeholder="Primer Nombre"
                            class="mt-1 block w-full rounded-md border-gray-300  focus:border-blue-500 focus:ring-blue-500"
                            value = "{{ old('primer_nombre_estudiante') }}"
                        >
                        @error('primer_nombre_estudiante')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                    ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Segundo Nombre Estudiante -->
                    <div class="col-span-4 md:col-span-4 lg:col-span-1">
                        <label class="block  font-medium text-gray-700">Segundo Nombre</label>
                        <input 
                            type="text" 
                            id="segundo_nombre_estudiante" 
                            name="segundo_nombre_estudiante"  
                            placeholder="Segundo Nombre"
                            class="mt-1 block w-full rounded-md border-gray-300  focus:border-blue-500 focus:ring-blue-500"
                            value = "{{ old('segundo_nombre_estudiante') }}"
                        >
                        @error('segundo_nombre_estudiante')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Apellido Paterno Estudiante -->
                    <div class="col-span-4 md:col-span-4 lg:col-span-1">
                        <label class="block  font-medium text-gray-700">Apellido Paterno</label>
                        <input 
                            type="text" 
                            id="apellido_paterno_estudiante" 
                            name="apellido_paterno_estudiante"  
                            placeholder="Apellido Paterno"
                            class="mt-1 block w-full rounded-md border-gray-300  focus:border-blue-500 focus:ring-blue-500"
                            value = "{{ old('apellido_paterno_estudiante') }}"
                        >
                        @error('apellido_paterno_estudiante')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Apellido Materno Estudiante -->
                    <div class="col-span-4 md:col-span-4 lg:col-span-1">
                        <label class="block  font-medium text-gray-700">Apellido Materno</label>
                        <input 
                            type="text" 
                            id="apellido_materno_estudiante" 
                            name="apellido_materno_estudiante"  
                            placeholder="Apellido Materno"
                            class="mt-1 block w-full rounded-md border-gray-300  focus:border-blue-500 focus:ring-blue-500"
                            value = "{{ old('apellido_materno_estudiante') }}"
                        >
                        @error('apellido_materno_estudiante')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Año Basica --> 
                    <div class="col-span-4">
                        <label for="opcion" class="block text-gray-700 font-medium mb-2">
                        Año de Básica
                        </label>

                        <select 
                            id="ano_basica" 
                            name="ano_basica" 
                            class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                        >
                            <option value="--seleccionar--" {{ old('ano_basica') == '--seleccionar--' ? 'selected' : '' }}>-seleccionar--</option>
                            <option value="Inicial 1" {{ old('ano_basica') == 'Inicial 1' ? 'selected' : '' }}>Inicial 1</option>
                            <option value="Inicial 2" {{ old('ano_basica') == 'Inicial 2' ? 'selected' : '' }}>Inicial 2</option>
                            <option value="Primero" {{ old('ano_basica') == 'Primero' ? 'selected' : '' }}>Primero</option>
                            <option value="Segundo" {{ old('ano_basica') == 'Segundo' ? 'selected' : '' }}>Segundo</option>
                            <option value="Tercero" {{ old('ano_basica') == 'Tercero' ? 'selected' : '' }}>Tercero</option>
                            <option value="Cuarto" {{ old('ano_basica') == 'Cuarto' ? 'selected' : '' }}>Cuarto</option>
                            <option value="Quinto" {{ old('ano_basica') == 'Quinto' ? 'selected' : '' }}>Quinto</option>
                            <option value="Sexto" {{ old('ano_basica') == 'Sexto' ? 'selected' : '' }}>Sexto</option>
                            <option value="Septimo" {{ old('ano_basica') == 'Septimo' ? 'selected' : '' }}>Séptimo</option>
                            <option value="Octavo" {{ old('ano_basica') == 'Octavo' ? 'selected' : '' }}>Octavo</option>
                            <option value="Noveno" {{ old('ano_basica') == 'Noveno' ? 'selected' : '' }}>Noveno</option>
                            <option value="Décimo" {{ old('ano_basica') == 'Décimo' ? 'selected' : '' }}>Décimo</option>
                            <option value="Primero de Bachillerato" {{ old('ano_basica') == 'Primero de Bachillerato' ? 'selected' : '' }}>Primero de Bachillerato</option>
                            <option value="Segundo de Bachillerato" {{ old('ano_basica') == 'Segundo de Bachillerato' ? 'selected' : '' }}>Segundo de Bachillerato</option>
                            <option value="Tercero de Bachillerato" {{ old('ano_basica') == 'Tercero de Bachillerato' ? 'selected' : '' }}>Tercero de Bachillerato</option>
                        </select>
                        @error('ano_basica')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Peso en Libras -->
                    <div class="col-span-4 md:col-span-4 lg:col-span-2">
                        <label class="block  font-medium text-gray-700">Estatura (170 cm...)</label>
                        <input 
                            type="text" 
                            id="estatura" 
                            name="estatura"  
                            placeholder="170"
                            class="mt-1 block w-full rounded-md border-gray-300  focus:border-blue-500 focus:ring-blue-500"
                            value = "{{ old('estatura') }}"
                        >
                        @error('estatura')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Estatura -->
                    <div class="col-span-4 md:col-span-4 lg:col-span-2">
                        <label class="block  font-medium text-gray-700">Peso libras (168 kg...)</label>
                        <input 
                            type="text" 
                            id="peso_libras" 
                            name="peso_libras"  
                            placeholder="Ej: 168"
                            class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                            value = "{{ old('peso_libras') }}"
                        >
                        @error('peso_libras')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Discapacidad si o no -->
                    <div class="col-span-4">
                        <label for="opcion" class="block text-gray-700 font-medium mb-2">
                            ¿El estudiante posse discapacidad?
                        </label>

                        <select 
                            id="discapacidad_si_no" 
                            name="discapacidad_si_no" 
                            class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                            onchange="discapacidadVisibility()"
                        >
                            <option value="--seleccionar--" {{ old('discapacidad_si_no') == '--seleccionar--' ? 'selected' : '' }}>-seleccionar--</option>
                            <option value="Si" {{ old('discapacidad_si_no') == 'Si' ? 'selected' : '' }}>Si</option>
                            <option value="No" {{ old('discapacidad_si_no') == 'No' ? 'selected' : '' }}>No</option>
                        </select>
                        @error('discapacidad_si_no')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Discapacidades -->
                    <div id="discapacidad_seccion" class="col-span-4 hidden">
                        <div class="p-4">
                            <!-- Encabezados (Solo visibles en pantallas medianas o más grandes) -->
                            <div class="hidden md:grid grid-cols-4 gap-4 font-semibold mb-2">
                                <div>Condición</div>
                                <div>Estado</div>
                                <div>Porcentaje</div>
                                <div>Detalle</div>
                            </div>

                            <!-- Sección dinámica para cada condición -->
                            <div class="space-y-4">
                                <!-- Lenguaje -->
                                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center">
                                    <div class="font-semibold md:font-normal">Lenguaje</div>

                                    <select 
                                        class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 condicion-select"
                                        name="discapacidad_lenguaje_si_no"
                                    >
                                        <option value="No">No</option>
                                        <option value="Sí">Sí</option>
                                    </select>
                                    <div class="relative w-full">
                                        <input 
                                            type="number" 
                                            class="mt-1 block w-full rounded-md border-gray-500 focus:border-blue-500 focus:ring-blue-500 porcentaje-input opacity-50" 
                                            min="0" 
                                            max="100" 
                                            placeholder="0-100"
                                            name="discapacidad_lenguaje_porcentaje"
                                            value = "{{ old('discapacidad_lenguaje_porcentaje') }}"
                                        >
                                        <span class="absolute right-3 top-2 text-gray-500">%</span>
                                    </div>
                                    <textarea 
                                        class="mt-1 block w-full rounded-md border-gray-500 h-10 detalle-textarea opacity-50" 
                                        name="discapacidad_lenguaje_detalle"
                                        value = "{{ old('discapacidad_lenguaje_detalle') }}"
                                        disabled
                                        >
                                    </textarea>
                                </div>

                                <!-- Auditiva -->
                                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center">
                                    <div class="font-semibold md:font-normal">Auditiva</div>
                                    <select 
                                        class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 condicion-select"
                                        name="discapacidad_auditiva_si_no"
                                    >
                                        <option value="No">No</option>
                                        <option value="Sí">Sí</option>
                                    </select>
                                    <div class="relative w-full">
                                        <input 
                                            type="number" 
                                            class="mt-1 block w-full rounded-md border-gray-500 focus:border-blue-500 focus:ring-blue-500 porcentaje-input opacity-50" 
                                            min="0" 
                                            max="100" 
                                            placeholder="0-100" 
                                            name="discapacidad_auditiva_porcentaje"
                                            value = "{{ old('discapacidad_auditiva_porcentaje') }}"
                                            disabled
                                        >
                                        <span class="absolute right-3 top-2 text-gray-500">%</span>
                                    </div>
                                    <textarea 
                                        class="mt-1 block w-full rounded-md border-gray-500 h-10 detalle-textarea opacity-50" 
                                        name="discapacidad_auditiva_detalle"
                                        value = "{{ old('discapacidad_auditiva_detalle') }}"
                                        disabled
                                        >
                                    </textarea>
                                </div>

                                <!-- Visual -->
                                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center">
                                    <div class="font-semibold md:font-normal">Visual</div>
                                    <select 
                                        class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 condicion-select"
                                        name="discapacidad_visual_si_no"
                                        >
                                        <option value="No">No</option>
                                        <option value="Sí">Sí</option>
                                    </select>
                                    <div class="relative w-full">
                                        <input 
                                            type="number" 
                                            class="mt-1 block w-full rounded-md border-gray-500 focus:border-blue-500 focus:ring-blue-500 porcentaje-input opacity-50" 
                                            min="0" 
                                            max="100" 
                                            placeholder="0-100"
                                            name="discapacidad_visual_porcentaje"
                                            value = "{{ old('discapacidad_visual_porcentaje') }}"
                                            disabled
                                        >
                                        <span class="absolute right-3 top-2 text-gray-500">%</span>
                                    </div>
                                    <textarea 
                                        class="mt-1 block w-full rounded-md border-gray-500 h-10 detalle-textarea opacity-50" 
                                        name="discapacidad_visual_detalle"
                                        value = "{{ old('discapacidad_visual_detalle') }}"
                                        disabled
                                        >
                                    </textarea>
                                </div>

                                <!-- Física -->
                                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center">
                                    <div class="font-semibold md:font-normal">Física</div>
                                    <select 
                                        class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 condicion-select"
                                        name="discapacidad_fisca_si_no"
                                    >
                                        <option value="No">No</option>
                                        <option value="Sí">Sí</option>
                                    </select>
                                    <div class="relative w-full">
                                        <input 
                                            type="number" 
                                            class="mt-1 block w-full rounded-md border-gray-500 focus:border-blue-500 focus:ring-blue-500 porcentaje-input opacity-50" 
                                            min="0" 
                                            max="100" 
                                            placeholder="0-100"
                                            name="discapacidad_fisica_porcentaje"
                                            value = "{{ old('discapacidad_fisica_porcentaje') }}"
                                            disabled
                                        >
                                        <span class="absolute right-3 top-2 text-gray-500">%</span>
                                    </div>
                                    <textarea 
                                        class="mt-1 block w-full rounded-md border-gray-500 h-10 detalle-textarea opacity-50" 
                                        name="discapacidad_fisica_detalle"
                                        value = "{{ old('discapacidad_fisica_detalle') }}"
                                        disabled
                                        >
                                    </textarea>
                                </div>

                                <!-- Intelectual -->
                                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center">
                                    <div class="font-semibold md:font-normal">Intelectual</div>
                                    <select 
                                        class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 condicion-select"
                                        name="discapacidad_intelectua_si_no"
                                    >
                                        <option value="No">No</option>
                                        <option value="Sí">Sí</option>
                                    </select>
                                    <div class="relative w-full">
                                        <input 
                                            type="number" 
                                            class="mt-1 block w-full rounded-md border-gray-500 focus:border-blue-500 focus:ring-blue-500 porcentaje-input opacity-50" 
                                            min="0" 
                                            max="100" 
                                            placeholder="0-100"
                                            name="discapacidad_Intelectual_porcentaje" 
                                            value = "{{ old('discapacidad_Intelectual_porcentaje') }}"
                                            disabled
                                        >
                                        <span class="absolute right-3 top-2 text-gray-500">%</span>
                                    </div>
                                    <textarea 
                                        class="mt-1 block w-full rounded-md border-gray-500 h-10 detalle-textarea opacity-50" 
                                        name="discapacidad_Intelectual_detalle"
                                        value = "{{ old('discapacidad_Intelectual_detalle') }}"
                                        disabled
                                        >
                                    </textarea>
                                </div>

                                <!-- Enfermedades Crónicas y Catastróficas -->
                                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center">
                                    <div class="font-semibold md:font-normal">Enfermedades Crónicas y Catastróficas</div>
                                    <select class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 condicion-select">
                                        <option value="No">No</option>
                                        <option value="Sí">Sí</option>
                                    </select>
                                    <div class="relative w-full">
                                        <input type="number" class="mt-1 block w-full rounded-md border-gray-500 focus:border-blue-500 focus:ring-blue-500 porcentaje-input opacity-50" min="0" max="100" placeholder="0-100" disabled>
                                        <span class="absolute right-3 top-2 text-gray-500">%</span>
                                    </div>
                                    <textarea class="mt-1 block w-full rounded-md border-gray-500 h-10 detalle-textarea opacity-50" disabled></textarea>
                                </div>

                                <!-- Psicosocial -->
                                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center">
                                    <div class="font-semibold md:font-normal">Psicosocial</div>
                                    <select class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 condicion-select">
                                        <option value="No">No</option>
                                        <option value="Sí">Sí</option>
                                    </select>
                                    <div class="relative w-full">
                                        <input type="number" class="mt-1 block w-full rounded-md border-gray-500 focus:border-blue-500 focus:ring-blue-500 porcentaje-input opacity-50" min="0" max="100" placeholder="0-100" disabled>
                                        <span class="absolute right-3 top-2 text-gray-500">%</span>
                                    </div>
                                    <textarea class="mt-1 block w-full rounded-md border-gray-500 h-10 detalle-textarea opacity-50" disabled></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Aparatos de ayuda -->
                    <div class="col-span-4">
                        <label for="opcion" class="block text-gray-700 font-medium mb-2">
                            Utiliza aparatos de ayuda
                        </label>

                        <select 
                            id="aparatos_ayuda" 
                            name="aparatos_ayuda" 
                            class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                            onchange="toggleVisibility()"
                        >
                            <option value="--seleccionar--" {{ old('aparatos_ayuda') == '--seleccionar--' ? 'selected' : '' }}>-seleccionar--</option>
                            <option value="No usa aparatos de ayuda" {{ old('aparatos_ayuda') == 'No usa aparatos de ayuda' ? 'selected' : '' }}>No usa aparatos de ayuda</option>
                            <option value="Anteojos" {{ old('aparatos_ayuda') == 'Anteojos' ? 'selected' : '' }}>Anteojos</option>
                            <option value="Audífonos" {{ old('aparatos_ayuda') == 'Audífonos' ? 'selected' : '' }}>Audífonos</option>
                        </select>
                        @error('aparatos_ayuda')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- En el caso de usar aparatos de ayuda -->
                    <div class="col-span-4 md:col-span-4 lg:col-span-4" id="especifique_aparatos_ayuda_container" style="display: none;">
                        <label class="block  font-medium text-gray-700">Especifique mas detalle sobre los aparatos de ayuda que usa el estudiante</label>
                        <input 
                            type="text" 
                            id="especifique_aparatos_ayuda" 
                            name="especifique_aparatos_ayuda"  
                            placeholder="Especifique mas detalle sobre los aparatos de ayuda que usa el estudiante..."
                            class="mt-1 block w-full rounded-md border-gray-300  focus:border-blue-500 focus:ring-blue-500"
                            value = "{{ old('especifique_aparatos_ayuda') }}"
                        >
                        @error('especifique_aparatos_ayuda')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- El estudiante posse carnet de discapacidad del conadis -->
                    <div class="col-span-4">
                        <label for="opcion" class="block text-gray-700 font-medium mb-2">
                            ¿El estudiante posse carnet de discapacidad del conadis?
                        </label>

                        <select 
                            id="carnet_conadis_si_no" 
                            name="carnet_conadis_si_no" 
                            class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                            onchange="toggleCarnetConadisField()"
                        >
                            <option value="--seleccionar--" {{ old('carnet_conadis_si_no') == '--seleccionar--' ? 'selected' : '' }}>-seleccionar--</option>
                            <option value="Si" {{ old('carnet_conadis_si_no') == 'Si' ? 'selected' : '' }}>Si</option>
                            <option value="No" {{ old('carnet_conadis_si_no') == 'No' ? 'selected' : '' }}>No</option>
                        </select>
                        @error('carnet_conadis_si_no')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Numero de carnet del conadis -->
                    <div class="col-span-4 md:col-span-4 lg:col-span-4" id="numero_carnet_conadis_container">
                        <label class="block  font-medium text-gray-700">Número de carnet del conadis</label>
                        <input 
                            type="text" 
                            id="numero_carnet_conadis" 
                            name="numero_carnet_conadis"  
                            placeholder="Número de carnet del conadis"
                            class="mt-1 block w-full rounded-md border-gray-300  focus:border-blue-500 focus:ring-blue-500"
                            value = "{{ old('numero_carnet_conadis') }}"
                        >
                        @error('numero_carnet_conadis')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- El estudiante está medicado con algún medicamento -->
                    <div class="col-span-4">
                        <label for="opcion" class="block text-gray-700 font-medium mb-2">
                            ¿El estudiante está medicado con algún medicamento?
                        </label>

                        <select 
                            id="medicamento_si_no" 
                            name="medicamento_si_no" 
                            class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                            onchange="toggleEspecifiqueMedicamentosField()"
                        >
                            <option value="--seleccionar--" {{ old('medicamento_si_no') == '--seleccionar--' ? 'selected' : '' }}>-seleccionar--</option>
                            <option value="Si" {{ old('medicamento_si_no') == 'Si' ? 'selected' : '' }}>Si</option>
                            <option value="No" {{ old('medicamento_si_no') == 'No' ? 'selected' : '' }}>No</option>
                        </select>
                        @error('medicamento_si_no')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- En el caso de estar medicado con medicamentos especifique -->
                    <div class="col-span-4 md:col-span-4 lg:col-span-4" id="especifique_medicamentos_container">
                        <label class="block  font-medium text-gray-700">En el caso de estar medicado con medicamentos especifique</label>
                        <input 
                            type="text" 
                            id="especifique_medicamentos" 
                            name="especifique_medicamentos"  
                            placeholder="En el caso de estar medicado con medicamentos especifique"
                            class="mt-1 block w-full rounded-md border-gray-300  focus:border-blue-500 focus:ring-blue-500"
                            value = "{{ old('especifique_medicamentos') }}"
                        >
                        @error('especifique_medicamentos')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- ¿El estudiante posse algun alergia? -->
                    <div class="col-span-4">
                        <label for="opcion" class="block text-gray-700 font-medium mb-2">
                            ¿El estudiante posse algun alergia?
                        </label>

                        <select 
                            id="alergia_estudiante_si_no" 
                            name="alergia_estudiante_si_no" 
                            class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                            onchange="toggleAlergiaEstudianteField()"
                        >
                            <option value="--seleccionar--" {{ old('alergia_estudiante_si_no') == '--seleccionar--' ? 'selected' : '' }}>-seleccionar--</option>
                            <option value="Si" {{ old('alergia_estudiante_si_no') == 'Si' ? 'selected' : '' }}>Si</option>
                            <option value="No" {{ old('alergia_estudiante_si_no') == 'No' ? 'selected' : '' }}>No</option>
                        </select>
                        @error('alergia_estudiante_si_no')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Alergias -->
                    <div class="col-span-4" id="alergia_estudiante_container">
                        <label for="opcion" class="block text-gray-700 font-medium mb-2">
                            Alergias
                        </label>

                        <select 
                            id="alergia_estudiante" 
                            name="alergia_estudiante" 
                            class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                        >
                            <option value="--seleccionar--" {{ old('alergia_estudiante') == '--seleccionar--' ? 'selected' : '' }}>-seleccionar--</option>
                            <option value="Alimentos" {{ old('alergia_estudiante') == 'Alimentos' ? 'selected' : '' }}>Alimentos</option>
                            <option value="Medicamentos" {{ old('alergia_estudiante') == 'Medicamentos' ? 'selected' : '' }}>Medicamentos</option>
                        </select>
                        @error('alergia_estudiante')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Condiciones: Enfermedades / Accidentes -->
                    <div class="col-span-4">
                        <label for="opcion" class="block text-gray-700 font-medium mb-2">
                            Condiciones: Enfermedades / Accidentes
                        </label>

                        <select 
                            id="enfermedades_accidentes" 
                            name="enfermedades_accidentes" 
                            class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                            onchange="toggleEspecifiqueAccidente()"
                        >
                            <option value="--seleccionar--" {{ old('enfermedades_accidentes') == '--seleccionar--' ? 'selected' : '' }}>-seleccionar--</option>
                            <option value="Ninguna" {{ old('enfermedades_accidentes') == 'Ninguna' ? 'selected' : '' }}>Ninguna</option>
                            <option value="Varicela" {{ old('enfermedades_accidentes') == 'Varicela' ? 'selected' : '' }}>Varicela</option>
                            <option value="Chagas" {{ old('enfermedades_accidentes') == 'Chagas' ? 'selected' : '' }}>Chagas</option>
                            <option value="Neumonía" {{ old('enfermedades_accidentes') == 'Neumonía' ? 'selected' : '' }}>Neumonía</option>
                            <option value="Diabetes" {{ old('enfermedades_accidentes') == 'Diabetes' ? 'selected' : '' }}>Diabetes</option>
                            <option value="Otitis" {{ old('enfermedades_accidentes') == 'Otitis' ? 'selected' : '' }}>Otitis</option>
                            <option value="Angina" {{ old('enfermedades_accidentes') == 'Angina' ? 'selected' : '' }}>Angina</option>
                            <option value="Enfermedades de la sangre" {{ old('enfermedades_accidentes') == 'Enfermedades de la sangre' ? 'selected' : '' }}>Enfermedades de la sangre</option>
                            <option value="Desgarro" {{ old('enfermedades_accidentes') == 'Desgarro' ? 'selected' : '' }}>Desgarro</option>
                            <option value="Paperas" {{ old('enfermedades_accidentes') == 'Paperas' ? 'selected' : '' }}>Paperas</option>
                            <option value="Sarampión" {{ old('enfermedades_accidentes') == 'Sarampión' ? 'selected' : '' }}>Sarampión</option>
                            <option value="Asma" {{ old('enfermedades_accidentes') == 'Asma' ? 'selected' : '' }}>Asma</option>
                            <option value="Fiebre reumática" {{ old('enfermedades_accidentes') == 'Fiebre reumática' ? 'selected' : '' }}>Fiebre reumática</option>
                            <option value="Hipertiroidismo" {{ old('enfermedades_accidentes') == 'Hipertiroidismo' ? 'selected' : '' }}>Hipertiroidismo</option>
                            <option value="Tendinitis" {{ old('enfermedades_accidentes') == 'Tendinitis' ? 'selected' : '' }}>Tendinitis</option>
                            <option value="Pérdida de conocimiento" {{ old('enfermedades_accidentes') == 'Pérdida de conocimiento' ? 'selected' : '' }}>Pérdida de conocimiento</option>
                            <option value="Problemas de la columna" {{ old('enfermedades_accidentes') == 'Problemas de la columna' ? 'selected' : '' }}>Problemas de la columna</option>
                            <option value="Rubeola" {{ old('enfermedades_accidentes') == 'Rubeola' ? 'selected' : '' }}>Rubeola</option>
                            <option value="Epilipsia" {{ old('enfermedades_accidentes') == 'Epilipsia' ? 'selected' : '' }}>Epilipsia</option>
                            <option value="Bronquitis" {{ old('enfermedades_accidentes') == 'Bronquitis' ? 'selected' : '' }}>Bronquitis</option>
                            <option value="Hepatitis" {{ old('enfermedades_accidentes') == 'Hepatitis' ? 'selected' : '' }}>Hepatitis</option>
                            <option value="Hipotiroidismo" {{ old('enfermedades_accidentes') == 'Hipotiroidismo' ? 'selected' : '' }}>Hipotiroidismo</option>
                            <option value="Arritmia" {{ old('enfermedades_accidentes') == 'Arritmia' ? 'selected' : '' }}>Arritmia</option>
                            <option value="Sangrado nasal constante" {{ old('enfermedades_accidentes') == 'Sangrado nasal constante' ? 'selected' : '' }}>Sangrado nasal constante</option>
                            <option value="Luxación" {{ old('enfermedades_accidentes') == 'Luxación' ? 'selected' : '' }}>Luxación</option>
                        </select>
                        @error('enfermedades_accidentes')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Especifique otro accidente o enfermedad -->
                    <div class="col-span-4 md:col-span-4 lg:col-span-4 hidden" id="especifiqueAccidenteEnfermedad">
                        <label class="block font-medium text-gray-700">Especifique otro accidente o enfermedad</label>
                        <input
                            type="text" 
                            id="especifique_accidente_enfermedad" 
                            name="especifique_accidente_enfermedad"  
                            placeholder="Especifique otro accidente o enfermedad..."
                            class="mt-1 block w-full rounded-md border-gray-300  focus:border-blue-500 focus:ring-blue-500"
                            value = "{{ old('especifique_accidente_enfermedad') }}"
                        >
                        @error('especifique_accidente_enfermedad')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- ¿El estudiante ha pasado por alguna interveción quirúrgicas? -->
                    <div class="col-span-4">
                        <label for="opcion" class="block text-gray-700 font-medium mb-2">
                            ¿El estudiante ha pasado por alguna interveción quirúrgicas?
                        </label>

                        <select 
                            id="intervencion_quirurgica_si_no" 
                            name="intervencion_quirurgica_si_no" 
                            class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                            onchange="toggleIntervenciones()"
                        >
                            <option value="--seleccionar--" {{ old('intervencion_quirurgica_si_no') == '--seleccionar--' ? 'selected' : '' }}>--seleccionar--</option>
                            <option value="Si" {{ old('intervencion_quirurgica_si_no') == 'Si' ? 'selected' : '' }}>Si</option>
                            <option value="No" {{ old('intervencion_quirurgica_si_no') == 'No' ? 'selected' : '' }}>No</option>
                        </select>
                        @error('intervencion_quirurgica_si_no')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Intervenciones quirúrgicas -->
                    <div class="col-span-4" id="intervenciones_quirurgicas" style="display: none;">
                        <div class="p-4">
                            <h2 class="text-lg font-semibold mb-4">Intervenciones quirúrgicas</h2>

                            <div class="flex gap-4">
                                <!-- Tarjeta 1 -->
                                <div class="bg-white p-4 rounded-xl shadow-md flex-1 flex flex-col">
                                    <label for="opcion" class="block text-gray-700 font-medium mb-2">
                                        ¿Cuántas intervenciones quirúrgicas ha tenido ?
                                    </label>
                                    <select 
                                        id="cantidad_intervencion_quirugicas" 
                                        name="cantidad_intervencion_quirugicas" 
                                        class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                    >
                                        <option value="--seleccionar--" {{ old('cantidad_intervencion_quirugicas') == '--seleccionar--' ? 'selected' : '' }}>-seleccionar--</option>
                                        <option value="1" {{ old('cantidad_intervencion_quirugicas') == '1' ? 'selected' : '' }}>1</option>
                                        <option value="2" {{ old('cantidad_intervencion_quirugicas') == '2' ? 'selected' : '' }}>2</option>
                                        <option value="3" {{ old('cantidad_intervencion_quirugicas') == '3' ? 'selected' : '' }}>3</option>
                                        <option value="4" {{ old('cantidad_intervencion_quirugicas') == '4' ? 'selected' : '' }}>4</option>
                                        <option value="5" {{ old('cantidad_intervencion_quirugicas') == '5' ? 'selected' : '' }}>5</option>
                                        <option value="Mas de 5" {{ old('cantidad_intervencion_quirugicas') == 'Mas de 5' ? 'selected' : '' }}>Mas de 5</option>
                                    </select>
                                    <input 
                                        type="text" 
                                        placeholder="De qué tipo" 
                                        class="block w-full p-2 border border-gray-300 rounded-md shadow-sm mb-2 mt-2"
                                        name="tipo_intervencion_quirugica"
                                        value = "{{ old('tipo_intervencion_quirugica') }}"
                                    >
                                    <input 
                                        type="date" 
                                        class="block w-full p-2 border border-gray-300 rounded-md shadow-sm p-2"
                                        name="fecha_intervencion_quirugica"
                                        value = "{{ old('fecha_intervencion_quirugica') }}"
                                        >
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Fecha de última desparasitación -->
                    <div class="col-span-4 md:col-span-4 lg:col-span-4">
                        <label class="block  font-medium text-gray-700">Fecha de última desparasitación</label>
                        <input 
                            type="date" 
                            id="fecha_ultima_desparasitacion" 
                            name="fecha_ultima_desparasitacion"  
                            class="mt-1 block w-full rounded-md border-gray-300  focus:border-blue-500 focus:ring-blue-500"
                            value = "{{ old('fecha_ultima_desparasitacion') }}"
                        >
                        @error('fecha_ultima_desparasitacion')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- ¿El estudiante tiene algunas de estas vacuna? -->
                    <div class="col-span-4">
                        <label for="opcion" class="block text-gray-700 font-medium mb-2">
                            ¿El estudiante tiene algunas de estas vacuna?
                        </label>

                        <select 
                            id="vacunas" 
                            name="vacunas" 
                            class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                            onchange="toggleOtraVacuna()"
                        >
                            <option value="--seleccionar--" {{ old('vacunas') == '--seleccionar--' ? 'selected' : '' }}>-seleccionar--</option>
                            <option value="ninguna" {{ old('vacunas') == 'ninguna' ? 'selected' : '' }}>ninguna</option>
                            <option value="BGG" {{ old('vacunas') == 'BGG' ? 'selected' : '' }}>BGG</option>
                            <option value="Pentavalente" {{ old('vacunas') == 'Pentavalente' ? 'selected' : '' }}>Pentavalente</option>
                            <option value="Neumonia" {{ old('vacunas') == 'Neumonia' ? 'selected' : '' }}>Neumonia</option>
                            <option value="Rotavirus" {{ old('vacunas') == 'Rotavirus' ? 'selected' : '' }}>Rotavirus</option>
                            <option value="Influenza" {{ old('vacunas') == 'Influenza' ? 'selected' : '' }}>Influenza</option>
                            <option value="Covid-19" {{ old('vacunas') == 'Covid-19' ? 'selected' : '' }}>Covid-19</option>
                            <option value="Otra" {{ old('vacunas') == 'Otra' ? 'selected' : '' }}>Otra</option>
                        </select>
                        @error('vacunas')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Otra_vacuna -->
                    <div class="col-span-4 md:col-span-4 lg:col-span-4" id="otraVacunaContainer" style="display: none;">
                        <label class="block font-medium text-gray-700">Especifique con detalle sobre alguna otra vacuna</label>
                        <input 
                            type="text" 
                            id="otra_vacuna" 
                            name="otra_vacuna"  
                            placeholder="Especifique con detalle sobre alguna otra vacuna..."
                            class="mt-1 block w-full rounded-md border-gray-300  focus:border-blue-500 focus:ring-blue-500"
                            value = "{{ old('otra_vacuna') }}"
                        >
                        @error('otra_vacuna')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- ¿El estudiante presenta alguna dificultad para dormir? -->
                    <div class="col-span-4">
                        <label for="opcion" class="block text-gray-700 font-medium mb-2">
                            ¿El estudiante presenta alguna dificultad para dormir?
                        </label>

                        <select 
                            id="dificultad_dormir" 
                            name="dificultad_dormir" 
                            class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                            onchange="toggleOtraDificultadDormir()"
                        >
                            <option value="--seleccionar--" {{ old('') == '--seleccionar--' ? 'selected' : '' }}>-seleccionar--</option>
                            <option value="Ninguna" {{ old('dificultad_dormir') == 'Ninguna' ? 'selected' : '' }}>Ninguna</option>
                            <option value="Pesadillas" {{ old('dificultad_dormir') == 'Pesadillas' ? 'selected' : '' }}>Pesadillas</option>
                            <option value="Exceso de Sueño" {{ old('dificultad_dormir') == 'Exceso de Sueño' ? 'selected' : '' }}>Exceso de Sueño</option>
                            <option value="Sonambulismo" {{ old('dificultad_dormir') == 'Sonambulismo' ? 'selected' : '' }}>Sonambulismo</option>
                            <option value="Ronquidos" {{ old('dificultad_dormir') == 'Ronquidos' ? 'selected' : '' }}>Ronquidos</option>
                            <option value="Insomio" {{ old('dificultad_dormir') == 'Insomio' ? 'selected' : '' }}>Insomio</option>
                            <option value="Otra" {{ old('dificultad_dormir') == 'Otra' ? 'selected' : '' }}>Otra</option>

                        </select>
                        @error('dificultad_dormir')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Especifique con mas detalle otra dificultad para dormir -->
                    <div class="col-span-4 md:col-span-4 lg:col-span-4" id="otra_dificultad_container" style="display: none;">
                        <label class="block  font-medium text-gray-700">Especifique con mas detalle otra dificultad para dormir</label>
                        <input 
                            type="text" 
                            id="otra_dificultad_dormir" 
                            name="otra_dificultad_dormir"  
                            placeholder="Especifique con mas detalle otra dificultad para dormir..."
                            class="mt-1 block w-full rounded-md border-gray-300  focus:border-blue-500 focus:ring-blue-500"
                            value = "{{ old('otra_dificultad_dormir') }}"
                        >
                        @error('otra_dificultad_dormir')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Antecedentes patológicos famiiares -->
                    <div class="col-span-4">
                        <label for="opcion" class="block text-gray-700 font-medium mb-2">
                            Antecedentes patológicos famiiares
                        </label>

                        <select 
                            id="antecedentes_patologicos_famiiares" 
                            name="antecedentes_patologicos_famiiares" 
                            class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                        >
                            <option value="--seleccionar--" {{ old('antecedentes_patologicos_famiiares') == '--seleccionar--' ? 'selected' : '' }}>-seleccionar--</option>
                            <option value="Ninguna" {{ old('antecedentes_patologicos_famiiares') == 'Otra' ? 'selected' : '' }}>Ninguna</option>
                            <option value="Obesidad" {{ old('antecedentes_patologicos_famiiares') == 'Obesidad' ? 'selected' : '' }}>Obesidad</option>
                            <option value="Diabetes" {{ old('antecedentes_patologicos_famiiares') == 'Diabetes' ? 'selected' : '' }}>Diabetes</option>
                            <option value="Hipertensión" {{ old('antecedentes_patologicos_famiiares') == 'Hipertensión' ? 'selected' : '' }}>Hipertensión</option>
                            <option value="Enfermedades Cardíacas" {{ old('antecedentes_patologicos_famiiares') == 'Enfermedades Cardíacas' ? 'selected' : '' }}>Enfermedades Cardíacas</option>
                            <option value="Enfermedades mentales" {{ old('antecedentes_patologicos_famiiares') == 'Enfermedades mentales' ? 'selected' : '' }}>Enfermedades mentales</option>
                            <option value="Otra" {{ old('antecedentes_patologicos_famiiares') == 'Otra' ? 'selected' : '' }}>Otra</option>

                        </select>
                        @error('antecedentes_patologicos_famiiares')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Especifique otro antecedentes patológicos famiiares -->
                    <div class="col-span-4 md:col-span-4 lg:col-span-4 hidden" id="especifique_antecedentes_container">
                        <label class="block font-medium text-gray-700">Especifique otro antecedentes patológicos famiiares</label>
                        <input 
                            type="text" 
                            id="especifique_antecedentes_patologicos_famiiares" 
                            name="especifique_antecedentes_patologicos_famiiares"  
                            placeholder="Especifique otro antecedentes patológicos famiiares..."
                            class="mt-1 block w-full rounded-md border-gray-300  focus:border-blue-500 focus:ring-blue-500"
                            value = "{{ old('especifique_antecedentes_patologicos_famiiares') }}"
                        >
                        @error('especifique_antecedentes_patologicos_famiiares')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- ¿El estudiante posse un Seguro Estudiantil? -->
                    <div class="col-span-4">
                        <label for="opcion" class="block text-gray-700 font-medium mb-2">
                            ¿El estudiante posse un Seguro Estudiantil?
                        </label>

                        <select 
                            id="seguro_estudiante_si_no" 
                            name="seguro_estudiante_si_no" 
                            class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                        >
                            <option value="--seleccionar--" {{ old('seguro_estudiante_si_no') == '--seleccionar--' ? 'selected' : '' }}>-seleccionar--</option>
                            <option value="Si" {{ old('seguro_estudiante_si_no') == 'Si' ? 'selected' : '' }}>Si</option>
                            <option value="No" {{ old('seguro_estudiante_si_no') == 'No' ? 'selected' : '' }}>No</option>
                        </select>
                        @error('seguro_estudiante_si_no')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Seguro Estudiante -->
                    <div class="col-span-4 seguro-campos">
                        <label class="block font-medium text-gray-700">Seguro Estudiante</label>
                        <div class="grid grid-cols-3 gap-4 mt-2">
                            <div class="col-span-3 md:col-span-3 lg:col-span-1">
                                <!-- Tarjeta 1 -->
                                <div class="border rounded-lg p-4 shadow-md bg-white">
                                    <div class="flex justify-between items-center">
                                        <span class="text-gray-500">Salud</span>
                                    </div>
                                    <div class="mt-2">
                                        <p>
                                            <label class="block font-medium text-gray-700 mt-1">Aseguradora</label> 
                                            <input 
                                                type="text" 
                                                placeholder="Aseguradora..."
                                                name="aseguradora_salud"
                                                id="aseguradora_salud"
                                                value="{{ old('aseguradora_salud') }}"
                                                class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                                            >
                                        </p>
                                        @error('aseguradora_salud')
                                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                                ⚠️ <span>{{ $message }}</span>
                                            </div>
                                        @enderror
                                        <p>
                                            <label class="block font-medium text-gray-700 mt-1">Teléfono de contacto</label> 
                                            <input 
                                                type="text" 
                                                class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                                                name="aseguradora_salud_telefono"
                                                id="aseguradora_salud_telefono"
                                                value="{{ old('aseguradora_salud_telefono') }}"
                                                placeholder="Teléfono de contacto..."
                                            >
                                        </p>
                                        @error('aseguradora_salud_telefono')
                                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                                ⚠️ <span>{{ $message }}</span>
                                            </div>
                                        @enderror
                                        <p>
                                            <label class="block font-medium text-gray-700 mt-1">En caso de emergencia derivar a</label> 
                                            <input 
                                                type="text" 
                                                class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                                                name="aseguradora_salud_emergencia"
                                                id="aseguradora_salud_emergencia"
                                                value="{{ old('aseguradora_salud_emergencia') }}"
                                                placeholder="En caso de emergencia derivar a..."
                                            >
                                        </p>
                                        @error('aseguradora_salud_emergencia')
                                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                                ⚠️ <span>{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-span-3 md:col-span-3 lg:col-span-1">
                                <!-- Tarjeta 2 -->
                                <div class="border rounded-lg p-4 shadow-md bg-white">
                                    <div class="flex justify-between items-center">
                                        <span class="text-gray-500">Accidente</span>
                                    </div>
                                    <div class="mt-2">
                                        <p>
                                            <label class="block font-medium text-gray-700 mt-1">Aseguradora</label> 
                                            <input 
                                                type="text" 
                                                class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                                                name="aseguradora_accidente"
                                                id="aseguradora_accidente"
                                                value="{{ old('aseguradora_accidente') }}"
                                                placeholder="Aseguradora..."
                                            >
                                            @error('aseguradora_accidente')
                                                <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                                    ⚠️ <span>{{ $message }}</span>
                                                </div>
                                            @enderror
                                        </p>
                                        <p>
                                            <label class="block font-medium text-gray-700 mt-1">Teléfono de contacto</label> 
                                            <input 
                                                type="text" 
                                                class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                                                name="aseguradora_accidente_telefono"
                                                id="aseguradora_accidente_telefono"
                                                value="{{ old('aseguradora_accidente_telefono') }}"
                                                placeholder="Teléfono de contacto..."
                                            >
                                        </p>
                                        @error('aseguradora_accidente_telefono')
                                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                                ⚠️ <span>{{ $message }}</span>
                                            </div>
                                        @enderror
                                        <p>
                                            <label class="block font-medium text-gray-700 mt-1">En caso de emergencia derivar a</label> 
                                            <input 
                                                type="text" 
                                                class=" mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                                                name="aseguradora_accidente_emergencia"
                                                id="aseguradora_accidente_emergencia"
                                                value="{{ old('aseguradora_accidente_emergencia') }}"
                                                placeholder="En caso de emergencia derivar a..."
                                            >
                                            @error('aseguradora_accidente_emergencia')
                                                <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                                    ⚠️ <span>{{ $message }}</span>
                                                </div>
                                            @enderror
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-span-3 md:col-span-3 lg:col-span-1">
                                <!-- Tarjeta 3 -->
                                <div class="border rounded-lg p-4 shadow-md bg-white">
                                    <div class="flex justify-between items-center">
                                        <span class="text-gray-500">Otra</span>
                                    </div>
                                    <div class="mt-2">
                                        <p>
                                            <label class="block font-medium text-gray-700 mt-1">Aseguradora</label> 
                                            <input 
                                                type="text" 
                                                class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                                                name="aseguradora_otra"
                                                id="aseguradora_otra"
                                                value="{{ old('aseguradora_otra') }}"
                                                placeholder="Aseguradora..."
                                            >
                                            @error('aseguradora_otra')
                                                <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                                    ⚠️ <span>{{ $message }}</span>
                                                </div>
                                            @enderror
                                        </p>
                                        <p>
                                            <label class="block font-medium text-gray-700 mt-1">Teléfono de contacto</label> 
                                            <input 
                                                type="text" 
                                                class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                                                name="aseguradora_otro_telefono"
                                                id="aseguradora_otro_telefono"
                                                value="{{ old('aseguradora_otro_telefono') }}"
                                                placeholder="Teléfono de contacto..."
                                            >
                                            @error('aseguradora_otro_telefono')
                                                <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                                    ⚠️ <span>{{ $message }}</span>
                                                </div>
                                            @enderror
                                        </p>
                                        <p>
                                            <label class="block font-medium text-gray-700 mt-1">En caso de emergencia derivar a</label> 
                                            <input 
                                                type="text" 
                                                class=" mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                                                name="aseguradora_otro_emergencia"
                                                id="aseguradora_otro_emergencia"
                                                value="{{ old('aseguradora_otro_emergencia') }}"
                                                placeholder="En caso de emergencia derivar a..."
                                            >
                                            @error('aseguradora_otro_emergencia')
                                                <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                                    ⚠️ <span>{{ $message }}</span>
                                                </div>
                                            @enderror
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Finalizar registro de salud -->
                    <div class="col-span-4">
                        <div class="text-center">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-3 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                                Finalizar registro de salud <i class="fa-solid fa-stethoscope"></i>   
                            </button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
    
    <!-- Codigo para ocultar habilitar y desabilitar las opciones en el cuadro de discapacidad -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            function actualizarEstadoInputs(select) {
                let parentDiv = select.closest(".grid");
                let porcentajeInput = parentDiv.querySelector(".porcentaje-input");
                let detalleTextarea = parentDiv.querySelector(".detalle-textarea");

                if (select.value === "Sí") {
                    porcentajeInput.disabled = false;
                    porcentajeInput.classList.remove("opacity-50");
                    detalleTextarea.disabled = false;
                    detalleTextarea.classList.remove("opacity-50");
                } else {
                    porcentajeInput.disabled = true;
                    porcentajeInput.classList.add("opacity-50");
                    detalleTextarea.disabled = true;
                    detalleTextarea.classList.add("opacity-50");
                    porcentajeInput.value = ""; // Limpiar campo
                    detalleTextarea.value = ""; // Limpiar campo
                }
            }

            // Aplicar la lógica al cargar la página y en los cambios de selección
            document.querySelectorAll(".condicion-select").forEach(select => {
                actualizarEstadoInputs(select); // Asegurar que los estados sean correctos al inicio

                select.addEventListener("change", function () {
                    actualizarEstadoInputs(this);
                });
            });
        });
    </script>

    <!-- Mostrar u ocultar cuadro de discapacidades -->
    <script>
        function discapacidadVisibility() {
            var selectElement = document.getElementById('discapacidad_si_no');
            var discapacidadSeccion = document.getElementById('discapacidad_seccion');

            function toggleVisibility() {
                if (selectElement.value === 'Si') {
                    discapacidadSeccion.classList.remove('hidden');
                } else {
                    discapacidadSeccion.classList.add('hidden');
                }
            }

            // Agregar evento al select
            selectElement.addEventListener('change', toggleVisibility);

            // Llamar a la función para evaluar la visibilidad inicial
            toggleVisibility();
        }

        // Ejecutar cuando el DOM esté cargado
        document.addEventListener('DOMContentLoaded', discapacidadVisibility);
    </script>


    <!-- Función para controlar la visibilidad del campo 'especifique_aparatos_ayuda' -->
    <script>
        function toggleVisibility() {
            var aparatosAyuda = document.getElementById('aparatos_ayuda').value;
            var detalleAparatos = document.getElementById('especifique_aparatos_ayuda_container');

            if (aparatosAyuda === 'Anteojos' || aparatosAyuda === 'Audífonos') {
                detalleAparatos.style.display = 'block';  // Mostrar el campo
            } else {
                detalleAparatos.style.display = 'none';   // Ocultar el campo
            }
        }

        // Llamar a la función al cargar la página para verificar si ya hay una selección previa
        document.addEventListener('DOMContentLoaded', function() {
            toggleVisibility();  // Asegurarse de que se verifique la visibilidad al cargar
        });
    </script>

    <!-- Función para mostrar/ocultar el campo del número de carnet -->
    <script>
        function toggleCarnetConadisField() {
            var selectValue = document.getElementById('carnet_conadis_si_no').value;
            var carnetContainer = document.getElementById('numero_carnet_conadis_container');
            
            // Si se selecciona "Si", mostramos el campo
            if (selectValue === "Si") {
                carnetContainer.style.display = 'block';
            } else {
                carnetContainer.style.display = 'none';
            }
        }

        // Llamar a la función al cargar la página para manejar el valor preexistente
        document.addEventListener('DOMContentLoaded', function() {
            toggleCarnetConadisField();
        });
    </script>

    <!-- Función para mostrar/ocultar el campo de especificar medicamentos -->
    <script>
        function toggleEspecifiqueMedicamentosField() {
            var selectValue = document.getElementById('medicamento_si_no').value;
            var especifiqueContainer = document.getElementById('especifique_medicamentos_container');
            
            // Si se selecciona "Si", mostramos el campo
            if (selectValue === "Si") {
                especifiqueContainer.style.display = 'block';
            } else {
                especifiqueContainer.style.display = 'none';
            }
        }

        // Llamar a la función al cargar la página para manejar el valor preexistente
        document.addEventListener('DOMContentLoaded', function() {
            toggleEspecifiqueMedicamentosField();
        });
    </script>

    <!-- Función para mostrar/ocultar el campo de alergias -->
    <script>
        function toggleAlergiaEstudianteField() {
            var selectValue = document.getElementById('alergia_estudiante_si_no').value;
            var alergiaEstudianteContainer = document.getElementById('alergia_estudiante_container');
            
            // Si se selecciona "Si", mostramos el campo
            if (selectValue === "Si") {
                alergiaEstudianteContainer.style.display = 'block';
            } else {
                alergiaEstudianteContainer.style.display = 'none';
            }
        }

        // Llamar a la función al cargar la página para manejar el valor preexistente
        document.addEventListener('DOMContentLoaded', function() {
            toggleAlergiaEstudianteField();
        });
    </script>

    <!-- // Función JavaScript para mostrar u ocultar el campo "Especifique otro accidente o enfermedad" -->
    <script>
        function toggleEspecifiqueAccidente() {
            const select = document.getElementById('enfermedades_accidentes');
            const input = document.getElementById('especifiqueAccidenteEnfermedad');
            
            // Mostrar el campo solo si se selecciona algo distinto de "--seleccionar--" y "Ninguna"
            if (select.value !== "--seleccionar--" && select.value !== "Ninguna") {
                input.classList.remove('hidden');
            } else {
                input.classList.add('hidden');
            }
        }

        // Ejecutar la función cuando la página se carga para mantener el estado después de la validación
        document.addEventListener("DOMContentLoaded", function () {
            toggleEspecifiqueAccidente();
        });
    </script>

    <!-- Mostrar/ocultar "otras vacunas" -->
    <script>
        function toggleOtraVacuna() {
            let select = document.getElementById('vacunas');
            let otraVacunaContainer = document.getElementById('otraVacunaContainer');

            if (select.value === 'Otra') {
                otraVacunaContainer.style.display = 'block'; // Mostrar
            } else {
                otraVacunaContainer.style.display = 'none'; // Ocultar
            }
        }

        // Ejecutar la función cuando cargue la página para mantener la coherencia con old()
        document.addEventListener('DOMContentLoaded', toggleOtraVacuna);
    </script>

    <!-- Mostar/Ocultar intervenciones quirurgicas en el caso de que el estudiante tenga -->
    <script>
        function toggleIntervenciones() {
            var select = document.getElementById("intervencion_quirurgica_si_no");
            var intervencionesDiv = document.getElementById("intervenciones_quirurgicas");

            if (select.value === "Si") {
                intervencionesDiv.style.display = "block";
            } else {
                intervencionesDiv.style.display = "none";
            }
        }

        // Llamar la función al cargar la página por si hay valores preseleccionados
        document.addEventListener("DOMContentLoaded", toggleIntervenciones);
    </script>

    <!-- Mostrar / Ocultar dificultad para dormir -->
    <script>
        function toggleOtraDificultadDormir() {
            var select = document.getElementById("dificultad_dormir");
            var otraDificultadContainer = document.getElementById("otra_dificultad_container");

            if (select.value === "--seleccionar--" || select.value === "Ninguna") {
                otraDificultadContainer.style.display = "none";
            } else {
                otraDificultadContainer.style.display = "block";
            }
        }

        // Llamar a la función al cargar la página para respetar valores preseleccionados
        document.addEventListener("DOMContentLoaded", toggleOtraDificultadDormir);
    </script>

    <!-- Mostrar / Ocultar antecedentes patológicos famiiares -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let select = document.getElementById("antecedentes_patologicos_famiiares");
            let fieldContainer = document.getElementById("especifique_antecedentes_container");

            function toggleField() {
                let valor = select.value;
                fieldContainer.classList.toggle("hidden", valor === "--seleccionar--" || valor === "Ninguna");
            }

            select.addEventListener("change", toggleField);
            toggleField(); // Ejecutar al inicio en caso de que haya un valor preseleccionado
        });
    </script>

    <!-- Mostrar seguro estudiantil solo en el caso de que el estudiante posea uno -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
        var selectSeguro = document.getElementById("seguro_estudiante_si_no");
        var seguroCampos = document.querySelectorAll(".seguro-campos");

        function toggleSeguroCampos() {
            if (selectSeguro.value === "Si") {
                seguroCampos.forEach(function (campo) {
                    campo.style.display = "block";
                });
            } else {
                seguroCampos.forEach(function (campo) {
                    campo.style.display = "none";
                });
            }
        }

        // Ejecutar al cargar la página (por si viene con datos preseleccionados)
        toggleSeguroCampos();

        // Agregar evento de cambio
        selectSeguro.addEventListener("change", toggleSeguroCampos);
    });
    </script>
</x-fichas>