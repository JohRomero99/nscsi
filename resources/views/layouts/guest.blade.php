<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

         <!--  Fontawemesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="grid grid-cols-3">

            <!-- Imagen lado izquierdo -->
            <div class="col-span-2">
                <div class="bg-gray-100 bg-cover bg-center min-h-screen flex flex-col items-center justify-center p-20">
                    <!-- <img src="{{ asset('imagenes/LogoNSCFinalNegro.png') }}" class="mb-4" width="300" height="50" alt="LogoNSCFinalNegro"> -->
                    <div class="space-y-6 max-w-md text-center">
                        <h1 class="text-5xl font-bold leading-tight">
                            ¡Unidad Educativa <br> Nuestra Señora del Carmen!
                        </h1>
                        <p class="text-lg">
                            "Formando con amor, educando para la vida."
                        </p>
                    </div>

                    <!-- Valores -->
                    <div class="grid grid-cols-3 gap-4 mt-10 text-sm">
                        <div class="text-center">
                            <i class="fa-solid fa-user-graduate fa-xl"></i><br>Educación
                        </div>
                        <div class="text-center">
                            <i class="fa-solid fa-heart fa-xl"></i><br>Valores
                        </div>
                        <div class="text-center">
                            <i class="fa-solid fa-star fa-xl"></i><br>Excelencia
                        </div>
                    </div>

                    <!-- Línea decorativa -->
                    <div class="w-32 h-1 mt-10 bg-yellow-400 rounded-full"></div>

                    <div class="grid grid-cols-3">
                        <div class="col-span-1">
                            <div class="flex justify-end">
                                <img src="{{ asset('imagenes/iso.png') }}" class="mt-4" width="100" height="50" alt="iso">
                            </div>
                        </div>
                        <div class="col-span-1">
                            <div class="flex justify-center">
                                <img src="{{ asset('imagenes/corazon.png') }}" class="mt-6" width="300" height="50" alt="corazon">
                            </div>
                        </div>
                        <div class="col-span-1">
                            <div class="flex justify-start">
                                <img src="{{ asset('imagenes/isoDos.png') }}" class="mt-4" width="100" height="50" alt="isoDos">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Diseño login -->
            <div class="col-span-1">
                <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 dark:bg-gray-900">
                    <div>
                        <a href="/">
                            <img src="{{ asset('imagenes/VirgenNSC.png') }}" width="100" height="50" alt="LogoPlataforma">
                        </a>
                    </div>

                    <div>
                        <h3 class="text-center mt-4 text-4xl font-bold text-[#4b5563]">¡Iniciar Sesión!</h3>
                    </div>

                    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 overflow-hidden sm:rounded-lg">
                        {{ $slot }}
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>
