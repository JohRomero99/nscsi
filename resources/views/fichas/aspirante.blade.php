<x-fichas>
    <div class="container mx-auto">
        <div class="px-20 py-10">
            <form action="{{ route('ficha.aspirante.store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-4 gap-4">
                    
                    <div class="col-span-4 md:col-span-4 lg:col-span-4">
                        <div class="text-center py-6">
                            <h1 class="text-4xl font-bold text-gray-900 flex items-center justify-center gap-2">
                                <span class="text-blue-600">📄</span> 
                                <span>Ficha de Matriculación</span>
                            </h1>
                            <p class="text-lg text-gray-700 mt-2 max-w-4xl mx-auto">
                                Por favor, complete el formulario con información precisa. 
                                <span class="font-semibold text-red-600">Los campos marcados con * son obligatorios.</span>
                            </p>
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
                            <div class="alert alert-danger">{{ $message }}</div>
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
                            <div class="alert alert-danger">{{ $message }}</div>
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
                            <div class="alert alert-danger">{{ $message }}</div>
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
                            <div class="alert alert-danger">{{ $message }}</div>
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
                            <div class="alert alert-danger">{{ $message }}</div>
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
                            <div class="alert alert-danger">{{ $message }}</div>
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
                            <div class="alert alert-danger">{{ $message }}</div>
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
                            <option value="-seleccionar--">-seleccionar--</option>
                            <option value="Retiro personalmente (o persona autorizada)">Retiro personalmente (o persona autorizada)</option>
                            <option value="Expreso por mi cuenta">Expreso por mi cuenta</option>
                            <option value="Requiero expreso">Requiero expreso</option>
                        </select>
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
                            <option value="-seleccionar--">-seleccionar--</option>
                            <option value="Alborada">Alborada</option>
                            <option value="Garzota">Garzota</option>
                            <option value="Guayacanes">Guayacanes</option>
                            <option value="Guayacanes-Samanes">Guayacanes-Samanes</option>
                            <option value="La Joya">La Joya</option>
                            <option value="Matices Villa Club">Matices Villa Club</option>
                            <option value="Matices-Veranda">Matices-Veranda</option>
                            <option value="Metropolis 2">Metropolis 2</option>
                            <option value="Mucho Lote 1 - Ciudad Santiago">Mucho Lote 1 - Ciudad Santiago</option>
                            <option value="Mucho Lote 2">Mucho Lote 2</option>
                            <option value="Orquideas Vergeles">Orquideas Vergeles</option>
                            <option value="Rosales - ALlamos - Condor">Rosales - ALlamos - Condor</option>
                            <option value="Samanes 7- J. Montalvo">Samanes 7- J. Montalvo</option>
                            <option value="Sauces">Sauces</option>
                            <option value="Sur Oeste - Martha de Roldos">Sur Oeste - Martha de Roldos</option>
                            <option value="Sur - Atarazana">Sur - Atarazana</option>
                            <option value="Vía Salitre">Vía Salitre</option>
                            <option value="Villa del Rey">Villa del Rey</option>
                            <option value="Villa Italia - La Rioja">Villa Italia - La Rioja</option>
                        </select>
                    </div>

                    <div class="col-span-4 rounded-lg p-4 shadow-sm text-center bg-gray-100">
                        <h2 class="text-2xl font-semibold text-gray-700 leading-tight">
                            Datos de la Madre
                        </h2>
                        <p class="text-sm text-gray-500 mt-0.5">
                            Complete los campos con información verídica.
                        </p>
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
                            <div class="alert alert-danger">{{ $message }}</div>
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
                            <div class="alert alert-danger">{{ $message }}</div>
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
                            <div class="alert alert-danger">{{ $message }}</div>
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
                            <div class="alert alert-danger">{{ $message }}</div>
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
                            <div class="alert alert-danger">{{ $message }}</div>
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
                    </div>


                    <!-- Datos del Padre -->
                    <div class="col-span-4 rounded-lg p-4 shadow-sm text-center bg-gray-100">
                        <h2 class="text-2xl font-semibold text-gray-700 leading-tight">
                            Datos del Padre
                        </h2>
                        <p class="text-sm text-gray-500 mt-0.5">
                            Complete los campos con información verídica.
                        </p>
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
                    </div>

                    <div class="col-span-4 rounded-lg p-4 shadow-sm text-center bg-gray-100">
                        <h2 class="text-2xl font-semibold text-gray-700 leading-tight">
                            Formas de Pago
                        </h2>
                        <p class="text-sm text-gray-500 mt-0.5">
                            Complete los campos con información verídica.
                        </p>
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
                            <option value="-seleccionar--">-seleccionar--</option>
                            <option value="Pago total anual TC a 6 meses sin intereses (matrícula gratis)">Pago total anual TC a 6 meses sin intereses (matrícula gratis)</option>
                            <option value="Pago total anual TC a 10 meses sin intereses (plataforma gratis)">Pago total anual TC a 10 meses sin intereses (plataforma gratis)</option>
                            <option value="Pago total anual con transferencia bancaria (matrícula gratis)">Pago total anual con transferencia bancaria (matrícula gratis)</option>
                            <option value="Pago total anual efectivo en Colecturía (matrícula gratis)">Pago total anual efectivo en Colecturía (matrícula gratis)</option>
                            <option value="Pago mensual transferencia bancaria">Pago mensual transferencia bancaria</option>
                            <option value="Pago mensual tarjeta de crédito">Pago mensual tarjeta de crédito</option>
                        </select>
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
                                                <label class="block font-medium text-gray-700">Nombre</label> 
                                                <input 
                                                    type="text" 
                                                    class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                                            </p>
                                            <p>
                                                <label class="block font-medium text-gray-700">Cédula</label> 
                                                <input 
                                                    type="text" 
                                                    class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                                            </p>
                                            <p>
                                                <label class="block font-medium text-gray-700">Teléfono</label> 
                                                <input 
                                                    type="text" 
                                                    class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                                            </p>
                                            <p>
                                                <label class="block font-medium text-gray-700">Modalidad de traslado</label> 
                                                <input 
                                                    type="text" 
                                                    class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
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
                                                <label class="block font-medium text-gray-700">Nombre</label> 
                                                <input 
                                                    type="text" 
                                                    class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                                            </p>
                                            <p>
                                                <label class="block font-medium text-gray-700">Cédula</label> 
                                                <input 
                                                    type="text" 
                                                    class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                                            </p>
                                            <p>
                                                <label class="block font-medium text-gray-700">Teléfono</label> 
                                                <input 
                                                    type="text" 
                                                    class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                                            </p>
                                            <p>
                                                <label class="block font-medium text-gray-700">Modalidad de traslado</label> 
                                                <input 
                                                    type="text" 
                                                    class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
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
                                                <label class="block font-medium text-gray-700">Nombre</label> 
                                                <input 
                                                    type="text" 
                                                    class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                                            </p>
                                            <p>
                                                <label class="block font-medium text-gray-700">Cédula</label> 
                                                <input 
                                                    type="text" 
                                                    class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                                            </p>
                                            <p>
                                                <label class="block font-medium text-gray-700">Teléfono</label> 
                                                <input 
                                                    type="text" 
                                                    class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                                            </p>
                                            <p>
                                                <label class="block font-medium text-gray-700">Modalidad de traslado</label> 
                                                <input 
                                                    type="text" 
                                                    class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
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