@extends('layouts.app')

@section('content')

<div class="container col-xl-10 col-xxl-8 px-4 py-1">
    <div class="row align-items-center g-lg-5 py-2">
      <div class="col-md-10 mx-auto col-lg-5 mt-4 p-4 bg-white shadow-sm">
        <form action="{{route('verificar.codigo')}}" class="p-4 p-md-3 border-0 rounded-3" method="POST">
        <div class="d-flex justify-content-between">
          <p class="h5 text-success">Identificación: </p>
          <p class="h5 text-muted" >Paso: 1-3 </p>
        </div>
        <div class="mt-2 p-2 bg-light rounded shadow-sm">
            <p class="m-auto text-center text-muted">-Digita tu número de cédula.</p>
            <p class="m-auto text-center text-muted">-Cigita el código que te fue enviado por correo.</p>
        </div>
          @csrf
            <div class="">
                <div class="form-floating mb-3">
                  <input type="text" class="bg id form-control border-0 shadow-none border-bottom border-dark shadow-none rounded-0 @error('cedula') is-invalid @enderror" placeholder=" " name="cedula" id="cedula">
                  @error('cedula')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                  <label for="floatingInput" class="text-muted">Cédula</label>
                  <div class="d-flex justify-content-center">
                </div>
                <div class="form-floating mb-3 mt-3">
                  <input type="text" class="bg id form-control border-0 shadow-none border-bottom border-dark shadow-none rounded-0 @error('codigo') is-invalid @enderror"  placeholder=" " name="codigo" id="codigo">
                  @error('codigo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                  <label for="floatingPassword" class="text-muted">Código</label>
                </div>
                <div class="row">
                  <div class="col">
                      <a class="text-white w-100 btn btn-success mt-3" href="{{ route('login') }}"> <i class="bi bi-arrow-left-circle"></i> Regresar</a>
                  </div>
                  <div class="col">
                    <button class="w-100 btn btn-success  mt-3 tn-white text-white" type="submit">Verificar   <i class="bi bi-person-check"></i></button>
                  </div>
                </div>
                <hr class="my-4">
                <small class="text-muted d-flex justify-content-center">NSC- Nuestra Señora Del Carmen</small>
            </div>
        </form>
      </div>
    </div>
  </div>

<style>
  a{
    text-decoration: none;
  }
</style>

@if(session('noRegistroRepresentante') == 'Intentalo nuevamente' )
    <script>
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 2000,
      })

      Toast.fire({
        icon: 'error',
        title: 'Intentalo nuevamente'
      })
    </script>
@endif
@if(session('error') == 'Si el error persiste contacta con soporte técnico')
    <script>
      const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 2000,
    })

    Toast.fire({
      icon: 'error',
      title: 'Si el error persiste contacta con soporte técnico'
    })
    </script>
@endif
@if(session('error') == 'Código incorrecto' )
    <script>
      const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 2000,
    })

    Toast.fire({
      icon: 'error',
      title: 'Código incorrecto'
    })
    </script>
@endif
@if(session('info') == 'Ya tienes una cuenta' )
    <script>
      const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 2000,
    })

    Toast.fire({
      icon: 'error',
      title: 'Ya tienes una cuenta'
    })
    </script>
@endif
@if(session('cedula') == 'Cedula incorrecta')
    <script>
    Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'Cedula incorrecta',
    })
    </script>
    <script>
      const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 2000,
    })

    Toast.fire({
      icon: 'error',
      title: 'Cedula incorrecta'
    })
    </script>
@endif

@endsection




  




  

