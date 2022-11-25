@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-success p-3 text-center"><p class="m-auto h5">{{ __('Restablecer la contraseña') }} <i class="fas fa-lock text-success"></i></p></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <div class="container d-flex justify-content-center">
                            <div class="col-md-7 mt-2 p-2 bg-light rounded shadow-sm">
                                <p class="m-auto text-center text-muted">La contraseña deberá contener una letra mayúscula y minúscula.</p>
                                <p class="m-auto text-center text-muted">La contraseña deberá contener por lo menos un Número.</p>
                                <p class="m-auto text-center text-muted">La longitud de la contraseña deber ser de 8 digistos como minimo</p>
                                <p class="m-auto text-center">Ejemplo: Nombre.Apellido.076. </p>
                            </div>
                        </div>

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row mb-3 d-none">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror " name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 mt-4 d-flex justify-content-center">
                            <label for="password" class="col-md-3 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                            <div class="col-md-4">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror shadow-none" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-2 mt-2">
                                <div id="mostrar-contraseña">
                                    <i class="far fa-eye"></i>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3 d-flex justify-content-center">
                            <label for="password-confirm" class="col-md-3 col-form-label text-md-end">{{ __('Confirmar Contraseña') }}</label>

                            <div class="col-md-4">
                                <input id="password-confirm" type="password" class="form-control shadow-none" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <div class="col-md-2 mt-2">
                                <div id="mostrar-confirmacion-conraseña">
                                    <i class="far fa-eye"></i>
                                </div>
                            </div>

                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Restablecer Contraseña') }} <i class="fas fa-sync-alt"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var password = document.getElementById("password");
    var password_confirmation = document.getElementById("password-confirm");
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