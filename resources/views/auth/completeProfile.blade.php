@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row align-items-center py-1">
      <div class="col-md-9 mx-auto bg-white shadow-sm rounded">
      <form class="p-md-5 border-0 rounded-3" method="POST" action="{{ route('completar-perfil.datos', [$ci->cedula, $rol]) }}">
        <div class="d-flex justify-content-between">
          <p class="h5 text-success">Completar Perfil: </p>
          <p class="h5 text-muted" >Paso: 2-3 </p>
        </div>
        @csrf
            <div class="row">
                <div class="col-12">
                    <div class="form-floating mb-3">
                        <input value="{{ $ci->cedula }}" name="cedula" id="cedula" type="text" class="opacity-50 id bg form-control border-0 shadow-none border-bottom border-dark shadow-none rounded-0" readonly placeholder=" ">
                        @error('cedula')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <label for="floatingInput">Cedula*</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-floating mb-3">
                        <input value="{{ $ci->primer_nombre }}" name="primer_nombre" id="primer_nombre" type="text" class="id bg form-control border-0 shadow-none border-bottom border-dark shadow-none rounded-0 @error('primer_nombre') is-invalid @enderror" placeholder=" ">
                        @error('primer_nombre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message  }}</strong>
                        </span>
                        @enderror
                        <label for="floatingInput">Primer nombre*</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-floating mb-3">
                        <input value="{{ $ci->segundo_nombre }}" name="segundo_nombre" id="segundo_nombre" type="text" class="id bg form-control border-0 shadow-none border-bottom border-dark shadow-none rounded-0 @error('segundo_nombre') is-invalid @enderror" placeholder=" ">
                        @error('segundo_nombre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <label for="floatingInput" class="text-muted">Nombre*</label>
                    </div>
                </div>
            </div>

            <div class="form-floating mb-3">
                <input  value="{{ $ci->apellido_paterno }}" name="apellido_paterno" id="apellido_paterno" type="text" class="id bg form-control border-0 shadow-none border-bottom border-dark shadow-none rounded-0 @error('apellido_paterno') is-invalid @enderror" placeholder=" ">
                    @error('apellido_paterno')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                <label for="floatingInput" class="text-muted">Apellido Paterno*</label>
            </div>
            
            <div class="form-floating mb-3">
                <input  value="{{ $ci->apellido_materno }}" name="apellido_materno" id="apellido_materno" type="text" class="id bg form-control border-0 shadow-none border-bottom border-dark shadow-none rounded-0 @error('apellido_materno') is-invalid @enderror" placeholder=" ">
                    @error('apellido_materno')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                <label for="floatingInput" class="text-muted">Apellido Materno*</label>
            </div>

            <div class="row">
                <div class="col-9">
                    <div class="form-floating mb-3">
                        <input value="{{ $ci->direccion_domiciliaria }}" name="direccion_domiciliaria" id="direccion_domiciliaria" type="text" class="id bg form-control border-0 shadow-none border-bottom border-dark shadow-none rounded-0 @error('direccion_domiciliaria') is-invalid @enderror" placeholder=" ">
                            @error('direccion_domiciliaria')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        <label for="floatingPassword" class="text-muted">Direcion Domiciliaria*</label>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-floating mb-3">
                        <select class="id bg form-control border-0 shadow-none border-bottom border-dark shadow-none rounded-0 @error('name') is-invalid @enderror" name="sexo" id="inputGroupSelect01">
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
                <div class="col-3">
                    <div class="form-floating mb-3">
                        <input value="{{ $ci->telefono_celular }}" name="telefono_celular" id="telefono_celular" type="text" class="id bg form-control border-0 shadow-none border-bottom border-dark shadow-none rounded-0 @error('telefono_celular') is-invalid @enderror" placeholder=" ">
                        @error('telefono_celular')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <label for="floatingPassword" class="text-muted">Teléfono*</label>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-floating mb-3">
                        <input value="{{ $ci->telefono_domicilo }}" name="telefono_domicilo" id="telefono_domicilo" type="text" class="id bg form-control border-0 shadow-none border-bottom border-dark shadow-none rounded-0 @error('telefono_domicilo') is-invalid @enderror" placeholder=" ">
                        @error('telefono_domicilo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <label for="floatingPassword" class="text-muted">Teléfono Domiciliario</label>
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-floating mb-3">
                        <input value="{{ $ci->fecha_nacimiento }}" name="fecha_nacimiento" id="fecha_nacimiento" type="date" class="id bg form-control border-0 shadow-none border-bottom border-dark shadow-none rounded-0 @error('fecha_nacimiento') is-invalid @enderror" placeholder=" ">
                        @error('fecha_nacimiento')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <label for="floatingPassword" class="text-muted">Fecha de Nacimiento*</label>
                    </div>
                </div>
            </div>

            <input type="text" class="d-none" name="estado">

            <div class="row d-flex justify-content-center">
                <div class="col-4">
                    <a class="text-white w-100 btn btn-success mt-3" href="{{ route('verificar') }}"><i class="bi bi-arrow-left-circle"></i> Regresar</a>
                </div>
                <div class="col-4">
                    <button class="w-100 btn btn-success mt-3 tn-white text-white" type="submit">Continuar  <i class="bi bi-box-arrow-in-right"></i></button>    
                </div>
            </div>
            <hr class="my-4">
            <small class="text-muted d-flex justify-content-center">NSC - Nuestra Señora Del Carmen</small>
        </form>

      </div>
      <!-- <div class="col-lg-7 text-center text-lg-start">
      </div> -->
    </div>
</div>

@if(session('success') == 'Datos validados correctamente')
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
        })

        Toast.fire({
            icon: 'success',
            title: 'Datos validados correctamente'
        })
    </script>
@endif
@if(session('warning') == 'Vuelvelo a intentar')
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
        })

        Toast.fire({
            icon: 'error',
            title: 'Vuelvelo a intentar'
        })
    </script>
@endif
@endsection()