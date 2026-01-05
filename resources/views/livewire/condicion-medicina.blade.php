<div>
    @for( $i = 0; $i < $contadorCondicionMedica ; $i++)
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
</div>
