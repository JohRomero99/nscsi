<x-fichas>
    <div class="container mx-auto">
        <div class="px-10 py-10">
            <form action="{{ route('ficha.aspirante.registro.final.store') }}" method="POST">
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
                                    <div class="w-10 h-10 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold">2</div>
                                    <p class="mt-2 text-sm font-medium">Registro Final</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-4 md:col-span-4 lg:col-span-4">
                        <div class="bg-white shadow-lg rounded-lg p-6 max-w-4xl mx-auto">
                            <h2 class="text-xl font-bold text-center mb-4">Autorización "Representante Legal Retiro de Estudiantes"</h2>
                            <p class="text-justify leading-relaxed text-md">
                                Yo,
                                <select class="border border-gray-300 rounded-lg p-2 w-40">
                                    <option>--selecione--</option>
                                    <option>{{ $consulta->primer_nombre_padre }} {{ $consulta->apellido_paterno_padre }}</option>
                                    <option>{{ $consulta->primer_nombre_madre }} {{ $consulta->apellido_paterno_madre }}</option>
                                </select>
                                con número de cédula
                                <select class="border border-gray-300 rounded-lg p-2 w-40">
                                    <option>--selecione--</option>
                                    <option>{{ $consulta->cedula_padre }}</option>
                                    <option>{{ $consulta->cedula_madre }}</option>
                                </select>,
                                Representante Legal del estudiante
                                <select class="border border-gray-300 rounded-lg p-2 w-40">
                                    <option>--selecione--</option>
                                    <option>{{ $consulta->primer_nombre_estudiante }} {{ $consulta->apellido_paterno_estudiante }}</option>
                                </select>
                                con número de cédula
                                <select class="border border-gray-300 rounded-lg p-2 w-40">
                                    <option>--selecione--</option>
                                    <option>{{ $consulta->cedula_estudiante }}</option>
                                </select>, perteneciente al curso
                                <select class="border border-gray-300 rounded-lg p-2 w-40">
                                    <option>--seleccionar--</option>
                                </select>, con dirección domiciliaria
                                <select class="border border-gray-300 rounded-lg p-2 w-40">
                                    <option>--selecionar--</option>
                                    <option>{{ $consulta->direccion_padre }}</option>
                                    <option>{{ $consulta->direccion_madre }}</option>
                                </select>
                                número de teléfono
                                <select class="border border-gray-300 rounded-lg p-2 w-40">
                                    <option>--seleccionar--</option>
                                    <option>{{ $consulta->telefono_padre }}</option>
                                    <option>{{ $consulta->telefono_madre }}</option>
                                </select>, Email
                                <select class="border border-gray-300 rounded-lg p-2 w-40">
                                    <option>--selecionar--</option>
                                    <option>{{ $consulta->correo_padre }}</option>
                                    <option>{{ $consulta->correo_madre }}</option>
                                </select>.
                            </p>
                            <p class="mt-4 text-justify leading-relaxed text-md">
                                Autorizo que mi representado regrese al domicilio mencionado, acompañado de un familiar o conocido de confianza, <span class="text-red-500 font-semibold">desvinculando a la Unidad Educativa Nuestra Señora del Carmen</span> de la responsabilidad de cualquier eventualidad que se produzca durante el trayecto al domicilio.
                            </p>
                        </div>
                    </div>

                    <div class="col-span-4">
                        <div class="text-center">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-3 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                                <i class="fa-solid fa-circle-check"></i> Finalizar
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-fichas>