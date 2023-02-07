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
                                @if(is_null($relacionEstudinateRepresentante[$i]->estudiante->persona->primer_nombre) || is_null($relacionEstudinateRepresentante[$i]->estudiante->persona->segundo_nombre) || is_null($relacionEstudinateRepresentante[$i]->estudiante->persona->apellido_paterno) || is_null($relacionEstudinateRepresentante[$i]->estudiante->persona->apellido_materno))
                                    <div class="p-2"> {{$relacionEstudinateRepresentante[$i]->estudiante->persona->identificacion}} </div>
                                @else
                                    <div class="p-2"> {{$relacionEstudinateRepresentante[$i]->estudiante->persona->primer_nombre}} {{$relacionEstudinateRepresentante[$i]->estudiante->persona->apellido_paterno}} </div>
                                @endif
                             </div>
                        </div>
                    </div>
                    @endif
                        <div class="card-body">
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
                                    <label for="exampleFormControlInput1">Código Único Eléctrico Nacional del Domicilio del Estudiante</label>
                                    <input type="text" class="form-control inputDiseño @error('codigoNacional.*') is-invalid @enderror" name="codigoNacional[]" value="{{ old('codigoNacional.*') }}">
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
                        <button type="submit" class="btn btn-success">Guardar <i class="fas fa-save"></i></button>
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

    <style>
        .circulo_span{
            border-radius: 50% !important;
            width: 40px !important;
            height: 40px !important;
        }
        .altura_wizard{
            height: 80px !important;
            
        }
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
@stop