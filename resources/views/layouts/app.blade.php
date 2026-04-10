<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Nuestra Señora del Carmen</title>

        <link rel="icon" type="image/x-icon" href="{{ asset('imagenes/nsc.ico') }}">

        <!--  Fontawemesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Sweet alert -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <!-- Flowbite -->
        <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- livewireStyles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <div class="sm:ml-64 min-h-screen bg-white" style="background-image: url('{{ asset('imagenes/fondoAcademico.png') }}')">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="shadow bg-white">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex items-center justify-between">
                        <!-- Título -->
                        <div>
                            {{ $header }}
                        </div>

                        <!-- Año lectivo -->
                        <div class="flex items-center space-x-1">
                            <label 
                                class="block text-sm"
                            >   
                                Periodo Lectivo
                            </label>

                            <select 
                                name = "periodo_lectivo"
                                class="mt-1 block border-gray-300 w-full rounded-md text-sm"
                            >

                                <option value="">2026 - 2027</option>
                                <option value="">2027 - 2028</option>
                                <option value="">2029 - 2030</option>
                            </select>
                        </div>
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        <!-- Flowbite -->
        <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

        <!-- Livewire scripts -->
        @livewireScripts
    </body>
    @stack('scripts')
</html>
