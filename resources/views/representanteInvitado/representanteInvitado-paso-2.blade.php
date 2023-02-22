@extends('adminlte::page')

@section('title', 'NSC')

@section('content_header')
    <div class="text-center">
        <img src="{{ asset('imagenes/Logo-NSCFinal-Negro.png') }}" width="300" height="85" alt="">
    </div>
@stop

@section('content')
    <div class="container col-md-8">
        <form action="{{ route('representanteInvitado.paso-datos-2') }}" method="POST">
            @csrf
            <div class="card shadow">
                <div class="card-header bg-success">
                    <div class="text-center p-2">
                        <h5 class="m-auto"><strong>DATOS DEL REPRESENTANTE</strong> <i class="far fa-user"></i></strong></h5>
                    </div>
                </div>
                @if(is_null($representante->direccion_domiciliaria) || is_null($representante->direccion_domiciliaria) || is_null($representante->telefono_celular))
                    <div class="conatiner">
                        <div class="bs-callout bs-callout-success bs-callout-xl">
                            <div class="text-center">
                                <p class="m-auto"><i class="fas fa-info-circle text-danger"></i> <strong>¡Completa todos los campos con la información correspondiente para continuar!</strong></p>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="card-body">
                    <div class="card p-3 d-none">
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
                            <input type="text" name="identificacion" class="form-control text-center mt-2 mb-2 col-md-5" disabled value="{{ $representante->identificacion }}">
                        </div>
                    </div>
                    <div class="card p-3 d-none">
                        <div class="form-group row col-md-12">
                            <label for="exampleFormControlInput1" class="text-center">Nombres Completos</label>
                            <div class="row">
                                <div class="col-12 mt-1">
                                    <div class="col">
                                        <label for="">Primer Nombre</label>
                                    </div>
                                    <div class="col">
                                        <input type="select" name="primerNombre" disabled value="{{ $representante->primer_nombre }}" class="form-control inputDiseño" id="exampleFormControlInput1" placeholder="Primer Nombre">
                                    </div>
                                </div>
                                <div class="col-12 mt-1">
                                    <div class="col">
                                        <label for="">Segundo Nombre</label>
                                    </div>
                                    <div class="col">
                                        <input type="select" name="segundoNombre" disabled value="{{ $representante->segundo_nombre }}" class="form-control inputDiseño" id="exampleFormControlInput1" placeholder="Segundo Nombre">
                                    </div>
                                </div>
                                <div class="col-12 mt-1">
                                    <div class="col">
                                        <label for="">Apellido Paterno</label>
                                    </div>
                                    <div class="col">
                                        <input type="select" name="apellidoPaterno" disabled value="{{ $representante->apellido_paterno }}" class="form-control inputDiseño" id="exampleFormControlInput1" placeholder="Apellido Paterno">
                                    </div>
                                </div>
                                <div class="col-12 mt-1">
                                    <div class="col">
                                        <label for="">Apellido Materno</label>
                                    </div>
                                    <div class="col">
                                        <input type="select" name="apellidoMaterno" disabled value="{{ $representante->apellido_materno }}" class="form-control inputDiseño" id="exampleFormControlInput1" placeholder="Apellido Materno">
                                    </div>
                                </div>
                            </div>
                            <small id="emailHelp" class="form-text text-muted mt-2">Estos campos son requeridos.</small>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Direccón Domiciliaria</label>
                        @if(is_null($representante->direccion_domiciliaria))
                            <input type="text" value="{{ old('direccion_domiciliaria') }}" name="direccionDomicilio" class="form-control inputDiseño is-invalid" id="" aria-describedby="emailHelp">
                        @else
                            <input type="text" value="{{ $representante->direccion_domiciliaria }}" disabled name="direccionDomicilio" class="form-control inputDiseño" id="" aria-describedby="emailHelp">
                        @endif
                        <small id="emailHelp" class="form-text text-muted">Este campo es requerido.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Correo Electrónico</label>
                        @if(is_null($representante->correo))
                            <input type="email" value="{{ old('correo') }}" name="correo" class="form-control inputDiseño is-invalid" id="" placeholder="ejemplo@gmail.com" aria-describedby="emailHelp">
                        @else
                            <input type="email" disabled value="{{ $representante->correo }}" disabled name="correo" class="form-control inputDiseño is-valid" id="" placeholder="ejemplo@gmail.com" aria-describedby="emailHelp">
                        @endif
                        <small id="emailHelp" class="form-text text-muted">Ingrese un correo válido.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Número de teléfono</label>
                        @if(is_null($representante->telefono_celular))
                            <input type="text" value="{{ old('telefono_celular') }}" name="telefono_celular" class="form-control inputDiseño is-invalid" placeholder="(000) 000 0000" aria-describedby="emailHelp">
                        @else
                            <input type="text" disabled value="{{ $representante->telefono_celular }}" disabled name="telefono_celular" class="form-control" placeholder="(000) 000 0000" aria-describedby="emailHelp">
                        @endif
                        <small id="emailHelp" class="form-text text-muted">Ingrese un número de teléfono válido.</small>
                    </div>
                    <div class="form-group row col-md-12">
                        <label for="exampleFormControlSelect1" class="text-center mt-2" >Relación con el estudiante</label>
                        <select class="form-control" name="select" id="exampleFormControlSelect1">
                            <option>Padre</option>
                            <option>Madre</option>
                            <option>Otro (especifique)</option>
                        </select>
                        <small id="emailHelp" class="form-text text-muted">Este campo es requerido.</small>
                    </div>
                    <div class="form-group row col-md-12">
                        <label for="exampleFormControlSelect1" class="text-center mt-2" >¿Cómo va a realizar el pago de las pensiones?</label>
                            <select class="form-control" name="metodoPagoPensiones">
                                @foreach ( $metodoPagoPensiones as $m )
                                    <option value="{{$m->metodo_pago_pensiones}}"> {{$m->metodo_pago_pensiones}} </option>
                                @endforeach
                            </select>
                        <small id="emailHelp" class="form-text text-muted">Este campo es requerido.</small>
                    </div>
                </div>
                <div class="container">
                    <div class="card p-3">
                        <label for="">Facturación</label>
                        <div class="form-check">
                            <input class="form-check-input" name="factura" type="checkbox" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Marque aquí si desea que la factura sea emitida con otros datos diferentes a los del Representante.
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Guardar <i class="fas fa-save"></i></button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    @if(session('exito') == 'Informacion actualizada correctamente')
        <script>
            Swal.fire(
                'Exito',
                'Informacion actualizada correctamente',
                'success'
            )
        </script>
    @endif
