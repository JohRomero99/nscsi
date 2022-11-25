@extends('layouts.app')

@section('content')
<div class="container col-md-7">
    <div class="card text-center mt-2">
    <div class="card-header text-white bg-success">
        <h4 class="mt-1 mb-0 " >Validación de Correo Electrónico</h4> 
    </div>
    <div class="card-body">
        <h5 class="card-title">Hola, {{ Auth::user()->name }} <i class="fas fa-user text-success"></i></h5>
        <div class="text-center">1.- Abre el mensaje que te hemos enviado a tu correo Electrónico.</div>
        <p class="text-center m-2"><strong>{{ Auth::user()->email }}</strong></p>
        <div class="container mt-3">
            <div class="text-center">2.- Pulsa en el botón "Confirme su dirección de correo Electrónico"</div>
            <div class="text-center">Así confirmaremos que tu correo es válido.</div>
        </div>
    </div>
    <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0"> 
        <button class="btn show shadow-none border-0 text-primary" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          <u>¿El enlace no ha llegado a tu correo?. Puedes solicitar otro aquí.</u>
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        <form class="d-inline d-flex justify-content-center" method="POST" action="{{ route('verification.send') }}">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="text-center">Da click para generar un nuevo enlace</div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-success mt-1 show">Generar nuevo enlace <i class="far fa-paper-plane"></i></button>.
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn collapsed shadow-none border-0 text-primary" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <u>¿Ingresaste un correo erroneo?. Puedes cambiarlo aquí.</u>
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        <form method="POST" action="{{ route('actualizar.correo') }}">
            @csrf
            <div class="text-center mt-1"><strong>Ingresa el nuevo correo:</strong></div>
            <div class="d-flex justify-content-center mr-3">
                <input type="text" name="email" id="email" class="text-center bg form-control shadow-none border-0 border-bottom border-dark mt-2 w-50 @error('password') is-invalid @enderror" placeholder="ejemplo@gmail.com">   
                <div>.</div>
                <div class="text-center">
                    <button class="btn btn-success mt-2"><i class="fas fa-redo"></i></button>
                </div>
            </div>
            @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
            <small class="text-danger"><strong>*El nuevo correo no puede ser el mismo que tienes actualmente</strong></small>
        </form>
      </div>
    </div>
  </div>
</div>

    </div>
</div>

<style>
.bg {
    background: #E8F0FE !important;
}
</style>
@if(session('mensaje') == '¡Enlace de verificación reenviado!' )
    <script>
    Swal.fire({
    icon: 'success',
    title: '¡Enlace de verificación reenviado!',
    text: 'Revisa tu bandeja de entrada',
    })
    </script>
@endif
</script>
@if(session('mensaje') == 'Correo Registrado correctamente' )
    <script>
    Swal.fire({
    icon: 'success',
    title: 'Exito',
    text: 'Resiva tu bandeja de entrada para verificar tu correo',
    })
    </script>
@endif
@if ($errors->any())
    <script>
    Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Ocurrió un error al actualizar el correo, vuelve a intentar',
    })
    </script>
@endif

@endsection
