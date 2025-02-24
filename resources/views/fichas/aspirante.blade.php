<x-fichas>
    <div class="container mx-auto">
        <div class="p-5">
            <div class="grid grid-cols-4 gap-4">
                
                <div class="col-span-4">
                    <div class="text-center py-4">
                        <h1 class="text-3xl font-extrabold text-gray-800">
                            📄 Ficha de Matriculación
                        </h1>
                        <p class="text-md text-gray-800">
                            Favor completar el siguiente formulario con la información completa y veraz. Todos los campos con asteriscos son obligatorios.
                        </p>
                    </div>
                </div>


                <!-- Cédula Estudiante -->
                <div class="col-span-4">
                    <label class="block font-medium text-gray-700">Cédula</label>
                    <input 
                        type="text" 
                        id="cedula_estudiante" 
                        name="cedula_estudiante" 
                        placeholder="Ingrese su cédula"
                        class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                    >
                </div>

                <!-- Primer Nombre Estudiante -->
                <div class="col-span-1">
                    <label class="block  font-medium text-gray-700">Primer Nombre</label>
                    <input 
                        type="text" 
                        id="primer_nombre_estudiante" 
                        name="primer_nombre_estudiante"  
                        placeholder="Primer Nombre"
                        class="mt-1 block w-full rounded-md border-gray-300  focus:border-blue-500 focus:ring-blue-500"
                    >
                </div>

                <!-- Segundo Nombre Estudiante -->
                <div class="col-span-1">
                    <label class="block  font-medium text-gray-700">Segundo Nombre</label>
                    <input 
                        type="text" 
                        id="segundo_nombre_estudiante" 
                        name="segundo_nombre_estudiante"  
                        placeholder="Segundo Nombre"
                        class="mt-1 block w-full rounded-md border-gray-300  focus:border-blue-500 focus:ring-blue-500"
                    >
                </div>

                <!-- Apellido Paterno Estudiante -->
                <div class="col-span-1">
                    <label class="block  font-medium text-gray-700">Apellido Paterno</label>
                    <input 
                        type="text" 
                        id="apellido_paterno_estudiante" 
                        name="apellido_paterno_estudiante"  
                        placeholder="Apellido Paterno"
                        class="mt-1 block w-full rounded-md border-gray-300  focus:border-blue-500 focus:ring-blue-500"
                    >
                </div>

                <!-- Apellido Materno Estudiante -->
                <div class="col-span-1">
                    <label class="block  font-medium text-gray-700">Apellido Materno</label>
                    <input 
                        type="text" 
                        id="apellido_materno_estudiante" 
                        name="apellido_materno_estudiante"  
                        placeholder="Apellido Materno"
                        class="mt-1 block w-full rounded-md border-gray-300  focus:border-blue-500 focus:ring-blue-500"
                    >
                </div>

                <!-- Fecha Nacimiento Estudiante -->
                <div class="col-span-2">
                    <label class="block  font-medium text-gray-700">Fecha de Nacimiento</label>
                    <input 
                        type="date" 
                        id="fecha_nacimiento_estudiante" 
                        name="fecha_nacimiento_estudiante"  
                        class="mt-1 block w-full rounded-md border-gray-300  focus:border-blue-500 focus:ring-blue-500"
                    >
                </div>

                <!-- Codigo Unico Eléctrico -->
                <div class="col-span-2">
                    <label class="block  font-medium text-gray-700">Código Único Eléctrico Nacional del Domicilio del Estudiante</label>
                    <input 
                        type="text" 
                        id="codigo_unico_electrico" 
                        name="codigo_unico_electrico"  
                        placeholder="Codigo Unico Eléctrico"
                        class="mt-1 block w-full rounded-md border-gray-300  focus:border-blue-500 focus:ring-blue-500"
                    >
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
                <div class="col-span-4">
                    <label class="block font-medium text-gray-700">Cédula</label>
                    <input 
                        type="text" 
                        id="cedula_madre" 
                        name="cedula_madre" 
                        placeholder="Ingrese su cédula"
                        class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                    >
                </div>

                <!-- Primer Nombre Madre -->
                <div class="col-span-1">
                    <label class="block  font-medium text-gray-700">Primer Nombre</label>
                    <input 
                        type="text" 
                        id="primer_nombre_madre" 
                        name="primer_nombre_madre"  
                        placeholder="Primer Nombre"
                        class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                    >
                </div>

                <!-- Segundo Nombre Madre -->
                <div class="col-span-1">
                    <label class="block  font-medium text-gray-700">Segundo Nombre</label>
                    <input 
                        type="text" 
                        id="segundo_nombre_madre" 
                        name="segundo_nombre_madre"  
                        placeholder="Segundo Nombre"
                        class="mt-1 block w-full rounded-md border-gray-300  focus:border-blue-500 focus:ring-blue-500"
                    >
                </div>

                <!-- Apellido Paterno Madre -->
                <div class="col-span-1">
                    <label class="block  font-medium text-gray-700">Apellido Madre</label>
                    <input 
                        type="text" 
                        id="apellido_paterno_madre" 
                        name="apellido_paterno_madre"  
                        placeholder="Apellido Paterno"
                        class="mt-1 block w-full rounded-md border-gray-300  focus:border-blue-500 focus:ring-blue-500"
                    >
                </div>

                <!-- Apellido Materno Madre -->
                <div class="col-span-1">
                    <label class="block  font-medium text-gray-700">Apellido Materno</label>
                    <input 
                        type="text" 
                        id="apellido_materno_madre" 
                        name="apellido_materno_madre"  
                        placeholder="Apellido Materno"
                        class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                    >
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
                    >
                </div>

                <!-- Correo Electrónico Madre -->
                <div class="col-span-2">
                    <label class="block  font-medium text-gray-700">Correo</label>
                    <input 
                        type="text" 
                        id="correo_madre" 
                        name="correo_madre"  
                        placeholder="Ingrese su Correo"
                        class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                    >
                </div>


                <!-- Teléfono Madre -->
                <div class="col-span-2">
                    <label class="block font-medium text-gray-700">Teléfono</label>
                    <input 
                        type="text" 
                        id="telefono_madre" 
                        name="telefono_madre"  
                        placeholder="Ingrese su teléfono"
                        class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
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
                <div class="col-span-4">
                    <label class="block font-medium text-gray-700">Cédula</label>
                    <input 
                        type="text" 
                        id="cedula_padre" 
                        name="cedula_padre" 
                        placeholder="Ingrese su cédula"
                        class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                    >
                </div>

                <!-- Primer Nombre Padre -->
                <div class="col-span-1">
                    <label class="block  font-medium text-gray-700">Primer Nombre</label>
                    <input 
                        type="text" 
                        id="primer_nombre_padre" 
                        name="primer_nombre_padre"  
                        placeholder="Primer Nombre"
                        class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                    >
                </div>

                <!-- Segundo Nombre Padre -->
                <div class="col-span-1">
                    <label class="block  font-medium text-gray-700">Segundo Nombre</label>
                    <input 
                        type="text" 
                        id="segundo_nombre_padre" 
                        name="segundo_nombre_padre"  
                        placeholder="Segundo Nombre"
                        class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                    >
                </div>

                <!-- Apellido Paterno Padre -->
                <div class="col-span-1">
                    <label class="block  font-medium text-gray-700">Apellido Madre</label>
                    <input 
                        type="text" 
                        id="apellido_paterno_padre" 
                        name="apellido_paterno_padre"  
                        placeholder="Apellido Paterno"
                        class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                    >
                </div>

                <!-- Apellido Materno Padre -->
                <div class="col-span-1">
                    <label class="block  font-medium text-gray-700">Apellido Materno</label>
                    <input 
                        type="text" 
                        id="apellido_materno_Padre" 
                        name="apellido_materno_Padre"  
                        placeholder="Apellido Materno"
                        class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
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
                    >
                </div>

                <!-- Correo Electrónico Padre -->
                <div class="col-span-2">
                    <label class="block font-medium text-gray-700">Correo</label>
                    <input 
                        type="text" 
                        id="correo_padre" 
                        name="correo_padre"  
                        placeholder="Ingrese su Correo"
                        class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                    >
                </div>


                <!-- Teléfono Madre -->
                <div class="col-span-2">
                    <label class="block font-medium text-gray-700">Teléfono</label>
                    <input 
                        type="text" 
                        id="telefono_padre" 
                        name="telefono_padre"  
                        placeholder="Ingrese su teléfono"
                        class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                    >
                </div>


            </div>
        </div>
    </div>
</x-fichas>