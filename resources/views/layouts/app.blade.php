<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>NSC - Unidad Educativa Nuestra Señora Del Carmen</title>

    <!-- Icono de Sistema -->
    <link rel="shortcut icon" href="https://i.ibb.co/rbpNhJS/Virgen-NSC.png" type="image/x-icon">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Iconos bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Sweet Alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Fontawesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm p-0">
            <div class="container">
                <a class="navbar-brand p-2" href="{{ url('/home') }}">
                    <img src="https://i.ibb.co/CQpVr0x/Virgen-NSC.png" width="50" height="50">
                        NSC
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

            @if( Request::route()->getName() == 'verification.notice' || Request::route()->getName() == 'vista-actualizar-contrasena' || Request::route()->getName() == 'vista-actualizar-perfil' || Request::route()->getName() == 'vista-actualizar-correo'  )
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    @if( Auth::user()->representante == null )    
                                        salir
                                    @else
                                        {{ Auth::user()->representante->persona->primer_nombre }}
                                    @endif
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            @endif
            </div>
        </nav>

        <div class="container mt-4">
            @if ( Request::route()->getName() == 'vista-actualizar-contrasena' || Request::route()->getName() == 'vista-actualizar-contrasena' ||  Request::route()->getName() == 'vista-actualizar-correo' )
            <div class="text-center h2 color-text text-success" ><strong>Actualiza tus datos</strong></div>
            <div class="text-center text-muted"><small>Complete todos los campos del formulario para continuar</small>  </div>
            @endif
            <div class="d-flex justify-content-center">
            @if ( Request::route()->getName() == 'vista-actualizar-contrasena')
                <div class="container p-1">
                    <div class="row d-flex justify-content-center centrar">
                        <div class="col-2">
                            <div class="row">
                                <div class="col-5 d-flex justify-content-end izquierda">
                                    <div class="circulo bg-primary row justify-content-center align-items-center">
                                        <i class="bi bi-shield-fill-check text-white text-center"></i>
                                    </div>
                                </div>
                                <div class="col-7 text-center d-flex align-items-center quitar ">
                                    <strong class="text-muted text-center">Actualizar contraseña</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-1 mt-2 quitar ">
                            <hr>
                        </div>
                        <div class="col-2">
                            <div class="row">
                                <div class="col-5 d-flex justify-content-end izquierda">
                                    <div class="circulo bg-white border border-success row justify-content-center align-items-center">
                                        <i class="bi bi-person-badge-fill text-center"></i>
                                    </div>
                                </div>
                                <div class="quitar col-7 text-center d-flex align-items-center">
                                    <strong class="text-muted text-center">Completar Perfil</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-1 mt-2 quitar ">
                            <hr>
                        </div>
                        <div class="col-2 opacity">
                            <div class="row">
                                <div class="col-5 d-flex justify-content-end izquierda">
                                    <div class="circulo bg-white border border-success row justify-content-center align-items-center">
                                        <i class="bi bi-check-circle-fill text-center"></i>
                                    </div>
                                </div>
                                <div class="col-7 text-center d-flex align-items-center quitar ">
                                    <strong class="text-muted text-center">Actualizar Correo
                                    </strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <!-- @if ( Request::route()->getName() == 'vista-actualizar-perfil' )

            @endif -->
            @if ( Request::route()->getName() == 'vista-actualizar-correo' )
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-2">
                            <div class="row d-flex justify-content-center">
                                <div class="col-5 d-flex justify-content-end izquierda_3">
                                    <div class="circulo_3 bg-primary row justify-content-center align-items-center">
                                        <i class="bi bi-shield-fill-check text-white text-center"></i>
                                    </div>
                                </div>
                                <div class="quitar_3 col-7 text-center d-flex align-items-center">
                                    <strong class="text-muted text-center">Actualizar Contraseña</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-1 mt-2 quitar_3">
                            <hr>
                        </div>
                        <div class="col-2">
                            <div class="row">
                                <div class="col-5 d-flex justify-content-end izquierda_3">
                                    <div class="circulo_3 bg-primary row justify-content-center align-items-center">
                                        <i class="bi bi-person-badge-fill text-white text-center"></i>
                                    </div>
                                </div>
                                <div class="col-7 text-center d-flex align-items-center quitar_3 ">
                                    <strong class="text-muted text-center">Completar Perfil</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-1 mt-2 quitar_3">
                            <hr>
                        </div>
                        <div class="col-2 opacity">
                            <div class="row">
                                <div class="col-5 d-flex justify-content-end izquierda_3">
                                    <div class="circulo_3 bg-primary row justify-content-center align-items-center">
                                        <i class="bi bi-check-circle-fill text-white text-center"></i>
                                    </div>
                                </div>
                                <div class="col-7 text-center d-flex align-items-center quitar_3">
                                    <strong class="text-muted text-center">Actualizar Correo</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            </div>
        </div>

        <main class="py-0">
            @yield('content')
        </main>
    </div>
</body>
<style>
    body {
        background-image: url("https://investigarte.in/wp-content/uploads/2022/06/boseto.png")
    }
    .bg {
        background: #E8F0FE !important;
    }
    .wizard{
        height: 30px;
        width: 140px;
        border-bottom: 2px solid #9a6448;
    }
    .disabled { 
        pointer-events: none;
        cursor: default;
    }
    .circulo   {
        width: 45px;
        height: 45px;
        -moz-border-radius: 50%;
        -webkit-border-radius: 50%;
        border-radius: 50%;
    }
    .circulo_2 {
        width: 45px;
        height: 45px;
        -moz-border-radius: 50%;
        -webkit-border-radius: 50%;
        border-radius: 50%;
    }
    .circulo_3 {
        width: 45px;
        height: 45px;
        -moz-border-radius: 50%;
        -webkit-border-radius: 50%;
        border-radius: 50%;
    }
    *{
        font-family: Arial;
    }
</style>

@if(session('completar') == 'Termina de completar tu perfil para porder continuar' )
<script>
    const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
  })

  Toast.fire({
    icon: 'info',
    title: 'Termina de completar tu perfil para porder continuar'
  })
</script>
@endif

</html>


