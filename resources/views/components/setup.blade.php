<!-- component -->
{{-- <div class="w-full py-6">
    <div class="flex">
        <div class="w-1/3">
            <div class="relative mb-2">
                <div class="w-10 h-10 mx-auto bg-green-500 rounded-full text-lg text-white flex items-center">
                    <span class="text-center text-white w-full"> <!-- color icono -->
                        <svg class="w-full fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path class="heroicon-ui" d="M5 3h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2zm14 8V5H5v6h14zm0 2H5v6h14v-6zM8 9a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm0 8a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                        </svg>
                    </span>
                </div>
            </div>
            <div class="text-xs text-center md:text-base">Datos Representante</div>
        </div>
    
        <div class="w-1/3">
            <div class="relative mb-2">
                <div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                    <div class="w-full bg-gray-200 rounded items-center align-middle align-center flex-1">
                        <div id="colorBarra" class="w-0 bg-gray-200 py-1 rounded" style="width: 100%;"></div> <!-- color barra -->
                    </div>
                </div>
                <div id="colorFondoIcono" class="w-10 h-10 mx-auto bg-white border-2 border-gray-200 rounded-full text-lg text-white flex items-center"> 
                    <span id="colorIcono" class="text-center text-gray-900 w-full"> <!-- color icono -->
                        <svg class="w-full fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path class="heroicon-ui" d="M19 10h2a1 1 0 0 1 0 2h-2v2a1 1 0 0 1-2 0v-2h-2a1 1 0 0 1 0-2h2V8a1 1 0 0 1 2 0v2zM9 12A5 5 0 1 1 9 2a5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm8 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h5a5 5 0 0 1 5 5v2z"/>
                        </svg>
                    </span>
                </div>
            </div>
            <div class="text-xs text-center md:text-base">Datos Estudiante</div>
        </div>
    
        <div class="w-1/3">
            <div class="relative mb-2">
                <div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                    <div class="w-full bg-gray-200 rounded items-center align-middle align-center flex-1">
                        <div class="w-0 bg-gray-200 py-1 rounded" style="width: 33%;"></div> <!-- color barra -->
                    </div>
                </div>
                <div class="w-10 h-10 mx-auto bg-white border-2 border-gray-200 rounded-full text-lg text-white flex items-center">
                    <span class="text-center text-gray-900 w-full"> <!-- color icono -->
                        <svg class="w-full fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-2.3-8.7l1.3 1.29 3.3-3.3a1 1 0 0 1 1.4 1.42l-4 4a1 1 0 0 1-1.4 0l-2-2a1 1 0 0 1 1.4-1.42z"/>
                        </svg>
                    </span>
                </div>
            </div>
            <div class="text-xs text-center md:text-base">Finalizar</div>
        </div>
    </div>
</div> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">                      
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    
    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <title>Admision</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Fontawemesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    {{-- jQuery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-cover bg-no-repeat bg-center bg-fixed" style="background-image: url('{{ asset('imagenes/admisionFond.png') }}')">
    <div class="container mx-auto p-6">
        <div class="grid sm:grid-cols-4 md:grid-cols-4 lg:grid-cols-4 shadow-xl">
            <div class="hidden lg:block col-start-1 col-span-1 bg-slate-100">
                <div class="container mx-auto p-10">
                    <ol class="relative text-gray-500 border-s border-gray-200 dark:border-gray-700 dark:text-gray-400">                  
                        {{-- Paso 1 --}}
                        <li class="mb-10 ms-6">            
                            <span class="absolute flex items-center justify-center w-8 h-8 bg-green-500 rounded-full -start-4 ring-4 ring-white dark:ring-gray-900 dark:bg-green-900">
                                <svg class="w-3.5 h-3.5 text-green-100 dark:text-green-100" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                                </svg>
                            </span>
                            <h3 class="font-medium leading-tight">Datos del Representante</h3>
                            <p class="text-sm">Información del Representante</p>
                        </li>
                        {{-- Paso 2 --}}
                        <li class="mb-10 ms-6">
                            <span class="absolute flex items-center justify-center w-8 h-8 bg-gray-100 rounded-full -start-4 ring-4 ring-white dark:ring-gray-900 dark:bg-gray-700">
                                <svg class="w-3.5 h-3.5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                    <path d="M18 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2ZM6.5 3a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5ZM3.014 13.021l.157-.625A3.427 3.427 0 0 1 6.5 9.571a3.426 3.426 0 0 1 3.322 2.805l.159.622-6.967.023ZM16 12h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2Zm0-3h-3a1 1 0 1 1 0-2h3a1 1 0 1 1 0 2Zm0-3h-3a1 1 0 1 1 0-2h3a1 1 0 1 1 0 2Z"/>
                                </svg>
                            </span>
                            <h3 class="font-medium leading-tight">Datos del Estudiante</h3>
                            <p class="text-sm">Información del Estudiante</p>
                        </li>
                        {{-- Paso 4 --}}
                        <li class="ms-6">
                            <span class="absolute flex items-center justify-center w-8 h-8 bg-gray-100 rounded-full -start-4 ring-4 ring-white dark:ring-gray-900 dark:bg-gray-700">
                                <svg class="w-3.5 h-3.5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                    <path d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2ZM7 2h4v3H7V2Zm5.7 8.289-3.975 3.857a1 1 0 0 1-1.393 0L5.3 12.182a1.002 1.002 0 1 1 1.4-1.436l1.328 1.289 3.28-3.181a1 1 0 1 1 1.392 1.435Z"/>
                                </svg>
                            </span>
                            <h3 class="font-medium leading-tight">Confirmación</h3>
                            <p class="text-sm">Confirmación de los Datos</p>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="col-start-1 sm:col-span-4 md:col-span-4 lg:col-span-3">
                <div class="container">
                    <div class="conatiner m-auto pt-6 pl-5">
                        <h2 class="text-4xl font-extrabold dark:text-white">Formulario de Inscripción</h2>
                        {{-- <img src="{{ asset('imagenes/Nuestra Señora Del Carmen.png') }}" alt="Nuestra Señora Del Carmen"> --}}
                    </div>
                    <div class="container mt-1 p-1">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
    <style>
        .font-weight{
            font-weight: 900;
        }
    </style>
    <script>
        // Mostrar mensaje de datos enviados.
        @if (session('representante'))
            Swal.fire({
                title: "¡Exito!",
                text: "Datos Guardados con éxito",
                icon: "success"
            });
        @endif
        @if (session('estudiante'))
            Swal.fire({
                title: "¡Exito!",
                text: "Datos Guardados con éxito por favor revise su bandeja de entrada",
                icon: "success"
            });
        @endif
        @if (session('info'))
            Swal.fire({
                title: "Info",
                text: "Ya tienes registro creado, por favor, revisa tu bandeja de entrada",
                icon: "info"
            });
        @endif
    </script>

    <!-- Sección para agregar scripts desde otras vistas -->
    @stack('scripts')
</html>