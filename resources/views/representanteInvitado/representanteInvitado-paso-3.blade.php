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
                    <h5 class="m-auto"><strong>DATOS DE FACTURACIÓN</strong> <i class="fas fa-coins"></i></h5>
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
                    <div class="d-flex justify-content-center">
                        <div class="form-group row col-md-12">
                            <label for="exampleFormControlSelect1" class="text-center mt-2" >Nombre / Razón Social</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                              <option>Nombre</option>
                              <option>Razón Social</option>
                            </select>
                            <small id="emailHelp" class="form-text text-muted">Este campo es requerido.</small>
                        </div>
                    </div>
                    <p class="text-center m-auto"><strong>Nombre</strong></p>
                    <div class="d-flex justify-content-center">
                        <input type="text" class="form-control text-center mt-2 mb-2 col-md-5">
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
            </div>
            <div class="card-footer">
                <div class="text-center">
                    <button type="button" class="btn btn-success"><i class="fas fa-arrow-alt-circle-left"></i> Anterior</button>
                    <button type="submit" class="btn btn-success">Siguiente <i class="fas fa-arrow-alt-circle-right"></i></button>
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