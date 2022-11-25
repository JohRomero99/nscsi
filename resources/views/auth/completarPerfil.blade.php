@extends('layouts.app')

@section('content')

<div class="container col-md-7 mt-4">
    <div class="card card-primary">

        <div class="card-header bg-success">
            <h3 class="card-title text-center m-auto text-white p-1"><strong>Actualiza tus Datos Personales</strong></h3>
        </div>

        <form action="{{ route('datos-actualizar-perfil', $user->representante->persona->id) }}" method="POST">
            @csrf
            <div class="card-body">

                <div class="row">
                    <!-- Input para obtener cédula -->
                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input value="{{ $user->representante->persona->cedula }}" name="cedula" id="cedula" type="text" class="opacity-50 id bg form-control border-0 shadow-none shadow-none rounded-0" readonly placeholder=" ">
                            @error('cedula')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label for="floatingInput">Cedula*</label>
                        </div>
                    </div>

                    <!-- Input para obtener primer nombre -->
                    <div class="col-6">
                        <div class="form-floating mb-3">
                            <input value="{{ $user->representante->persona->primer_nombre }}" name="primer_nombre" id="primer_nombre" type="text" class="id bg form-control border-0 shadow-none shadow-none rounded-0 @error('primer_nombre') is-invalid @enderror" placeholder=" ">
                            @error('primer_nombre')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message  }}</strong>
                            </span>
                            @enderror
                            <label for="floatingInput" class="text-muted">Primer nombre*</label>
                        </div>
                    </div>

                    <!-- Input para obtener segundo nombre -->
                    <div class="col-6">
                        <div class="form-floating mb-3">
                            <input value="{{ $user->representante->persona->segundo_nombre }}" name="segundo_nombre" id="segundo_nombre" type="text" class="id bg form-control border-0 shadow-none shadow-none rounded-0 @error('segundo_nombre') is-invalid @enderror" placeholder=" ">
                            @error('segundo_nombre')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label for="floatingInput" class="text-muted">Segundo nombre*</label>
                        </div>
                    </div>

                </div>

                <!-- Input para obtner apellido paterno -->
                <div class="form-floating mb-3">
                    <input  value="{{ $user->representante->persona->apellido_paterno }}" name="apellido_paterno" id="apellido_paterno" type="text" class="id bg form-control border-0 shadow-none shadow-none rounded-0 @error('apellido_paterno') is-invalid @enderror" placeholder=" ">
                        @error('apellido_paterno')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    <label for="floatingInput" class="text-muted">Apellido Paterno*</label>
                </div>

                <!-- Input para obtener apellido materno -->
                <div class="form-floating mb-3">
                    <input  value="{{ $user->representante->persona->apellido_materno }}" name="apellido_materno" id="apellido_materno" type="text" class="id bg form-control border-0 shadow-none shadow-none rounded-0 @error('apellido_materno') is-invalid @enderror" placeholder=" ">
                        @error('apellido_materno')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    <label for="floatingInput" class="text-muted">Apellido Materno*</label>
                </div>

            
                <div class="row">

                    <!-- Input para obtener Dirección de casa -->
                    <div class="col-9">
                        <div class="form-floating mb-3">
                            <input value="{{ $user->representante->persona->direccion_domiciliaria }}" name="direccion_domiciliaria" id="telefono_domicilo" type="text" class="id bg form-control border-0  border-dark shadow-none rounded-0 @error('direccion_domiciliaria') is-invalid @enderror" placeholder=" ">
                                @error('direccion_domiciliaria')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            <label for="floatingPassword" class="text-muted">Direcion Domiciliaria*</label>
                        </div>
                    </div>

                    <!-- Select para obtener género -->
                    <div class="col-3">
                        <div class="form-floating mb-3">
                            <select class="id bg form-control border-0 shadow-none rounded-0 @error('name') is-invalid @enderror" name="sexo" id="inputGroupSelect01">
                                <option selected value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                            @error('sexo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label for="floatingInput" class="text-muted">Sexo*</label>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <!-- Input para obtener teléfono celular -->
                    <div class="col-3">
                        <div class="form-floating mb-3">
                            <input value="{{ $user->representante->persona->telefono_celular }}" name="telefono_celular" id="telefono_celular" type="text" class="id bg form-control border-0 shadow-none shadow-none rounded-0 @error('telefono_celular') is-invalid @enderror" placeholder=" ">
                            @error('telefono_celular')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label for="floatingPassword" class="text-muted">Teléfono*</label>
                        </div>
                    </div>

                    <!-- Input para obtener teléfono de casa -->
                    <div class="col-4">
                        <div class="form-floating mb-3">
                            <input value="{{ $user->representante->persona->telefono_domicilo }}" name="telefono_domicilo" id="telefono_domicilo" type="text" class="id bg form-control border-0 shadow-none shadow-none rounded-0 @error('telefono_domicilo') is-invalid @enderror" placeholder=" ">
                            @error('telefono_domicilo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label for="floatingPassword" class="text-muted">Teléfono Domiciliario</label>
                        </div>
                    </div>

                    <!-- Input para obtener fecha de nacimiento -->
                    <div class="col-5">
                        <div class="form-floating mb-3">
                            <input value="{{ $user->representante->persona->fecha_nacimiento }}" name="fecha_nacimiento" id="fecha_nacimiento" type="date" class="id bg form-control border-0 shadow-none shadow-none rounded-0 @error('fecha_nacimiento') is-invalid @enderror" placeholder=" ">
                            @error('fecha_nacimiento')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label for="floatingPassword" class="text-muted">Fecha de Nacimiento*</label>
                        </div>
                    </div>

                </div>

                <!-- <input type="text" class="d-none" name="estado"> -->
            </div>

            <div class="card-footer d-flex justify-content-center bg-white border-0">

                <!-- Enviar Información por al formulario -->
                <div class="p-2">
                    <button class="btn btn-success mt-3 tn-white text-white p-2" type="submit">Continuar  <i class="fas fa-arrow-circle-right"></i></button>    
                </div>

            </div>
        </form>
    </div>
</div>

<style>
  @media (max-width:766px){
    .circulo_2{
        width: 40px !important;
        height: 40px !important;
        /* -moz-border-radius: 50% !important;
        -webkit-border-radius: 50% !important;
        border-radius: 50% !important; */
    }

    .quitar_2{
        display:none !important;
    }

    .izquierda_2{
        margin-left: 25px !important;
    }
  }
</style>
@endsection