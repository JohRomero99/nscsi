<div>
    @for( $i = 0; $i < $contador ; $i++)
        <div class="grid grid-cols-4 gap-4 border-gray-600 p-7 shadow-lg">
            <div class="col-span-2 md:col-span-3 lg:col-span-4">
                <label 
                    class="block font-medium bg-gray-700 text-white p-3"
                >   
                    Tipo de discapacidad
                </label>
            </div>

            <div class="col-span-4 md:col-span-4 lg:col-span-4">
                <hr class="w-48 h-1 mx-auto my-4 bg-gray-200 rounded-sm md:my-4">
            </div>

            <div class="col-span-2 md:col-span-4 lg:col-span-2">
                <label 
                    class="block font-medium"
                >   
                    ¿Cuál es el tipo de discapacidad que tiene el estudiante?
                </label>

                <select 
                    name="discapacidad_id" 
                    id="discapacidad_id"
                    class="mt-1 block border-gray-300 w-full rounded-md"
                >
                    @foreach($tiposDiscapacidad as $t)
                        <option 
                            value="{{$t->id}}"
                            {{ old('discapacidad_id') == $t->id ? 'selected' : '' }}    
                        >
                            {{$t->tipos_discapacidad}}
                        </option>
                    @endforeach

                </select>

                @error('discapacidad_id')
                    <p 
                        class="mt-2 text-pink-600 text-sm">
                        No puedes eligir la opción "--seleccionar--"
                    </p>
                @enderror
            </div>

            <div class="col-span-4 md:col-span-4 lg:col-span-2">
                <label 
                    class="block font-medium"
                >   
                    Porcentaje de discapacidad
                </label>

                <select 
                    id="procentaje_discapacidad"
                    name="procentaje_discapacidad" 
                    class="mt-1 block border-gray-300 w-full rounded-md"
                >
                    @foreach($porcentaje as $p)
                        <option 
                            value="{{$p->id}}"
                            {{ old('procentaje_discapacidad') == $p->id ? 'selected' : '' }}    
                        >
                            {{ $p->porcentaje }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="col-span-4 md:col-span-4 lg:col-span-4">
                <label 
                    class="block font-medium"
                >   
                    Mas detalle sobre el tipo de discapacidad del estudiante
                </label>

                <textarea 
                    name="detalle_discapacidad"
                    id="detalle_discapacidad"
                    class="mt-1 block border-gray-300 w-full rounded-md">
                </textarea>
            </div>
        </div>
    @endFor

    <div class="text-center mt-7">

        <button
            type="button"
            wire:click="incrementar"
            class="bg-[#89462a] hover:bg-[#a35a39] text-white font-bold py-3 px-4 border-b-4 border-[#5c301d] hover:border-[#5c301d]"
            >
            Agregar nueva discapacidad
        </button>

        <button
            type="button"
            wire:click="disminuir"
            class="bg-[#89462a] hover:bg-[#a35a39] text-white font-bold py-3 px-4 border-b-4 border-[#5c301d] hover:border-[#5c301d]"
            >
            <i class="fa-solid fa-trash-can"></i> 
        </button>
    </div>
</div>
