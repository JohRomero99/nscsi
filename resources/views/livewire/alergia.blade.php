<div>
    <div class="grid grid-cols-4 gap-4 shadow-lg p-7">
        <div class="col-span-2 md:col-span-4 lg:col-span-4">
            <label 
                class="block font-medium"
            >   
                ¿Cuál es el tipo de alergia que tiene el estudiante?
            </label>

            @foreach($tiposAlergia as $tiposAlergia)
                <div class="flex items-center ps-4 border border-gray-200 rounded-sm dark:border-gray-700">
                    <input id="bordered-checkbox-{ $tiposAlergia->id }" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="bordered-checkbox-{ $tiposAlergia->id }" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $tiposAlergia->alergias }}</label>
                </div>
            @endforeach

            @error('tiposAlergia')
                <p 
                    class="mt-2 text-pink-600 text-sm">
                    No puedes eligir la opción "--seleccionar--"
                </p>
            @enderror
        </div>

        <div class="col-span-2 md:col-span-4 lg:col-span-4" id="detalle_tipo_alergia">
            <label 
                class="block font-medium"
            >   
                Mas detalle sobre el tipo de alergia
            </label>

            <textarea 
                name="detalle_tipo_alergia"
                id="detalle_tipo_alergia"
                class="mt-1 block border-gray-300 w-full rounded-md"
                >
            </textarea>
        </div>
    </div>
</div>
