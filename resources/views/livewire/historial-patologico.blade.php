<div>
    @for( $i = 0; $i < $contadorHistorialPatologico ; $i++)
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
                    name="tipos_enfermedades_hereditarias" 
                    id="tipos_enfermedades_hereditarias"
                    class="mt-1 block border-gray-300 w-full rounded-md"
                    >

                    @foreach($tipoEnfermedadesHereditarias as $t)
                        <option 
                            value="{{$t->id}}"
                            {{ old('tipos_enfermedades_hereditarias') == $t->id ? 'selected' : '' }}    
                        >
                            {{ $t->enfermedades_hereditarias }}
                        </option>
                    @endforeach
                </select>

                @error('tipos_enfermedades_hereditarias')
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
                    name="relacion_familiar" 
                    id="relacion_familiar"
                    class="mt-1 block border-gray-300 w-full rounded-md"
                    >

                    @foreach($relacionFamiliar as $r)
                        <option 
                            value="{{$r->id}}"
                            {{ old('relacion_familiar') == $r->id ? 'selected' : '' }}    
                        >
                            {{ $r->relacion_familiar }}
                        </option>
                    @endforeach
                </select>

                @error('relacion_familiar')
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
                    name="estado_actual" 
                    id="estado_actual"
                    class="mt-1 block border-gray-300 w-full rounded-md"
                >
                </textarea>
            </div>
        </div>
    @endfor
    <div class="text-center mt-7">
        <button
            type="button"
            wire:click="incrementarHistorialPatologico"
            class="bg-[#89462a] hover:bg-[#a35a39] text-white font-bold py-3 px-4 border-b-4 border-[#5c301d] hover:border-[#5c301d]"
            >
            Agregar nueva discapacidad
        </button>

        <button
            type="button"
            wire:click="disminuirHistorialPatologico"
            class="bg-[#89462a] hover:bg-[#a35a39] text-white font-bold py-3 px-4 border-b-4 border-[#5c301d] hover:border-[#5c301d]"
            >
            <i class="fa-solid fa-trash-can"></i> 
        </button>
    </div>
</div>
