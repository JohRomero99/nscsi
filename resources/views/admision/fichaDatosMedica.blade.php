<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Unidad Educativa Nuestra Señora del Carmen') }}
        </h2>
    </x-slot>

    <div class="flex justify-center">
        <div class="bg-white shadow-md rounded-md overflow-hidden border border-gray-200 w-full m-5">
            <!-- Body -->
            <div class="p-5 space-y-2 text-gray-700">
                @livewire('FichaMedicaEstudiante')
            </div>
        </div>
    </div>

</x-app-layout>