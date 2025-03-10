<x-fichas>
    <div class="container mx-auto">
        <div class="px-10 pb-10 pt-1">
            <form action="{{ route('ficha.aspirante.store') }}" class="formulario-validacion" method="POST">
                @csrf
                <div class="grid grid-cols-4 gap-4">
                    <div class="col-span-4 md:col-span-4 lg:col-span-4">
                        <div class="text-center py-10">
                            <div class="flex justify-center items-center gap-2">
                                <div class="w-16 border-t-2 border-gray-200"></div>
                                <span class="bg-blue-200 text-blue-700 rounded-full w-12 h-12 flex items-center justify-center text-2xl shadow-md">
                                    🎓
                                </span>
                                <div class="w-16 border-t-2 border-gray-200"></div>
                            </div>

                            <h1 class="text-4xl font-bold text-gray-800 mt-4">
                                Ficha de Matriculación
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

                    <div class="col-span-4">
                        <div class="w-full max-w-4xl mx-auto py-10">
                            <div class="flex items-center justify-between">
                                <div class="text-left">
                                    <div class="w-10 h-10 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold">1</div>
                                    <p class="mt-2 text-sm font-medium">Registro Datos</p>
                                </div>

                                <div class="w-full border-t border-gray-300 mx-4"></div>

                                <div class="text-left">
                                    <div class="w-10 h-10 rounded-full bg-gray-200 text-gray-600 flex items-center justify-center font-bold">2</div>
                                    <p class="mt-2 text-sm font-medium">Registro Final</p>
                                </div>
                            </div>
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

                    <!-- Fecha Nacimiento Estudiante -->
                    <div class="col-span-4 md:col-span-4 lg:col-span-2">
                        <label class="block  font-medium text-gray-700">Fecha de Nacimiento</label>
                        <input 
                            type="date" 
                            id="fecha_nacimiento_estudiante" 
                            name="fecha_nacimiento_estudiante"  
                            class="mt-1 block w-full rounded-md border-gray-300  focus:border-blue-500 focus:ring-blue-500"
                            value = "{{ old('fecha_nacimiento_estudiante') }}"
                        >
                        @error('fecha_nacimiento_estudiante')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Año Basica --> 
                    <div class="col-span-2">
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

                    <!-- Estudiante Nuevo o NSC -->
                    <div class="col-span-4">
                        <label for="opcion" class="block text-gray-700 font-medium mb-2">
                            Estudiante Nuevo o Nsc
                        </label>

                        <select 
                            id="nuevo_nsc" 
                            name="nuevo_nsc" 
                            class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                        >
                            <option value="--seleccionar--" {{ old('nuevo_nsc') == '--seleccionar--' ? 'selected' : '' }}>-seleccionar--</option>
                            <option value="Nuevo Ingreso" {{ old('nuevo_nsc') == 'Nuevo Ingreso' ? 'selected' : '' }}>Nuevo Ingreso</option>
                            <option value="Continuidad del Periodo Anterior" {{ old('nuevo_nsc') == 'Continuidad del Periodo Anterior' ? 'selected' : '' }}>Continuidad del Periodo Anterior</option>
                            <option value="Reingreso a la Institución" {{ old('nuevo_nsc') == 'Reingreso a la Institución' ? 'selected' : '' }}>Reingreso a la Institución</option>
                        </select>
                        @error('nuevo_nsc')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>


                    <!-- Codigo Unico Eléctrico -->
                    <div class="col-span-4 md:col-span-4 lg:col-span-4">
                        <label class="block  font-medium text-gray-700">Código Único Eléctrico Nacional del Domicilio del Estudiante</label>
                        <input 
                            type="text" 
                            id="codigo_unico_electrico" 
                            name="codigo_unico_electrico"  
                            placeholder="Codigo Unico Eléctrico"
                            class="mt-1 block w-full rounded-md border-gray-300  focus:border-blue-500 focus:ring-blue-500"
                            value = "{{ old('codigo_unico_electrico') }}"
                        >
                        @error('codigo_unico_electrico')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Genero Estudiante -->
                    <div class="col-span-4">
                        <label for="opcion" class="block text-gray-700 font-medium mb-2">
                        Genero
                        </label>

                        <select 
                            id="genero_estudiante" 
                            name="genero_estudiante" 
                            class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                        >
                            <option value="--seleccionar--" {{ old('genero_estudiante') == '--seleccionar--' ? 'selected' : '' }}>--seleccionar--</option>
                            <option value="Hombre" {{ old('genero_estudiante') == 'Hombre' ? 'selected' : '' }}>Hombre</option>
                            <option value="Mujer" {{ old('genero_estudiante') == 'Mujer' ? 'selected' : '' }}>Mujer</option>
                        </select>
                        @error('genero_estudiante')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Transporte Escolar -->
                    <div class="col-span-4">
                        <label for="opcion" class="block text-gray-700 font-medium mb-2">
                        Transporte Escolar
                        </label>

                        <select 
                            id="transporte_escolar" 
                            name="transporte_escolar" 
                            class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                            onchange="mostrarRutaEscolar()"
                        >
                            <option value="--seleccionar--" {{ old('transporte_escolar') == '--seleccionar--' ? 'selected' : '' }}>--seleccionar--</option>
                            <option value="Retiro personalmente (o persona autorizada)" {{ old('transporte_escolar') == 'Retiro personalmente (o persona autorizada)' ? 'selected' : '' }}>Retiro personalmente (o persona autorizada)</option>
                            <option value="Expreso por mi cuenta" {{ old('transporte_escolar') == 'Expreso por mi cuenta' ? 'selected' : '' }}>Expreso por mi cuenta</option>
                            <option value="Requiero expreso" {{ old('transporte_escolar') == 'Requiero expreso' ? 'selected' : '' }}>Requiero expreso</option>
                        </select>
                        @error('transporte_escolar')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Ruta Escolar -->
                    <div class="col-span-4" id="ruta_escolar_div" style="display: none;">
                        <label for="opcion" class="block text-gray-700 font-medium mb-2">
                        Ruta Escolar
                        </label>

                        <select 
                            id="ruta_escolar" 
                            name="ruta_escolar" 
                            class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                        >
                        <option value="--seleccionar--" {{ old('ruta_escolar') == '--seleccionar--' ? 'selected' : '' }}>-seleccionar--</option>
                        <option value="Alborada" {{ old('ruta_escolar') == 'Alborada' ? 'selected' : '' }}>Alborada</option>
                        <option value="Garzota" {{ old('ruta_escolar') == 'Garzota' ? 'selected' : '' }}>Garzota</option>
                        <option value="Guayacanes" {{ old('ruta_escolar') == 'Guayacanes' ? 'selected' : '' }}>Guayacanes</option>
                        <option value="Guayacanes-Samanes" {{ old('sector') == 'Guayacanes-Samanes' ? 'selected' : '' }}>Guayacanes-Samanes</option>
                        <option value="La Joya" {{ old('ruta_escolar') == 'La Joya' ? 'selected' : '' }}>La Joya</option>
                        <option value="Matices Villa Club" {{ old('ruta_escolar') == 'Matices Villa Club' ? 'selected' : '' }}>Matices Villa Club</option>
                        <option value="Matices-Veranda" {{ old('ruta_escolar') == 'Matices-Veranda' ? 'selected' : '' }}>Matices-Veranda</option>
                        <option value="Metropolis 2" {{ old('ruta_escolar') == 'Metropolis 2' ? 'selected' : '' }}>Metropolis 2</option>
                        <option value="Mucho Lote 1 - Ciudad Santiago" {{ old('ruta_escolar') == 'Mucho Lote 1 - Ciudad Santiago' ? 'selected' : '' }}>Mucho Lote 1 - Ciudad Santiago</option>
                        <option value="Mucho Lote 2" {{ old('ruta_escolar') == 'Mucho Lote 2' ? 'selected' : '' }}>Mucho Lote 2</option>
                        <option value="Orquideas Vergeles" {{ old('ruta_escolar') == 'Orquideas Vergeles' ? 'selected' : '' }}>Orquideas Vergeles</option>
                        <option value="Rosales - ALlamos - Condor" {{ old('ruta_escolar') == 'Rosales - ALlamos - Condor' ? 'selected' : '' }}>Rosales - ALlamos - Condor</option>
                        <option value="Samanes 7- J. Montalvo" {{ old('ruta_escolar') == 'Samanes 7- J. Montalvo' ? 'selected' : '' }}>Samanes 7- J. Montalvo</option>
                        <option value="Sauces" {{ old('ruta_escolar') == 'Sauces' ? 'selected' : '' }}>Sauces</option>
                        <option value="Sur Oeste - Martha de Roldos" {{ old('ruta_escolar') == 'Sur Oeste - Martha de Roldos' ? 'selected' : '' }}>Sur Oeste - Martha de Roldos</option>
                        <option value="Sur - Atarazana" {{ old('ruta_escolar') == 'Sur - Atarazana' ? 'selected' : '' }}>Sur - Atarazana</option>
                        <option value="Vía Salitre" {{ old('ruta_escolar') == 'Vía Salitre' ? 'selected' : '' }}>Vía Salitre</option>
                        <option value="Villa del Rey" {{ old('ruta_escolar') == 'Villa del Rey' ? 'selected' : '' }}>Villa del Rey</option>
                        <option value="Villa Italia - La Rioja" {{ old('ruta_escolar') == 'Villa Italia - La Rioja' ? 'selected' : '' }}>Villa Italia - La Rioja</option>
                        </select>
                        @error('ruta_escolar')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <div class="col-span-4 rounded-lg p-4 shadow-sm bg-gray-100">
                        <div class="relative w-full mb-1">
                            <div class="border-l-4 border-blue-500 pl-4">
                                <h2 class="text-xl font-semibold text-gray-700">
                                    Datos del Padre
                                </h2>
                                <p class="text-sm text-gray-500 italic">
                                    Complete los campos con información verídica.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Cédula Madre -->
                    <div class="col-span-4 md:col-span-4 lg:col-span-4"">
                        <label class="block font-medium text-gray-700">Cédula</label>
                        <input 
                            type="text" 
                            id="cedula_madre" 
                            name="cedula_madre" 
                            placeholder="Ingrese su cédula"
                            class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                            value = "{{ old('cedula_madre') }}"
                        >
                        @error('cedula_madre')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Primer Nombre Madre -->
                    <div class="col-span-4 md:col-span-4 lg:col-span-1">
                        <label class="block  font-medium text-gray-700">Primer Nombre</label>
                        <input 
                            type="text" 
                            id="primer_nombre_madre" 
                            name="primer_nombre_madre"  
                            placeholder="Primer Nombre"
                            class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                            value = "{{ old('primer_nombre_madre') }}"
                        >
                        @error('primer_nombre_madre')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Segundo Nombre Madre -->
                    <div class="col-span-4 md:col-span-4 lg:col-span-1">
                        <label class="block  font-medium text-gray-700">Segundo Nombre</label>
                        <input 
                            type="text" 
                            id="segundo_nombre_madre" 
                            name="segundo_nombre_madre"  
                            placeholder="Segundo Nombre"
                            class="mt-1 block w-full rounded-md border-gray-300  focus:border-blue-500 focus:ring-blue-500"
                            value = "{{ old('segundo_nombre_madre') }}"
                        >
                        @error('segundo_nombre_madre')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Apellido Paterno Madre -->
                    <div class="col-span-4 md:col-span-4 lg:col-span-1">
                        <label class="block  font-medium text-gray-700">Apellido Madre</label>
                        <input 
                            type="text" 
                            id="apellido_paterno_madre" 
                            name="apellido_paterno_madre"  
                            placeholder="Apellido Paterno"
                            class="mt-1 block w-full rounded-md border-gray-300  focus:border-blue-500 focus:ring-blue-500"
                            value = "{{ old('apellido_paterno_madre') }}"
                        >
                        @error('apellido_paterno_madre')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Apellido Materno Madre -->
                    <div class="col-span-4 md:col-span-4 lg:col-span-1">
                        <label class="block  font-medium text-gray-700">Apellido Materno</label>
                        <input 
                            type="text" 
                            id="apellido_materno_madre" 
                            name="apellido_materno_madre"  
                            placeholder="Apellido Materno"
                            class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                            value = "{{ old('apellido_materno_madre') }}"
                        >
                        @error('apellido_materno_madre')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Direccón Madre -->
                    <div class="col-span-4">
                        <label class="block  font-medium text-gray-700">Dirección domiciliaria</label>
                        <input 
                            type="text" 
                            id="direccion_madre" 
                            name="direccion_madre"  
                            placeholder="Dirección domiciliaria"
                            class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                            value = "{{ old('direccion_madre') }}"
                        >
                        @error('direccion_madre')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Correo Electrónico Madre -->
                    <div class="col-span-4 md:col-span-4 lg:col-span-2">
                        <label class="block  font-medium text-gray-700">Correo</label>
                        <input 
                            type="text" 
                            id="correo_madre" 
                            name="correo_madre"  
                            placeholder="Ingrese su Correo"
                            class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                            value = "{{ old('correo_madre') }}"
                        >
                        @error('correo_madre')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>


                    <!-- Teléfono Madre -->
                    <div class="col-span-4 md:col-span-4 lg:col-span-2">
                        <label class="block font-medium text-gray-700">Teléfono</label>
                        <input 
                            type="text" 
                            id="telefono_madre" 
                            name="telefono_madre"  
                            placeholder="Ingrese su teléfono"
                            class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                            value = "{{ old('telefono_madre') }}"
                        >
                        @error('telefono_madre')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Relacion del representante con el estudiante -->
                    <div class="col-span-4">
                        <label for="opcion" class="block text-gray-700 font-medium mb-2">
                            Relacion del representante con el estudiante
                        </label>

                        <select 
                            id="relacion_representante_uno" 
                            name="relacion_representante_uno" 
                            class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                        >
                            <option value="--seleccionar--" {{ old('relacion_representante') == '--seleccionar--' ? 'selected' : '' }}>--seleccionar--</option>
                            <option value="Padre" {{ old('relacion_representante_uno') == 'Padre' ? 'selected' : '' }}>Padre</option>
                            <option value="Madre" {{ old('relacion_representante_uno') == 'Madre' ? 'selected' : '' }}>Madre</option>
                            <option value="Abuelo" {{ old('relacion_representante_uno') == 'Abuelo' ? 'selected' : '' }}>Abuelo</option>
                            <option value="Abuela" {{ old('relacion_representante_uno') == 'Abuela' ? 'selected' : '' }}>Abuela</option>
                            <option value="Tío" {{ old('relacion_representante_uno') == 'Tío' ? 'selected' : '' }}>Tío</option>
                            <option value="Tía" {{ old('relacion_representante_uno') == 'Tía' ? 'selected' : '' }}>Tía</option>
                            <option value="Hermano" {{ old('relacion_representante_uno') == 'Hermano' ? 'selected' : '' }}>Hermano</option>
                            <option value="Hermana" {{ old('relacion_representante_uno') == 'Hermana' ? 'selected' : '' }}>Hermana</option>
                        </select>
                        @error('relacion_representante_uno')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>


                    <!-- Datos del Padre -->
                    <div class="col-span-4 rounded-lg p-4 shadow-sm bg-gray-100">
                        <div class="relative w-full mb-1">
                            <div class="border-l-4 border-blue-500 pl-4">
                                <h2 class="text-xl font-semibold text-gray-700">
                                    Datos del Padre
                                </h2>
                                <p class="text-sm text-gray-500 italic">
                                    Complete los campos con información verídica.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Cédula Padre -->
                    <div class="col-span-4 md:col-span-4 lg:col-span-4">
                        <label class="block font-medium text-gray-700">Cédula</label>
                        <input 
                            type="text" 
                            id="cedula_padre"                   
                            name="cedula_padre" 
                            placeholder="Ingrese su cédula"
                            class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                            value = "{{ old('cedula_padre') }}"
                        >
                        @error('cedula_padre')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Primer Nombre Padre -->
                    <div class="col-span-4 md:col-span-4 lg:col-span-1">
                        <label class="block  font-medium text-gray-700">Primer Nombre</label>
                        <input 
                            type="text" 
                            id="primer_nombre_padre" 
                            name="primer_nombre_padre"  
                            placeholder="Primer Nombre"
                            class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                            value = "{{ old('primer_nombre_padre') }}"
                        >
                        @error('primer_nombre_padre')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Segundo Nombre Padre -->
                    <div class="col-span-4 md:col-span-4 lg:col-span-1">
                        <label class="block  font-medium text-gray-700">Segundo Nombre</label>
                        <input 
                            type="text" 
                            id="segundo_nombre_padre" 
                            name="segundo_nombre_padre"  
                            placeholder="Segundo Nombre"
                            class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                            value = "{{ old('segundo_nombre_padre') }}"
                        >
                        @error('segundo_nombre_padre')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Apellido Paterno Padre -->
                    <div class="col-span-4 md:col-span-4 lg:col-span-1">
                        <label class="block  font-medium text-gray-700">Apellido Madre</label>
                        <input 
                            type="text" 
                            id="apellido_paterno_padre" 
                            name="apellido_paterno_padre"  
                            placeholder="Apellido Paterno"
                            class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                            value = "{{ old('apellido_paterno_padre') }}"
                        >
                        @error('apellido_paterno_padre')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Apellido Materno Padre -->
                    <div class="col-span-4 md:col-span-4 lg:col-span-1">
                        <label class="block  font-medium text-gray-700">Apellido Materno</label>
                        <input 
                            type="text" 
                            id="apellido_materno_padre" 
                            name="apellido_materno_padre"  
                            placeholder="Apellido Materno"
                            class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                            value = "{{ old('apellido_materno_padre') }}"
                        >
                        @error('apellido_materno_padre')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Direccón Padre -->
                    <div class="col-span-4">
                        <label class="block  font-medium text-gray-700">Dirección domiciliaria</label>
                        <input 
                            type="text" 
                            id="direccion_padre" 
                            name="direccion_padre"  
                            placeholder="Dirección domiciliaria"
                            class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                            value = "{{ old('direccion_padre') }}"
                        >
                        @error('direccion_padre')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Correo Electrónico Padre -->
                    <div class="col-span-4 md:col-span-4 lg:col-span-2">
                        <label class="block font-medium text-gray-700">Correo</label>
                        <input 
                            type="text" 
                            id="correo_padre" 
                            name="correo_padre"  
                            placeholder="Ingrese su Correo"
                            class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                            value = "{{ old('correo_padre') }}"
                        >
                        @error('correo_padre')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>


                    <!-- Teléfono Madre -->
                    <div class="col-span-4 md:col-span-4 lg:col-span-2">
                        <label class="block font-medium text-gray-700">Teléfono</label>
                        <input 
                            type="text" 
                            id="telefono_padre" 
                            name="telefono_padre"  
                            placeholder="Ingrese su teléfono"
                            class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                            value = "{{ old('telefono_padre') }}"
                        >
                        @error('telefono_padre')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Relacion del representante con el estudiante -->
                    <div class="col-span-4">
                        <label for="opcion" class="block text-gray-700 font-medium mb-2">
                            Relacion del representante con el estudiante
                        </label>

                        <select 
                            id="relacion_representante_dos" 
                            name="relacion_representante_dos" 
                            class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                        >
                            <option value="--seleccionar--" {{ old('relacion_representante_dos') == '--seleccionar--' ? 'selected' : '' }}>--seleccionar--</option>
                            <option value="Padre" {{ old('relacion_representante_dos') == 'Padre' ? 'selected' : '' }}>Padre</option>
                            <option value="Madre" {{ old('relacion_representante_dos') == 'Madre' ? 'selected' : '' }}>Madre</option>
                            <option value="Abuelo" {{ old('relacion_representante_dos') == 'Abuelo' ? 'selected' : '' }}>Abuelo</option>
                            <option value="Abuela" {{ old('relacion_representante_dos') == 'Abuela' ? 'selected' : '' }}>Abuela</option>
                            <option value="Tío" {{ old('relacion_representante_dos') == 'Tío' ? 'selected' : '' }}>Tío</option>
                            <option value="Tía" {{ old('relacion_representante_dos') == 'Tía' ? 'selected' : '' }}>Tía</option>
                            <option value="Hermano" {{ old('relacion_representante_dos') == 'Hermano' ? 'selected' : '' }}>Hermano</option>
                            <option value="Hermana" {{ old('relacion_representante_dos') == 'Hermana' ? 'selected' : '' }}>Hermana</option>
                        </select>
                        @error('relacion_representante_dos')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <div class="col-span-4 rounded-lg p-4 shadow-sm bg-gray-100">
                        <div class="relative w-full mb-1">
                            <div class="border-l-4 border-blue-500 pl-4">
                                <h2 class="text-xl font-semibold text-gray-700">
                                    Formas de Pago
                                </h2>
                                <p class="text-sm text-gray-500 italic">
                                    Complete los campos con información verídica.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- ¿Cómo se va a realizar el pago de la pensiones? -->
                    <div class="col-span-4">
                        <label class="block text-gray-700 font-medium mb-2">
                        Forma de Pago
                        </label>

                        <select 
                            id="forma_pago_pensiones" 
                            name="forma_pago_pensiones" 
                            class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                        >
                            <option value="--seleccionar--" {{ old('forma_pago_pensiones') == '--seleccionar--' ? 'selected' : '' }}>--seleccionar--</option>
                            <option value="Pago total anual TC a 6 meses sin intereses (matricula gratis)" {{ old('forma_pago_pensiones') == 'Pago total anual TC a 6 meses sin intereses (matricula gratis)' ? 'selected' : '' }}>Pago total anual TC a 6 meses sin intereses (matrícula gratis)</option>
                            <option value="Pago total anual TC a 10 meses sin intereses (plataforma gratis)" {{ old('forma_pago_pensiones') == 'Pago total anual TC a 10 meses sin intereses (plataforma gratis)' ? 'selected' : '' }}>Pago total anual TC a 10 meses sin intereses (plataforma gratis)</option>
                            <option value="Pago total anual con transferencia bancaria (matricula gratis)" {{ old('forma_pago_pensiones') == 'Pago total anual con transferencia bancaria (matricula gratis)' ? 'selected' : '' }}>Pago total anual con transferencia bancaria (matrícula gratis)</option>
                            <option value="Pago total anual efectivo en Colecturia (matricula gratis)" {{ old('forma_pago_pensiones') == 'Pago total anual efectivo en Colecturía (matricula gratis)' ? 'selected' : '' }}>Pago total anual efectivo en Colecturía (matrícula gratis)</option>
                            <option value="Pago mensual transferencia bancaria" {{ old('forma_pago_pensiones') == 'Pago mensual transferencia bancaria' ? 'selected' : '' }}>Pago mensual transferencia bancaria</option>
                            <option value="Pago mensual tarjeta de credito" {{ old('forma_pago_pensiones') == 'Pago mensual tarjeta de crédito' ? 'selected' : '' }}>Pago mensual tarjeta de crédito</option>
                        </select>
                        @error('forma_pago_pensiones')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Facturación -->
                    <div class="col-span-4">
                        <label for="opcion" class="block text-gray-700 font-medium mb-2">
                        ¿Desea que la factura sea emitida con otros datos diferentes a los del Representante?
                        </label>

                        <select 
                            id="facturacion" 
                            name="facturacion" 
                            class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                        >
                            <option value="--seleccionar--" {{ old('facturacion') == '--seleccionar--' ? 'selected' : '' }}>-seleccionar--</option>
                            <option value="Si" {{ old('facturacion') == 'Si' ? 'selected' : '' }}>Si</option>
                            <option value="No" {{ old('facturacion') == 'No' ? 'selected' : '' }}>No</option>
                        </select>
                        @error('facturacion')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Cédula o Ruc -->
                    <div class="col-span-4 hidden">
                        <label class="block font-medium text-gray-700">Cédula o RUC</label>
                        <input 
                            type="text" 
                            id="cedula_ruc" 
                            name="cedula_ruc" 
                            placeholder="Ingrese su cédula o ruc..."
                            class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                            value = "{{ old('cedula_ruc') }}"
                        >
                        @error('cedula_ruc')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>


                    <!-- Razón Social -->
                    <div class="col-span-4 hidden">
                        <label class="block font-medium text-gray-700">Razón Social</label>
                        <input 
                            type="text" 
                            id="razon_social" 
                            name="razon_social" 
                            placeholder="Razón Social..."
                            class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                            value = "{{ old('razon_social') }}"
                        >
                        @error('razon_social')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Dirección -->
                    <div class="col-span-4 hidden">
                        <label class="block font-medium text-gray-700">Dirección</label>
                        <input 
                            type="text" 
                            id="direccion_facturacion" 
                            name="direccion_facturacion" 
                            placeholder="Dirección..."
                            class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                            value = "{{ old('direccion_facturacion') }}"
                        >
                        @error('direccion_facturacion')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Correo -->
                    <div class="col-span-4 hidden">
                        <label class="block font-medium text-gray-700">Correo</label>
                        <input 
                            type="text" 
                            id="correo_facturacion" 
                            name="correo_facturacion" 
                            placeholder="Correo..."
                            class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                            value = "{{ old('correo_facturacion') }}"
                        >
                        @error('correo_facturacion')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Dirección -->
                    <div class="col-span-4 hidden">
                        <label class="block font-medium text-gray-700">Teléfono</label>
                        <input 
                            type="text" 
                            id="telefono_facturacion" 
                            name="telefono_facturacion" 
                            placeholder="Teléfono..."
                            class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                            value = "{{ old('telefono_facturacion') }}"
                        >
                        @error('telefono_facturacion')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <div class="col-span-4">
                        <div class="space-y-4">
                            <p class="text-center h2">Autorización Representante Legal Retiro de Estudiantes</p>
                            <div class="grid grid-cols-3 gap-4">
                                <div class="col-span-3 md:col-span-3 lg:col-span-1">
                                    <!-- Tarjeta 1 -->
                                    <div class="border rounded-lg p-4 shadow-md bg-white">
                                        <div class="flex justify-between items-center">
                                            <!-- <span class="font-bold text-lg">#1</span> -->
                                        </div>
                                        <div class="mt-2">
                                            <p>
                                                <label class="block font-medium text-gray-700 mt-1">Nombres</label> 
                                                <input 
                                                    type="text" 
                                                    placeholder="Nombres..."
                                                    name="primera_referencia_familiar_nombres"
                                                    id="primera_referencia_familiar_nombres"
                                                    value="{{ old('primera_referencia_familiar_nombres') }}"
                                                    class="referencia_familiar mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                                                >
                                            </p>
                                            @error('primera_referencia_familiar_nombres')
                                                <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                                    ⚠️ <span>{{ $message }}</span>
                                                </div>
                                            @enderror
                                            <p>
                                                <label class="block font-medium text-gray-700 mt-1">Cédula</label> 
                                                <input 
                                                    type="text" 
                                                    class="referencia_familiar mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                                                    name="primera_referencia_familiar_cedula"
                                                    id="primera_referencia_familiar_cedula"
                                                    value="{{ old('primera_referencia_familiar_cedula') }}"
                                                    placeholder="Cédula..."
                                                >
                                            </p>
                                            @error('primera_referencia_familiar_cedula')
                                                <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                                    ⚠️ <span>{{ $message }}</span>
                                                </div>
                                            @enderror
                                            <p>
                                                <label class="block font-medium text-gray-700 mt-1">Teléfono</label> 
                                                <input 
                                                    type="text" 
                                                    class="referencia_familiar mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                                                    name="primera_referencia_familiar_telefono"
                                                    id="primera_referencia_familiar_telefono"
                                                    value="{{ old('primera_referencia_familiar_telefono') }}"
                                                    placeholder="Teléfono..."
                                                >
                                            </p>
                                            @error('primera_referencia_familiar_telefono')
                                                <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                                    ⚠️ <span>{{ $message }}</span>
                                                </div>
                                            @enderror
                                            <p>
                                                <label class="block font-medium text-gray-700 mt-1">Modalidad de traslado</label> 
                                                <input 
                                                    type="text" 
                                                    class="referencia_familiar mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                                                    name="primera_referencia_familiar_modalidad"
                                                    id="primera_referencia_familiar_modalidad"
                                                    value="{{ old('primera_referencia_familiar_modalidad') }}"
                                                    placeholder="Modalidad..."
                                                >
                                                @error('primera_referencia_familiar_modalidad')
                                                    <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                                        ⚠️ <span>{{ $message }}</span>
                                                    </div>
                                                @enderror
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-span-3 md:col-span-3 lg:col-span-1">
                                    <!-- Tarjeta 2 -->
                                    <div class="border rounded-lg p-4 shadow-md bg-white">
                                        <div class="flex justify-between items-center">
                                            <!-- <span class="font-bold text-lg">#2</span> -->
                                            <!-- <span class="text-gray-500">Modalidad Traslado</span> -->
                                        </div>
                                        <div class="mt-2">
                                            <p>
                                                <label class="block font-medium text-gray-700 mt-1">Nombres</label> 
                                                <input 
                                                    type="text" 
                                                    class="referencia_familiar mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                                                    name="segunda_referencia_familiar_nombres"
                                                    id="segunda_referencia_familiar_nombres"
                                                    value="{{ old('segunda_referencia_familiar_nombres') }}"
                                                    placeholder="Nombres..."
                                                >
                                                @error('segunda_referencia_familiar_nombres')
                                                    <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                                        ⚠️ <span>{{ $message }}</span>
                                                    </div>
                                                @enderror
                                            </p>
                                            <p>
                                                <label class="block font-medium text-gray-700 mt-1">Cédula</label> 
                                                <input 
                                                    type="text" 
                                                    class="referencia_familiar mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                                                    name="segunda_referencia_familiar_cedula"
                                                    id="segunda_referencia_familiar_cedula"
                                                    value="{{ old('segunda_referencia_familiar_cedula') }}"
                                                    placeholder="Cédula..."
                                                >
                                            </p>
                                            @error('segunda_referencia_familiar_cedula')
                                                <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                                    ⚠️ <span>{{ $message }}</span>
                                                </div>
                                            @enderror
                                            <p>
                                                <label class="block font-medium text-gray-700 mt-1">Teléfono</label> 
                                                <input 
                                                    type="text" 
                                                    class="referencia_familiar mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                                                    name="segunda_referencia_familiar_telefono"
                                                    id="segunda_referencia_familiar_telefono"
                                                    value="{{ old('segunda_referencia_familiar_telefono') }}"
                                                    placeholder="Teléfono..."
                                                >
                                                @error('segunda_referencia_familiar_telefono')
                                                    <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                                        ⚠️ <span>{{ $message }}</span>
                                                    </div>
                                                @enderror
                                            </p>
                                            <p>
                                                <label class="block font-medium text-gray-700 mt-1">Modalidad de traslado</label> 
                                                <input 
                                                    type="text" 
                                                    class="referencia_familiar mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                                                    name="segunda_referencia_familiar_modalidad"
                                                    id="segunda_referencia_familiar_modalidad"
                                                    value="{{ old('segunda_referencia_familiar_modalidad') }}"
                                                    placeholder="Modalidad..."
                                                >
                                                @error('segunda_referencia_familiar_modalidad')
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
                                            <!-- <span class="font-bold text-lg">#3</span> -->
                                            <!-- <label class="block font-medium text-gray-700">WFIUWEFU</label> -->
                                        </div>
                                        <div class="mt-2">
                                            <p>
                                                <label class="block font-medium text-gray-700 mt-1">Nombres</label> 
                                                <input 
                                                    type="text" 
                                                    class="referencia_familiar mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                                                    name="tercera_referencia_familiar_nombres"
                                                    id="tercera_referencia_familiar_nombres"
                                                    value="{{ old('tercera_referencia_familiar_nombres') }}"
                                                    placeholder="Nombres..."
                                                >
                                                @error('tercera_referencia_familiar_nombres')
                                                    <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                                        ⚠️ <span>{{ $message }}</span>
                                                    </div>
                                                @enderror
                                            </p>
                                            <p>
                                                <label class="block font-medium text-gray-700 mt-1">Cédula</label> 
                                                <input 
                                                    type="text" 
                                                    class="referencia_familiar mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                                                    name="tercera_referencia_familiar_cedula"
                                                    id="tercera_referencia_familiar_cedula"
                                                    value="{{ old('tercera_referencia_familiar_cedula') }}"
                                                    placeholder="Cédula..."
                                                >
                                                @error('tercera_referencia_familiar_cedula')
                                                    <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                                        ⚠️ <span>{{ $message }}</span>
                                                    </div>
                                                @enderror
                                            </p>
                                            <p>
                                                <label class="block font-medium text-gray-700 mt-1">Teléfono</label> 
                                                <input 
                                                    type="text" 
                                                    class="referencia_familiar mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                                                    name="tercera_referencia_familiar_telefono"
                                                    id="tercera_referencia_familiar_telefono"
                                                    value="{{ old('tercera_referencia_familiar_telefono') }}"
                                                    placeholder="Teléfono..."
                                                >
                                                @error('tercera_referencia_familiar_telefono')
                                                    <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                                        ⚠️ <span>{{ $message }}</span>
                                                    </div>
                                                @enderror
                                            </p>
                                            <p>
                                                <label class="block font-medium text-gray-700 mt-1">Modalidad de traslado</label> 
                                                <input 
                                                    type="text" 
                                                    class="referencia_familiar mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                                                    name="tercera_referencia_familiar_modalidad"
                                                    id="tercera_referencia_familiar_modalidad"
                                                    value="{{ old('tercera_referencia_familiar_modalidad') }}"
                                                    placeholder="Modalidad..."
                                                >
                                                @error('tercera_referencia_familiar_modalidad')
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
                    </div>
                    <div class="col-span-4">
                        <div class="text-justify">
                            <p class="text-base">
                                Declaro que toda la información proporcionada en este formulario es verídica y correcta,
                                y certifico que los datos ingresados corresponden a mi representado y a mí como representante legal.
                            </p>
                            <p class="mt-2 text-base">
                                Acepto que cualquier inconsistencia o falsedad en la información suministrada será mi responsabilidad,
                                eximiendo a la <strong>Unidad Educativa Nuestra Señora del Carmen</strong> de cualquier perjuicio derivado de ello.
                            </p>
                        </div>
                        <div class="text-center mt-5">
                            <input type="checkbox" name="informacion_verdadera" id="confirmCheck" class="scale-125 mr-2">
                            <label for="confirmCheck" class="text-base">Certifico que toda la información ingresada es correcta</label>
                        </div>
                        @error('informacion_verdadera')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>
                    <div class="col-span-4">
                        <div class="text-center">
                            <button type="submit" id="submitButton" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-3 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded opacity-50" disabled>
                                Continuar <i class="fa-regular fa-circle-right"></i>    
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        @if(session('success'))
            Swal.fire({
                title: "Exito",
                text: "Los datos se han guardado con éxito.",
                icon: "success"
            });
        @endif
    </script>
    <!-- Declaración de información -->
    <script>
        document.getElementById('confirmCheck').addEventListener('change', function() {
            const submitButton = document.getElementById('submitButton');
            submitButton.disabled = !this.checked;
            submitButton.classList.toggle('opacity-50', !this.checked);
        });
    </script>

    <!-- Facturación -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const selectFacturacion = document.getElementById('facturacion');
            const camposFacturacion = [
                document.getElementById('cedula_ruc').parentElement,
                document.getElementById('razon_social').parentElement,
                document.getElementById('direccion_facturacion').parentElement,
                document.getElementById('telefono_facturacion').parentElement,
                document.getElementById('correo_facturacion').parentElement
            ];

            // Función para mostrar u ocultar los campos
            function toggleCamposFacturacion() {
                if (selectFacturacion.value === 'Si') {
                    camposFacturacion.forEach(campo => {
                        campo.classList.remove('hidden');
                    });
                } else {
                    camposFacturacion.forEach(campo => {
                        campo.classList.add('hidden');
                    });
                }
            }

            // Evento para cambiar los campos cuando se seleccione una opción
            selectFacturacion.addEventListener('change', toggleCamposFacturacion);

            // Ejecutar la función al cargar la página para mantener la consistencia con old()
            toggleCamposFacturacion();
        });
    </script>

    <!-- Esconder o habilitar ruta escolar -->
    <script>
        function mostrarRutaEscolar() {
            const transporte = document.getElementById("transporte_escolar").value;
            const rutaDiv = document.getElementById("ruta_escolar_div");

            if (transporte === "Requiero expreso") {
                rutaDiv.style.display = "block"; // Mostrar campo
            } else {
                rutaDiv.style.display = "none"; // Ocultar campo
                document.getElementById("ruta_escolar").value = "--seleccionar--"; // Resetear valor si se oculta
            }
        }

        // Ejecutar la función al cargar la página para mostrar la opción correcta si hay datos antiguos
        window.onload = mostrarRutaEscolar;
    </script>

    <!-- Buscar cédula en tiempo real -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const cedulaInput = document.getElementById('cedula_estudiante');

            cedulaInput.addEventListener('input', function () {
                const cedula = cedulaInput.value;

                if (cedula.length === 10) { // Solo ejecuta si tiene 10 dígitos
                    fetch(`{{ route('buscar.cedula.ficha.matricula') }}?cedula=${cedula}`)
                        .then(response => {
                            if (response.ok) {
                                return response.json();
                            }
                            console.log('Cédula no encontrada');
                        })
                        .then(data => {
                            if (data) {
                                // Llenamos los campos normales
                                let campos = [
                                    'primer_nombre_estudiante', 'segundo_nombre_estudiante', 'apellido_paterno_estudiante',
                                    'apellido_materno_estudiante', 'fecha_nacimiento_estudiante', 'ano_basica',
                                    'codigo_unico_electrico', 'genero_estudiante', 'nuevo_nsc', 
                                    'transporte_escolar', 'ruta_escolar', 'cedula_madre', 'primer_nombre_madre',
                                    'segundo_nombre_madre', 'apellido_paterno_madre', 'apellido_materno_madre',
                                    'direccion_madre', 'correo_madre', 'telefono_madre', 'cedula_padre',
                                    'primer_nombre_padre', 'segundo_nombre_padre', 'apellido_paterno_padre',
                                    'apellido_materno_padre', 'direccion_padre', 'correo_padre', 
                                    'telefono_padre', 'forma_pago_pensiones', 'facturacion', 
                                    'cedula_ruc', 'razon_social', 'direccion_facturacion', 'relacion_representante_uno',
                                    'relacion_representante_dos','correo_facturacion','telefono_facturacion','primera_referencia_familiar_nombres',
                                    'primera_referencia_familiar_cedula', 'primera_referencia_familiar_telefono', 'primera_referencia_familiar_modalidad',
                                    'segunda_referencia_familiar_nombres', 'segunda_referencia_familiar_cedula', 'segunda_referencia_familiar_telefono',
                                    'segunda_referencia_familiar_modalidad', 'tercera_referencia_familiar_nombres', 'tercera_referencia_familiar_cedula',
                                    'tercera_referencia_familiar_telefono', 'tercera_referencia_familiar_modalidad'
                                ];

                                campos.forEach(campo => {
                                    if (data[campo] !== null) {
                                        let input = document.getElementById(campo);
                                        if (input) {
                                            input.value = data[campo];
                                        }
                                    }
                                });

                                // Llenamos los campos de referencia_familiar con índices [0] hasta [11]
                                // if (data.referencia_familiar) {
                                //     let referencias = JSON.parse(data.referencia_familiar); // Convertimos a Array

                                //     referencias.forEach((valor, index) => {
                                //         let input = document.querySelector(`input[name="referencia_familiar[${index}]"]`);
                                //         if (input) {
                                //             input.value = valor;
                                //         }
                                //     });
                                // }

                                // Llenamos autorización legal si es un array también
                                if (data.autorizacion_legal_estudiante) {
                                    let autorizaciones = JSON.parse(data.autorizacion_legal_estudiante);
                                    autorizaciones.forEach((valor, index) => {
                                        let input = document.querySelector(`input[name="autorizacion_legal_estudiante[${index}]"]`);
                                        if (input) {
                                            input.value = valor;
                                        }
                                    });
                                }
                            }
                        })
                        .catch(error => {
                            console.log('Error:', error);
                        });
                }
            });
        });
    </script>
</x-fichas>