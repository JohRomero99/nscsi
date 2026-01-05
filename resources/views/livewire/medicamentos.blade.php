<div>
    @for( $i = 0; $i < $contadorMedicamentos ; $i++)
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
                    name="medicamento_forma_permanente" 
                    id="medicamento_forma_permanente"
                    class="mt-1 block border-gray-300 w-full rounded-md"
                >
        
                    <option value="--seleccionar--">--seleccionar--</option>
                    <option value="Si">Si</option>
                    <option value="No">No</option>
        
                </select>

                @error('')
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
                    id="nombre_medicamento"
                    name="nombre_medicamento"
                    placeholder="Digite el nombre del medicamento.."
                    class="mt-1 block border-gray-300 w-full rounded-md"
                >

                @error('nombre_medicamento')
                    <p 
                        class="mt-2 text-pink-600 text-sm">
                        No puedes eligir la opción "--seleccionar--"
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
                    name="dosis_medicamento" 
                    id="dosis_medicamento"
                    class="mt-1 block border-gray-300 w-full rounded-md"
                >

                    @foreach($dosisMedicamento as $d)
                        <option 
                            value="{{$d->id}}"
                            {{ old('dosis_medicamento') == $d->id ? 'selected' : '' }}    
                        >
                            {{ $d->dosis_medicamentos }}
                        </option>
                    @endforeach
                    
                </select>

                @error('')
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
                    name="frecuencia_medicamento" 
                    id="frecuencia_medicamento"
                    class="mt-1 block border-gray-300 w-full rounded-md"
                    >

                    @foreach($frecuenciaMedicamento as $f)
                        <option 
                            value="{{$d->id}}"
                            {{ old('frecuencia_medicamento') == $f->id ? 'selected' : '' }}    
                        >
                            {{ $f->frecuencia_medicamentos }}
                        </option>
                    @endforeach
                </select>

                @error('')
                    <p 
                        class="mt-2 text-pink-600 text-sm">
                        No puedes eligir la opción "--seleccionar--"
                    </p>
                @enderror
            </div>
        </div>
    @endFor
    <div class="text-center mt-7">
        <button
            type="button"
            wire:click="incrementarMedicamento"
            class="bg-[#89462a] hover:bg-[#a35a39] text-white font-bold py-3 px-4 border-b-4 border-[#5c301d] hover:border-[#5c301d]"
            >
            Agregar un nuevo medicamento
        </button>

        <button
            type="button"
            wire:click="disminuirMedicamento"
            class="bg-[#89462a] hover:bg-[#a35a39] text-white font-bold py-3 px-4 border-b-4 border-[#5c301d] hover:border-[#5c301d]"
            >
            <i class="fa-solid fa-trash-can"></i> 
        </button>
    </div>
</div>
