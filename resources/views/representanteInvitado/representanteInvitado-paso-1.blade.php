@extends('adminlte::page')

@section('title', 'NSC')

@section('content_header')
<h1>Ficha de Matriculación</h1>
@stop

@section('content')
    <div class="container col-md-7">
        <div class="card">
            <div class="card-header">
                <div class="text-center">
                    <h5 class="m-auto"><strong>DATOS DEL ESTUDIANTE</strong> <i class="far fa-user"></i></h5>
                </div>
            </div>
            <p class="text-center mt-3 mb-0 text-muted">Complete la información del siguiente formulario.</p>
            <div class="card-body">
                <form>
                    <div class="card p-3">
                        <div class="d-flex justify-content-center">
                            <div class="form-group row col-md-12">
                                <label for="exampleFormControlSelect1" class="text-center mt-2" >Tipo de Identificación</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                  <option>cédula</option>
                                  <option>pasaporte</option>
                                </select>
                                <small id="emailHelp" class="form-text text-muted">Este campo es requerido.</small>
                            </div>
                        </div>
                        <p class="text-center m-auto"><strong>Cédula</strong></p>
                        <div class="d-flex justify-content-center">
                            <input type="text" class="form-control text-center mt-2 mb-2 col-md-5">
                        </div>
                    </div>
                    <div class="card p-3">
                        <div class="form-group row col-md-12">
                            <label for="exampleFormControlInput1" class="text-center">Nombres Completos</label>
                            <div class="row">
                                <div class="col-6 mt-1">
                                    <input type="select" class="form-control" id="exampleFormControlInput1" placeholder="Primer Nombre">
                                </div>
                                <div class="col-6 mt-1">
                                    <input type="select" class="form-control" id="exampleFormControlInput1" placeholder="Segundo Nombre">
                                </div>
                                <div class="col-6 mt-1">
                                    <input type="select" class="form-control" id="exampleFormControlInput1" placeholder="Apellido Paterno">
                                </div>
                                <div class="col-6 mt-1">
                                    <input type="select" class="form-control" id="exampleFormControlInput1" placeholder="Apellido Materno">
                                </div>
                            </div>
                            <small id="emailHelp" class="form-text text-muted mt-2">Estos campos son requeridos.</small>
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            <div class="form-group row col-md-12">
                                <label for="exampleFormControlSelect1" class="text-center mt-2" >Año de Básica</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option value="1">INICIAL 1A</option>
                                    <option value="2">INICIAL 2A</option>
                                    <option value="3">INICIAL 2B</option>
                                    <option value="3">PREPARATORIA A</option>
                                    <option value="3">PREPARATORIA B</option>
                                    <option value="3">PREPARATORIA C</option>
                                    <option value="3">SEGUNDO A</option>
                                    <option value="3">SEGUNDO B</option>
                                    <option value="3">SEGUNDO C</option>
                                </select>
                                <small id="emailHelp" class="form-text text-muted">Este campo es requerido.</small>
                            </div>
                        </div>
                    </div>
                    <div class="card p-3">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Código Único Eléctrico Nacional del Domicilio del Estudiante</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <small id="emailHelp" class="form-text text-muted">Este código lo encuentra en su planilla de servicios eléctricos CNEL.</small>
                        <label for="" class="mt-3">Transporte Escolar</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Retiro personalmente (o persona autorizada)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Expreso por mi cuenta
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Requiero expreso
                            </label>
                        </div>


                        <label for="" class="mt-3">Ruta</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Alborada
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Garzota
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Guayacanes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Guayacanes-Samanes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                La Joya
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Matices Villa club
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Matices Veranda
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Metrópolis 2
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Mucho lote 1 - Ciudad Domingo
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Mucho lote 2
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Orquideas Vergeles
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Rosales - Alamos - Condor
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Samanes 7 - J. Montalvo
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Sauces
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Sur Oeste - M de Roldos
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Vía Salitre
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Villa del Rey
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Villa Italia - La Rioja
                            </label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="text-center">
                    <button class="btn btn-success">Siguiente <i class="fas fa-arrow-alt-circle-right"></i></button>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop