@extends('adminlte::page')

@section('title', 'NSC')

@section('content_header')
    <div class="text-center">
        <img src="{{ asset('imagenes/Logo-NSCFinal-Negro.png') }}" width="300" height="85" alt="NSC">
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
                @for( $i = 0; $i < $numeroDeEstudiante; $i++)
                    @if(is_null($relacionEstudinateRepresentante[$i]->fichaMatriculacion->codigo_domicilio_estudiante))
                        <div class="conatiner">
                            <div class="bs-callout bs-callout-success bs-callout-xl">
                                <div class="text-center">
                                    <p class="m-auto"><i class="fas fa-info-circle text-danger"></i> <strong>¡Completa todos los campos para continuar!</strong></p>
                                </div>
                            </div>
                        </div>
                        <script>
                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 3000,
                                timerProgressBar: false,
                                didOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal.stopTimer)
                                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                                }
                                })
                                Toast.fire({
                                    icon: 'info',
                                    title: 'Completa todos los campos con la información correspondiente'
                                })
                        </script>
                    @else
                    @endif
                        <div class="card-body">
                            <div class="text-center">
                                <small>CI: {{$relacionEstudinateRepresentante[$i]->estudiante->persona->identificacion}}</small> <br>
                                <i class="far fa-user"></i> {{$relacionEstudinateRepresentante[$i]->estudiante->persona->primer_nombre}} {{$relacionEstudinateRepresentante[$i]->estudiante->persona->segundo_nombre}} {{$relacionEstudinateRepresentante[$i]->estudiante->persona->apellido_paterno}} {{$relacionEstudinateRepresentante[$i]->estudiante->persona->apellido_materno}}
                            </div>
                            <div class="card p-3 d-none">
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
                                            <input type="text" name="identificacion[]" class="form-control inputDiseño text-center mt-2 mb-2 col-md-5 @error('identificacion.*') is-invalid @enderror" value="">
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
                                            <input type="text" readonly class="form-control inputDiseño text-center mt-2 mb-2 col-md-5" value="{{ $relacionEstudinateRepresentante[$i]->estudiante->persona->identificacion }}">
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <!-- <div class="card p-3"> -->
                                <div class="form-group col-md-12">
                                    @if( is_null($relacionEstudinateRepresentante[$i]->estudiante->persona->primer_nombre) || is_null($relacionEstudinateRepresentante[$i]->estudiante->persona->segundo_nombre) || is_null($relacionEstudinateRepresentante[$i]->estudiante->persona->apellido_paterno) || is_null($relacionEstudinateRepresentante[$i]->estudiante->persona->apellido_materno) )
                                        <label for="exampleFormControlInput1" class="text-center">Nombres Completos</label>
                                    @endif
                                    <div class="row">
                                        @if(is_null($relacionEstudinateRepresentante[$i]->estudiante->persona->primer_nombre))
                                            <div class="col-12 mt-1">
                                                <div class="col">
                                                    <label for="">Pimer Nombre</label>
                                                </div>
                                                <div class="col">
                                                    @if(is_null($relacionEstudinateRepresentante[$i]->estudiante->persona->primer_nombre))
                                                        <input type="select" name="primerNombre[]" class="form-control inputDiseño @error('primerNombre.*') is-invalid @enderror" id="primerNombre" placeholder="Primer Nombre">
                                                    @else
                                                        <input readonly type="select" name="primerNombre[]" value="{{ $relacionEstudinateRepresentante[$i]->estudiante->persona->primer_nombre }}" class="form-control inputDiseño @error('primerNombre') is-invalid @enderror" id="primerNombre" placeholder="Primer Nombre">
                                                    @endif
                                                    @error('primerNombre.*')
                                                        <span class="invalid-feedback m-0" role="alert">
                                                            <strong class="">Este campo es obligatorio y solo debe contener letras</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        @endif
                                        @if(is_null($relacionEstudinateRepresentante[$i]->estudiante->persona->segundo_nombre))
                                            <div class="col-12 mt-1">
                                                <div class="col">
                                                    <label for="">Segundo Nombre</label>
                                                </div>
                                                <div class="col">
                                                    @if(is_null($relacionEstudinateRepresentante[$i]->estudiante->persona->segundo_nombre))
                                                        <input type="select" name="segundoNombre[]" class="form-control inputDiseño @error('segundoNombre.*') is-invalid @enderror" id="segundoNombre" placeholder="Segundo Nombre">
                                                    @else
                                                        <input readonly type="select" name="segundoNombre[]" value="{{ $relacionEstudinateRepresentante[$i]->estudiante->persona->segundo_nombre }}" class="form-control inputDiseño @error('segundoNombre') is-invalid @enderror" id="segundoNombre" placeholder="Segundo Nombre">   
                                                    @endif
                                                    @error('segundoNombre.*')
                                                        <span class="invalid-feedback m-0" role="alert">
                                                            <strong class="">Este campo es obligatorio y solo debe contener letras</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        @endif
                                        @if(is_null($relacionEstudinateRepresentante[$i]->estudiante->persona->apellido_paterno))
                                            <div class="col-12 mt-1">
                                                <div class="col">
                                                    <label for="">Apellido Paterno</label>
                                                </div>
                                                <div class="col">
                                                    @if(is_null($relacionEstudinateRepresentante[$i]->estudiante->persona->apellido_paterno))
                                                        <input type="select" name="apellidoPaterno[]" class="form-control inputDiseño @error('apellidoPaterno.*') is-invalid @enderror" id="apellidoPaterno" placeholder="Apellido Paterno">
                                                    @else
                                                        <input readonly type="select" name="apellidoPaterno[]" value="{{ $relacionEstudinateRepresentante[$i]->estudiante->persona->apellido_paterno }}" class="form-control inputDiseño @error('apellidoPaterno') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Apellido Paterno">
                                                    @endif
                                                    @error('apellidoPaterno.*')
                                                        <span class="invalid-feedback m-0" role="alert">
                                                            <strong class="">Este campo es obligatorio y solo debe contener letras</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        @endif
                                        @if(is_null($relacionEstudinateRepresentante[$i]->estudiante->persona->apellido_materno))
                                            <div class="col-12 mt-1">
                                                <div class="col">
                                                    <label for="">Apellido Materno</label>
                                                </div>
                                                <div class="col">
                                                    @if(is_null($relacionEstudinateRepresentante[$i]->estudiante->persona->apellido_materno))
                                                        <input type="select" name="apellidoMaterno[]" class="form-control inputDiseño @error('apellidoMaterno.*') is-invalid @enderror" id="apellidoMaterno" placeholder="Apellido Materno">
                                                    @else
                                                        <input readonly type="select" name="apellidoMaterno[]" value="{{ $relacionEstudinateRepresentante[$i]->estudiante->persona->apellido_materno }}" class="form-control inputDiseño @error('apellidoMaterno') is-invalid @enderror" id="apellidoMaterno" placeholder="Apellido Materno">
                                                    @endif
                                                    @error('apellidoMaterno.*')
                                                        <span class="invalid-feedback m-0" role="alert">
                                                            <strong class="">Este campo es obligatorio y solo debe contener letras</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                @if (is_null($relacionEstudinateRepresentante[$i]->estudiante->curso))
                                    <div class="d-flex justify-content-center mt-3">
                                        <div class="form-group row col-md-12">
                                            <label for="exampleFormControlSelect1" class="text-center mt-2" >Año de Básica</label>
                                            <select class="form-control" id="exampleFormControlSelect1" name="transporteEscolar[]">
                                                <option selected value="{{ $relacionEstudinateRepresentante[$i]->estudiante->curso }}"> {{ $relacionEstudinateRepresentante[$i]->estudiante->curso }} </option>
                                            </select>
                                            <small id="emailHelp" class="form-text text-muted">Este campo es requerido.</small>
                                        </div>
                                    </div>
                                @endif
                            <!-- </div> -->
                            <div class="card p-3">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">
                                        Código Único Eléctrico Nacional del Domicilio del Estudiante
                                        <div class="tooltip-container">
                                            <i class="fas fa-question-circle tooltip-trigger text-info"></i>
                                            <div class="tooltip-one">
                                                Debes revisar la parte superior o encabezado de tu planilla de luz, suele estar dentro de un casillero, justo debajo del nombre del usuario del servicio
                                            </div>
                                        </div>
                                    </label>
                                    @if(is_null($relacionEstudinateRepresentante[$i]->fichaMatriculacion))
                                        <input type="text" class="form-control inputDiseño @error('codigoNacional.*') is-invalid @enderror" name="codigoNacional[]" value="{{ old('codigoNacional.*') }}">
                                    @else
                                        <input type="text" class="form-control inputDiseño is-valid" name="codigoNacional[]" value="{{ $relacionEstudinateRepresentante[$i]->fichaMatriculacion->codigo_domicilio_estudiante }}">
                                    @endif
                                    @error('codigoNacional.*')
                                        <span class="invalid-feedback m-0" role="alert">
                                            <strong class="">Este campo es obligatorio y solo debe contener 10 números</strong>
                                        </span>
                                    @enderror
                                </div>
                                    <small id="emailHelp" class="form-text text-muted m-0">Este código lo encuentra en su planilla de servicios eléctricos CNEL.</small>

                                <!-- Trasnporte Escolar -->
                                <div class="trasnporteEscolar">
                                    <div class="form-group row col-md-12">
                                        <label for="exampleFormControlSelect1" class="text-center mt-2" >Transporte Escolar</label>
                                            <select class="form-control transporte" name="transporte[]">
                                                <option value="RetiroPersonalmente" selected>Retiro personalmente (o persona autorizada)</option>
                                                <option value="expresoPorMicuenta">Expreso por mi cuenta</option>
                                                <option value="requiereExpreso">Requiero expreso</option>
                                            </select>
                                        <small id="emailHelp" class="form-text text-muted">Este campo es requerido.</small>
                                    </div>
                                </div>

                                <div class="ruta" style="display: none;">
                                    <div class="form-group row col-md-12">
                                        <label for="exampleFormControlSelect1" class="text-center mt-2" >Ruta</label>
                                            <select class="form-control" name="ruta[]">
                                                @foreach ( $rutas as $r )
                                                    <option value="{{$r->rutas}}">{{$r->rutas}}</option>
                                                @endforeach
                                            </select>
                                        <small id="emailHelp" class="form-text text-muted">Este campo es requerido.</small>
                                    </div>
                                </div>

                                <div>
                                    <input type="text" class="d-none" name="identificacion[]" value="{{ $relacionEstudinateRepresentante[$i]->estudiante->persona->identificacion }}">
                                    <input type="text" class="d-none" name="estudinateRepresentante[]" value="{{ $relacionEstudinateRepresentante[$i]->id }}">
                                    <!-- <input type="text" class="d-none" name="representanteId[]" value="{{ $relacionEstudinateRepresentante[$i]->representante_id }}"> -->
                                </div>
                            </div>
                        </div>
                    <!-- </form> -->
                @endfor
                <div class="card-footer">
                    <div class="text-center">
                        <button type="submit" class="btn btn-success"> Guardar </button>
                    </div>
                </div>
                <!-- </div> -->
            </div>
        </form>
    </div>
