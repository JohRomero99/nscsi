<div>
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

        @error('discapacidad_si_no')
            <p 
                class="mt-2 text-pink-600 text-sm">
                No puedes eligir la opción "--seleccionar--"
            </p>
        @enderror
    </div>
    @if($discapacidad_si_no === 'Si')
        @foreach( $discapacidades as $index => $d )
            <div class="grid grid-cols-4 gap-4 border-gray-600 p-7 shadow-lg">
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

                <div class="col-span-4 md:col-span-4 lg:col-span-4">
                    <label 
                        class="block font-medium"
                    >   
                        Mas detalle sobre el tipo de discapacidad del estudiante
                    </label>

                    <textarea 
                        wire:model.defer="discapacidades.{{ $index }}.detalle_discapacidad"
                        class="mt-1 block border-gray-300 w-full rounded-md"
                    >{{ old('detalle_discapacidad') }}</textarea>

                    @error('detalle_discapacidad')
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
    @endif
</div>
