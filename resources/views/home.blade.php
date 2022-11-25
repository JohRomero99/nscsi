@extends('layouts.app')

@section('content')

<div class="d-flex align-items-center justify-content-center vh-100">
    <div class="text-center">
        <h1 class="display-1 fw-bold">Acceso Denegado</h1>
        <p class="fs-3"> <span class="text-danger">Ups!</span> Ha ocurrido un fallo! </p>
        
        <p class="lead">
        Por favor, contacte con Soporte Técnico
        </p>
        
        <p class="h2">
            <a class="mr-2" href="https://wa.me/message/HN3GQG65MEV5K1"><i class="fab fa-whatsapp"></i></a>
            <a href="mailto:soporte.tecnico@nsc.edu.ec"><i class="fas fa-envelope"></i></a>
        </p>
    </div>
</div>
@endsection
