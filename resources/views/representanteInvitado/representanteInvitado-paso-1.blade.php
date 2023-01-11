@extends('adminlte::page')

@section('title', 'NSC')

@section('content_header')
<div class="text-center">
    <img src="{{ asset('imagenes/Logo-NSCFinal-Negro.png') }}" width="300" height="85" alt="">
</div>
@stop

@section('content')
    <div class="container col-md-8">
        <form action="{{route('representanteInvitado.paso-datos-1')}}" method="POST">
            @csrf
            <div class="card shadow">
                <div class="card-header bg-success">
                    <div class="text-center p-2">
                        <h5 class="m-auto"><strong>DATOS DEL ESTUDIANTE</strong> <i class="far fa-user"></i></h5>
                    </div>
                </div>
                @if(is_null($estudiante->persona->identificacion))
                    <div class="conatiner p-3">
                        <div class="alert alert-danger text-center mb-0" role="alert">
                            <i class="fas fa-exclamation-triangle"></i> Completa los siguientes campos 
                        </div>
                    </div>
                @else
                    <div class="text-center mt-3">
                        <p class="mt-2 mb-0"><i class="far fa-user"></i> Estudiante: <strong>{{$estudiante->persona->primer_nombre}} {{$estudiante->persona->apellido_paterno}}</strong> </p>
                    </div>
                @endif
                <div class="card-body">
                    <div class="card p-3">
                        <div class="d-flex justify-content-center">
                            @if(is_null($estudiante->persona->identificacion))
                                <div class="form-group row col-md-12">
                                    <label for="exampleFormControlSelect1" class="text-center mt-2" >Tipo de Identificación</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>cédula</option>
                                            <option>pasaporte</option>
                                        </select>
                                    <small id="emailHelp" class="form-text text-muted">Este campo es requerido.</small>
                                </div>
                            @endif
                        </div>
                        <div class="cedula">
                            @if(is_null($estudiante->persona->identificacion))
                                <p class="text-center m-auto"><strong>Cédula</strong></p>
                                <div class="d-flex justify-content-center">
                                    <input type="text" name="identificacion" class="form-control text-center mt-2 mb-2 col-md-5 @error('identificacion') is-invalid @enderror" value="{{ old('identificacion') }}">
                                </div>
                                <div class="text-center">
                                    <small>Este campo es requerido</small>
                                </div>
                                @error('identificacion')
                                    <span class="invalid-feedback m-0" role="alert">
                                        <strong class="">{{ $message }}</strong>
                                    </span>
                                @enderror
                            @else
                                <p class="text-center m-auto"><strong>Cédula</strong></p>
                                <div class="d-flex justify-content-center">
                                    <input type="text" readonly class="form-control text-center mt-2 mb-2 col-md-5" value="{{ $estudiante->persona->identificacion }}">
                                </div>
                            @endif
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
                                        @if(is_null($estudiante->persona->primer_nombre))
                                            <input type="select" name="primerNombre" value="{{ old('primerNombre') }}" class="form-control @error('primerNombre') is-invalid @enderror" id="primerNombre" placeholder="Primer Nombre">
                                        @else
                                            <input readonly type="select" name="primerNombre" value="{{ $estudiante->persona->primer_nombre }}" class="form-control @error('primerNombre') is-invalid @enderror" id="primerNombre" placeholder="Primer Nombre">
                                        @endif
                                        @error('primerNombre')
                                            <span class="invalid-feedback m-0" role="alert">
                                                <strong class="">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6 mt-1">
                                    <div class="col">
                                        <label for="">Segundo Nombre</label>
                                    </div>
                                    <div class="col">
                                        @if(is_null($estudiante->persona->segundo_nombre))
                                            <input type="select" name="segundoNombre" value="{{ old('segundoNombre') }}" class="form-control @error('segundoNombre') is-invalid @enderror" id="segundoNombre" placeholder="Segundo Nombre">
                                        @else
                                            <input readonly type="select" name="segundoNombre" value="{{ $estudiante->persona->segundo_nombre }}" class="form-control @error('segundoNombre') is-invalid @enderror" id="segundoNombre" placeholder="Segundo Nombre">   
                                        @endif
                                        @error('segundoNombre')
                                            <span class="invalid-feedback m-0" role="alert">
                                                <strong class="">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6 mt-1">
                                    <div class="col">
                                        <label for="">Apellido Paterno</label>
                                    </div>
                                    <div class="col">
                                        @if(is_null($estudiante->persona->apellido_paterno))
                                            <input type="select" name="apellidoPaterno" value="{{ old('apellidoPaterno') }}" class="form-control @error('apellidoPaterno') is-invalid @enderror" id="apellidoPaterno" placeholder="Apellido Paterno">
                                        @else
                                            <input readonly type="select" name="apellidoPaterno" value="{{ $estudiante->persona->apellido_paterno }}" class="form-control @error('apellidoPaterno') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Apellido Paterno">
                                        @endif
                                        @error('apellidoPaterno')
                                            <span class="invalid-feedback m-0" role="alert">
                                                <strong class="">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6 mt-1">
                                    <div class="col">
                                        <label for="">Apellido Materno</label>
                                    </div>
                                    <div class="col">
                                        @if(is_null($estudiante->persona->apellido_materno))
                                            <input type="select" name="apellidoMaterno" value="{{ old('apellidoMaterno') }}" class="form-control @error('apellidoMaterno') is-invalid @enderror" id="apellidoMaterno" placeholder="Apellido Materno">
                                        @else
                                            <input readonly type="select" name="apellidoMaterno" value="{{ $estudiante->persona->apellido_materno }}" class="form-control @error('apellidoMaterno') is-invalid @enderror" id="apellidoMaterno" placeholder="Apellido Materno">
                                        @endif
                                        @error('apellidoMaterno')
                                            <span class="invalid-feedback m-0" role="alert">
                                                <strong class="">{{ $message }}</strong>
                                            </span>
                                        @enderror
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
                            <input type="text" class="form-control @error('codigoNacional') is-invalid @enderror" id="codigoNacional" value="{{old('codigoNacional')}}" name="codigoNacional">
                            @error('codigoNacional')
                                <span class="invalid-feedback m-0" role="alert">
                                    <strong class="">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <small id="emailHelp" class="form-text text-muted m-0">Este código lo encuentra en su planilla de servicios eléctricos CNEL.</small>
                        <label for="" class="mt-3">Transporte Escolar</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" value="retiroPersonal" onchange="mostrar(this.value);" id="retiroPersonal" checked>
                            <label class="form-check-label" for="retiroPersonal">
                                Retiro personalmente (o persona autorizada)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" value="espresoPorMiCuenta" onchange="mostrar(this.value);" id="espresoPorMiCuenta">
                            <label class="form-check-label" for="espresoPorMiCuenta">
                                Expreso por mi cuenta
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" value="requieroExpreso" onchange="mostrar(this.value);" id="requieroExpreso">
                            <label class="form-check-label" for="requieroExpreso">
                                Requiero expreso
                            </label>
                        </div>
                            <div id="ruta" style="display: none;">
                            <label class="mt-3">Ruta</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios1" id="requieroExpreso1" value="requieroExpreso">
                                <label class="form-check-label" for="requieroExpreso">
                                    Alborada
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option1">
                                <label class="form-check-label" for="exampleRadios2">
                                    Garzota
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option1">
                                <label class="form-check-label" for="exampleRadios3">
                                    Guayacanes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios7" value="option1">
                                <label class="form-check-label" for="">
                                    Guayacanes-Samanes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios8" value="option1">
                                <label class="form-check-label" for="">
                                    La Joya
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios9" value="option1">
                                <label class="form-check-label" for="">
                                    Matices Villa club
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios10" value="option1">
                                <label class="form-check-label" for="">
                                    Matices Veranda
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios11" value="option1">
                                <label class="form-check-label" for="">
                                    Metrópolis 2
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios12" value="option1">
                                <label class="form-check-label" for="">
                                    Mucho lote 1 - Ciudad Domingo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios13" value="option1">
                                <label class="form-check-label" for="">
                                       Mucho lote 2
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios14" value="option1">
                                <label class="form-check-label" for="">
                                    Orquideas Vergeles
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios15" value="option1">
                                <label class="form-check-label" for="">
                                    Rosales - Alamos - Condor
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios16" value="option1">
                                <label class="form-check-label" for="">
                                    Samanes 7 - J. Montalvo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios17" value="option1">
                                <label class="form-check-label" for="">
                                    Sauces
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios18" value="option1">
                                <label class="form-check-label" for="">
                                    Sur Oeste - M de Roldos
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios19" value="option1">
                                <label class="form-check-label" for="">
                                    Vía Salitre
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios20" value="option1">
                                <label class="form-check-label" for="">
                                    Villa del Rey
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios21" value="option1">
                                <label class="form-check-label" for="">
                                    Villa Italia - La Rioja
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Siguiente <i class="fas fa-arrow-alt-circle-right"></i></button>
                    </div>
                </div>
                </div>
            </div>
        </form>
    </div>
@stop

@section('css')
    <!-- sweetalert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Icono página -->
    <link rel="shortcut icon" href="{{ asset('imagenes/VirgenNSC.png') }}" type="image/x-icon">
@stop

@section('js')
<script>
    function mostrar(dato){
        if (dato == "requieroExpreso") {
            ruta.style.display = "block";
        }
        if (dato == "espresoPorMiCuenta") {
            ruta.style.display = "none";
        }
        if (dato == "retiroPersonal") {
            ruta.style.display = "none";
        }
    }
</script>
@stop