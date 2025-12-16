<div>
    @for( $i = 0; $i < $contadorMedicamentos ; $i++)
        <div class="grid grid-cols-4 gap-4 border-gray-600 p-7 shadow-lg">
            <div class="col-span-2 md:col-span-3 lg:col-span-4">
                <label 
                    class="block font-medium bg-gray-700 text-white p-3"
                >   
                    Medicamentos
                </label>
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
                    placeholder="Especifique el nombre del medicamento.."
                    class="mt-1 block border-gray-300 w-full rounded-md"
                >
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
        
                    <option value="--seleccionar--">--seleccionar--</option>
                    <option value="1/4">¼ pastilla</option>
                    <option value="1/2">½ pastilla</option>
                    <option value="1">1 pastilla</option>
                    <option value="2">2 pastillas</option>
                    <option value="5ml">5 ml</option>
                    <option value="10ml">10 ml</option>
                    <option value="15ml">15 ml</option>
                </select>
            </div>

            <div class="col-span-4 md:col-span-4 lg:col-span-4 mt-2">
                <label 
                    class="block font-medium"
                >   
                    Horario
                </label>

                <select 
                    name="hoario_medicamento" 
                    id="horario_medicamento"
                    class="mt-1 block border-gray-300 w-full rounded-md"
                    >

                    <option value="--seleccionar--">--selecionar--</option>
                    <option value="1_dia">1 vez al día</option>
                    <option value="2_dia">2 veces al día</option>
                    <option value="3_dia">3 veces al día</option>
                    <option value="cada_8h">Cada 8 horas</option>
                    <option value="cada_12h">Cada 12 horas</option>
                </select>
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
