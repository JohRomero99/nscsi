<x-app-layout>

<div class="flex justify-center">
    <div class="bg-white mt-8 w-full max-w-4xl">
        <div class="p-6">

            <div class="">
                <h1 class="text-4xl text-center font-extrabold text-gray-700 mt-1">
                    Agregar a un nuevo Estudiante
                </h1>
                <p class="mb-3 text-center text-gray-600 dark:text-gray-600 mt-2 text-1xl">
                    Completa cada uno de los campos con imformación verdadera
                </p>
            </div>

            <form 
                action="{{ route('dashboard.agregar.estudiante.store') }}"
                method="POST"
                >
                @csrf

                <!-- Cédula del estudiante -->
                <div class="col-span-4">
                    <div class="text-left mt-3">
                        <label 
                            class="block"
                        >   
                            Cédula
                        </label>
                        
                        <input 
                            type="text" 
                            name="cedula" 
                            id="cedula" 
                            value="{{ old('cedula') }}" 
                            placeholder="032514568..." 
                            class="mt-2 block border-gray-300 w-full rounded-md"
                        >
                        @error('cedula')
                            <p 
                                class="mt-2 text-pink-600 text-sm">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>

                <!-- Primer nombre estudiante -->
                <div class="col-span-4">
                    <div class="text-left mt-3">
                        <label 
                            class="block"
                        >   
                            Primer Nombre
                        </label>
                        
                        <input 
                            type="text" 
                            name="primer_nombre" 
                            id="primer_nombre" 
                            value="{{ old('primer_nombre') }}" 
                            placeholder="John..." 
                            class="mt-2 block border-gray-300 w-full rounded-md"
                        >
                        @error('primer_nombre')
                            <p 
                                class="mt-2 text-pink-600 text-sm">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                <!-- Segundo nombre estudiante -->
                <div class="col-span-4">
                    <div class="text-left mt-3">
                        <label 
                            class="block"
                        >   
                            Segundo Nombre
                        </label>
                        
                        <input 
                            type="text" 
                            name="segundo_nombre" 
                            id="segundo_nombre" 
                            value="{{ old('segundo_nombre') }}" 
                            placeholder="Jairo..." 
                            class="mt-2 block border-gray-300 w-full rounded-md"
                        >
                        @error('segundo_nombre')
                            <p 
                                class="mt-2 text-pink-600 text-sm">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>

                <!-- Apellido paterno estudiante -->
                <div class="col-span-4">
                    <div class="text-left mt-3">
                        <label 
                            class="block"
                        >   
                            Apellido Paterno
                        </label>
                        
                        <input 
                            type="text" 
                            name="apellido_paterno" 
                            id="apellido_paterno" 
                            value="{{ old('apellido_paterno') }}" 
                            placeholder="Jairo..." 
                            class="mt-2 block border-gray-300 w-full rounded-md"
                        >
                        @error('apellido_paterno')
                            <p 
                                class="mt-2 text-pink-600 text-sm">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>


                <!-- apellido materno estudiante -->
                <div class="col-span-4">
                    <div class="text-left mt-3">
                        <label 
                            class="block"
                        >   
                            Apellido Materno
                        </label>
                        
                        <input 
                            type="text" 
                            name="apellido_materno" 
                            id="apellido_materno" 
                            value="{{ old('apellido_materno') }}" 
                            placeholder="Jairo..." 
                            class="mt-2 block border-gray-300 w-full rounded-md"
                        >
                        @error('apellido_materno')
                            <p 
                                class="mt-2 text-pink-600 text-sm">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>

                <!-- Año de básica del estudiante -->
                <div class="col-span-2">

                    <div class="text-left mt-3">
                        <label 
                            class="block"
                        >
                            Año de basica
                        </label>

                        <select 
                            type="select" 
                            name="anio_basica"
                            class="mt-1 block border-gray-300 w-full rounded-md anio_basica"
                        >
                            @foreach ($anio_academico as $anio)
                                <option 
                                    value="{{ $anio->id }}">

                                        {{ $anio->anio_basica }}
                                </option>
                            @endforeach
                        </select>

                        @error("anio_basica")
                            <p 
                                class="mt-2 text-pink-600 text-sm">
                                El campo --seleccionar-- no puede ser una opción
                            </p>
                        @enderror
                    </div>
                </div>

                <div class="col-span-4 text-center mt-5">
                    <a href="{{ route('dashboard') }}" class="bg-red-500 hover:bg-red-400 text-white font-bold py-3 px-4 border-b-4 border-red-700 hover:border-red-500 rounded inline-block">
                        <i class="fa-solid fa-circle-arrow-left"></i> Regresar al Inicio
                    </a>
                    <button class="bg-gray-500 hover:bg-gray-400 text-white font-bold py-3 px-4 border-b-4 border-gray-700 hover:border-gray-500 rounded">
                        Guardar <i class="fa-solid fa-circle-check"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

</x-app-layout>