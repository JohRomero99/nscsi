<div>
    <header class="shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Unidad Educativa Nuestra Señora del Carmen
            </h2>
        </div>
    </header>

    <div class="flex justify-center">
        <div class="bg-white shadow-md rounded-md overflow-hidden border border-gray-200 w-full m-5">
            
            <!-- Header -->
            <div class="bg-gray-200 text-gray-500 px-5 py-3 border-b">
                <!-- Wizard -->
                <x-setupFichas></x-setupFichas>
            </div>

            <form wire:submit.prevent="save" class="p-5 space-y-2 text-gray-700">
                @csrf
                <div class="grid grid-cols-4 gap-4">
                    <!-- Titulo -->
                    <div class="col-span-4 flex justify-center">
                        <div class="">
                            <h1 class="text-4xl text-center font-extrabold text-gray-700 mt-7">
                                Ficha Médica del Estudiante
                            </h1>
                            <p class="mb-3 text-center text-gray-600 dark:text-gray-600 mt-2 text-1xl">
                                Comepleta cada uno de los campos con información verídica.
                            </p>
                        </div>
                    </div>

                    <!-- Cédula del padre o DNI -->
                    <div class="col-span-4 md:col-span-4 lg:col-span-4 opacity-75">
                        <label 
                            class="block font-medium"
                        >   
                            Cédula
                        </label>

                        <input 
                            type="text" 
                            wire:model.live="cedula"
                            class="mt-1 block border-gray-300 w-full rounded-md"
                            disabled
                        >
                    </div>

                    <!-- Primer nombre estudiante -->
                    <div class="col-span-4 md:col-span-2 lg:col-span-1 opacity-75">
                        <label 
                            class="block font-medium"
                        >   
                            Primero Nombre
                        </label>

                        <input 
                            type="text" 
                            wire:model.defer="primer_nombre"
                            class="mt-1 block border-gray-300 w-full rounded-md"
                            disabled
                        >
                    </div>

                    <!-- Segundo nombre estudiante -->
                    <div class="col-span-4 md:col-span-2 lg:col-span-1 opacity-75">
                        <label 
                            class="block font-medium"
                        >   
                            Segundo Nombre
                        </label>

                        <input 
                            type="text"
                            wire:model.defer="segundo_nombre" 
                            class="mt-1 block border-gray-300 w-full rounded-md"
                            disabled
                        >
                    </div>

                    <!-- apellido paterno estudiante -->
                    <div class="col-span-4 md:col-span-2 lg:col-span-1 opacity-75">
                        <label 
                            class="block font-medium"
                        >   
                            Apellido paterno
                        </label>

                        <input 
                            type="text" 
                            wire:model.defer="apellido_paterno"
                            class="mt-1 block border-gray-300 w-full rounded-md"
                            disabled
                        >
                    </div>

                    <!-- apellido materno estudiante -->
                    <div class="col-span-4 md:col-span-2 lg:col-span-1 opacity-75">
                        <label 
                            class="block font-medium"
                        >   
                            Apellido materno
                        </label>

                        <input 
                            type="text" 
                            wire:model.defer="apellido_materno"
                            class="mt-1 block border-gray-300 w-full rounded-md"
                            disabled
                        >
                    </div>

                    <!-- peso estudiante -->
                    <div class="col-span-4 md:col-span-2 lg:col-span-2">
                        <label 
                            class="block font-medium"
                        >   
                            Peso del niño (kg)
                        </label>

                        <input 
                            type="number"
                            wire:model.defer="peso"
                            step="0.1"
                            placeholder="Digite el peso..." 
                            class="mt-1 block border-gray-300 w-full rounded-md"
                        >

                        @error("peso")
                            <p 
                                class="mt-2 text-pink-600 text-sm">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Estatura estudiante -->
                    <div class="col-span-4 md:col-span-2 lg:col-span-2">
                        <label 
                            class="block font-medium"
                        >   
                            Estatura (cm)
                        </label>

                        <input 
                            type="number"
                            wire:model.defer="estatura" 
                            step="0.01"
                            placeholder="Digite la estatura (cm)"
                            class="mt-1 block border-gray-300 w-full rounded-md"
                        >
                        @error("estatura")
                            <p 
                                class="mt-2 text-pink-600 text-sm">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- discapacidad si o no -->
                    <div class="col-span-4 md:col-span-4 lg:col-span-4">
                        <label 
                            class="block font-medium"
                        >   
                            ¿Es estudiante tiene algún tipo de discapacidad?
                        </label>

                        <select 
                            wire:model.live="discapacidad_si_no"
                            class="mt-1 block border-gray-300 w-full rounded-md"
                        >
                            <option value="--seleccionar--">--seleccionar--</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>

                        @error("discapacidad_si_no")
                            <p 
                                class="mt-2 text-pink-600 text-sm">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- discapacidad estudiante -->
                    @if($discapacidad_si_no === 'Si')
                        <div class="col-span-4 md:col-span-4 lg:col-span-4">
                            @foreach( $discapacidades as $index => $d )
                                <div class="grid grid-cols-4 gap-4 border-gray-600 p-7 shadow-lg">
                                    <div class="col-span-4 md:col-span-4 lg:col-span-4">
                                        <hr class="w-48 h-1 mx-auto my-4 bg-gray-200 rounded-sm md:my-4">
                                    </div>

                                    <!-- Tipo de discapacidad -->
                                    <div class="col-span-2 md:col-span-4 lg:col-span-2">
                                        <label 
                                            class="block font-medium"
                                        >   
                                            ¿Cuál es el tipo de discapacidad que tiene el estudiante?
                                        </label>

                                        <select 
                                            wire:model.defer="discapacidades.{{ $index }}.tipo_discapacidad"
                                            class="mt-1 block border-gray-300 w-full rounded-md"
                                        >
                                            <option value="0">--seleccionar--</option>

                                            @foreach($tiposDiscapacidad as $t)
                                                <option 
                                                    value="{{$t->id}}"
                                                    {{ old('tipo_discapacidad') == $t->id ? 'selected' : '' }}    
                                                >
                                                    {{$t->tipos_discapacidad}}
                                                </option>
                                            @endforeach
                                        </select>

                                        @error("discapacidades.$index.tipo_discapacidad")
                                            <p 
                                                class="mt-2 text-pink-600 text-sm">
                                                No puedes eligir la opción "--seleccionar--"
                                            </p>
                                        @enderror
                                    </div>

                                    <!-- Porcentaje de discapacidad -->
                                    <div class="col-span-4 md:col-span-4 lg:col-span-2">
                                        <label 
                                            class="block font-medium"
                                        >   
                                            Porcentaje de discapacidad
                                        </label>

                                        <select 
                                            wire:model.defer="discapacidades.{{ $index }}.procentaje_discapacidad"
                                            class="mt-1 block border-gray-300 w-full rounded-md"
                                        >
                                            <option value="0">--seleccionar--</option>

                                            @foreach($porcentaje as $p)
                                                <option 
                                                    value="{{$p->id}}"
                                                    {{ old('procentaje_discapacidad') == $p->id ? 'selected' : '' }}    
                                                >
                                                    {{ $p->porcentaje }}
                                                </option>
                                            @endforeach
                                        </select>

                                        @error("discapacidades.$index.procentaje_discapacidad")
                                            <p 
                                                class="mt-2 text-pink-600 text-sm">
                                                No puedes eligir la opción "--seleccionar--"
                                            </p>
                                        @enderror
                                    </div>

                                    <!-- detalle sobre el tipo de discapacidad -->
                                    <div class="col-span-4 md:col-span-4 lg:col-span-4">
                                        <label 
                                            class="block font-medium"
                                        >   
                                            Mas detalle sobre el tipo de discapacidad del estudiante
                                        </label>

                                        <textarea 
                                            wire:model.defer="discapacidades.{{ $index }}.detalle_discapacidad"
                                            class="mt-1 block border-gray-300 w-full rounded-md"
                                        >
                                        </textarea>

                                        @error("discapacidades.$index.detalle_discapacidad")
                                            <p class="mt-2 text-pink-600 text-sm">
                                                Este campo no pueste estar vacío.
                                            </p>
                                        @enderror
                                    </div>

                                    <div class="col-span-4 md:col-span-4 lg:col-span-4">
                                        <div class="text-right">
                                            <button
                                                type="button"
                                                wire:click="quitarDiscapacidad({{ $index }})"
                                                class="bg-[#89462a] hover:bg-[#a35a39] text-white font-bold py-3 px-4 border-b-4 border-[#5c301d] hover:border-[#5c301d]"
                                                >
                                                Eliminar <i class="fa-solid fa-trash-can"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="text-center mt-7">
                                <button
                                    type="button"
                                    wire:click="agregarDiscapacidad"
                                    class="bg-[#89462a] hover:bg-[#a35a39] text-white font-bold py-3 px-4 border-b-4 border-[#5c301d] hover:border-[#5c301d]"
                                    >
                                    Agregar nueva discapacidad
                                </button>
                            </div>
                        </div>
                    @endif
                    
                    <!-- Si o No - Medicación estudiante -->
                    <div class="col-span-4 md:col-span-4 lg:col-span-4">
                        <label 
                            class="block font-medium"
                        >   
                            ¿Es estudiante está bajo algún tipo de medicación?
                        </label>

                        <select 
                            wire:model.live="medicacion_si_no"
                            class="mt-1 block border-gray-300 w-full rounded-md"
                        >
                            <option value="--seleccionar--">--seleccionar--</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>

                        @error('medicacion_si_no')
                            <p 
                                class="mt-2 text-pink-600 text-sm">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    @if($medicacion_si_no === "Si")
                        <!-- Medicamentos de forma permanente -->
                        <div class="col-span-4 md:col-span-4 lg:col-span-4">
                            @foreach( $medicacion as $index => $d )
                                <div class="grid grid-cols-4 gap-4 border-gray-600 p-7 shadow-lg">
                                    <div class="col-span-4 md:col-span-4 lg:col-span-4">
                                        <hr class="w-48 h-1 mx-auto my-4 bg-gray-200 rounded-sm md:my-4">
                                    </div>
                                                            
                                    <!-- Medicamento de forma permanente -->
                                    <div class="col-span-4 md:col-span-4 lg:col-span-4 mt-2">
                                        <label 
                                            class="block font-medium"
                                        >   
                                            ¿Toma medicamentos de forma permanente?
                                        </label>

                                        <select 
                                            wire:model.defer="medicacion.{{ $index }}.medicamento_forma_permanente"
                                            class="mt-1 block border-gray-300 w-full rounded-md"
                                        >
                                            <option value="0">--seleccionar--</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                        </select>

                                        @error("medicacion.$index.medicamento_forma_permanente")
                                            <p 
                                                class="mt-2 text-pink-600 text-sm">
                                                No puedes eligir la opción "--seleccionar--"
                                            </p>
                                        @enderror
                                    </div>

                                    <!-- ¿Cual es el nombre del medicamento? -->
                                    <div class="col-span-4 md:col-span-4 lg:col-span-4 mt-2">
                                        <label 
                                            class="block font-medium"
                                        >   
                                            ¿Cuál es el nombre del medicamento?
                                        </label>

                                        <input 
                                            type="text"
                                            wire:model.defer="medicacion.{{ $index }}.nombre_medicamento"
                                            placeholder="Digite el nombre del medicamento.."
                                            class="mt-1 block border-gray-300 w-full rounded-md"
                                        >

                                        @error("medicacion.$index.nombre_medicamento")
                                            <p 
                                                class="mt-2 text-pink-600 text-sm">
                                                Este campo no pueste estar vacío
                                            </p>
                                        @enderror
                                    </div>

                                    <!-- Dosis  -->
                                    <div class="col-span-4 md:col-span-4 lg:col-span-4 mt-2">
                                        <label 
                                            class="block font-medium"
                                        >   
                                            Dosis
                                        </label>

                                        <select 
                                            wire:model.defer="medicacion.{{ $index }}.dosis_medicamento" 
                                            class="mt-1 block border-gray-300 w-full rounded-md"
                                        >
                                            <option value="0">--seleccionar--</option>

                                            @foreach($dosisMedicamento as $d)
                                                <option 
                                                    value="{{$d->id}}"
                                                    {{ old('dosis_medicamento') == $d->id ? 'selected' : '' }}    
                                                >
                                                    {{ $d->dosis_medicamentos }}
                                                </option>
                                            @endforeach
                                        </select>

                                        @error("medicacion.$index.dosis_medicamento")
                                            <p 
                                                class="mt-2 text-pink-600 text-sm">
                                                No puedes eligir la opción "--seleccionar--"
                                            </p>
                                        @enderror
                                    </div>

                                    <!-- Frecuencia -->
                                    <div class="col-span-4 md:col-span-4 lg:col-span-4 mt-2">
                                        <label 
                                            class="block font-medium"
                                        >   
                                            Horario
                                        </label>

                                        <select 
                                            wire:model.defer="medicacion.{{ $index }}.frecuencia_medicamento" 
                                            class="mt-1 block border-gray-300 w-full rounded-md"
                                            >

                                            <option value="0">--seleccionar--</option>

                                            @foreach($frecuenciaMedicamento as $f)
                                                <option 
                                                    value="{{$d->id}}"
                                                    {{ old('frecuencia_medicamento') == $f->id ? 'selected' : '' }}    
                                                >
                                                    {{ $f->frecuencia_medicamentos }}
                                                </option>
                                            @endforeach
                                        </select>

                                        @error("medicacion.$index.frecuencia_medicamento")
                                            <p 
                                                class="mt-2 text-pink-600 text-sm">
                                                No puedes eligir la opción "--seleccionar--"
                                            </p>
                                        @enderror
                                    </div>

                                    <div class="col-span-4 md:col-span-4 lg:col-span-4">
                                        <div class="text-right">
                                            <button
                                                type="button"
                                                wire:click="quitarMedicacion({{ $index }})"
                                                class="bg-[#89462a] hover:bg-[#a35a39] text-white font-bold py-3 px-4 border-b-4 border-[#5c301d] hover:border-[#5c301d]"
                                                >
                                                Eliminar <i class="fa-solid fa-trash-can"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="text-center mt-7">
                                <button
                                    type="button"
                                    wire:click="agregarMedicacion"
                                    class="bg-[#89462a] hover:bg-[#a35a39] text-white font-bold py-3 px-4 border-b-4 border-[#5c301d] hover:border-[#5c301d]"
                                    >
                                    Agregar nueva medicacion
                                </button>
                            </div>
                        </div>
                    @endif

                    <!-- Si o No - Alergia estudiante -->
                    <div class="col-span-4 md:col-span-4 lg:col-span-4">
                        <label 
                            class="block font-medium"
                        >   
                            ¿Es estudiante tiene algún tipo de alergia?
                        </label>

                        <select 
                            wire:model.defer="alergia_si_no"
                            class="mt-1 block border-gray-300 w-full rounded-md"
                        >
                            <option value="--seleccionar--">--seleccionar--</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>

                        @error('alergia_si_no')
                            <p 
                                class="mt-2 text-pink-600 text-sm">
                                No puedes eligir la opción "--seleccionar--"
                            </p>
                        @enderror
                    </div>

                    <!-- Tipos de Alergia -->
                    @if($alergia_si_no === "Si")
                        <div class="col-span-2 md:col-span-4 lg:col-span-4">
                            <div class="grid grid-cols-4 gap-4 shadow-lg p-7">
                                <div class="col-span-2 md:col-span-4 lg:col-span-4">
                                    <label 
                                        class="block font-medium bg-gray-700 text-white p-3"
                                    >   
                                        Seleccione el tipo de alergia que tiene el estudiante.
                                    </label>

                                    @foreach($tiposAlergia as $tipo)
                                        <div class="flex items-center ps-4 border border-gray-200 rounded-sm dark:border-gray-700">
                                            <input 
                                                id="alergia_{{ $tipo->id }}"
                                                type="checkbox" 
                                                value="{{ $tipo->id }}"
                                                wire:model.live="alergia"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                            >
                                            <label 
                                                for="alergia_{{ $tipo->id }}" 
                                                class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                                >{{ $tipo->alergias }}</label>
                                        </div>
                                    @endforeach

                                    @error('alergia')
                                        <p 
                                            class="mt-2 text-pink-600 text-sm">
                                            Debes seleccionar al menos una alergia
                                        </p>
                                    @enderror
                                </div>

                                @if(in_array(21, $alergia ?? []))
                                    <!-- Mas detalle sobre el tipo de alergia -->
                                    <div class="col-span-2 md:col-span-4 lg:col-span-4">
                                        <label 
                                            class="block font-medium"
                                        >   
                                            Especifique el otro tipo de alergia
                                        </label>

                                        <textarea 
                                            wire:model.live="detalle_tipo_alergia"
                                            class="mt-1 block border-gray-300 w-full rounded-md"
                                            >
                                        </textarea>

                                        @error('detalle_tipo_alergia')
                                            <p 
                                                class="mt-2 text-pink-600 text-sm">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endif

                    <!-- Si o No - Condiciones médicas estudiante -->
                    <div class="col-span-4 md:col-span-4 lg:col-span-4">
                        <label 
                            class="block font-medium"
                        >   
                            ¿Es estudiante padece algún tipo de condición médica?
                        </label>

                        <select 
                            wire:model.live="condicion_medica_si_no"
                            class="mt-1 block border-gray-300 w-full rounded-md"
                        >      
                            <option value="--seleccionar--">--seleccionar--</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>

                        @error('condicion_medica_si_no')
                            <p 
                                class="mt-2 text-pink-600 text-sm">
                                No puedes eligir la opción "--seleccionar--"
                            </p>
                        @enderror
                    </div>

                    <!-- Condiciones médicas detalle estudiante -->
                    @if( $condicion_medica_si_no === "Si" )
                        <div class="col-span-4 md:col-span-4 lg:col-span-4">
                            @foreach( $condicion_medica as $index => $d )
                                <div class="grid grid-cols-4 gap-4 border-gray-600 p-7 shadow-lg">
                                    <div class="col-span-4 md:col-span-4 lg:col-span-4">
                                        <hr class="w-48 h-1 mx-auto my-4 bg-gray-200 rounded-sm md:my-4">
                                    </div>

                                    <div class="col-span-4 md:col-span-4 lg:col-span-4">
                                        <!-- Enfermedades -->
                                        <label 
                                            class="block font-medium"
                                        >   
                                            Enfermedades
                                        </label>

                                        <select 
                                            wire:model.defer="condicion_medica.{{ $index }}.enfermedad"
                                            class="mt-1 block border-gray-300 w-full rounded-md"
                                            >

                                            <option value="0">--seleccionar--</option>

                                            @foreach($condicionMedica as $c)
                                                <option 
                                                    value="{{ $c->id }}"
                                                    {{ old('condicion_medica') == $c->id ? 'selected' : '' }}    
                                                >
                                                    {{ $c->condicion_medica }}
                                                </option>
                                            @endforeach
                                        </select>

                                        @error("condicion_medica.$index.enfermedad")
                                            <p 
                                                class="mt-2 text-pink-600 text-sm">
                                                No puedes eligir la opción "--seleccionar--"
                                            </p>
                                        @enderror
                                    </div>

                                    <!-- Otra  -->
                                    <div class="col-span-4 md:col-span-4 lg:col-span-4">
                                        <label 
                                            class="block font-medium"
                                        >   
                                            Otra enfermedad
                                        </label>

                                        <textarea 
                                            wire:model.defer="condicion_medica.{{ $index }}.otra_enfermedad"
                                            class="mt-1 block border-gray-300 w-full rounded-md"
                                            >
                                        </textarea>
                                        
                                        @error("condicion_medica.$index.otra_enfermedad")
                                            <p 
                                                class="mt-2 text-pink-600 text-sm">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>

                                    <div class="col-span-4 md:col-span-4 lg:col-span-4">
                                        <div class="text-right">
                                            <button
                                                type="button"
                                                wire:click="quitarCondicionMedica({{ $index }})"
                                                class="bg-[#89462a] hover:bg-[#a35a39] text-white font-bold py-3 px-4 border-b-4 border-[#5c301d] hover:border-[#5c301d]"
                                                >
                                                Eliminar <i class="fa-solid fa-trash-can"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="text-center mt-7">
                                <button
                                    type="button"
                                    wire:click="agregarCondicionMedica"
                                    class="bg-[#89462a] hover:bg-[#a35a39] text-white font-bold py-3 px-4 border-b-4 border-[#5c301d] hover:border-[#5c301d]"
                                    >
                                    Agregar nueva medicacion
                                </button>
                            </div> 
                        </div>
                    @endif

                    <!-- Si o No - Intervenciones Quirurgicas -->
                    <div class="col-span-4 md:col-span-4 lg:col-span-4">
                        <label 
                            class="block font-medium"
                        >   
                            ¿Es estudiante ha pasado por algún tipo de intervención quirurgica?
                        </labe>
                        <select 
                            wire:model.live="intervencion_quirurgica_si_no"
                            class="mt-1 block border-gray-300 w-full rounded-md"
                        >
                            <option value="--seleccionar--">--seleccionar--</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>

                        @error('intervencion_quirurgica_si_no')
                            <p 
                                class="mt-2 text-pink-600 text-sm">
                                No puedes eligir la opción "--seleccionar--"
                            </p>
                        @enderror
                    </div>

                    <!-- Detalle Intervenciones Quirurgicas -->
                    @if( $intervencion_quirurgica_si_no === "Si" )
                        <div class="col-span-4 md:col-span-4 lg:col-span-4">
                            @foreach( $intervencion_quirurgica as $index => $d )
                                <div class="grid grid-cols-4 gap-4 shadow-lg p-7">
                                    <div class="col-span-4 md:col-span-4 lg:col-span-4">
                                        <hr class="w-48 h-1 mx-auto my-4 bg-gray-200 rounded-sm md:my-4">
                                    </div>
                                    <div class="col-span-4 md:col-span-4 lg:col-span-4">
                                        <label 
                                            class="block font-medium"
                                        >   
                                            Seleccione el tipo de intervención quirurgica
                                        </label>

                                        <select
                                            wire:model.defer="intervencion_quirurgica.{{ $index }}.tipos_intervenciones_quirurgicas"
                                            class="mt-1 block border-gray-300 w-full rounded-md"
                                            >

                                            <option value="0">--seleccionar--</option>

                                            @foreach($tiposIntervencionesQuirurgicas as $t)
                                                <option 
                                                    value="{{$t->id}}"
                                                    {{ old('tipos_intervenciones_quirurgicas') == $t->id ? 'selected' : '' }}    
                                                >
                                                    {{ $t->intervenciones_quirurgicas }}
                                                </option>
                                            @endforeach
                                        </select>

                                        @error("intervencion_quirurgica.$index.tipos_intervenciones_quirurgicas")
                                            <p 
                                                class="mt-2 text-pink-600 text-sm">
                                                No puedes eligir la opción "--seleccionar--"
                                            </p>
                                        @enderror
                                    </div>

                                    <div class="col-span-4 md:col-span-4 lg:col-span-4">
                                        <label 
                                            class="block font-medium"
                                        >   
                                            Especifique la intervenciones quirurgica
                                        </label>

                                        <textarea 
                                            wire:model.defer="intervencion_quirurgica.{{ $index }}.detalle_especificacion_quirurgica"
                                            class="mt-1 block border-gray-300 w-full rounded-md"
                                            >
                                        </textarea>

                                        @error("intervencion_quirurgica.$index.detalle_especificacion_quirurgica")
                                            <p 
                                                class="mt-2 text-pink-600 text-sm">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>

                                    <div class="col-span-4 md:col-span-4 lg:col-span-4">
                                        <div class="text-right">
                                            <button
                                                type="button"
                                                wire:click="quitarIntervencionQuirurgica({{ $index }})"
                                                class="bg-[#89462a] hover:bg-[#a35a39] text-white font-bold py-3 px-4 border-b-4 border-[#5c301d] hover:border-[#5c301d]"
                                                >
                                                Eliminar <i class="fa-solid fa-trash-can"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="text-center mt-7">
                                <button
                                    type="button"
                                    wire:click="agregarIntervencionQuirurgica"
                                    class="bg-[#89462a] hover:bg-[#a35a39] text-white font-bold py-3 px-4 border-b-4 border-[#5c301d] hover:border-[#5c301d]"
                                    >
                                    Agregar nueva medicacion
                                </button>
                            </div> 
                        </div>
                    @endif

                    <!-- Fecha última desparacitación -->
                    <div class="col-span-4 md:col-span-4 lg:col-span-4">
                        <label 
                            class="block"
                        >   
                            ¿Cuál fue la fecha de la última desparacitación del estudiante?
                        </label>

                        <input 
                            type="date" 
                            wire:model.live="fecha_ultima_desparacitacion"
                            class="mt-1 block border-gray-300 w-full rounded-md"
                        >
                        @error('fecha_ultima_desparacitacion')
                            <p 
                                class="mt-2 text-pink-600 text-sm">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Si o No - Vacunas Estudiante -->
                    <div class="col-span-4 md:col-span-4 lg:col-span-4">
                        <label 
                            class="block font-medium"
                        >   
                            ¿El estudiante tiene vacunas?
                        </label>

                        <select 
                            wire:model.live="vacuna_si_no"
                            class="mt-1 block border-gray-300 w-full rounded-md"
                        >
                
                            <option value="--seleccionar--">--seleccionar--</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>wire:model.live
                
                        </select>
                        @error("vacuna_si_no")
                            <p
                                class="mt-2 text-pink-600 text-sm">
                                No puedes eligir la opción "--seleccionar--"
                            </p>
                        @enderror
                    </div>

                    <!-- Tipos de vacunas estudiante -->
                    @if( $vacuna_si_no === "Si" )
                        <div class="col-span-4 md:col-span-4 lg:col-span-4">
                            <div class="grid grid-cols-4 gap-4 shadow-lg p-7">
                                <div class="col-span-4 md:col-span-4 lg:col-span-4">
                                    <label 
                                        class="block font-medium bg-gray-700 text-white p-3"
                                    >   
                                        Seleccione el tipo de vacunas que tiene el estudiante.
                                    </label>

                                    @foreach($tipoVacuna as $tipo)
                                        <div class="flex items-center ps-4 border border-gray-200 rounded-sm dark:border-gray-700">
                                            <input 
                                                id="vacuna-{ $tipo->id }" 
                                                type="checkbox" 
                                                value="{{ $tipo->id }}"
                                                wire:model.live="vacuna"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                            >

                                            <label 
                                                for="vacuna-{ $tipo->id }" 
                                                class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                {{ $tipo->tipo_vacunas }}
                                            </label>
                                        </div>
                                    @endforeach

                                    @error("vacuna")
                                        <p 
                                            class="mt-2 text-pink-600 text-sm">
                                            Debes seleccionar al menos una Vacuna
                                        </p>
                                    @enderror
                                </div>

                                @if(in_array(16, $vacuna ?? []))
                                    <div class="col-span-4 md:col-span-4 lg:col-span-4">
                                        <!-- Mas detalle sobre el tipo de alergia -->
                                        <div class="col-span-2 md:col-span-4 lg:col-span-4">
                                            <label 
                                                class="block font-medium"
                                            >   
                                                Especifique el otro tipo de Vacuna
                                            </label>

                                            <textarea 
                                                wire:model.live="detalle_vacuna"
                                                class="mt-1 block border-gray-300 w-full rounded-md"
                                                >
                                            </textarea>

                                            @error("detalle_vacuna")
                                                <p 
                                                    class="mt-2 text-pink-600 text-sm">
                                                    {{ $message }}
                                                </p>
                                            @enderror
                                        </div>
                                    </div>  
                                @endif
                            </div>
                        </div>
                    @endif

                    <!-- Dificultad para dormir si o no -->
                    <div class="col-span-4 md:col-span-4 lg:col-span-4">
                        <label 
                            class="block font-medium"
                        >   
                            ¿El estudiante presenta alguna dificultad para dormir?
                        </label>

                        <select 
                            wire:model.live="dificultad_dormir_si_no"
                            class="mt-1 block border-gray-300 w-full rounded-md"
                        >
                            <option value="--seleccionar--">--seleccionar--</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>

                        @error('dificultad_dormir_si_no')
                            <p 
                                class="mt-2 text-pink-600 text-sm">
                                No puedes eligir la opción "--seleccionar--"
                            </p>
                        @enderror
                    </div>

                    <!-- Detalle dificultad para dormir -->
                    @if( $dificultad_dormir_si_no === "Si" )
                        <div class="col-span-4 md:col-span-4 lg:col-span-4">
                            @foreach( $dificultad_dormir as $index => $d )
                                <div class="grid grid-cols-4 gap-4 border-gray-600 p-7 shadow-lg">
                                    <div class="col-span-4 md:col-span-4 lg:col-span-4">
                                        <label 
                                            class="block font-medium"
                                        >   
                                            ¿Cuáles son los problemas que el estudiante tiene al momento de dormir?
                                        </label>

                                        <textarea
                                            wire:model.defer="dificultad_dormir.{{ $index }}.problemas_dormir"
                                            class="mt-1 block border-gray-300 w-full rounded-md">
                                        </textarea>

                                        @error("dificultad_dormir.$index.problemas_dormir")
                                            <p 
                                                class="mt-2 text-pink-600 text-sm">
                                                Este campo no puede quedar vacío
                                            </p>
                                        @enderror                                    
                                    </div>

                                    <div class="col-span-4 md:col-span-4 lg:col-span-4">
                                        <label 
                                            class="block font-medium"
                                        >   
                                            ¿Con que frecuencía el estudiante presenta este problemas?
                                        <select 
                                            wire:model.defer="dificultad_dormir.{{ $index }}.frecuencia_problemas_dormir" 
                                            class="mt-1 block border-gray-300 w-full rounded-md"
                                        >
                                            
                                            <option value="0">--seleccionar--</option>

                                            @foreach($escalaCalificacion as $e)
                                                <option 
                                                    value="{{$e->id}}"
                                                    {{ old('tipos_intervenciones_quirurgicas') == $e->id ? 'selected' : '' }}    
                                                >
                                                    {{ $e->calificacion }}
                                                </option>
                                            @endforeach
                                            
                                        </select>

                                        @error("dificultad_dormir.$index.frecuencia_problemas_dormir")
                                            <p 
                                                class="mt-2 text-pink-600 text-sm">
                                                No puedes eligir la opción "--seleccionar--"
                                            </p>
                                        @enderror   
                                    </div>

                                    <div class="col-span-4 md:col-span-4 lg:col-span-4">
                                        <label 
                                            class="block font-medium"
                                        >   
                                            ¿El estudiante se encuentra bajo algún tipo de tratamiento?
                                        </label>

                                        <select 
                                            wire:model.defer="dificultad_dormir.{{ $index }}.tratamiento_si_no"
                                            class="mt-1 block border-gray-300 w-full rounded-md"
                                        >
                                            
                                            <option value="0">--seleccionar--</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                        </select>

                                        @error("dificultad_dormir.$index.tratamiento_si_no")
                                            <p
                                                class="mt-2 text-pink-600 text-sm">
                                                No puedes eligir la opción "--seleccionar--"
                                            </p>
                                        @enderror   
                                    </div>

                                    <div class="col-span-4 md:col-span-4 lg:col-span-4">
                                        <label 
                                            class="block font-medium"
                                        >   
                                            ¿Cuál es el tratamiento que sigue el estudiante? 
                                        </label>

                                        <textarea 
                                            wire:model.defer="dificultad_dormir.{{ $index }}.tratamiento_a_seguir"
                                            class="mt-1 block border-gray-300 w-full rounded-md">
                                        </textarea>

                                        @error("dificultad_dormir.$index.tratamiento_a_seguir")
                                            <p 
                                                class="mt-2 text-pink-600 text-sm">
                                                Este campo no puede quedar vacío
                                            </p>
                                        @enderror
                                    </div>

                                    <div class="col-span-4 md:col-span-4 lg:col-span-4">
                                        <div class="text-right">
                                            <button
                                                type="button"
                                                wire:click="quitarDificultadDormir({{ $index }})"
                                                class="bg-[#89462a] hover:bg-[#a35a39] text-white font-bold py-3 px-4 border-b-4 border-[#5c301d] hover:border-[#5c301d]"
                                                >
                                                Eliminar <i class="fa-solid fa-trash-can"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="text-center mt-7">
                                <button
                                    type="button"
                                    wire:click="agregarDificultadDormir"
                                    class="bg-[#89462a] hover:bg-[#a35a39] text-white font-bold py-3 px-4 border-b-4 border-[#5c301d] hover:border-[#5c301d]"
                                    >
                                    Agregar nueva medicación
                                </button>
                            </div>
                        </div>
                    @endif

                    <!-- Historial Patológico -->
                    <div class="col-span-4 md:col-span-4 lg:col-span-4">
                        <label 
                            class="block font-medium"
                        >   
                            ¿El estudiante presenta algún historial patológico?
                        </label>

                        <select 
                            wire:model.live="historial_patologico_si_no"
                            class="mt-1 block border-gray-300 w-full rounded-md"
                        >
                            <option value="--seleccionar--">--seleccionar--</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>

                        @error('historial_patologico_si_no')
                            <p 
                                class="mt-2 text-pink-600 text-sm">
                                No puedes eligir la opción "--seleccionar--"
                            </p>
                        @enderror 
                    </div>

                    <!-- Detalle Historial Patolígico -->
                    @if( $historial_patologico_si_no === "Si" )
                        <div class="col-span-4 md:col-span-4 lg:col-span-4"> 
                            @foreach( $historial_patologico as $index => $d )
                                <div class="grid grid-cols-4 gap-4 border-gray-600 p-7 shadow-lg">
                                    <div class="col-span-4 md:col-span-4 lg:col-span-4">
                                        <hr class="w-48 h-1 mx-auto my-4 bg-gray-200 rounded-sm md:my-4">
                                    </div>

                                    <!-- Enfermedad Hereditaria -->
                                    <div class="col-span-4 md:col-span-4 lg:col-span-4">
                                        <label 
                                            class="block font-medium"
                                        >   
                                            ¿El estudiante presenta algún historial patológico?
                                        </label>

                                        <select 
                                            wire:model.defer="historial_patologico.{{ $index }}.tipos_enfermedades_hereditarias" 
                                            class="mt-1 block border-gray-300 w-full rounded-md"
                                            >

                                            <option value="0">--seleccionar--</option>

                                            @foreach($tipoEnfermedadesHereditarias as $t)
                                                <option 
                                                    value="{{$t->id}}"
                                                    {{ old('tipos_enfermedades_hereditarias') == $t->id ? 'selected' : '' }}    
                                                >
                                                    {{ $t->enfermedades_hereditarias }}
                                                </option>
                                            @endforeach
                                        </select>

                                        @error("historial_patologico.$index.tipos_enfermedades_hereditarias")
                                            <p 
                                                class="mt-2 text-pink-600 text-sm">
                                                No puedes eligir la opción "--seleccionar--"
                                            </p>
                                        @enderror                 
                                    </div>

                                    <!-- Parentesco Patelógicos -->
                                    <div class="col-span-4 md:col-span-4 lg:col-span-4">
                                        <label 
                                            class="block font-medium"
                                        >   
                                            Parentesco
                                        </label>

                                        <select 
                                            wire:model.defer="historial_patologico.{{ $index }}.relacion_familiar" 
                                            class="mt-1 block border-gray-300 w-full rounded-md"
                                            >

                                            <option value="0">--seleccionar--</option>

                                            @foreach($relacionFamiliar as $r)
                                                <option 
                                                    value="{{$r->id}}"
                                                    {{ old('relacion_familiar') == $r->id ? 'selected' : '' }}    
                                                >
                                                    {{ $r->relacion_familiar }}
                                                </option>
                                            @endforeach
                                        </select>

                                        @error("historial_patologico.$index.relacion_familiar")
                                            <p 
                                                class="mt-2 text-pink-600 text-sm">
                                                No puedes eligir la opción "--seleccionar--"
                                            </p>
                                        @enderror      
                                    </div>

                                    <!-- Estado Actual -->
                                    <div class="col-span-4 md:col-span-4 lg:col-span-4">
                                        <label 
                                            class="block font-medium"
                                        >   
                                            ¿Cual es el estado actual del Estudiante?
                                        </label>

                                        <textarea 
                                            wire:model.live="historial_patologico.{{ $index }}.estado_actual" 
                                            class="mt-1 block border-gray-300 w-full rounded-md"
                                        >
                                        </textarea>

                                        @error("historial_patologico.$index.estado_actual")
                                            <p 
                                                class="mt-2 text-pink-600 text-sm">
                                                {{ $message }}
                                            </p>
                                        @enderror      
                                    </div>

                                    <div class="col-span-4 md:col-span-4 lg:col-span-4">
                                        <div class="text-right">
                                            <button
                                                type="button"
                                                wire:click="quitarHistorialPatologico({{ $index }})"
                                                class="bg-[#89462a] hover:bg-[#a35a39] text-white font-bold py-3 px-4 border-b-4 border-[#5c301d] hover:border-[#5c301d]"
                                                >
                                                Eliminar <i class="fa-solid fa-trash-can"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="text-center mt-7">
                                <button
                                    type="button"
                                    wire:click="agregarHistorialPatologico"
                                    class="bg-[#89462a] hover:bg-[#a35a39] text-white font-bold py-3 px-4 border-b-4 border-[#5c301d] hover:border-[#5c301d]"
                                    >
                                    Agregar nueva medicación
                                </button>
                            </div>
                        </div> 
                    @endif
                </div>

                <div class="col-span-4 md:col-span-4 lg:col-span-4">
                    <div class="text-center mt-7">
                        <button
                            type="submit"
                            class="bg-[#89462a] hover:bg-[#a35a39] text-white font-bold py-3 px-4 border-b-4 border-[#5c301d] hover:border-[#5c301d]"
                            >
                            Guardar cambios <i class="fa-regular fa-floppy-disk"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Mensaje de exito -->
    <script>
        document.addEventListener('livewire:init', () => {
            Livewire.on('alerta', (data) => {
                Swal.fire({
                    icon: data.tipo,
                    title: data.titulo,
                    text: data.texto
                })
            })
        })
    </script>
</div>
