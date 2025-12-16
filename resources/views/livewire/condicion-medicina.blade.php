<div>
    @for( $i = 0; $i < $contadorCondicionMedica ; $i++)
        <div class="grid grid-cols-4 gap-4 border-gray-600 p-7 shadow-lg">
            <div class="col-span-4 md:col-soan-4 lg:col-span-4">
                <label class="block font-medium bg-gray-700 text-white p-3">
                    Enfermedades Médicas
                </label>
            </div>

            <div class="col-span-4 md:col-span-4 lg:col-span-4">
                <!-- Enfermedades -->
                <label 
                    class="block font-medium"
                >   
                    Enfermedades
                </label>

                <select 
                    name="condicion_medica" 
                    id="condicion_medica"
                    class="mt-1 block border-gray-300 w-full rounded-md"
                    >

                    @foreach($condicionMedica as $c)
                        <option 
                            value="{{ $c->id }}"
                            {{ old('condicion_medica') == $c->id ? 'selected' : '' }}    
                        >
                            {{ $c->condicion_medica }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="col-span-4 md:col-span-4 lg:col-span-4">
                <label 
                    class="block font-medium"
                >   
                    Otra enfermedad
                </label>

                <textarea 
                    name="otra_enfermedad"
                    id="otra_enfermedad"
                    class="mt-1 block border-gray-300 w-full rounded-md"
                    >
                </textarea>
            </div>
        </div>
    @endFor
    <div class="text-center mt-7">
        <button
            type="button"
            wire:click="incrementarCondicionMedica"
            class="bg-[#89462a] hover:bg-[#a35a39] text-white font-bold py-3 px-4 border-b-4 border-[#5c301d] hover:border-[#5c301d]"
            >
            Agregar nueva discapacidad
        </button>

        <button
            type="button"
            wire:click="disminuirCondicionMedica"
            class="bg-[#89462a] hover:bg-[#a35a39] text-white font-bold py-3 px-4 border-b-4 border-[#5c301d] hover:border-[#5c301d]"
            >
            <i class="fa-solid fa-trash-can"></i> 
        </button>
    </div>
</div>
