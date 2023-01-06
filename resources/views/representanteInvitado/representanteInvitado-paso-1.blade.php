@extends('adminlte::page')

@section('title', 'NSC')

@section('content_header')
<div class="text-center">
    <img src="{{ asset('imagenes/Logo-NSCFinal-Negro.png') }}" width="300" height="85" alt="">
</div>
@stop

@section('content')
    <div class="container col-md-7">
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

    <!-- Icono página -->
    <link rel="shortcut icon" href="{{ asset('imagenes/VirgenNSC.png') }}" type="image/x-icon">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop