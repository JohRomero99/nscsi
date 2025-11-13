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
                            <form action="{{ route('dashboard.ficha.estudiante.store') }}" method="POST" id="formulario" enctype="multipart/form-data">
                                @csrf
                                <div class="grid grid-cols-4 gap-4">

                                    <!-- Titulo -->
                                    <div class="col-span-4 flex justify-center">
                                        <div class="">
                                            <h1 class="text-4xl text-center font-extrabold text-gray-700 mt-7">
                                                Ficha del Estudiante
                                            </h1>
                                            <p class="mb-3 text-center text-gray-600 dark:text-gray-600 mt-2 text-1xl">
                                                Comepleta cada uno de los campos con información verídica.
                                            </p>
                                        </div>
                                    </div>

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
                                            value = "{{ $estudiante->persona->cedula }}" 
                                            class="mt-1 block border-gray-300 w-full rounded-md"
                                        >
                                        @error('cedula')
                                            <p 
                                                class="mt-2 text-pink-600 text-sm">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>


                                    <!-- Primer nombre Estudiante -->
                                    <div class="col-span-4 md:col-span-2 lg:col-span-1">
                                        <label 
                                            class="block"
                                        >   
                                            Primer Nombre
                                        </label>

                                        <input 
                                            type="text" 
                                            name="primer_nombre" 
                                            id="primer_nombre" 
                                            value = "{{ $estudiante->persona->primer_nombre }}"  
                                            placeholder="John..." 
                                            class="mt-1 block border-gray-300 w-full rounded-md"
                                        >
                                        @error('primer_nombre')
                                            <p 
                                                class="mt-2 text-pink-600 text-sm">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>

                                    <!-- Segundo nombre Estudiante -->
                                    <div class="col-span-4 md:col-span-2 lg:col-span-1">
                                        <label 
                                            class="block"
                                        >   
                                            Segundo Nombre
                                        </label>

                                        <input 
                                            type="text" 
                                            name="segundo_nombre" 
                                            id="segundo_nombre" 
                                            value = "{{ $estudiante->persona->segundo_nombre }}"  
                                            placeholder="Jairo..." 
                                            class="mt-1 block border-gray-300 w-full rounded-md"
                                        >
                                        @error('segundo_nombre')
                                            <p 
                                                class="mt-2 text-pink-600 text-sm">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>

                                    <!-- Apellido Paterno Estudiante -->
                                    <div class="col-span-4 md:col-span-2 lg:col-span-1">
                                        <label 
                                            class="block"
                                        >   
                                            Apellido Paterno
                                        </label>

                                        <input 
                                            type="text" 
                                            name="apellido_paterno"
                                            id="apellido_paterno"
                                            value = "{{ $estudiante->persona->apellido_paterno }}"  
                                            placeholder="Romero..." 
                                            class="mt-1 block border-gray-300 w-full rounded-md"
                                        >
                                        @error('apellido_paterno')
                                            <p 
                                                class="mt-2 text-pink-600 text-sm">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>

                                    <!-- Apellido Materno Estudiante -->
                                    <div class="col-span-4 md:col-span-2 lg:col-span-1">
                                        <label 
                                            class="block"
                                        >   
                                            Apellido Materno
                                        </label>

                                        <input 
                                            type="text" 
                                            name="apellido_materno" 
                                            id="apellido_materno" 
                                            value = "{{ $estudiante->persona->apellido_materno }}"  
                                            placeholder="Sánchez..." 
                                            class="mt-1 block border-gray-300 w-full rounded-md"
                                        >
                                        @error('apellido_materno')
                                            <p 
                                                class="mt-2 text-pink-600 text-sm">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>

                                    <!-- Nacionalidad Estudiante -->
                                    <div class="col-span-4 md:col-span-4 lg:col-span-4">
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

                                    <!-- Sexo Estudiante -->
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

                                    <!-- Fecha nacimiento Estudiante -->
                                    <div class="col-span-4 md:col-span-1 lg:col-span-1">
                                        <label 
                                            class="block"
                                        >   
                                            Fecha de nacimiento
                                        </label>

                                        <input 
                                            type="date" 
                                            name="fecha_nacimiento" 
                                            id="fecha_nacimiento" 
                                            value="{{ old('fecha_nacimiento') }}" 
                                            class="mt-1 block border-gray-300 w-full rounded-md"
                                        >
                                        @error('fecha_nacimiento')
                                            <p 
                                                class="mt-2 text-pink-600 text-sm">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>

                                    <!-- Repitiendo año lectivo -->
                                    <div class="col-span-4 md:col-span-2 lg:col-span-2">
                                        <label 
                                            class="block"
                                        >   
                                            ¿Repite año?
                                        </label>

                                        <select
                                            id="repite_ano" 
                                            name="repite_ano"
                                            class="mt-1 block border-gray-300 w-full rounded-md"
                                        >
                                            <option value="--seleccionar--" {{ old('repite_ano') == '--seleccionar--' ? 'selected' : '' }}>
                                                --seleccionar--
                                            </option>
                                            <option value="Si" {{ old('repite_ano') == 'Si' ? 'selected' : '' }}>
                                                Si
                                            </option>
                                            <option value="No" {{ old('repite_ano') == 'No' ? 'selected' : '' }}>
                                                No
                                            </option>
                                        </select>

                                        @error('repite_ano')
                                            <p 
                                                class="mt-2 text-pink-600 text-sm">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>

                                    <!-- Año básica que postula -->
                                    <div class="col-span-4 md:col-span-2 lg:col-span-2">
                                        <label 
                                            class="block"
                                        >   
                                            Año de Básica que postula
                                        </label>


                                        <select 
                                            type="select" 
                                            name="anio_academico_id"
                                            class="mt-1 block border-gray-300 w-full rounded-md anio_academico"
                                        >
                                            @foreach ($anio_academico as $anio)
                                                <option 
                                                    value="{{ $anio->id }}"
                                                    {{ old('anio_academico_id') == $anio->id ? 'selected' : '' }}
                                                >

                                                    {{ $anio->anio_basica }}
                                                </option>
                                            @endforeach
                                        </select>

                                        @error('anio_academico_id')
                                            <p 
                                                class="mt-2 text-pink-600 text-sm">
                                                No puedes eligir la opción "--seleccionar--"
                                            </p>
                                        @enderror
                                    </div>

                                    <!-- Dirección domiciliaria -->
                                    <div class="col-span-4">
                                        <label 
                                            class="block"
                                        >   
                                            Dirección domiciliaria
                                        </label>

                                        <input 
                                            type="text" 
                                            name="direccion_domiciliaria" 
                                            id="direccion_domiciliaria" 
                                            value="{{ old('direccion_domiciliaria') }}" 
                                            placeholder="Dirección domiciliaria..." 
                                            class="mt-1 block border-gray-300 w-full rounded-md"
                                        >
                                        @error('direccion_domiciliaria')
                                            <p 
                                                class="mt-2 text-pink-600 text-sm">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>

                                    <!-- Tipo de vivienda -->
                                    <div class="col-span-4 md:col-span-2 lg:col-span-2">
                                        <label 
                                            class="block"
                                        >   
                                            ¿Cual es el tipo de vivienda del estudiante?
                                        </label>

                                        <select 
                                            type="select" 
                                            name="tipo_vivienda"
                                            class="mt-1 block border-gray-300 w-full rounded-md"
                                        >
                                            @foreach ($tipoVivienda as $tipoVivienda)
                                                <option 
                                                    value="{{ $tipoVivienda->id }}"
                                                    {{ old('tipo_vivienda') == $tipoVivienda->id ? 'selected' : '' }}
                                                >

                                                    {{ $tipoVivienda->material_construccion }}
                                                </option>
                                            @endforeach
                                        </select>

                                        @error('tipo_vivienda')
                                            <p 
                                                class="mt-2 text-pink-600 text-sm">
                                                No puedes eligir la opción "--seleccionar--"
                                            </p>
                                        @enderror
                                    </div>

                                    <!-- Años que vive en el domicilio -->
                                    <div class="col-span-4 md:col-span-2 lg:col-span-2">
                                        <label 
                                            class="block"
                                        >   
                                            ¿Cuantos años tiene en el domicilio?
                                        </label>

                                        <select 
                                            type="select" 
                                            name="anos_domicilio"
                                            class="mt-1 block border-gray-300 w-full rounded-md"
                                        >
                                            <option value="--seleccionar--" {{ old('anos_domicilio') == '--seleccionar--' ? 'selected' : '' }}>
                                                --seleccionar--
                                            </option>
                                            <option value="Días" {{ old('anos_domicilio') == 'Días' ? 'selected' : '' }}>
                                                Días
                                            </option>
                                            <option value="Meses" {{ old('anos_domicilio') == 'Meses' ? 'selected' : '' }}>
                                                Meses
                                            </option>
                                            <option value="1año a 3años" {{ old('anos_domicilio') == '1año a 3años' ? 'selected' : '' }}>
                                                1año a 3años
                                            </option>
                                            <option value="3años a 6años" {{ old('anos_domicilio') == '3años a 6años' ? 'selected' : '' }}>
                                                3años a 6años
                                            </option>
                                            <option value="6años o mas" {{ old('anos_domicilio') == '6años o mas' ? 'selected' : '' }}>
                                                6años o mas
                                            </option>
                                        </select>

                                        @error('anos_domicilio')
                                            <p 
                                                class="mt-2 text-pink-600 text-sm">
                                                No puedes eligir la opción "--seleccionar--"
                                            </p>
                                        @enderror
                                    </div>

                                    <!-- ¿Con quien vive el estudiante? -->
                                    <div class="col-span-4">
                                        <label 
                                            class="block"
                                        >   
                                            ¿Con quién vive el estudiante?
                                        </label>

                                        <select 
                                            type="select" 
                                            name="conviviente_estudiante_id"
                                            class="mt-1 block border-gray-300 w-full rounded-md"
                                        >
                                            @foreach ($convivienteEstudiante as $convivienteEstudiante)
                                                <option 
                                                    value="{{ $convivienteEstudiante->id }}"
                                                    {{ old('conviviente_estudiante_id') == $convivienteEstudiante->id ? 'selected' : '' }}
                                                >

                                                    {{ $convivienteEstudiante->relacion_estudiante }}
                                                </option>
                                            @endforeach
                                        </select>

                                        @error('conviviente_estudiante_id')
                                            <p 
                                                class="mt-2 text-pink-600 text-sm">
                                                No puedes eligir la opción "--seleccionar--"
                                            </p>
                                        @enderror
                                    </div>

                                    <!-- Servicio escolar -->
                                    <div class="col-span-4">
                                        <label 
                                            class="block"
                                        >   
                                            Transporte Escolar
                                        </label>

                                        <select 
                                            type="select"
                                            name="servicio_transporte"
                                            id="servicio_transporte"
                                            class="mt-1 block border-gray-300 w-full rounded-md"
                                        >
                                            @foreach ($servicioTransporte as $transporte)
                                                <option 
                                                    value="{{ $transporte->id }}"
                                                    {{ old('servicio_transporte') == $transporte->id ? 'selected' : '' }}
                                                >

                                                    {{ $transporte->metodo_transporte }}
                                                </option>
                                            @endforeach
                                        </select>

                                        @error('servicioTransporte')
                                            <p 
                                                class="mt-2 text-pink-600 text-sm">
                                                No puedes eligir la opción "--seleccionar--"
                                            </p>
                                        @enderror
                                    </div>

                                    <!-- Ruta -->
                                    <div class="col-span-4" id="ruta" style="display: none">
                                        <label 
                                            class="block"
                                        >   
                                            Ruta
                                        </label>

                                        <select 
                                            type="select"
                                            name="ruta"
                                            class="mt-1 block border-gray-300 w-full rounded-md"
                                        >
                                            @foreach ($ruta as $ruta)
                                                <option 
                                                    value="{{ $ruta->id }}"
                                                    {{ old('ruta') == $ruta->id ? 'selected' : '' }}
                                                >

                                                    {{ $ruta->rutas_escolares }}
                                                </option>
                                            @endforeach
                                        </select>

                                        @error('ruta')
                                            <p 
                                                class="mt-2 text-pink-600 text-sm">
                                                No puedes eligir la opción "--seleccionar--"
                                            </p>
                                        @enderror
                                    </div>

                                    <!-- Boletin del ultimo año anterior -->
                                    <div class="col-span-4">
                                        <label 
                                            class="block"
                                        >   
                                            Suba el último boletín de calificación de la Institución Anterior
                                        </label>
                                        <p 
                                            class="mt-2 text-pink-600 text-sm">
                                            Formato PDF
                                        </p>
                                        <input 
                                            name="boletin_ultimo_ano"
                                            type="file"
                                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 archivo"
                                            accept="application/pdf"
                                        >
                                        <div class="w-full mt-2 bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                            <div class="bg-blue-600 h-2.5 rounded-full barra" style="width: 0%"></div>
                                        </div>

                                        @error('boletin_ultimo_ano')
                                            <p 
                                                class="mt-2 text-pink-600 text-sm">
                                                {{ $message }}
                                            </p>
                                        @enderror

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
                                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer  dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 archivo"
                                            accept="application/pdf"
                                        >     
                                        <div class="w-full mt-2 bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                            <div class="bg-blue-600 h-2.5 rounded-full barra" style="width: 0%"></div>
                                        </div>

                                        @error('scan_cedula_back')
                                            <p 
                                                class="mt-2 text-pink-600 text-sm">
                                                {{ $message }}
                                            </p>
                                        @enderror
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
                                                            {{ $message }}
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
                                                        value="{{ old('referencia_familiar.4') }}" 
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
                                                            {{ $message }}
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
                                                        value="{{ old('referencia_familiar.7') }}" 
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

                                    <div class="col-span-4">
                                        <div class="text-center">
                                            <button class="bg-[#89462a] hover:bg-[#a35a39] text-white font-bold py-3 px-4 border-b-4 border-[#5c301d] hover:border-[#5c301d]">
                                                <i class="fa-regular fa-circle-left"></i> Regresar
                                            </button>
                                            <button class="bg-[#89462a] hover:bg-[#a35a39] text-white font-bold py-3 px-4 border-b-4 border-[#5c301d] hover:border-[#5c301d]">
                                                Continuar <i class="fa-regular fa-circle-right"></i>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>

    <!-- Me permite realizar la animación de carga de un documento PDF -->
    @push('scripts')
        <script>
            var archivoInput = document.querySelectorAll(".archivo");
            var barraDiv = document.querySelectorAll(".barra");

            for( let i = 0; i < archivoInput.length; i++ ){

                archivoInput[i].addEventListener('change', function () {

                    const archivo = this.files[0];
                    if (!archivo) return;

                    const formData = new FormData();
                    formData.append('archivo', archivo);

                    const xhr = new XMLHttpRequest();

                    xhr.upload.addEventListener('progress', function (event) {
                        if (event.lengthComputable) {
                            const porcentaje = (event.loaded / event.total) * 100;
                            barraDiv[i].style.width = porcentaje + "%";
                            console.log("Subido: " + porcentaje.toFixed(2) + "%");
                        }
                    });

                    xhr.open('POST', '/subir.php'); // Cambia esto por tu endpoint real
                    xhr.send(formData);

                });

            }
        </script>
    @endpush

    <!-- Permite ocultar o mostrar el select "Ruta" -->
    @push('scripts')
        <script>
            var servicio_transporte = document.getElementById('servicio_transporte');
            var ruta = document.getElementById('ruta');

            servicio_transporte.addEventListener('change', function() {
                if (this.value === "1" || this.value === "2" || this.value === "3") {
                    // Si está en "--seleccionar--", ocultamos el select "Ruta".
                    ruta.style.display = 'none';
                } else {
                    // Si selecciona "Ruta" se muestra el select ruta.s
                    ruta.style.display = 'block';
                }
            });
        </script>
    @endpush
</x-app-layout>
