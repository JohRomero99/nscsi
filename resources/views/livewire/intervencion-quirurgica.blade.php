<div>
    @for( $i = 0; $i < $contadorQuirurgica ; $i++)
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
                    name="tipos_intervenciones_quirurgicas" 
                    id="tipos_intervenciones_quirurgicas"
                    class="mt-1 block border-gray-300 w-full rounded-md"
                    >

                    @foreach($tiposIntervencionesQuirurgicas as $t)
                        <option 
                            value="{{$t->id}}"
                            {{ old('tipos_intervenciones_quirurgicas') == $t->id ? 'selected' : '' }}    
                        >
                            {{ $t->intervenciones_quirurgicas }}
                        </option>
                    @endforeach
                </select>

                @error('tipos_intervenciones_quirurgicas')
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
                    name="detalle_especificacion_quirurgica" 
                    id="detalle_especificacion_quirurgica"
                    class="mt-1 block border-gray-300 w-full rounded-md"
                    >
                </textarea>

                @error('detalle_especificacion_quirurgica')
                    <p 
                        class="mt-2 text-pink-600 text-sm">
                        No puedes eligir la opción "--seleccionar--"
                    </p>
                @enderror
            </div>
        </div>
    @endfor
    <div class="text-center mt-7">
        <button
            type="button"
            wire:click="incrementarQuirurgica"
            class="bg-[#89462a] hover:bg-[#a35a39] text-white font-bold py-3 px-4 border-b-4 border-[#5c301d] hover:border-[#5c301d]"
            >
            Agregar un nuevo cirujia
        </button>
        <button
            type="button"
            wire:click="disminuirQuirurgica"
            class="bg-[#89462a] hover:bg-[#a35a39] text-white font-bold py-3 px-4 border-b-4 border-[#5c301d] hover:border-[#5c301d]"
            >
            <i class="fa-solid fa-trash-can"></i> 
        </button>
    </div>
</div>
