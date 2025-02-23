<x-setup>
    <form id="main-form" action="{{ route('admision.estudiante.store', ['id' => $id, 'email' => $email]) }}" method="POST">
        @csrf
        <div id="form-container">
            <p class="pl-5">Datos del Estudiante</p>
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
                        <div class="col-span-4">
                            {{--  --}}
                        </div>
                        <div class="col-span-4">
                            <label class="block" for="">Cédula</label>
                            <input type="text" name="cedula[]" value="{{ old("cedula.$i") }}" placeholder="032514568..." class="mt-1 block border-gray-300 w-full rounded-md">
                            @error("cedula.$i")
                                <p class="mt-2 text-pink-600 text-sm">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="col-span-4">
                            <label class="block" for="">Primer Nombre</label>
                            <input type="text" name="primer_nombre[]" value="{{ old("primer_nombre.$i") }}" placeholder="John..." class="mt-1 block border-gray-300 w-full rounded-md">
                            @error("primer_nombre.$i")
                                <p class="mt-2 text-pink-600 text-sm">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="col-span-4">
                            <label class="block" for="">Segundo Nombre</label>
                            <input type="text" name="segundo_nombre[]" value="{{ old("segundo_nombre.$i") }}" placeholder="Jairo..." class="mt-1 block border-gray-300 w-full rounded-md">
                            @error("segundo_nombre.$i")
                                <p class="mt-2 text-pink-600 text-sm">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="col-span-4">
                            <label class="block" for="">Apellido Paterno</label>
                            <input type="text" name="apellido_paterno[]" value="{{ old("apellido_paterno.$i") }}" placeholder="Romero..." class="mt-1 block border-gray-300 w-full rounded-md">
                            @error("apellido_paterno.$i")
                                <p class="mt-2 text-pink-600 text-sm">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="col-span-4">
                            <label class="block" for="">Apellido Materno</label>
                            <input type="text" name="apellido_materno[]" value="{{ old("apellido_materno.$i") }}" placeholder="Sanchez..." class="mt-1 block border-gray-300 w-full rounded-md">
                            @error("apellido_materno.$i")
                                <p class="mt-2 text-pink-600 text-sm">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="col-span-2">
                            <label class="block" for="">Fecha de nacimiento</label>
                            <input type="date" name="fecha_nacimiento[]" value="{{ old("fecha_nacimiento.$i") }}" class="mt-1 border-gray-300 block w-full rounded-md">
                            @error("fecha_nacimiento.$i")
                                <p class="mt-2 text-pink-600 text-sm">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="col-span-2 mb-4">
                            <label class="block" for="">Año de basica</label>
                            <select type="select" name="ano_basica[]" class="mt-1 block border-gray-300 w-full rounded-md">
                                @foreach ($anio_academico as $anio)
                                    <option value="{{ $anio->id }}">{{ $anio->anio_basica }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                        
                </div>
            @endfor
        </div>
    </form>
    <div class="flex justify-between mt-3 mb-3 pl-5 pr-5">
        <div class="conatiner inline">
            {{-- <button type="button" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                <i class="fas fa-arrow-circle-left"></i> Atras
            </button> --}}
            <a href="{{ route('admision.representante.create') }}" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                <i class="fas fa-arrow-circle-left"></i> Atras
            </a>
        </div>
        <div class="conatiner flex space-x-4">
            <button type="button" id="remove-duplicate-button" class="bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 border-b-4 border-green-700 hover:border-green-500 rounded" onclick="removeLastForm()">
                <i class="fas fa-minus-circle"></i> Eliminar Estudiante
            </button>
            {{-- <button type="button" id="duplicate-button" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                <i class="fas fa-plus-circle"></i> Agregar estudiante
            </button> --}}
            <button type="submit" form="main-form" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                <i class="far fa-paper-plane"></i> Finalizar
            </button>
        </div>
    </div>

</x-setup>