@stop

@section('css')
    <!-- sweetalert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Icono página -->
    <link rel="shortcut icon" href="{{ asset('imagenes/VirgenNSC.png') }}" type="image/x-icon">

    {{-- font-awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
        /* my own interpretation of Bootstrap callout */ 
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

        .tooltip-container {
            margin: 0 auto;
            display: inline-block;
        }
        /* EMPIEZA AQUÍ */
        .tooltip-container {
            position: relative;
            cursor: pointer;
        }
        .tooltip-one {
            padding: 18px 32px;
            background: #fff;
            position: absolute;
            width: 220px;
            border-radius: 5px;
            text-align: center;
            filter: drop-shadow(0 3px 5px #ccc);
            line-height: 1.5;
            display: none;
            bottom: 40px;
            right: 50%;
            margin-right: -110px;
        }
        .tooltip-one:after {
            content: "";
            position: absolute;
            bottom: -9px;
            left: 50%;
            margin-left: -9px;
            width: 18px;
            height: 18px;
            background: white;
            transform: rotate(45deg);
        }
        .tooltip-trigger:hover + .tooltip-one {
            display: block;
        }


        /* Cambiar Incono de is_valid predetermido en boostrap */
        /* .form-control.is-valid,
        .was-validated .form-control:valid {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath d='M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1 17l-5-5.299 1.399-1.43 3.574 3.736 6.572-7.007 1.455 1.403-8 8.597z'/%3E%3C/svg%3E");
        } */

    </style>
@stop

@section('js')
    <script>
        var transporte = document.getElementsByClassName("transporte");
        var ruta = document.getElementsByClassName("ruta");
        var trasnporteEscolar = document.getElementsByClassName("trasnporteEscolar");

        for(let i = 0; i < trasnporteEscolar.length; i++){
            transporte[i].addEventListener("click", function(){
                if(transporte[i].value === "requiereExpreso"){
                    ruta[i].setAttribute("style", "display:block");
                }else{
                    ruta[i].setAttribute("style", "display:none");
                }
            });
        }
    </script>
    <script>
        @if($errors->any())
            Swal.fire(
                'Error',
                'Tienes algunos campos por completar en el formulario',
                'error'
            )
        @endif
    </script>
    @if(session('exito') == 'Datos de estudiante guardados correctamente')
        <script>
            Swal.fire(
                'Exito',
                'Formulario estudiantes guardados correctamente',
                'success'
            )
        </script>
    @endif
    @if(session('exito') == 'Informacion actualizada correctamente')
        <script>
            Swal.fire(
                'Información actualizada correctamente',
                'Datos Actualizados',
                'success'
            )
        </script>
    @endif
@stop