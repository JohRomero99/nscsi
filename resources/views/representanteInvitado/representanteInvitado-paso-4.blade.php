@extends('adminlte::page')

@section('title', 'NSC')

@section('content_header')
<div class="text-center">
    <h1>Ficha de Matriculación</h1>
</div>
@stop

@section('content')
    <div class="container col-md-9">
        <div class="card">
            <div class="card-header">
            <div class="text-center">
                    <h5 class="m-auto text-muted">AUTORIZACIÓN REPRESENTANTE LEGAL DE RETIRO DE ESTUDIANTES <i class="fas fa-clipboard-list"></i></h5>
                </div>
            </div>
            <div class="card p-3">
                <p>Yo, _______________ , con numero de teléfono</p>
            </div>
            <div class="card-footer">

            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

    <!-- Icono página -->
    <link rel="shortcut icon" href="{{ asset('imagenes/VirgenNSC.png') }}" type="image/x-icon">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop