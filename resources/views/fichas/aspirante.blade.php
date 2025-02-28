<x-fichas>
    <div class="container mx-auto">
        <div class="px-10 py-10">
            <form action="{{ route('ficha.aspirante.store') }}" method="POST">
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

                    <!-- Codigo Unico Eléctrico -->
                    <div class="col-span-4 md:col-span-4 lg:col-span-2">
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

                    <!-- Transporte Escolar -->
                    <div class="col-span-4">
                        <label for="opcion" class="block text-gray-700 font-medium mb-2">
                        Transporte Escolar
                        </label>

                        <select 
                            id="transporte_escolar" 
                            name="transporte_escolar" 
                            class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                        >
                            <option value="--seleccionar--" {{ old('transporte_escolar') == '--seleccionar--' ? 'selected' : '' }}>-seleccionar--</option>
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
                    <div class="col-span-4">
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
                    <div class="col-span-4 md:col-span-4 lg:col-span-1">
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
                    <div class="col-span-4 md:col-span-4 lg:col-span-1">
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
                            id="apellido_materno_Padre" 
                            name="apellido_materno_Padre"  
                            placeholder="Apellido Materno"
                            class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                            value = "{{ old('apellido_materno_Padre') }}"
                        >
                        @error('apellido_materno_Padre')
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
                            <option value="--seleccionar--">-seleccionar--</option>
                            <option value="Pago total anual TC a 6 meses sin intereses (matrícula gratis)">Pago total anual TC a 6 meses sin intereses (matrícula gratis)</option>
                            <option value="Pago total anual TC a 10 meses sin intereses (plataforma gratis)">Pago total anual TC a 10 meses sin intereses (plataforma gratis)</option>
                            <option value="Pago total anual con transferencia bancaria (matrícula gratis)">Pago total anual con transferencia bancaria (matrícula gratis)</option>
                            <option value="Pago total anual efectivo en Colecturía (matrícula gratis)">Pago total anual efectivo en Colecturía (matrícula gratis)</option>
                            <option value="Pago mensual transferencia bancaria">Pago mensual transferencia bancaria</option>
                            <option value="Pago mensual tarjeta de crédito">Pago mensual tarjeta de crédito</option>
                        </select>
                        @error('forma_pago_pensiones')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>


                    <!-- Terminos y Cóndiciones -->
                    <div class="col-span-4">
                        <div class="flex items-center space-x-3">
                            <input type="checkbox" id="terminos" name="terminos" class="hidden peer">
                            <label for="terminos" class="flex items-center cursor-pointer">
                                <div class="w-6 h-6 border-2 border-gray-400 rounded-md flex items-center justify-center peer-checked:bg-blue-600 peer-checked:border-blue-600 transition">
                                    <i class="fa-solid fa-check text-white hidden peer-checked:block"></i>
                                </div>
                            </label>
                            <span class="text-gray-700">Marque aquí si desea que la factura sea emitida con otros datos diferentes a los del Representante.</span>
                        </div>
                    </div>

                    <!-- Cédula o Ruc -->
                    <div class="col-span-4">
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
                    <div class="col-span-4">
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
                    <div class="col-span-4">
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

                    <!-- Dirección -->
                    <div class="col-span-4">
                        <label class="block font-medium text-gray-700">Teléfono</label>
                        <input 
                            type="text" 
                            id="teléfono_facturacion" 
                            name="teléfono_facturacion" 
                            placeholder="Teléfono..."
                            class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                            value = "{{ old('teléfono_facturacion') }}"
                        >
                        @error('teléfono_facturacion')
                            <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                ⚠️ <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <div class="col-span-4">
                        <div class="space-y-4">
                            <p class="text-center">Autorización Representante Legal Retiro de Estudiantes</p>
                            <div class="grid grid-cols-3 gap-4">
                                <div class="col-span-3 md:col-span-3 lg:col-span-1">
                                    <!-- Tarjeta 1 -->
                                    <div class="border rounded-lg p-4 shadow-md bg-white">
                                        <div class="flex justify-between items-center">
                                            <!-- <span class="font-bold text-lg">#1</span> -->
                                        </div>
                                        <div class="mt-2">
                                            <p>
                                                <label class="block font-medium text-gray-700 mt-1">Cédula</label> 
                                                <input 
                                                    type="text" 
                                                    placeholder="Cédula..."
                                                    name="referencia_familiar[0]"
                                                    value="{{ old('referencia_familiar.0') }}"
                                                    class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                                                >
                                            </p>
                                            @error('referencia_familiar.0')
                                                <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                                    ⚠️ <span>{{ $message }}</span>
                                                </div>
                                            @enderror
                                            <p>
                                                <label class="block font-medium text-gray-700 mt-1">Nombres</label> 
                                                <input 
                                                    type="text" 
                                                    class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                                                    name="referencia_familiar[1]"
                                                    value="{{ old('referencia_familiar.1') }}"
                                                    placeholder="Nombres..."
                                                >
                                            </p>
                                            @error('referencia_familiar.1')
                                                <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                                    ⚠️ <span>{{ $message }}</span>
                                                </div>
                                            @enderror
                                            <p>
                                                <label class="block font-medium text-gray-700 mt-1">Teléfono</label> 
                                                <input 
                                                    type="text" 
                                                    class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                                                    name="referencia_familiar[2]"
                                                    value="{{ old('referencia_familiar.2') }}"
                                                    placeholder="Teléfono..."
                                                >
                                            </p>
                                            @error('referencia_familiar.2')
                                                <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                                    ⚠️ <span>{{ $message }}</span>
                                                </div>
                                            @enderror
                                            <p>
                                                <label class="block font-medium text-gray-700 mt-1">Modalidad de traslado</label> 
                                                <input 
                                                    type="text" 
                                                    class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                                                    name="referencia_familiar[3]"
                                                    value="{{ old('referencia_familiar.3') }}"
                                                    placeholder="Modalidad..."
                                                >
                                                @error('referencia_familiar.3')
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
                                                <label class="block font-medium text-gray-700 mt-1">Cédula</label> 
                                                <input 
                                                    type="text" 
                                                    class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                                                    name="referencia_familiar[4]"
                                                    value="{{ old('referencia_familiar.4') }}"
                                                    placeholder="Cédula..."
                                                >
                                                @error('referencia_familiar.4')
                                                    <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                                        ⚠️ <span>{{ $message }}</span>
                                                    </div>
                                                @enderror
                                            </p>
                                            <p>
                                                <label class="block font-medium text-gray-700 mt-1">Nombres</label> 
                                                <input 
                                                    type="text" 
                                                    class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                                                    name="referencia_familiar[5]"
                                                    value="{{ old('referencia_familiar.5') }}"
                                                    placeholder="Nombres..."
                                                >
                                            </p>
                                            @error('referencia_familiar.5')
                                                <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                                    ⚠️ <span>{{ $message }}</span>
                                                </div>
                                            @enderror
                                            <p>
                                                <label class="block font-medium text-gray-700 mt-1">Teléfono</label> 
                                                <input 
                                                    type="text" 
                                                    class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                                                    name="referencia_familiar[6]"
                                                    value="{{ old('referencia_familiar.6') }}"
                                                    placeholder="Teléfono..."
                                                >
                                                @error('referencia_familiar.6')
                                                    <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                                        ⚠️ <span>{{ $message }}</span>
                                                    </div>
                                                @enderror
                                            </p>
                                            <p>
                                                <label class="block font-medium text-gray-700 mt-1">Modalidad de traslado</label> 
                                                <input 
                                                    type="text" 
                                                    class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                                                    name="referencia_familiar[7]"
                                                    value="{{ old('referencia_familiar.7') }}"
                                                    placeholder="Modalidad..."
                                                >
                                                @error('referencia_familiar.7')
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
                                                <label class="block font-medium text-gray-700 mt-1">Cédula</label> 
                                                <input 
                                                    type="text" 
                                                    class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                                                    name="referencia_familiar[8]"
                                                    value="{{ old('referencia_familiar.8') }}"
                                                    placeholder="Cédula..."
                                                >
                                                @error('referencia_familiar.8')
                                                    <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                                        ⚠️ <span>{{ $message }}</span>
                                                    </div>
                                                @enderror
                                            </p>
                                            <p>
                                                <label class="block font-medium text-gray-700 mt-1">Nombres</label> 
                                                <input 
                                                    type="text" 
                                                    class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                                                    name="referencia_familiar[9]"
                                                    value="{{ old('referencia_familiar.9') }}"
                                                    placeholder="Nombres..."
                                                >
                                                @error('referencia_familiar.9')
                                                    <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                                        ⚠️ <span>{{ $message }}</span>
                                                    </div>
                                                @enderror
                                            </p>
                                            <p>
                                                <label class="block font-medium text-gray-700 mt-1">Teléfono</label> 
                                                <input 
                                                    type="text" 
                                                    class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                                                    name="referencia_familiar[10]"
                                                    value="{{ old('referencia_familiar.10') }}"
                                                    placeholder="Teléfono..."
                                                >
                                                @error('referencia_familiar.10')
                                                    <div class="bg-red-100 text-red-600 text-sm rounded-lg p-2 mt-1 flex items-center gap-2 shadow-sm">
                                                        ⚠️ <span>{{ $message }}</span>
                                                    </div>
                                                @enderror
                                            </p>
                                            <p>
                                                <label class="block font-medium text-gray-700 mt-1">Modalidad de traslado</label> 
                                                <input 
                                                    type="text" 
                                                    class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                                                    name="referencia_familiar[11]"
                                                    value="{{ old('referencia_familiar.11') }}"
                                                    placeholder="Modalidad..."
                                                >
                                                @error('referencia_familiar.11')
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
                        <div class="text-center">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-3 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                                <i class="fa-solid fa-circle-check"></i> Finalizar registro
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        Swal.fire({
            title: "Registro final",
            text: "You clicked the button!",
            icon: "success"
        });
    </script>
</x-fichas>