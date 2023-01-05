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
                    <h5 class="m-auto text-muted">DATOS DEL REPRESENTANTE <i class="far fa-user"></i></strong></h5>
                </div>
            </div>
            <p class="text-center mt-3 mb-0 text-muted">Complete la información del siguiente formulario.</p>
            <div class="card-body">
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
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Direccón Domiciliaria</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">Este campo es requerido.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Correo Electrónico</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="ejemplo@gmail.com" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">Ingrese un correo válido.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Número de teléfono</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="(000) 000 0000" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">Ingrese un número de teléfono válido.</small>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="form-group row col-md-12">
                        <label for="exampleFormControlSelect1" class="text-center mt-2" >Relación con el estudiante</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option>Padre</option>
                          <option>Madre</option>
                          <option>Otro (especifique)</option>
                        </select>
                        <small id="emailHelp" class="form-text text-muted">Este campo es requerido.</small>
                    </div>
                </div>
                <label for="">¿Cómo va a realizar el pago de las pensiones?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Pago total anual TC a 6 meses sin intereses (matrícula gratis)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Pago total anual TC a 10 meses sin intereses (plataforma gratis)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Pago total anual con transferencia bancaria (matrícula gratis)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Pago total anual efectivo en Colecturía (matrícula gratis)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Pago mensual transferencia bancaria
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Pago mensual tarjeta de crédito
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Pago mensual efectivo en Colecturía
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Pago mensual recaudación a domicilio
                    </label>
                </div>
            </div>
            <div class="container">
                <div class="card p-3">
                    <label for="">Facturación</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Marque aquí si desea que la factura sea emitida con otros datos diferentes a los del Representante.
                        </label>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="text-center">
                    <button class="btn btn-success"><i class="fas fa-arrow-alt-circle-left"></i> Anterior</button>
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

@stop