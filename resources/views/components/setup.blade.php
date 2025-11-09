<!-- component -->
@props([
    'colorFondo' => '',
    'icono' => '',
    'colorFondoTres' => '',
    'iconoTres' => '',
    ])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">                      
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('imagenes/VirgenNSC.ico') }}" type="image/x-icon">
    @vite('resources/css/app.css')
    
    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <title>Formulario de Inscripción</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Fontawemesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
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
                            <span class="absolute flex items-center justify-center w-8 h-8 bg-[#89462a] rounded-full -start-4 ring-4 ring-white dark:ring-gray-900 dark:bg-green-900">
                                <i class="fa-solid fa-check text-white"></i>
                            </span>
                            <h3 class="font-medium leading-tight">Datos del Representante</h3>
                            <p class="text-sm">Información del Representante</p>
                        </li>
                        {{-- Paso 2 --}}
                        <li class="mb-10 ms-6">
                            <span class="absolute flex items-center justify-center w-8 h-8 {{ $colorFondo }} rounded-full -start-4 ring-4 ring-white dark:ring-gray-900 dark:bg-gray-700">
                                <i class="{{ $icono }}"></i>
                            </span>
                            <h3 class="font-medium leading-tight">Datos del Estudiante</h3>
                            <p class="text-sm">Información del Estudiante</p>
                        </li>
                        {{-- Paso 3 --}}
                        <li class="ms-6">
                            <span class="absolute flex items-center justify-center w-8 h-8 {{ $colorFondoTres }} rounded-full -start-4 ring-4 ring-white dark:ring-gray-900 dark:bg-gray-700">
                                <i class="{{ $iconoTres }}"></i>
                            </span>
                            <h3 class="font-medium leading-tight">Email</h3>
                            <p class="text-sm">Revisar Bandeja de entrada</p>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="col-start-1 sm:col-span-4 md:col-span-4 lg:col-span-3">
                <div class="container" style="background-image: url('{{ asset('imagenes/fondoAcademico.png') }}')">
                    
                    <div class="container mt-1 p-1">
                        <div class="flex justify-center">
                            <img 
                                src="{{ asset('imagenes/LogoNSCFinalNegro.png') }}"
                                class="mt-1"
                                alt="send"
                                width="40%"
                                height="40%"
                            >
                        </div>
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
        @if (session('info'))
            Swal.fire({
                title: "Info",
                text: "Ya existe un registro asociado a tu información. Por favor, revisa tu correo electrónico para continuar el proceso.",
                icon: "info"
            });
        @endif
    </script>

    <!-- Sección para agregar scripts desde otras vistas -->
    @stack('scripts')
</html>