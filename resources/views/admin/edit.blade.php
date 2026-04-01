<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista de Usuarios') }}
        </h2>
    </x-slot>

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
                    value = "" 
                    class="mt-1 block border-gray-300 w-full rounded-md"
                >
                @error('cedula')
                    <p 
                        class="mt-2 text-pink-600 text-sm">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <!-- Name -->
            <div class="col-span-4 md:col-span-4 lg:col-span-4">
                <label 
                    class="block"
                >   
                    Nombres
                </label>

                <input 
                    type="text" 
                    name="name" 
                    id="name"
                    placeholder="nombre..."
                    value = "{{ $user->name }}" 
                    class="mt-1 block border-gray-300 w-full rounded-md"
                >
                @error('name')
                    <p 
                        class="mt-2 text-pink-600 text-sm">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <!-- correo -->
            <div class="col-span-4 md:col-span-4 lg:col-span-4">
                <label 
                    class="block"
                >   
                    Correo
                </label>

                <input 
                    type="text" 
                    name="email" 
                    id="email"
                    placeholder="ejemplo@gmail.com..."
                    value = "{{ $user->email }}" 
                    class="mt-1 block border-gray-300 w-full rounded-md"
                >
                @error('email')
                    <p 
                        class="mt-2 text-pink-600 text-sm">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <!-- Cambiar Contraseña -->
            <div class="col-span-4 md:col-span-4 lg:col-span-4">
                <label 
                    class="block"
                >   
                    Nueva Contraseña
                </label>

                <input 
                    type="password" 
                    name="contraseña" 
                    id="contraseña"
                    placeholder="password..."
                    value = "" 
                    class="mt-1 block border-gray-300 w-full rounded-md"
                >
                @error('password')
                    <p 
                        class="mt-2 text-pink-600 text-sm">
                        {{ $message }}
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
                        Regresar al menú
                    </button>

                    <button 
                        type="submit" 
                        class="bg-[#89462a] text-white font-bold p-3 px-4 rounded" 
                    >
                        Guardar cambios 
                        <i class="fa-solid fa-circle-check"></i>
                    </button>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>