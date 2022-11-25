@extends('adminlte::page')

@section('title', 'NSC')

@section('content_header')
<div class="text-center">
  <h3>
    <small class="text-muted h4"><strong>DATOS DE LA CUENTA</strong></small>
  </h3>
</div>
@stop

@section('content')

<div class="container col-md-7 mt-3">
    <div class="card card-primary shadow">

        <div class="card-header bg-success">
            <h3 class="card-title text-center m-auto text-white p-1"><strong>Actualizar Contraseña</strong></h3>
        </div>

        <form action="{{ route('datos-actualizar-contrasena') }}" method="POST">
            @csrf
            <div class="card-body">

                <p class="m-auto text-center text-muted">La contraseña deberá contener una letra mayúscula y minúscula.</p>
                <p class="m-auto text-center text-muted">La contraseña deberá contener por lo menos un número.</p>
                <p class="m-auto text-center text-muted">La longitud de la contraseña deber ser de 8 dígitos como mínimo</p>
       
                <!-- Contraseña -->
                <label for="" class="text-muted">*Contraseña</label>
                <div class="input-group mb-3 col-md-12">
                    <input name="password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder=" " >
                    <div class="input-group-append" id="mostrar-contraseña">
                        <span class="input-group-text"><i class="fas fa-eye fa-lg text-success"></i></span>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Confirmación de Contraseña -->
                <label for="" class="text-muted">*Confirmar contraseña</label>
                <div class="input-group mb-3 col-md-12">
                    <input type="password" id="password_confirmation" name="password_confirmation" class="id form-control @error('email') is-invalid @enderror" >
                    <div class="input-group-append" id="mostrar-confirmacion-conraseña">
                        <span class="input-group-text"><i class="fas fa-eye fa-lg text-success"></i></span>
                    </div>
                </div>
        
            </div>

            <div class="card-footer text-center bg-light border-0">
                <button type="submit" class="btn btn-success">Guardar cambios <i class="fas fa-sync"></i></button>
            </div>
        </form>
    </div>
</div>

@if(session('exito') == 'Contrasena actualizada con exito' )
    <script>
        const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        })

        Toast.fire({
        icon: 'success',
        title: 'Contraseña actualizada con éxito'
        })
    </script>
@endif

<!-- Funcion para mostrar y ocultar contraseña -->
<script>
    var password = document.getElementById("password");
    var password_confirmation = document.getElementById("password_confirmation");
    var mostrar_contraseña = document.getElementById('mostrar-contraseña');
    var mostrar_conirmacion_contraseña = document.getElementById('mostrar-confirmacion-conraseña');

    mostrar_contraseña.addEventListener('click',function(){
      if(password.type == "password"){
        password.type = "text";
      }else{
        password.type = "password";
      }
    })

    mostrar_conirmacion_contraseña.addEventListener('click',function(){
      if(password_confirmation.type == "password"){
        password_confirmation.type = "text";
      }else{
        password_confirmation.type = "password";
      }
    })
</script>

@endsection

@section('css')

    <!-- Sweetalert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        @media (max-width:767px){
            .circulo{
                width: 40px !important;
                height: 40px !important;
            }

            .quitar{
                display:none !important;
            }

            .izquierda{
                margin-left: 25px !important;
            }
        }
    </style>

@stop