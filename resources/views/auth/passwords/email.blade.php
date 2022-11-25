@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center"><p class="h5 p-1 m-auto">{{ __('Enviar enlace de restablecimiento de contraseña') }} <i class="fa-regular fa-envelope text-success"></i></p></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success text-center" role="alert">
                            {{ session('status') }} <i class="fas fa-paper-plane"></i>
                        </div>
                    @endif

                    <p class="m-auto text-muted text-center">Introduce el correo con el que estas registrado.</p>
                    <p class="m-auto text-muted text-center">Se enviará un enlace de restablecimiento de contraseña.</p>

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3 mt-2">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="shadow-none form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Enviar enlace') }} <i class="far fa-envelope"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="text-center">
    <a class="btn btn-outline-success mt-3" href="{{ route('home') }}"><i class="far fa-arrow-alt-circle-left"></i> Volver al Inicio</a>
</div>
@endsection
<script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</script>
@if(session('message') == 'Enlace de verificacion enviado' )
    <script>
    Swal.fire({
    icon: 'success',
    title: 'Exito',
    text: 'Enlace de verificacion enviado',
    })
    </script>
@endif