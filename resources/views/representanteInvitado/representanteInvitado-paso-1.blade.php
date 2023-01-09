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
                <div class="text-center p-2">
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
                            <input type="text" disabled class="form-control text-center mt-2 mb-2 col-md-5" value="{{ $estudiante->persona->identificacion }}">
                        </div>
                    </div>
                    <div class="card p-3">
                        <div class="form-group row col-md-12">
                            <label for="exampleFormControlInput1" class="text-center">Nombres Completos</label>
                            <div class="row">
                                <div class="col-6 mt-1">
                                    <div class="col">
                                        <label for="">Pimer Nombre</label>
                                    </div>
                                    <div class="col">
                                        <input disabled type="select" value="{{ $estudiante->persona->primer_nombre }}" class="form-control" id="exampleFormControlInput1" placeholder="Primer Nombre">
                                    </div>
                                </div>
                                <div class="col-6 mt-1">
                                    <div class="col">
                                        <label for="">Segundo Nombre</label>
                                    </div>
                                    <div class="col">
                                        <input disabled type="select" value="{{ $estudiante->persona->segundo_nombre }}" class="form-control" id="exampleFormControlInput1" placeholder="Segundo Nombre">
                                    </div>
                                </div>
                                <div class="col-6 mt-1">
                                    <div class="col">
                                        <label for="">Apellido Paterno</label>
                                    </div>
                                    <div class="col">
                                        <input disabled type="select" value="{{ $estudiante->persona->apellido_paterno }}" class="form-control" id="exampleFormControlInput1" placeholder="Apellido Paterno">
                                    </div>
                                </div>
                                <div class="col-6 mt-1">
                                    <div class="col">
                                        <label for="">Apellido Materno</label>
                                    </div>
                                    <div class="col">
                                        <input disabled type="select" value="{{ $estudiante->persona->apellido_materno }}" class="form-control" id="exampleFormControlInput1" placeholder="Apellido Materno">
                                    </div>
                                </div>
                            </div>
                            <small id="emailHelp" class="form-text text-muted mt-2">Estos campos son requeridos.</small>
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            <div class="form-group row col-md-12">
                                <label for="exampleFormControlSelect1" class="text-center mt-2" >Año de Básica</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="transporteEscolar">
                                    <option selected value="{{ $estudiante->curso }}"> {{ $estudiante->curso }} </option>
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
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Retiro personalmente (o persona autorizada)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2">
                            <label class="form-check-label" for="exampleRadios2">
                                Expreso por mi cuenta
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="transporteEscolar">
                            <label class="form-check-label" for="transporteEscolar">
                                Requiero expreso
                            </label>
                        </div>

                        <div id="ruta" style="display: none;">
                            <label class="mt-3">Ruta</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option1">
                                <label class="form-check-label" for="exampleRadios4">
                                    Alborada
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option1">
                                <label class="form-check-label" for="exampleRadios5">
                                    Garzota
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios6" id="exampleRadios6" value="option1">
                                <label class="form-check-label" for="exampleRadios6">
                                    Guayacanes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios7" value="option1">
                                <label class="form-check-label" for="exampleRadios7">
                                    Guayacanes-Samanes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios8" value="option1">
                                <label class="form-check-label" for="exampleRadios8">
                                    La Joya
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios9" value="option1">
                                <label class="form-check-label" for="exampleRadios9">
                                    Matices Villa club
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios10" value="option1">
                                <label class="form-check-label" for="exampleRadios10">
                                    Matices Veranda
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios11" value="option1">
                                <label class="form-check-label" for="exampleRadios11">
                                    Metrópolis 2
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios12" value="option1">
                                <label class="form-check-label" for="exampleRadios12">
                                    Mucho lote 1 - Ciudad Domingo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios13" value="option1">
                                <label class="form-check-label" for="exampleRadios13">
                                    Mucho lote 2
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios14" value="option1">
                                <label class="form-check-label" for="exampleRadios14">
                                    Orquideas Vergeles
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios15" value="option1">
                                <label class="form-check-label" for="exampleRadios15">
                                    Rosales - Alamos - Condor
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios16" value="option1">
                                <label class="form-check-label" for="exampleRadios16">
                                    Samanes 7 - J. Montalvo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios17" value="option1">
                                <label class="form-check-label" for="exampleRadios17">
                                    Sauces
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios18" value="option1">
                                <label class="form-check-label" for="exampleRadios18">
                                    Sur Oeste - M de Roldos
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios19" value="option1">
                                <label class="form-check-label" for="exampleRadios19">
                                    Vía Salitre
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios20" value="option1">
                                <label class="form-check-label" for="exampleRadios20">
                                    Villa del Rey
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios21" value="option1">
                                <label class="form-check-label" for="exampleRadios21">
                                    Villa Italia - La Rioja
                                </label>
                            </div>
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
    <!-- Icono página -->
    <link rel="shortcut icon" href="{{ asset('imagenes/VirgenNSC.png') }}" type="image/x-icon">
@stop

@section('js')

<script>
    var transporteEscolar = document.getElementById("transporteEscolar");
    var ruta = document.getElementById("ruta");

    transporteEscolar.addEventListener('click', function(){
        if(transporteEscolar.checked === true){
            ruta.style.display = 'block';
        }else{
            ruta.style.display = 'none';
        }
    });
</script>
@stop