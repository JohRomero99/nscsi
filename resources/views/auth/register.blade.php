@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row align-items-center g-lg-5 ">
      <div class="col-md-10 mx-auto col-lg-5 bg-white shadow-sm rounded">
      <form class="p-4 p-md-4 border-0 rounded-3 mt-1" method="POST" action="{{ route('register.post', [$persona, $rol]) }}">
        <div class="d-flex justify-content-between mt-1">
          <p class="h5 identificacion">Creación de creedenciales: </p>
          <p class="h5 text-muted" >Paso: 3-3 </p>
        </div>
        <div class="mt-2 p-2 bg-light rounded shadow-sm">
            <p class="m-auto text-center text-muted">La contraseña deberá contener una letra mayúscula y minúscula.</p>
            <p class="m-auto text-center text-muted">La contraseña deberá contener por lo menos un número.</p>
            <p class="m-auto text-center text-muted">La longitud de la contraseña deber ser de 8 dígitos como mínimo</p>
            <p class="m-auto text-center">El username no debe tener espacios.</p>
        </div>
        @csrf
            <div class="form-floating mb-3 mt-4">
                <input value="{{ old('email') }}" name="email" id="email" type="email" class="bg form-control border-0 shadow-none border-bottom border-dark shadow-none rounded-0 @error('email') is-invalid @enderror" placeholder=" ">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label for="floatingInput" class="text-muted">*Correo</label>
            </div>
            <div class="form-floating mb-3">
                <input value="{{ old('name') }}" name="name" id="username" type="text" class="bg form-control border-0 shadow-none border-bottom border-dark shadow-none rounded-0 @error('name') is-invalid @enderror" placeholder=" ">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label for="floatingPassword" class="text-muted">*Usuario</label>
            </div>
       
            <div class="row">
                <div class="col-10" style="padding-right:0px;">
                    <div class="form-floating mb-3">
                        <input name="password" id="password" type="password" class="bg form-control border-0 shadow-none border-bottom border-dark shadow-none rounded-0 @error('password') is-invalid @enderror" placeholder=" ">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label for="floatingPassword" class="text-muted">*Contraseña</label>
                    </div>
                </div>
                <div class="col-2 bg border-bottom border-dark" style="height: 58px; width:58px">
                    <div class="mt-3" id="mostrar-contraseña">
                        <i class="fas fa-eye fa-lg text-success"></i>
                    </div>
                </div>
            </div>
        
            <div class="row">
                <div class="col-10" style="padding-right:0px;">
                    <div class="form-floating mb-3">
                        <input type="password" id="password_confirmation" name="password_confirmation" class="id bg form-control border-0 shadow-none border-bottom border-dark shadow-none rounded-0" placeholder=" ">
                        <label for="floatingPassword" class="text-muted">*Confirmar contraseña</label>
                    </div>
                </div>
                <div class="col-2 bg border-bottom border-dark" style="height: 58px; width:58px">
                    <div class="mt-3" id="mostrar-confirmacion-conraseña">
                        <i class="fas fa-eye fa-lg text-success"></i>
                    </div>
                </div>
            </div>

            <input type="text" class="d-none" name="estado" value="{{ $rol }}">

            <div class="row">
                <div class="col">
                    <a class="text-white w-100 btn btn-success mt-3" href="{{ route('completar-perfil.vistaAtras', [$rol, $persona->cedula]) }}"><i class="bi bi-arrow-left-circle"></i> Regresar</a>
                </div>
                <div class="col">
                    <button class="w-100 btn btn-success mt-3 tn-white text-white" type="submit">Finalizar  <i class="bi bi-box-arrow-in-right"></i></button>
                </div>
            </div>
            <hr class="my-4">
            <small class="text-muted d-flex justify-content-center">NSC - Nuestra Señora Del Carmen</small>
        </form>
      </div>
    </div>
</div>

<style>
  .file{
    visibility: hidden;
    position: absolute;
  }
  .identificacion{
    color: #9a6448;
  }
</style>

@if(session('success') == 'Perfil guardado correctamente' )
<script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
    })
        Toast.fire({
        icon: 'success',
        title: 'Perfil guardado correctamente'
    })
</script>
@endif

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
@endsection()