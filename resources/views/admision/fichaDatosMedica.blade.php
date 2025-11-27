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
                <form action="" method="POST"  enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-4 gap-4">

                        <!-- Titulo -->
                        <div class="col-span-4 flex justify-center">
                            <div class="">
                                <h1 class="text-4xl text-center font-extrabold text-gray-700 mt-7">
                                    Ficha Médica del Estudiante
                                </h1>
                                <p class="mb-3 text-center text-gray-600 dark:text-gray-600 mt-2 text-1xl">
                                    Comepleta cada uno de los campos con información verídica.
                                </p>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>