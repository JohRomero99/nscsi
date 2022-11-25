<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="iconos/VirgenNSC.ico" type="image/x-icon">
    <title>Registro</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
    <!-- Iconos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Iconos bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>

    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm p-0 mb-2">
        <div class="container">
            <a class="navbar-brand"  href="{{ url('/') }}">
                <img src="https://i.ibb.co/CQpVr0x/Virgen-NSC.png" width="50" height="50">
                    Nuestra Señora Del Carmen
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">
                <!--  -->
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                <!--  -->
                </ul>
            </div>
        </div>
    </nav>


<div class="container mt-4">
    @if ( Request::route()->getName() == 'verificar' || Request::route()->getName() == 'completar-perfil.vista' || Request::route()->getName() == 'register.verificar' )
    <div class="text-center h4 color-text" >CREACION DE USUARIO</div>
    <div class="text-center"><small>Complete todos los campos del formulario para ir al siguiente paso</small>  </div>
    @endif
    <div class="d-flex justify-content-center">
    @if ( Request::route()->getName() == 'verificar' )
        <div class="container p-4">
            <div class="row">
                <div class="col-2">
                <div class="row">
                    <div class="col-5 d-flex justify-content-end">
                    <div class="circulo bg-primary row justify-content-center align-items-center">
                        <i class="bi bi-shield-fill-check text-white text-center"></i>
                    </div>
                    </div>
                    <div class="col-7 text-center d-flex align-items-center">
                        <strong class="text-muted text-center">Idendificación</strong>
                    </div>
                </div>
                </div>
                <div class="col-3 mt-2">
                <hr>
                </div>
                <div class="col-2">
                <div class="row">
                    <div class="col-5 d-flex justify-content-end">
                    <div class="circulo bg-white border border-success row justify-content-center align-items-center">
                        <i class="bi bi-person-badge-fill text-center"></i>
                    </div>
                    </div>
                    <div class="col-7 text-center d-flex align-items-center">
                    <strong class="text-muted text-center">Resgitro</strong>
                    </div>
                </div>
                </div>
                <div class="col-3 mt-2">
                <hr>
                </div>
                <div class="col-2 opacity">
                <div class="row">
                    <div class="col-5 d-flex justify-content-end">
                    <div class="circulo bg-white border border-success row justify-content-center align-items-center">
                        <i class="bi bi-check-circle-fill text-center"></i>
                    </div>
                    </div>
                    <div class="col-7 text-center d-flex align-items-center">
                    <strong class="text-muted text-center">Creación de Usuario
                    </strong>
                    </div>
                </div>
                </div>
            </div>
        </div>
    @endif
    @if ( Request::route()->getName() == 'completar-perfil.vista' )
        <div class="container p-4">
            <div class="row">
                <div class="col-2">
                <div class="row">
                    <div class="col-5 d-flex justify-content-end">
                    <div class="circulo bg-primary row justify-content-center align-items-center">
                        <i class="bi bi-shield-fill-check text-white text-center"></i>
                    </div>
                    </div>
                    <div class="col-7 text-center d-flex align-items-center">
                        <strong class="text-muted text-center">Idendificación</strong>
                    </div>
                </div>
                </div>
                <div class="col-3 mt-2">
                <hr>
                </div>
                <div class="col-2">
                <div class="row">
                    <div class="col-5 d-flex justify-content-end">
                    <div class="circulo bg-primary row justify-content-center align-items-center">
                        <i class="bi bi-person-badge-fill text-white text-center"></i>
                    </div>
                    </div>
                    <div class="col-7 text-center d-flex align-items-center">
                    <strong class="text-muted text-center">Resgitro</strong>
                    </div>
                </div>
                </div>
                <div class="col-3 mt-2">
                <hr>
                </div>
                <div class="col-2 opacity">
                <div class="row">
                    <div class="col-5 d-flex justify-content-end">
                    <div class="circulo bg-white border border-success row justify-content-center align-items-center">
                        <i class="bi bi-check-circle-fill text-center"></i>
                    </div>
                    </div>
                    <div class="col-7 text-center d-flex align-items-center">
                    <strong class="text-muted text-center">Creación de Usuario
                    </strong>
                    </div>
                </div>
                </div>
            </div>
        </div>
    @endif
    @if ( Request::route()->getName() == 'register.verificar' )
        <div class="container p-4">
            <div class="row">
                <div class="col-2">
                <div class="row">
                    <div class="col-5 d-flex justify-content-end">
                    <div class="circulo bg-primary row justify-content-center align-items-center">
                        <i class="bi bi-shield-fill-check text-white text-center"></i>
                    </div>
                    </div>
                    <div class="col-7 text-center d-flex align-items-center">
                        <strong class="text-muted text-center">Idendificación</strong>
                    </div>
                </div>
                </div>
                <div class="col-3 mt-2">
                <hr>
                </div>
                <div class="col-2">
                <div class="row">
                    <div class="col-5 d-flex justify-content-end">
                    <div class="circulo bg-primary row justify-content-center align-items-center">
                        <i class="bi bi-person-badge-fill text-white text-center"></i>
                    </div>
                    </div>
                    <div class="col-7 text-center d-flex align-items-center">
                    <strong class="text-muted text-center">Resgitro</strong>
                    </div>
                </div>
                </div>
                <div class="col-3 mt-2">
                <hr>
                </div>
                <div class="col-2 opacity">
                <div class="row">
                    <div class="col-5 d-flex justify-content-end">
                    <div class="circulo bg-primary row justify-content-center align-items-center">
                        <i class="bi bi-check-circle-fill text-center "></i>
                    </div>
                    </div>
                    <div class="col-7 text-center d-flex align-items-center">
                    <strong class="text-muted text-center">Creación de Usuario
                    </strong>
                    </div>
                </div>
                </div>
            </div>
        </div>
    @endif
    </div>
</div>

<div class="">
    @yield('content')
</div>

<style>
    body{
    /* background-color: #e8eaf6; */
        background-image: url("https://investigarte.in/wp-content/uploads/2022/06/boseto.png")
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
    .circulo {
        width: 45px;
        height: 45px;
        -moz-border-radius: 50%;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        /* background: #90DA76; */
    }
</style>

</body>
</div>