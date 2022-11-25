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

        <div class="card-header bg-success text-center">
            <h3 class="card-title m-auto text-white p-1"><strong>Actualizar Correo</strong></h3>
        </div>

        <form action="{{ route('datos-actualizar-correo') }}" method="POST">
            @csrf
            <div class="card-body">

                <p class="text-left text-muted">Asegúrate de que el correo sea válido ya que se enviará un enlace de verificación al mismo.</p>

                <div class="row d-flex justify-content-center">
                    <div class="col-7" style="padding-right:0px;">
                        <div class="form-floating mb-3">

                            <!-- Input para obtener correo electrónico -->
                            <div class="form-group">
                                <label for="exampleInputEmail1">Correo electrónico</label>
                                <input name="email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <div class="card-footer bg-light border-0">

                <!-- Enviar Información por al formulario -->
                <div class="col-12 d-flex justify-content-center">
                    <button class="btn btn-success text-white" type="submit">Guardar Cambios <i class="fas fa-sync"></i></button>    
                </div>

            </div>
        </form>
    </div>
</div>

@if(session('exito') == 'Correo actualizado con exito' )
    <script>
        const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        })

        Toast.fire({
        icon: 'success',
        title: 'Correo actualizado con éxito'
        })
    </script>
@endif
@endsection

@section('css')

    <!-- Sweetalert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
    @media (max-width:767px){
        .circulo_3{
            width: 40px !important;
            height: 40px !important;
        }

        .quitar_3{
            display:none !important;
        }

        .izquierda_3{
            margin-left: 25px !important;
        }
    }
    </style>
@stop

@section('js')

    <!--  -->

@stop