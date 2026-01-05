<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Unidad Educativa Nuestra Señora del Carmen') }}
        </h2>
    </x-slot>

    <div class="flex justify-center">
        <div class="bg-white shadow-md rounded-md overflow-hidden border border-gray-200 w-full m-5">
            <!-- Header -->
            <div class="bg-gray-200 text-gray-500 px-5 py-3 border-b">
                <!-- Wizard -->
                <x-setupFichas></x-setupFichas>
            </div>

            <!-- Body -->
            <div class="p-5 space-y-2 text-gray-700">
                @livewire('FichaMedicaEstudiante')
            </div>
        </div>
    </div>

    <!-- Mensaje de exito -->
    @push('scripts')
        <script>
            document.addEventListener('livewire:init', () => {
                Livewire.on('alerta', (data) => {
                    Swal.fire({
                        icon: data.tipo,
                        title: data.titulo,
                        text: data.texto
                    })
                })
            })
        </script>
    @endpush
</x-app-layout>