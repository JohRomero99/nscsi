<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista de Usuarios') }}
        </h2>
    </x-slot>

    <form action="{{ route('admin.update', $user->id) }}" method="POST">
        @csrf
        @method('POST')

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
                        value= "{{ $user->persona->cedula }}" 
                        class="mt-1 block border-gray-300 w-full rounded-md"
                    >
                    @error('cedula')
                        <p 
                            class="mt-2 text-pink-600 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Primer Nombre -->
                <div class="col-span-4 md:col-span-4 lg:col-span-4">
                    <label 
                        class="block"
                    >   
                        Nombres
                    </label>

                    <input 
                        type="text" 
                        name="primer_nombre" 
                        id="primer_nombre"
                        placeholder="nombre..."
                        value = "{{ $user->persona->primer_nombre }}" 
                        class="mt-1 block border-gray-300 w-full rounded-md"
                    >
                    @error('primer_nombre')
                        <p 
                            class="mt-2 text-pink-600 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Segundo Nombre -->
                <div class="col-span-4 md:col-span-4 lg:col-span-4">
                    <label 
                        class="block"
                    >   
                        Segundo Nombre
                    </label>

                    <input 
                        type="text" 
                        name="segundo_nombre" 
                        id="segundo_nombre"
                        placeholder="nombre..."
                        value = "{{ $user->persona->segundo_nombre }}" 
                        class="mt-1 block border-gray-300 w-full rounded-md"
                    >
                    @error('segundo_nombre')
                        <p 
                            class="mt-2 text-pink-600 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Apellido Paterno -->
                <div class="col-span-4 md:col-span-4 lg:col-span-4">
                    <label 
                        class="block"
                    >   
                        Apellido Paterno
                    </label>

                    <input 
                        type="text" 
                        name="apellido_paterno" 
                        id="apellido_paterno"
                        placeholder="nombre..."
                        value = "{{ $user->persona->apellido_paterno }}" 
                        class="mt-1 block border-gray-300 w-full rounded-md"
                    >
                    @error('apelledo_paterno')
                        <p 
                            class="mt-2 text-pink-600 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Apellido Materno -->
                <div class="col-span-4 md:col-span-4 lg:col-span-4">
                    <label 
                        class="block"
                    >   
                        Apellido Materno
                    </label>

                    <input 
                        type="text" 
                        name="apellido_materno" 
                        id="apellido_materno"
                        placeholder="nombre..."
                        value = "{{ $user->persona->apellido_materno }}" 
                        class="mt-1 block border-gray-300 w-full rounded-md"
                    >
                    @error('apellido_materno')
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

                <div class="col-span-4 md:col-span-4 lg:col-span-4">
                    <input 
                        type="checkbox" 
                        id="check_contrasena" 
                        name="checkbox"
                        class="w-4 h-4"
                    >
                    <label for="check_contrasena">Cambiar Contraseña</label>
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
                        name="contrasena" 
                        id="contrasena"
                        placeholder="Nueva contraseña..."
                        class="mt-1 block border-gray-300 w-full rounded-md transition-opacity duration-300 opacity-50 disabled:cursor-not-allowed"
                        disabled
                    >
                    @error('contrasena')
                        <p 
                            class="mt-2 text-pink-600 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Actualizar Rol -->
                <div class="col-span-4 md:col-span-4 lg:col-span-4">
                    <label 
                        class="block"
                    >   
                        Rol
                    </label>

                    <select 
                        name="rol" 
                        id="rol"
                        class="mt-1 block border-gray-300 w-full rounded-md"
                    >
                        <option value="">--Seleccionar--</option>

                        @foreach ($roles as $rol)
                            <option 
                                value="{{ $rol->name }}"
                                {{ $user->getRoleNames()->first() == $rol->name ? 'selected' : '' }}
                            >
                                {{ $rol->name }}
                            </option>
                        @endforeach
                    </select>

                    @error('rol')
                        <p 
                            class="mt-2 text-pink-600 text-sm">
                            No puedes eligir la opción --seleccionar--
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
    </form>

<script>
    const check = document.getElementById('check_contrasena');
    const input = document.getElementById('contrasena');

    check.addEventListener('change', function () {
        if (this.checked) {
            input.disabled = false;
            input.classList.remove('opacity-50');
            input.classList.add('opacity-100');
        } else {
            input.disabled = true;
            input.classList.remove('opacity-100');
            input.classList.add('opacity-50');
        }
    });
</script>
</x-app-layout>