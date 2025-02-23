<x-setup>
    <form action="{{ route('admision.representante.store') }}" method="POST" id="formulario">
        @csrf
        <div id="setup-1">
            <p class="pl-5">Datos del Representante</p>
            <div class="grid grid-cols-4 gap-4 pl-5 pt-1 pr-5">
                <input type="hidden" name="setup" value="1"> <!-- Setup 1 -->
                <div class="col-span-4">
                    {{-- <p class="py-3 text-center"><i class="far fa-user-circle fa-lg"></i> Datos del Representante</p> --}}
                </div>
                <div class="col-span-4">
                    <label class="block" for="">Cédula</label>
                    <input type="text" name="cedula" id="cedula" value="{{ old('cedula') }}" placeholder="032514568..." class="mt-1 block border-gray-300 w-full rounded-md">
                    @error('cedula')
                        <p class="mt-2 text-pink-600 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="col-span-4">
                    <label class="block" for="">Primer Nombre</label>
                    <input type="text" name="primer_nombre" id="primer_nombre" value="{{ old('primer_nombre') }}" placeholder="John..." class="mt-1 block border-gray-300 w-full rounded-md">
                    @error('primer_nombre')
                        <p class="mt-2 text-pink-600 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="col-span-4">
                    <label class="block" for="">Segundo Nombre</label>
                    <input type="text" name="segundo_nombre" id="segundo_nombre" value="{{ old('segundo_nombre') }}" placeholder="Jairo..." class="mt-1 block border-gray-300 w-full rounded-md">
                    @error('segundo_nombre')
                        <p class="mt-2 text-pink-600 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="col-span-4">
                    <label class="block" for="">Apellido Paterno</label>
                    <input type="text" name="apellido_paterno" id="apellido_paterno" value="{{ old('apellido_paterno') }}" placeholder="Romero..." class="mt-1 block border-gray-300 w-full rounded-md">
                    @error('apellido_paterno')
                        <p class="mt-2 text-pink-600 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="col-span-4">
                    <label class="block" for="">Apellido Materno</label>
                    <input type="text" name="apellido_materno" id="apellido_materno" value="{{ old('apellido_materno') }}" placeholder="Sanchez..." class="mt-1 block border-gray-300 w-full rounded-md">
                    @error('apellido_materno')
                        <p class="mt-2 text-pink-600 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="col-span-2">
                    <label class="block" for="">Correo</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="jjaixxx@xxxxx.xx..." class="mt-1 border-gray-300 block w-full rounded-md">
                    @error('email')
                        <p class="mt-2 text-pink-600 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="col-span-2">
                    <label class="block" for="">Telefono</label>
                    <input type="text" name="telefono_celular" id="telefono_celular" value="{{ old('telefono_celular') }}" placeholder="123456789..." class="mt-1 block border-gray-300 w-full rounded-md">
                    @error('telefono_celular')
                        <p class="mt-2 text-pink-600 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="col-span-4">
                    <label class="block" for="">¿A cuantos estudiantes deseas inscribir?</label>
                    <input type="number" name="numero_inscripion" id="numero_inscripion" value="{{ old('numero_inscripion') }}" placeholder="Número de estudiantes a matricular" class="mt-1 block border-gray-300 w-full rounded-md">
                    @error('numero_inscripion')
                        <p class="mt-2 text-pink-600 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>
            <div class="text-right mt-4 pl-3 pr-3 pb-6" id="setup-1-button">
                <button type="submit" class="bg-green-400 hover:bg-green-300 text-white font-bold p-3 px-4 rounded" id="setpButton">
                    Siguiente <i class="fas fa-arrow-alt-circle-right"></i>
                </button>
            </div>
        </div>
    </form>
</x-setup>