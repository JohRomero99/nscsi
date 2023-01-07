@extends('adminlte::page')

@section('title', 'NSC')

@section('content_header')
<div class="text-center">
    <h1>Ficha de Matriculación</h1>
</div>
@stop

@section('content')
    <div class="container col-md-7">
        <div class="card">
            <div class="card-header">
                <div class="text-center">
                    <h5 class="m-auto text-muted">AUTORIZACIÓN REPRESENTANTE LEGAL DE RETIRO DE ESTUDIANTES <i class="fas fa-clipboard-list"></i></h5>
                </div>
            </div>
            <div class="card-body p-3">
                    Yo, <input type="text" class="form-control text-center w-25" text-center" value="john" name="" id=""> 
                    <input type="text" class="form-control text-center w-25" text-center" value="romero" name="" id="">  
                    con número de cédula 
                    <input type="text" class="form-control text-center" value="0955546601">.
                    Representante legal del Estudiante
                    <input type="text" name="" class="form-control" value="John" id="">
                    <input type="text" name="" class="form-control" value="Romero" id="">
                    con número de cédula 
                    <input type="text" class="form-control" value="0955546601">
                    , perteneciente al curso
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option value="INICIAL 1A">INICIAL 1A</option>
                        <option value="INICIAL 2A">INICIAL 2A</option>
                        <option value="INICIAL 2B">INICIAL 2B</option>
                        <option value="PREPARATORIA A">PREPARATORIA A</option>
                        <option value="PREPARATORIA B">PREPARATORIA B</option>
                        <option value="PREPARATORIA C">PREPARATORIA C</option>
                        <option value="SEGUNDO A">SEGUNDO A</option>
                        <option value="SEGUNDO B">SEGUNDO B</option>
                        <option value="SEGUNDO C">SEGUNDO C</option>
                        <option value="TERCERO A">TERCERO A</option>
                        <option value="TERCERO B">TERCERO B</option>
                        <option value="TERCERO C">TERCERO C</option>
                        <option value="CUARTO A">CUARTO A</option>
                        <option value="CUARTO B">CUARTO B</option>
                        <option value="CUARTO C">CUARTO C</option>
                        <option value="QUINTO A">QUINTO A</option>
                        <option value="QUINTO B">QUINTO B</option>
                        <option value="QUINTO C">QUINTO C</option>
                        <option value="SEXTO A">SEXTO A</option>
                        <option value="SEXTO B">SEXTO B</option>
                        <option value="SEPTIMO A">SEPTIMO A</option>
                        <option value="SEPTIMO B">SEPTIMO B</option>
                        <option value="OCTAVO A">OCTAVO A</option>
                        <option value="OCTAVO B">OCTAVO B</option>
                        <option value="NOVENO A">NOVENO A</option>
                        <option value="NOVENO B">NOVENO B</option>
                        <option value="DECIMO A">DECIMO A</option>
                        <option value="DECIMO B">DECIMO B</option>
                        <option value="1º BACHILLERATO A">1º BACHILLERATO A</option>
                        <option value="1º BACHILLERATO B">1º BACHILLERATO B</option>
                        <option value="2º BACHILLERATO A">2º BACHILLERATO A</option>
                    </select>
                    con dirección domiciliaria 
                    <input type="text" name="" id="" class="form-control text-center" value="Pradera 2 Bloque 2 Departamento 6">
                    con número de teléfono 
                    <input type="text" class="form-control text-center" name="" id="" value="0991035787">
                    Email 
                    <input type="text" class="form-control" name="" id="" value="jjairo5599@gmail.com">
                    Autorizo que mi representando regrese al domicilio mencionado, acompañado de un familiar o conocido de confianza, desvinculando a la Escuela Nuestra Señora del Carmen de la reponsabilidad de cualquier eventualidad que se produzca durante el trayecto al domicilia. 
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

    <style>
        input{
            display: inline;
        }
    </style>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop