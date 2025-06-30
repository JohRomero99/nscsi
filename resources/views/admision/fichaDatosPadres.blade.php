<x-app-layout>
    <form action="{{ route('dashboard.ficha.padres.store') }}" method="POST">
        @csrf
        <div class="grid grid-cols-4 gap-4 p-10">

            <!-- Titulo -->
            <div class="col-span-4 flex justify-center">
                <div class="">
                    <h1 class="text-4xl text-center font-extrabold text-gray-700 mt-7">
                        Ficha Padre
                    </h1>
                    <p class="mb-3 text-center text-gray-600 dark:text-gray-600 mt-2 text-1xl">
                        Comepleta cada uno de los campos con información verídica.
                    </p>
                </div>
            </div>

            <!-- Wizard -->
            <div class="col-span-4">
                <ol class="flex justify-center w-full p-3 space-x-2 text-sm font-medium text-center text-gray-500 bg-white border border-gray-200 rounded-lg shadow-xs dark:text-gray-400 sm:text-base dark:bg-gray-800 dark:border-gray-700 sm:p-4 sm:space-x-4 rtl:space-x-reverse">
                    <li class="flex items-center text-blue-600 dark:text-blue-500">
                        <span class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
                            1
                        </span>
                        Datos <span class="hidden sm:inline-flex sm:ms-2">del Estudiante</span>
                        <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                        </svg>
                    </li>
                    <li class="flex items-center text-blue-600 dark:text-blue-500">
                        <span class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                            2
                        </span>
                        Datos <span class="hidden sm:inline-flex sm:ms-2">Padre</span>
                        <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                        </svg>
                    </li>
                    <li class="flex items-center">
                        <span class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                            3
                        </span>
                        Datos <span class="hidden sm:inline-flex sm:ms-2">Madre</span>
                    </li>
                    <li class="flex items-center">
                        <span class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                            4
                        </span>
                        Confirmación <span class="hidden sm:inline-flex sm:ms-2">Datos</span>
                    </li>
                </ol>
            </div>

            <!-- Cédula del padre o DNI -->
            <div class="col-span-4 md:col-span-4 lg:col-span-4">
                <label 
                    class="block"
                >   
                    DNI (Cédula)
                </label>

                <input 
                    type="text" 
                    name="cedula_padre" 
                    id="cedula_padre"
                    placeholder="0955546601..."
                    value="{{ old('cedula_padre') }}"
                    class="mt-1 block border-gray-300 w-full rounded-md"
                >
                @error('cedula_padre')
                    <p 
                        class="mt-2 text-pink-600 text-sm">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <!-- Primer nombre Padre -->
            <div class="col-span-4 md:col-span-2 lg:col-span-1">
                <label 
                    class="block"
                >   
                    Primer Nombre
                </label>

                <input 
                    type="text" 
                    name="primer_nombre_padre" 
                    id="primer_nombre_padre" 
                    value="{{ old('primer_nombre_padre') }}"
                    placeholder="John..." 
                    class="mt-1 block border-gray-300 w-full rounded-md"
                >
                @error('primer_nombre_padre')
                    <p 
                        class="mt-2 text-pink-600 text-sm">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <!-- Segundo nombre Padre -->
            <div class="col-span-4 md:col-span-2 lg:col-span-1">
                <label 
                    class="block"
                >   
                    Segundo Nombre
                </label>

                <input 
                    type="text" 
                    name="segundo_nombre_padre" 
                    id="segundo_nombre_padre" 
                    value="{{ old('segundo_nombre_padre') }}"
                    placeholder="Jairo..." 
                    class="mt-1 block border-gray-300 w-full rounded-md"
                >
                @error('segundo_nombre_padre')
                    <p 
                        class="mt-2 text-pink-600 text-sm">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <!-- Apellido Paterno Padre -->
            <div class="col-span-4 md:col-span-2 lg:col-span-1">
                <label 
                    class="block"
                >   
                    Segundo Nombre
                </label>

                <input 
                    type="text" 
                    name="apellido_paterno_padre" 
                    id="apellido_paterno_padre" 
                    value="{{ old('apellido_paterno_padre') }}"
                    placeholder="Romero..." 
                    class="mt-1 block border-gray-300 w-full rounded-md"
                >
                @error('apellido_paterno_padre')
                    <p 
                        class="mt-2 text-pink-600 text-sm">
                        {{ $message }}
                    </p>
                @enderror
            </div>


            <!-- Apellido Materno Padre -->
            <div class="col-span-4 md:col-span-2 lg:col-span-1">
                <label 
                    class="block"
                >   
                    Segundo Nombre
                </label>

                <input 
                    type="text" 
                    name="apellido_paterno_madre" 
                    id="apellido_paterno_madre" 
                    value="{{ old('apellido_paterno_madre') }}"
                    placeholder="Sanchez..." 
                    class="mt-1 block border-gray-300 w-full rounded-md"
                >
                @error('apellido_paterno_madre')
                    <p 
                        class="mt-2 text-pink-600 text-sm">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <!-- Nacionalidad Estudiante -->
            <div class="col-span-4 md:col-span-4 lg:col-span-2">
                <label 
                    class="block"
                >   
                    Nacionalidad
                </label>

                <select 
                    name="nacionalidad_id" 
                    id="nacionalidad_id"
                    class="mt-1 block border-gray-300 w-full rounded-md"
                >
                    @foreach($nacionalidad as $n)
                        <option 
                            value="{{$n->id}}"
                            {{ old('nacionalidad_id') == $n->id ? 'selected' : '' }}
                        >
                            {{$n->nacionalidad}}
                        </option>
                    @endforeach

                </select>

                @error('nacionalidad_id')
                    <p 
                        class="mt-2 text-pink-600 text-sm">
                        No puedes eligir la opción "--seleccionar--"
                    </p>
                @enderror
            </div>

            <!-- Lugar de Nacimiento Estudiante -->
            <div class="col-span-4 md:col-span-2 lg:col-span-2">
                <label 
                    class="block"
                >   
                    Lugar de nacimiento
                </label>

                <input 
                    type="text" 
                    name="lugar_nacimiento_id" 
                    id="lugar_nacimiento_id" 
                    value="{{ old('lugar_nacimiento_id') }}"
                    placeholder="Lugar de Nacimiento..." 
                    class="mt-1 block border-gray-300 w-full rounded-md"
                >
                @error('lugar_nacimiento_id')
                    <p 
                        class="mt-2 text-pink-600 text-sm">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <!-- Sexo Padre -->
            <div class="col-span-4 md:col-span-1 lg:col-span-1">
                <label 
                    class="block"
                >   
                    Sexo
                </label>

                <select name="sexo_id" 
                    id="sexo_id" 
                    class="mt-1 block border-gray-300 w-full rounded-md"
                >
                    @foreach($sexo as $s)
                        <option 
                            value="{{$s->id}}"
                                {{ old('sexo_id') == $s->id ? 'selected' : '' }} 
                            >
                                {{$s->sexo}}
                            </option>
                    @endforeach
                </select>

                @error('sexo_id')
                    <p 
                        class="mt-2 text-pink-600 text-sm">
                        No puedes eligir la opción "--seleccionar--"
                    </p>
                @enderror
            </div>


            <!-- Teléfono domicilio padre -->
            <div class="col-span-4 md:col-span-1 lg:col-span-1">
                <label 
                    class="block"
                >   
                    Teléfono domicilio
                </label>

                <input 
                    type="text" 
                    name="telefono_domicilio" 
                    id="telefono_domicilio" 
                    value="{{ old('telefono_domicilio') }}"
                    placeholder="teléfono domicilio..." 
                    class="mt-1 block border-gray-300 w-full rounded-md"
                >
                @error('telefono_domicilio')
                    <p 
                        class="mt-2 text-pink-600 text-sm">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <!-- telefono_celular padre -->
            <div class="col-span-4 md:col-span-1 lg:col-span-1">
                <label 
                    class="block"
                >   
                    Teléfono celular
                </label>

                <input 
                    type="text" 
                    name="telefono_celular" 
                    id="telefono_celular" 
                    value="{{ old('telefono_celular') }}"
                    placeholder="telefono_celular..." 
                    class="mt-1 block border-gray-300 w-full rounded-md"
                >
                @error('telefono_celular')
                    <p 
                        class="mt-2 text-pink-600 text-sm">
                        {{ $message }}
                    </p>
                @enderror
            </div>


            <!-- Correo Electrónico frecuente padre -->
            <div class="col-span-4 md:col-span-1 lg:col-span-1">
                <label 
                    class="block"
                >   
                    Correo electrónico frecuente
                </label>

                <input 
                    type="text" 
                    name="correo_electronico_frecuente" 
                    id="correo_electronico_frecuente" 
                    value="{{ old('correo_electronico_frecuente') }}" 
                    placeholder="correo electrónico frecuente..." 
                    class="mt-1 block border-gray-300 w-full rounded-md"
                >
                @error('correo_electronico_frecuente')
                    <p 
                        class="mt-2 text-pink-600 text-sm">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <!-- Ocupación Padre -->
            <div class="col-span-4 md:col-span-2 lg:col-span-4">
                <label 
                    class="block"
                >   
                    Ocupación
                </label>

                <select 
                    name="ocupacion_id" 
                    id="ocupacion_id" 
                    class="mt-1 block border-gray-300 w-full rounded-md"
                >
                    @foreach($ocupacion as $o)
                        <option 
                            value="{{$o->id}}"
                            {{ old('ocupacion_id') == $o->id ? 'selected' : '' }}
                        >
                            {{$o->ocupacion}}
                        </option>
                    @endforeach
                </select>

                @error('ocupacion_id')
                    <p 
                        class="mt-2 text-pink-600 text-sm">
                        No puedes eligir la opción "--seleccionar--"
                    </p>
                @enderror
            </div>

            <!-- Ocupación otro -->
            <div class="col-span-4 md:col-span-2 lg:col-span-4">
                <label 
                    class="block"
                >   
                    Otra Ocupación
                </label>

                <input 
                    type="text" 
                    name="otra_ocupacion" 
                    id="otra_ocupacion" 
                    value="{{ old('otra_ocupacion') }}"
                    placeholder="Especifíque otra ocupación..." 
                    class="mt-1 block border-gray-300 w-full rounded-md"
                >

                @error('otra_ocupacion')
                    <p 
                        class="mt-2 text-pink-600 text-sm">
                        No puedes eligir la opción "--seleccionar--"
                    </p>
                @enderror
            </div>

            <!-- Trabaja para -->
            <div class="col-span-4 md:col-span-2 lg:col-span-4">
                <label 
                    class="block"
                >   
                    Trabaja para
                </label>

                <select 
                    name="trabaja_para" 
                    id="trabaja_para" 
                    class="mt-1 block border-gray-300 w-full rounded-md"
                >
                    @foreach($trabajaPara as $s)
                        <option 
                            value="{{$s->id}}"
                            {{ old('trabaja_para') == $s->id ? 'selected' : '' }}
                        >
                            {{$s->trabaja_para}}
                        </option>
                    @endforeach
                </select>

                @error('trabaja_para')
                    <p 
                        class="mt-2 text-pink-600 text-sm">
                        No puedes eligir la opción "--seleccionar--"
                    </p>
                @enderror
            </div>

            <!-- Nombre Empresa -->
            <div class="col-span-4 md:col-span-2 lg:col-span-4">
                <label 
                    class="block"
                >   
                    Nombre de la Empresa
                </label>

                <input 
                    type="text" 
                    name="nombre_empresa" 
                    id="nombre_empresa" 
                    value="{{ old('nombre_empresa') }}"
                    placeholder="Nombre de la empresa..." 
                    class="mt-1 block border-gray-300 w-full rounded-md"
                >

                @error('nombre_empresa')
                    <p 
                        class="mt-2 text-pink-600 text-sm">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <!-- Direccion Empresa -->
            <div class="col-span-4 md:col-span-2 lg:col-span-2">
                <label 
                    class="block"
                >   
                    Direccion Empresa
                </label>

                <input 
                    type="text" 
                    name="direccion_trabajo" 
                    id="direccion_trabajo" 
                    value="{{ old('direccion_trabajo') }}" 
                    placeholder="Dirección de la empresa..." 
                    class="mt-1 block border-gray-300 w-full rounded-md"
                >

                @error('direccion_trabajo')
                    <p 
                        class="mt-2 text-pink-600 text-sm">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <!-- Teléfono Trabajo -->
            <div class="col-span-4 md:col-span-2 lg:col-span-2">
                <label 
                    class="block"
                >   
                    Teléfono del Trabajo
                </label>

                <input 
                    type="text" 
                    name="telefono_trabajo" 
                    id="telefono_trabajo" 
                    value="{{ old('telefono_trabajo') }}" 
                    placeholder="Teléfono del trabajo..." 
                    class="mt-1 block border-gray-300 w-full rounded-md"
                >

                @error('telefono_trabajo')
                    <p 
                        class="mt-2 text-pink-600 text-sm">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="col-span-4 md:col-span-4 lg:col-span-4">

                <div><p>Situación Financiera</p></div>

                <div class="grid grid-cols-4 gap-4">
                    <div class="col-span-2 md:col-span-2 lg:col-span-2 p-5 bg-white mt-4">
                        <div class="text-center"><p><strong>Ingresos</strong></p></div>
                        <div class="mt-3">
                            <label 
                                class="block"
                            >   
                                Trabajo / Negocio
                            </label>

                            <input 
                                type="number" 
                                name="ingresos_egresos_padre[]" 
                                id="ingresos_egresos_padre"
                                placeholder="Digite un aproximado de sus ingresos..."
                                value="{{ old('ingresos_egresos_padre.0') }}"
                                class="mt-1 block border-gray-300 w-full rounded-md"
                            >
                            @error('ingresos_egresos_padre.0')
                                <p 
                                    class="mt-2 text-pink-600 text-sm">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="mt-3">
                            <label 
                                class="block"
                            >   
                                Otros ingresos
                            </label>

                            <input 
                                type="number" 
                                name="ingresos_egresos_padre[]" 
                                id="ingresos_egresos_padre"
                                placeholder="Digite un aproximado de sus ingresos..."
                                value="{{ old('ingresos_egresos_padre.1') }}"
                                class="mt-1 block border-gray-300 w-full rounded-md"
                            >
                            @error('ingresos_egresos_padre.1')
                                <p 
                                    class="mt-2 text-pink-600 text-sm">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-span-2 md:col-span-2 lg:col-span-2 p-5 bg-white mt-4">
                        <div class="text-center"><p><strong>Egresos</strong></p></div>
                        <div class="mt-3">
                            <label 
                                class="block"
                            >   
                                Trabajo / Negocio
                            </label>

                            <input 
                                type="number" 
                                name="ingresos_egresos_padre[]" 
                                id="ingresos_egresos_padre"
                                placeholder="Digite un aproximado de sus egresos..."
                                value="{{ old('ingresos_egresos_padre.2') }}"
                                class="mt-1 block border-gray-300 w-full rounded-md"
                            >
                            @error('ingresos_egresos_padre.2')
                                <p 
                                    class="mt-2 text-pink-600 text-sm">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="mt-3">
                            <label 
                                class="block"
                            >   
                                Otros Egresos
                            </label>

                            <input 
                                type="number" 
                                name="ingresos_egresos_padre[]" 
                                id="ingresos_egresos_padre"
                                placeholder="Digite un aproximado de sus egresos..."
                                value="{{ old('ingresos_egresos_padre.3') }}"
                                class="mt-1 block border-gray-300 w-full rounded-md"
                            >
                            @error('ingresos_egresos_padre.3')
                                <p 
                                    class="mt-2 text-pink-600 text-sm">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-span-4 md:col-span-4 lg:col-span-4">
                <p class="mb-4">Referencias Familiares</p>
                <div class="grid grid-cols-3 gap-4">
                    <div class="col-span-3 md:col-span-3 lg:col-span-1 p-5 bg-white">
                        <div class="mt-3">
                            <label 
                                class="block"
                            >   
                                Nombres
                            </label>

                            <input 
                                type="text" 
                                name="referencia_familiar[]" 
                                id="referencia_familiar"
                                placeholder="Nombres completos..."
                                value="{{ old('referencia_familiar.0') }}"
                                class="mt-1 block border-gray-300 w-full rounded-md"
                            >
                            @error('referencia_familiar.0')
                                <p 
                                    class="mt-2 text-pink-600 text-sm">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="mt-3">
                            <label 
                                class="block"
                            >   
                                Relación
                            </label>

                            <select 
                                type="select" 
                                name="referencia_familiar[]"
                                class="mt-1 block border-gray-300 w-full rounded-md"
                            >
                                @foreach ($relacionFamiliar as $relacion)
                                    <option 
                                        value="{{ $relacion->id }}"
                                        {{ old('referencia_familiar.1') == $relacion->id ? 'selected' : '' }}
                                    >

                                        {{ $relacion->relacion_familiar }}
                                    </option>
                                @endforeach
                            </select>

                            @error('referencia_familiar.1')
                                <p 
                                    class="mt-2 text-pink-600 text-sm">
                                    No puedes eligir la opción "--seleccionar--"
                                </p>
                            @enderror
                        </div>

                        <div class="mt-3">
                            <label 
                                class="block"
                            >   
                                Teléfono
                            </label>

                            <input 
                                type="text" 
                                name="referencia_familiar" 
                                id="referencia_familiar"
                                placeholder="Teléfono celular..."
                                value="{{ old('referencia_familiar.2') }}"
                                class="mt-1 block border-gray-300 w-full rounded-md"
                            >
                            @error('referencia_familiar.2')
                                <p 
                                    class="mt-2 text-pink-600 text-sm">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                    </div>

                    <div class="col-span-3 md:col-span-3 lg:col-span-1 p-5 bg-white">
                        <div class="mt-3">
                            <label 
                                class="block"
                            >   
                                Nombres
                            </label>

                            <input 
                                type="text" 
                                name="referencia_familiar[]" 
                                id="referencia_familiar"
                                placeholder="Nombres completos..."
                                value="{{ old('referencia_familiar.3') }}" 
                                class="mt-1 block border-gray-300 w-full rounded-md"
                            >
                            @error('referencia_familiar.3')
                                <p 
                                    class="mt-2 text-pink-600 text-sm">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="mt-3">
                            <label 
                                class="block"
                            >   
                                Relación
                            </label>

                            <select 
                                type="select" 
                                name="referencia_familiar[]"
                                class="mt-1 block border-gray-300 w-full rounded-md"
                            >
                                @foreach ($relacionFamiliar as $relacion)
                                    <option 
                                        value="{{ $relacion->id }}"
                                        {{ old('referencia_familiar.4') == $relacion->id ? 'selected' : '' }}
                                    >

                                        {{ $relacion->relacion_familiar }}
                                    </option>
                                @endforeach
                            </select>

                            @error('referencia_familiar.4')
                                <p 
                                    class="mt-2 text-pink-600 text-sm">
                                    No puedes eligir la opción "--seleccionar--"
                                </p>
                            @enderror
                        </div>

                        <div class="mt-3">
                            <label 
                                class="block"
                            >   
                                Teléfono
                            </label>

                            <input 
                                type="text" 
                                name="referencia_familiar[]" 
                                id="referencia_familiar"
                                placeholder="Teléfono celular..."
                                value="{{ old('referencia_familiar.5') }}" 
                                class="mt-1 block border-gray-300 w-full rounded-md"
                            >
                            @error('referencia_familiar.5')
                                <p 
                                    class="mt-2 text-pink-600 text-sm">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-span-3 md:col-span-3 lg:col-span-1 p-5 bg-white">
                        <div class="mt-3">
                            <label 
                                class="block"
                            >   
                                Nombres
                            </label>

                            <input 
                                type="text" 
                                name="referencia_familiar[]" 
                                id="referencia_familiar"
                                placeholder="Nombres completos..."
                                value="{{ old('referencia_familiar.6') }}" 
                                class="mt-1 block border-gray-300 w-full rounded-md"
                            >
                            @error('referencia_familiar.6')
                                <p 
                                    class="mt-2 text-pink-600 text-sm">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="mt-3">
                            <label 
                                class="block"
                            >   
                                Relación
                            </label>

                            <select 
                                type="select" 
                                name="referencia_familiar[]"
                                class="mt-1 block border-gray-300 w-full rounded-md"
                            >
                                @foreach ($relacionFamiliar as $relacion)
                                    <option 
                                        value="{{ $relacion->id }}"
                                        {{ old('referencia_familiar.7') == $relacion->id ? 'selected' : '' }}
                                    >

                                        {{ $relacion->relacion_familiar }}
                                    </option>
                                @endforeach
                            </select>

                            @error('referencia_familiar.7')
                                <p 
                                    class="mt-2 text-pink-600 text-sm">
                                    No puedes eligir la opción "--seleccionar--"
                                </p>
                            @enderror
                        </div>

                        <div class="mt-3">
                            <label 
                                class="block"
                            >   
                                Teléfono
                            </label>

                            <input 
                                type="text" 
                                name="referencia_familiar[]" 
                                id="referencia_familiar"
                                placeholder="Teléfono celular..."
                                value="{{ old('referencia_familiar.8') }}" 
                                class="mt-1 block border-gray-300 w-full rounded-md"
                            >
                            @error('referencia_familiar.8')
                                <p 
                                    class="mt-2 text-pink-600 text-sm">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-span-4">
                <div class="text-center">
                    <button class="rounded-lg bg-red-500 hover:bg-red-400 text-white font-bold py-3 px-4 border-b-4 border-red-700 hover:border-red-500">
                        <i class="fa-regular fa-circle-left"></i> Regresar
                    </button>
                    <button class="rounded-lg bg-gray-500 hover:bg-gray-400 text-white font-bold py-3 px-4 border-b-4 border-gray-700 hover:border-gray-500">
                        Continuar <i class="fa-regular fa-circle-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </form>
</x-app-layout>