@extends('adminlte::page')

@section('title', 'NSC')

@section('content_header')
<div class="text-center">
    <img src="{{ asset('imagenes/Logo-NSCFinal-Negro.png') }}" width="300" height="85" alt="">
</div>
@stop

@section('content')
    <div class="container col-md-8">
        <div class="card">
            <div class="card-header bg-success">
            <div class="text-center">
                    <h5 class="m-auto p-2"><strong>AUTORIZACIÓN REPRESENTANTE LEGAL DE RETIRO DE ESTUDIANTES</strong> <i class="far fa-user"></i></h5>
                </div>
            </div>
            <div class="p-3">
                <p class="d-inline m-auto">Yo, </p>
                <input type="text" class="d-inline text-center border-0 w-25 border-bottom" value="john" name="" id=""> 
                <input type="text" class="d-inline text-center border-0 w-25 border-bottom" value="romero" name="" id="">  
                con número de cédula 
                <input type="text" class="d-inline border-0 text-center w-25" value="0955546601">
                Representante legal del Estudiante
                <input type="text" name="" class="d-inline border-0 text-center w-25" value="John" id="">
                <input type="text" name="" class="d-inline border-0 text-center w-25" value="Romero" id="">
                con número de cédula 
                <input type="text" class="d-inline border-0 text-center w-25" value="0955546601">
                , perteneciente al curso
                <select class="d-inline text-center border-0" id="exampleFormControlSelect1">
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
                <p class="d-inline">con dirección domiciliaria </p>
                <input type="text" name="" id="" class="d-inline text-center border-0 w-25" value="Pradera 2 Bloque 2 Departamento 6">
                <p class="d-inline">con número de teléfono </p>
                <input type="text" class="d-inline text-center border-0 w-25" name="" id="" value="0991035787">
                <p class="d-inline">Email</p>
                <input type="text" class="d-inline border-0 text-center" name="" id="" value="jjairo5599@gmail.com">
                <p class="d-inline">Autorizo que mi representando regrese al domicilio mencionado, acompañado de un familiar o conocido de confianza, desvinculando a la Escuela Nuestra Señora del Carmen de la reponsabilidad de cualquier eventualidad que se produzca durante el trayecto al domicilia. </p>
                <div class="container p-3 mt-3">
                    <table class="table table-striped">
                        <thead class="text-center">
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Cédula</th>
                            <th scope="col">teléfono</th>
                            <th scope="col">teléfono</th>
                        </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <th scope="row">1</th>
                                <td> <input type="text" class="form-control text-center"> </td>
                                <td> <input type="text" class="form-control text-center"> </td>
                                <td> <input type="text" class="form-control text-center"> </td>
                                <td> <input type="text" class="form-control text-center"> </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td> <input type="text" class="form-control text-center"> </td>
                                <td> <input type="text" class="form-control text-center"> </td>
                                <td> <input type="text" class="form-control text-center"> </td>
                                <td> <input type="text" class="form-control text-center"> </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td> <input type="text" class="form-control text-center"> </td>
                                <td> <input type="text" class="form-control text-center"> </td>
                                <td> <input type="text" class="form-control text-center"> </td>
                                <td> <input type="text" class="form-control text-center"> </td>
                            </tr>    
                        </tbody>
                    </table>
                </div>
                <div class="callout callout-success">
                    En caso de que exista algún cambio de información me comprometo a notificarlo oportunamente a la máxima autoridad de la Institución Educativa.
                    Anexo copia de cédula de la(s) persona(s) autorizada(s), para efecto y constancia.
                </div>
            </div>
            <div class="card-footer">
                <div class="text-center">
                    <button class="btn btn-success">Aceptar y continuar <i class="fas fa-pencil-alt"></i></button>
                </div>
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
            outline:none;
        }
        select{
            outline:none;
        }
    </style>
@stop

@section('js')
  
@stop