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
                            <input type="text" name="identificacion" class="form-control text-center mt-2 mb-2 col-md-5" disabled value="{{ $representante->identificacion }}">
                        </div>
                    </div>
                    <div class="card p-3">
                        <div class="form-group row col-md-12">
                            <label for="exampleFormControlInput1" class="text-center">Nombres Completos</label>
                            <div class="row">
                                <div class="col-6 mt-1">
                                    <div class="col">
                                        <label for="">Primer Nombre</label>
                                    </div>
                                    <div class="col">
                                        <input type="select" name="primerNombre" disabled value="{{ $representante->primer_nombre }}" class="form-control" id="exampleFormControlInput1" placeholder="Primer Nombre">
                                    </div>
                                </div>
                                <div class="col-6 mt-1">
                                    <div class="col">
                                        <label for="">Segundo Nombre</label>
                                    </div>
                                    <div class="col">
                                        <input type="select" name="segundoNombre" disabled value="{{ $representante->segundo_nombre }}" class="form-control" id="exampleFormControlInput1" placeholder="Segundo Nombre">
                                    </div>
                                </div>
                                <div class="col-6 mt-1">
                                    <div class="col">
                                        <label for="">Apellido Paterno</label>
                                    </div>
                                    <div class="col">
                                        <input type="select" name="apellidoPaterno" disabled value="{{ $representante->apellido_paterno }}" class="form-control" id="exampleFormControlInput1" placeholder="Apellido Paterno">
                                    </div>
                                </div>
                                <div class="col-6 mt-1">
                                    <div class="col">
                                        <label for="">Apellido Materno</label>
                                    </div>
                                    <div class="col">
                                        <input type="select" name="apellidoMaterno" disabled value="{{ $representante->apellido_materno }}" class="form-control" id="exampleFormControlInput1" placeholder="Apellido Materno">
                                    </div>
                                </div>
                            </div>
                            <small id="emailHelp" class="form-text text-muted mt-2">Estos campos son requeridos.</small>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Direccón Domiciliaria</label>
                        @if(is_null($representante->direccion_domiciliaria))
                            <input type="text" value="{{ old('direccion_domiciliaria') }}" name="direccionDomicilio" class="form-control" id="" aria-describedby="emailHelp">
                        @else
                            <input type="text" value="{{ $representante->direccion_domiciliaria }}" disabled name="direccionDomicilio" class="form-control" id="" aria-describedby="emailHelp">
                        @endif
                        <small id="emailHelp" class="form-text text-muted">Este campo es requerido.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Correo Electrónico</label>
                        @if(is_null($representante->correo))
                            <input type="email" value="{{ old('correo') }}" name="correo" class="form-control" id="" placeholder="ejemplo@gmail.com" aria-describedby="emailHelp">
                        @else
                            <input type="email" disabled value="{{ $representante->correo }}" disabled name="correo" class="form-control" id="" placeholder="ejemplo@gmail.com" aria-describedby="emailHelp">
                        @endif
                        <small id="emailHelp" class="form-text text-muted">Ingrese un correo válido.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Número de teléfono</label>
                        @if(is_null($representante->telefono_celular))
                            <input type="text" value="{{ old('telefono_celular') }}" name="telefono_celular" class="form-control" placeholder="(000) 000 0000" aria-describedby="emailHelp">
                        @else
                            <input type="text" disabled value="{{ $representante->telefono_celular }}" disabled name="telefono_celular" class="form-control" placeholder="(000) 000 0000" aria-describedby="emailHelp">
                        @endif
                        <small id="emailHelp" class="form-text text-muted">Ingrese un número de teléfono válido.</small>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="form-group row col-md-12">
                            <label for="exampleFormControlSelect1" class="text-center mt-2" >Relación con el estudiante</label>
                            <select class="form-control" name="select" id="exampleFormControlSelect1">
                            <option>Padre</option>
                            <option>Madre</option>
                            <option>Otro (especifique)</option>
                            </select>
                            <small id="emailHelp" class="form-text text-muted">Este campo es requerido.</small>
                        </div>
                    </div>
                    <label for="">¿Cómo va a realizar el pago de las pensiones?</label>
                    @foreach($metodoPagoPensiones as $m )
                        <div class="form-check">
                            <input class="form-check-input" value="{{ $m->meotodo_pago_pensiones }}" type="radio" name="exampleRadios1" id="exampleRadios1">
                            <label class="form-check-label" for="exampleRadios1">
                                {{ $m->metodo_pago_pensiones }}
                            </label>
                        </div>
                    @endforeach
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
    @if(session('exito') == 'Datos de estudiante guardados correctamente')
        <script>
            Swal.fire(
                'Exito',
                'Formulario estudiantes guardados correctamente',
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
@stop

@section('js')
    <script>
        Swal.fire(
            'Exito!',
            'Datos Guardados correctamente!',
            'success'
            )
    </script>
@stop