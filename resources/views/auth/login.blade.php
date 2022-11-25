@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row align-items-center g-lg-5 py-4">
      <!-- <div class="col-lg-7 text-center text-lg-start">
      </div> -->
      <div class="col-md-12 mx-auto col-lg-5 bg-white shadow-sm contenedor">
      <h4 class="mx-auto text-success text-center mt-4" >Iniciar Sesión</h4>
        <form class="p-5 p-md-3 rounded-3" method="POST" action="{{ route('login') }}">
            @csrf
          <div class="form-floating mb-3">
            <input type="text" name="name" class="bg form-control border-0 shadow-none shadow-none @error('name') is-invalid @enderror" id="name" placeholder=" ">
                @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
            <label for="floatingInput" class="text-muted">Usuario</label>
          </div>

          <div class="form-floating mb-3">
            <input type="password" name="password" class="bg form-control border-0 shadow-none shadow-none @error('password') is-invalid @enderror" id="password" placeholder=" ">
                @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
            <label for="floatingPassword" class="text-muted">Contraseña</label>
          </div>
          
          <div class="checkbox mb-3 text-center">
            <label>
              <input type="checkbox" value="remember-me"> Recordar credenciales
            </label>
          </div>

          <button class="w-100 btn btn-lg btn-success" type="submit">Ingresar</button>
            @if (Route::has('password.request'))
            <a class="btn d-flex justify-content-center shadow-none" href="{{ route('password.request') }}">
                <u>{{ __('¿Olvidaste tu contraseña?') }}</u>
            </a>
            @endif
        </form>
      </div>
    </div>
</div>

<style>
  .contenedor{
    border-radius:15px !important;
  }
</style>

@endsection
