@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
<p class="h2">Bienvenido/a {{$representante->persona->primer_nombre ?? 'None' }} {{$representante->persona->apellido_paterno ?? 'None' }}</p>
<p class="h3">Estudiantes:</p>
@stop

@section('content')

<div class="content p-3">
    
        @foreach ($estudiantes as $estudiante)
        <div class="my-2">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('representante.admision', ['id' => $estudiante->id])}}" class="text-decoration-none">
                        <div class="row align-items-center">
                            <div class="col-lg-1 col-sm-12 mb-2 text-center">
                                <i class="fas fa-user-graduate"></i>
                            </div>
                            <div class="col-lg-8 col-sm-12 mb-2">
                                <span> Ci: {{$estudiante->persona->cedula}} | {{$estudiante->persona->apellido_paterno}} {{$estudiante->persona->apellido_materno}} {{$estudiante->persona->primer_nombre}} {{$estudiante->persona->segundo_nombre}}</span> 
                            </div>
                            <div class="col-lg-2 col-sm-12 text-center mb-2">
                                <span class="btn btn-warning"> Estado:  {{$estudiante->estado}}</span> 
                            </div>
                            <div class="col-lg-1 col-sm-12 text-center mb-2">
                                <i class="fas fa-check-circle text-center text-warning"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    
        @include('sweetalert::alert')
@stop
@section('css')
    <link rel="shortcut icon" href="iconos/VirgenNSC.ico" type="image/x-icon">
@stop