@stop

@section('css')    
    <!-- Icono página -->
    <link rel="shortcut icon" href="{{ asset('imagenes/VirgenNSC.png') }}" type="image/x-icon">

    <!-- Sweetalert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        .inputDiseño{
            padding: 20px 20px !important;
            height: 47px !important;
            margin: 8px 0;
            display: inline-block !important;
            border: none !important;
            border-bottom: 1px solid #A29390 !important;
            border-radius: 0px !important;
            background-color: #fff !important;
            background-color: #F2F8F8 !important;
        }

        .bs-callout {
            padding: 20px;
            margin: 20px 0;
            border: 1px solid #eee;
            border-left-width: 5px;
            border-radius: 4px;
            margin-left: 50px;
        }
        .bs-callout-xl {
            margin-left: 0px;
        }
        .bs-callout-lg {
            margin-left: 50px;
        }
        .bs-callout-md {
            margin-left: 100px;
        }
        .bs-callout-sm {
            margin-left: 150px;
        }
        .bs-callout-xs {
            margin-left: 200px;
        }
        .bs-callout h4 {
            margin-top: 0;
            margin-bottom: 5px;
        }
        .bs-callout p:last-child {
            margin-bottom: 0;
        }
        .bs-callout code {
            border-radius: 4px;
        }
        .bs-callout+.bs-callout {
            margin-top: -5px;
        }
        .bs-callout-default {
            border-left-color: #777;
            background-color: #f7f7f9;
        }
        .bs-callout-default h4 {
            color: #777;
        }
        .bs-callout-primary {
            border-left-color: #428bca;
        }
        .bs-callout-primary h4 {
            color: #428bca;
        }
        .bs-callout-success {
            border-left-color: #5cb85c;
            background-color: #efffe8;
        }
        .bs-callout-success h4 {
            color: #5cb85c;
        }
        .bs-callout-danger {
            border-left-color: #d9534f;
            background-color: #fcf2f2;
        }
        .bs-callout-danger h4 {
            color: #d9534f;
        }
        .bs-callout-warning {
            border-left-color: #f0ad4e;
            background-color: #fefbed;
        }
        .bs-callout-warning h4 {
            color: #f0ad4e;
        }
        .bs-callout-info {
            border-left-color: #5bc0de;
            background-color: #f0f7fd;
        }
        .bs-callout-info h4 {
            color: #5bc0de;
        }
        /* bg transparency and disabled effects for Bootstrap callout */ 
        .bs-callout-default.transparent {
            background-color: rgb(247, 247, 249, 0.7); /*#f7f7f9*/
        }
        .bs-callout-success.transparent {
            background-color: rgb(239, 255, 232, 0.7); /*#efffe8*/
        }
        .bs-callout-warning.transparent {
            background-color: rgb(254, 251, 237, 0.7); /*#fefbed*/
        }
        .bs-callout-danger.transparent {
            background-color: rgb(252, 242, 242, 0.7); /*#fcf2f2*/
        }
        .bs-callout-info.transparent {
            background-color: rgb(240, 247, 253, 0.7); /*#f0f7fd*/
        }
        .bs-callout.disabled {
            opacity: 0.4;
        }
    </style>
@stop

@section('js')

@stop