<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Reporte de Faltas') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-4 py-8">
        <a href="#" class="bg-neutral-primary-soft block p-6 border border-default rounded-base shadow-xs hover:bg-neutral-secondary-medium">
            <div class="grid grid-cols-2 gap-4">
                <div class="col-span-2 md:col-span-2 lg:col-span-1">
                    <h3 class="text-lg font-medium text-gray-900">Fecha de Inicio</h3>
                    <input 
                        type="date" 
                        class="mt-1 block border-gray-300 w-full rounded-md"
                    >
                </div>
                <div class="col-span-2 md:col-span-2 lg:col-span-1">
                    <h3 class="text-lg font-medium text-gray-900">Fecha de Fin</h3>
                    <input 
                        type="date" 
                        class="mt-1 block border-gray-300 w-full rounded-md"
                    >
                </div>
                <div class="col-span-2 md:col-span-2 lg:col-span-2">
                    <div class="text-center">
                        <button 
                            class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                            Generar Reporte <i class="fa-regular fa-calendar-days"></i>
                        </button>
                    </div>
                </div>
            </div>
        </a>
    </div>

</x-app-layout>