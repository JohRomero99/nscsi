<x-app-layout>
                <x-slot name="header">
                    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        {{ __('Unidad Educativa Nuestra Señora del Carmen') }}
                    </h2>
                </x-slot>

                <div class="flex justify-center">
                    <div class="bg-white shadow-md rounded-md overflow-hidden border border-gray-200 w-full m-5">
                        <!-- Header -->
                        <div class="bg-gray-200 text-gray-500 px-5 py-3 border-b">
                            <!-- Wizard -->
                            <x-setupFichas></x-setupFichas>
                        </div>

                        <!-- Body -->
                        <div class="p-5 space-y-2 text-gray-700">
                            <form action="{{ route('dashboard.ficha.padre.store', ['id' => $estudianteId, 'genero' => $genero]) }}" method="POST"  enctype="multipart/form-data">
                                @csrf

                                <div class="grid grid-cols-4 gap-4">

                                    <!-- Titulo -->
                                    <div class="col-span-4 flex justify-center">
                                        <div class="">
                                            <h1 class="text-4xl text-center font-extrabold text-gray-700 mt-7">
                                                Ficha del Padre
                                            </h1>
                                            <p class="mb-3 text-center text-gray-600 dark:text-gray-600 mt-2 text-1xl">
                                                Comepleta cada uno de los campos con información verídica.
                                            </p>
                                        </div>
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
                                            Apellido Paterno
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
                                            Apellido Materno
                                        </label>

                                        <input 
                                            type="text" 
                                            name="apellido_materno_padre" 
                                            id="apellido_materno_padre" 
                                            value="{{ old('apellido_materno_padre') }}"
                                            placeholder="Sanchez..." 
                                            class="mt-1 block border-gray-300 w-full rounded-md"
                                        >
                                        @error('apellido_materno_padre')
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
                                                No puedes eligir la opción --seleccionar--
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
                                                No puedes eligir la opción --seleccionar--
                                            </p>
                                        @enderror
                                    </div>


                                    <!-- Teléfono domicilio padres -->
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
                                            placeholder="042345678..." 
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
                                            placeholder="0991035787..." 
                                            class="mt-1 block border-gray-300 w-full rounded-md"
                                        >
                                        @error('telefono_celular')
                                            <p 
                                                class="mt-2 text-pink-600 text-sm">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>

                                    <!-- Direccion Domiciliaria -->
                                    <div class="col-span-4 md:col-span-2 lg:col-span-1">
                                        <label 
                                            class="block"
                                        >   
                                            Direccion Domiciliaria
                                        </label>

                                        <input 
                                            type="text" 
                                            name="direccion_domiciliaria" 
                                            id="direccion_domiciliaria" 
                                            value="{{ old('direccion_domiciliaria') }}" 
                                            placeholder="Dirección de la empresa..." 
                                            class="mt-1 block border-gray-300 w-full rounded-md"
                                        >

                                        @error('direccion_domiciliaria')
                                            <p 
                                                class="mt-2 text-pink-600 text-sm">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>

                                    <!-- Correo Electrónico frecuente padre -->
                                    <div class="col-span-4 md:col-span-1 lg:col-span-4">
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
                                                    {{$o->trabajo}}
                                                </option>
                                            @endforeach
                                        </select>

                                        @error('ocupacion_id')
                                            <p 
                                                class="mt-2 text-pink-600 text-sm">
                                                No puedes eligir la opción --seleccionar--
                                            </p>
                                        @enderror
                                    </div>

                                    <!-- Ocupación otro -->
                                    <div class="col-span-4 md:col-span-2 lg:col-span-4" id="contenedor_otra_ocupacion" style="display:none;">
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
                                                {{ $message }}
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
                                                No puedes eligir la opción --seleccionar--
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
                                                        name="ingresos_egresos_padre[0]" 
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
                                                        name="ingresos_egresos_padre[1]" 
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
                                                        name="ingresos_egresos_padre[2]" 
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
                                                        name="ingresos_egresos_padre[3]" 
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

                                    <!-- Referencias familiares -->
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
                                                        name="referencia_familiar[0]" 
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
                                                        name="referencia_familiar[1]"
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
                                                            No puedes eligir la opción --seleccionar--
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
                                                        name="referencia_familiar[2]" 
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
                                                        name="referencia_familiar[3]" 
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
                                                        name="referencia_familiar[4]"
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
                                                        name="referencia_familiar[5]" 
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
                                                        name="referencia_familiar[6]" 
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
                                                        name="referencia_familiar[7]"
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
                                                            No puedes eligir la opción --seleccionar--
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
                                                        name="referencia_familiar[8]" 
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

                                    <!-- Copia del cédula del estudiante Parte Frontal -->
                                    <div class="col-span-4">
                                        <label 
                                            class="block"
                                        >   
                                            Copia del Cédula del Estudiante parte Frontal.
                                        </label>
                                        <p 
                                            class="mt-2 text-pink-600 text-sm">
                                            Formato PDF
                                        </p>
                                        <input 
                                            name="scan_cedula_front"
                                            type="file"
                                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 archivo"
                                            accept="application/pdf"
                                        >     
                                        <div class="w-full mt-2 bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                            <div class="bg-blue-600 h-2.5 rounded-full barra" style="width: 0%"></div>
                                        </div>

                                        @error('scan_cedula_front')
                                            <p 
                                                class="mt-2 text-pink-600 text-sm">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>

                                    <!-- Copia del cédula del estudiante Parte trasera -->
                                    <div class="col-span-4">
                                        <label 
                                            class="block"
                                        >   
                                            Copia del Cédula del Estudiante parte Trasera.
                                        </label>
                                        <p 
                                            class="mt-2 text-pink-600 text-sm">
                                            Formato PDF
                                        </p>
                                        <input 
                                            name="scan_cedula_back"
                                            type="file"
                                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 archivo"
                                            accept="application/pdf"
                                        >     
                                        <div class="w-full mt-2 bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                            <div class="bg-blue-600 h-2.5 rounded-full barra" style="width: 0%"></div>
                                        </div>

                                        @error('copia_cedula_estudiante')
                                            <p 
                                                class="mt-2 text-pink-600 text-sm">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>

                                    <div class="col-span-4">
                                        <div class="text-center">
                                            <!-- <button class="rounded-lg bg-red-500 hover:bg-red-400 text-white font-bold py-3 px-4 border-b-4 border-red-700 hover:border-red-500">
                                                <i class="fa-regular fa-circle-left"></i> Regresar
                                            </button> -->
                                            <button class="rounded-sms bg-gray-500 hover:bg-gray-400 text-white font-bold py-3 px-4 border-b-4 border-gray-700 hover:border-gray-500">
                                                Continuar <i class="fa-regular fa-circle-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

    @if($errors->any())
        <script>
            Swal.fire({
                title: "Error",
                text: "Revisa los campos obligatorios",
                icon: "error"
            });
        </script>
    @endif

    <!-- Buscar en tiempo real cédula representantes -->
    @push('scripts')
        <script>
            document.addEventListener("DOMContentLoaded",function(){
                const cedulaInput = document.getElementById("cedula_padre");
                const primerNombreInput = document.getElementById("primer_nombre_padre");
                const segundoNombreInput = document.getElementById("segundo_nombre_padre");
                const apellidoPaternoInput = document.getElementById("apellido_paterno_padre");
                const apellidoMaternoInput = document.getElementById("apellido_materno_padre");

                cedulaInput.addEventListener("input",function(){

                    if( cedulaInput.value.length === 10){

                        // Realizamos una petición para buscar la cédula en la base de datos.
                        fetch(`{{ route('buscar.cedula.representante') }}?cedula=${cedulaInput.value}`) 
                        .then(response => {
                            if (!response.ok) {
                                throw new Error("No se encontró la cédula");
                            }
                            return response.json(); // Convertimos la respuesta en JSON
                        })
                        .then( data =>{
                            primerNombreInput.value = data.primer_nombre;
                            segundoNombreInput.value = data.segundo_nombre;
                            apellidoPaternoInput.value = data.apellido_paterno;
                            apellidoMaternoInput.value = data.apellido_materno;
                                })
                        .catch(error=>{
                            primerNombreInput.value = "";
                            segundoNombreInput.value = "";
                            apellidoPaternoInput.value = "";
                            apellidoMaternoInput.value = "";
                        })

                    }

                });

            })
        </script>   
    @endpush

    @push('scripts')
        <script>
            var contenedor_otra_ocupacion = document.getElementById('contenedor_otra_ocupacion');
            var ocupacion_id = document.getElementById('ocupacion_id');22

            contenedor_otra_ocupacion.addEventListener('change', function(){
                if (this.value === '1') {
                    contenedor_otra_ocupacion.style.display = 'block';
                } else {
                    contenedor_otra_ocupacion.style.display = 'nones';
                }
            });
            
        </script>
    @endpush
</x-app-layout>