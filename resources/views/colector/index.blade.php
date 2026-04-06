<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Colecturía') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-4 py-8">
        <div class="bg-neutral-primary-soft block p-6 border border-default rounded-base shadow-xs hover:bg-neutral-secondary-medium">
            <div class="grid grid-cols-2 gap-4">
                <div class="col-span-2 md:col-span-2 lg:col-span-2">
                    <h3 class="text-lg font-medium text-gray-900">Buscar Estudiante <i class="fa-regular fa-user"></i></h3>
                    <input 
                        type="text" 
                        placeholder="Ingrese el nombre o código del estudiante"
                        class="mt-1 block border-gray-300 w-full rounded-md mt-3"
                    >
                </div>
                <div class="col-span-2 md:col-span-2 lg:col-span-2">
                    <div class="text-center">
                        <button 
                            class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                            Buscar <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="container mx-auto p-4 shadow bg-white mt-3 rounded-base">
                <div class="grid grid-cols-5 gap-4 mt-2">
                    <div class="col-span-2 md:col-span-2 lg:col-span-1 border border-gray-300 rounded-base p-4">
                        <h3 class="text-gray-900">Nombre del Estudiante:</h3>
                        <p class="mt-1 text-gray-600">John Jairo Romero Sanchez</p>
                    </div>
                    <div class="col-span-2 md:col-span-2 lg:col-span-1 border border-gray-300 rounded-base p-4">
                        <h3 class="text-gray-900">Número de cédula:</h3>
                        <p class="mt-1 text-gray-600">0955546601</p>
                    </div>
                    <div class="col-span-2 md:col-span-2 lg:col-span-1 border border-gray-300 rounded-base p-4">
                        <h3 class="text-gray-900">Monto Adeudado:</h3>
                        <p class="mt-1 text-gray-600">$150.00</p>
                    </div>
                    <div class="col-span-2 md:col-span-2 lg:col-span-1 border border-gray-300 rounded-base p-4">
                        <h3 class="text-gray-900">Fecha de Último Pago:</h3>
                        <p class="mt-1 text-gray-600">2024-05-15</p>
                    </div>
                    <div class="col-span-2 md:col-span-2 lg:col-span-1 border border-gray-300 rounded-base p-4">
                        <h3 class="text-gray-900">Seguro contra accidentes:</h3>
                        <p class="mt-1 text-gray-600">Si</p>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4 mt-5">
                <div class="col-span-2 md:col-span-2 lg:col-span-2">
                    <table class="w-full text-left text-gray-600">
                        <!-- HEADER -->
                        <thead class="bg-gray-100 text-gray-700 text-center">
                            <tr>
                                <th class="px-6 py-3">Número</th>
                                <th class="px-6 py-3">Mes</th>
                                <th class="px-6 py-3">Pensión</th>
                                <th class="px-6 py-3">Estado</th>
                                <th class="px-6 py-3">Registrar Pago</th>
                            </tr>
                        </thead>
                        <!-- BODY -->
                        <tbody>
                            <!-- fila -->
                                <tr class="border-t odd:bg-white even:bg-gray-50 hover:bg-blue-50 transition text-center">
                                    <td class="px-6 py-4 font-medium text-gray-800">1</td>
                                    <td class="px-6 py-4 font-medium text-gray-800">Mayo</td>
                                    <td class="px-6 py-4">160.00</td>
                                    <td class="px-6 py-4">
                                        <span class="bg-yellow-300 text-yellow-800 px-3 py-1 rounded-full font-semibold">
                                            Pendiente
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">

                                        <!-- Modal toggle -->
                                        <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600" type="button">
                                            Registrar Pago <i class="fa-regular fa-pen-to-square"></i>
                                        </button>

                                        <!-- Main modal -->
                                        <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                            <div class="relative p-4 w-full max-w-2xl max-h-full">
                                                
                                            <!-- Modal content -->
                                                <div class="relative bg-neutral-primary-soft border border-default rounded-base shadow-sm p-4 md:p-6">
                                                    <!-- Modal header -->
                                                    <div class="flex items-center justify-between border-b border-default pb-4 md:pb-5">
                                                        <h3 class="text-lg font-medium text-heading">
                                                            Terms of Service
                                                        </h3>
                                                        <button type="button" class="text-body bg-transparent hover:bg-neutral-tertiary hover:text-heading rounded-base text-sm w-9 h-9 ms-auto inline-flex justify-center items-center" data-modal-hide="default-modal">
                                                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"/></svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                    </div>
                                                    <!-- Modal body -->
                                                    <div class="space-y-4 md:space-y-6 py-4 md:py-6">
                                                        <p class="leading-relaxed text-body">
                                                            With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
                                                        </p>
                                                        <p class="leading-relaxed text-body">
                                                            The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                                                        </p>
                                                    </div>
                                                    <!-- Modal footer -->
                                                    <div class="flex items-center border-t border-default space-x-4 pt-4 md:pt-5">
                                                        <button data-modal-hide="default-modal" type="button" class="text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">I accept</button>
                                                        <button data-modal-hide="default-modal" type="button" class="text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">Decline</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>