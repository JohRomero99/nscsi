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
            <div class="callout callout-success">
                En caso de que exista algún cambio de información me comprometo a notificarlo oportunamente a la máxima autoridad de la Institución Educativa.
                Anexo copia de cédula de la(s) persona(s) autorizada(s), para efecto y constancia.
            </div>
            <div class="card shadow">
                <div class="card-header bg-success">
                    <div class="text-center p-2">
                        <h5 class="m-auto"><strong>DATOS DEL ESTUDIANTE</strong> <i class="far fa-user"></i></h5>
                    </div>
                </div>
                <!-- @if ($errors->any())
                    <div class="alert alert-light">
                        <ul> -->
                            <!-- @foreach ($errors->all() as $error)
                                samll{{ $error }}</li>
                            @endforeach -->
                        <!-- </ul>
                    </div>
                @endif -->
                @for( $i = 0; $i < $numeroDeEstudiante; $i++)
                    @if(is_null($relacionEstudinateRepresentante[$i]->estudiante->persona->identificacion))
                    <div class="conatiner p-3">
                        <div class="alert alert-danger text-center mb-0" role="alert">
                            <i class="fas fa-exclamation-triangle"></i> Completa los siguientes campos 
                        </div>
                    </div>
                    @else
                    <!-- Wizard -->
                    <div class="d-flex justify-content-center">
                        <div class="container col d-flex justify-content-end altura_wizard">
                            <div class="card-body d-flex justify-content-center mt-2 text-center rounded">
                                <div class="circulo_span bg-success p-2 rounded"><i class="far fa-user"></i></div>
                                <div class="p-2"> {{$relacionEstudinateRepresentante[$i]->estudiante->persona->primer_nombre}} {{$relacionEstudinateRepresentante[$i]->estudiante->persona->apellido_paterno}} </div>
                             </div>
                        </div>
                    </div>
                    @endif
                    <!-- <form action="{{route('representanteInvitado.paso-datos-1')}}" method="POST"> -->
                            <div class="card-body">
                                <div class="card p-3">
                                    <div class="d-flex justify-content-center">
                                        @if(is_null($relacionEstudinateRepresentante[$i]->estudiante->persona->identificacion))
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
                                        @if(is_null($relacionEstudinateRepresentante[$i]->estudiante->persona->identificacion))
                                            <p class="text-center m-auto"><strong>Cédula</strong></p>
                                            <div class="d-flex justify-content-center">
                                                <input type="text" name="identificacion[]" class="form-control text-center mt-2 mb-2 col-md-5 @error('identificacion') is-invalid @enderror" value="">
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
                                                <input type="text" readonly class="form-control text-center mt-2 mb-2 col-md-5" value="{{ $relacionEstudinateRepresentante[$i]->estudiante->persona->identificacion }}">
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
                                                    @if(is_null($relacionEstudinateRepresentante[$i]->estudiante->persona->primer_nombre))
                                                        <input type="select" name="primerNombre[]" value="" class="form-control @error('primerNombre') is-invalid @enderror" id="primerNombre" placeholder="Primer Nombre">
                                                    @else
                                                        <input readonly type="select" name="primerNombre" value="{{ $relacionEstudinateRepresentante[$i]->estudiante->persona->primer_nombre }}" class="form-control @error('primerNombre') is-invalid @enderror" id="primerNombre" placeholder="Primer Nombre">
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
                                                    @if(is_null($relacionEstudinateRepresentante[$i]->estudiante->persona->segundo_nombre))
                                                        <input type="select" name="segundoNombre" value="" class="form-control @error('segundoNombre') is-invalid @enderror" id="segundoNombre" placeholder="Segundo Nombre">
                                                    @else
                                                        <input readonly type="select" name="segundoNombre" value="{{ $relacionEstudinateRepresentante[$i]->estudiante->persona->segundo_nombre }}" class="form-control @error('segundoNombre') is-invalid @enderror" id="segundoNombre" placeholder="Segundo Nombre">   
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
                                                    @if(is_null($relacionEstudinateRepresentante[$i]->estudiante->persona->apellido_paterno))
                                                        <input type="select" name="apellidoPaterno[]" value="" class="form-control @error('apellidoPaterno') is-invalid @enderror" id="apellidoPaterno" placeholder="Apellido Paterno">
                                                    @else
                                                        <input readonly type="select" name="apellidoPaterno" value="{{ $relacionEstudinateRepresentante[$i]->estudiante->persona->apellido_paterno }}" class="form-control @error('apellidoPaterno') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Apellido Paterno">
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
                                                    @if(is_null($relacionEstudinateRepresentante[$i]->estudiante->persona->apellido_materno))
                                                        <input type="select" name="apellidoMaterno" value="" class="form-control @error('apellidoMaterno') is-invalid @enderror" id="apellidoMaterno" placeholder="Apellido Materno">
                                                    @else
                                                        <input readonly type="select" name="apellidoMaterno" value="{{ $relacionEstudinateRepresentante[$i]->estudiante->persona->apellido_materno }}" class="form-control @error('apellidoMaterno') is-invalid @enderror" id="apellidoMaterno" placeholder="Apellido Materno">
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
                                            <select class="form-control" id="exampleFormControlSelect1" name="transporteEscolar[]">
                                                <option selected value="{{ $relacionEstudinateRepresentante[$i]->estudiante->curso }}"> {{ $relacionEstudinateRepresentante[$i]->estudiante->curso }} </option>
                                            </select>
                                            <small id="emailHelp" class="form-text text-muted">Este campo es requerido.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="card p-3">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Código Único Eléctrico Nacional del Domicilio del Estudiante</label>
                                        <input type="text" class="form-control @error('codigoNacional') is-invalid @enderror" id="codigoNacional" name="codigoNacional[]" value="{{ old('codigoNacional.*') }}">
                                        @error('codigoNacional.*')
                                            <span class="invalid-feedback m-0" role="alert">
                                                <strong class="">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <small id="emailHelp" class="form-text text-muted m-0">Este código lo encuentra en su planilla de servicios eléctricos CNEL.</small>
                                    <label for="" class="mt-3">Transporte Escolar</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios[]" value="retiroPersonal" onchange="mostrar(this.value);" id="retiroPersonal" checked>
                                        <label class="form-check-label" for="retiroPersonal">
                                            Retiro personalmente (o persona autorizada)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios[]" value="espresoPorMiCuenta" onchange="mostrar(this.value);" id="espresoPorMiCuenta">
                                        <label class="form-check-label" for="espresoPorMiCuenta">
                                            Expreso por mi cuenta
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios[]" value="requieroExpreso" onchange="mostrar(this.value);" id="requieroExpreso">
                                        <label class="form-check-label" for="requieroExpreso">
                                            Requiero expreso
                                        </label>
                                    </div>

                                    <div id="ruta" style="display: none;">
                                        <label class="mt-3">Ruta</label>
                                        @foreach ( $rutas as $r )
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="exampleRadios1[]" id="requieroExpreso1" value="{{ $r->rutas }}">
                                                <label class="form-check-label" for="requieroExpreso">
                                                    {{$r->rutas}}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                    <!-- </form> -->
                @endfor
                <!-- </div> -->
                <div class="card-footer">
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Guardar <i class="fas fa-save"></i></button>
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

    <!-- bs-stepper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bs-stepper/dist/css/bs-stepper.min.css">

    <!-- bs-stepper -->
    <link rel="stylesheet" href="bs-stepper.min.css">

    <style>
        .circulo_span{
            border-radius: 50% !important;
            width: 40px !important;
            height: 40px !important;
        }
        .altura_wizard{
            height: 80px !important;
            
        }
    </style>
@stop

@section('js')

    <!-- bs-stepper -->
    <script src="https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js"></script>

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