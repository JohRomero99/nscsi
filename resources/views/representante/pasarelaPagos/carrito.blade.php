@extends('adminlte::page')

@section('title', 'NSC')

@section('content_header')
<div class="container">
    <div class="text-center">
        <h3>
            <small class="text-muted h4"><strong>ESTADO DE CUENTA</strong></small>
        </h3>
        <!-- <p class="m-auto"><i class="far fa-user-circle"></i> Estudiante: {{ $ci->primer_nombre }} {{ $ci->apellido_paterno }}</p> -->
        <p class="m-auto"><i class="far fa-user-circle"></i> Estudiante: {{ nombresCompletos($ci->cedula) }}</p>
    </div>
</div>
@stop

@section('content')
<div class="container py-4">
    <div class="row d-flex justify-content-center">
        <div class="col-2">
            <div class="row">
                <div class="col-5 d-flex justify-content-end">
                    <div class="circulo bg-success row justify-content-center align-items-center">
                        <strong>1</strong>
                    </div>
                </div>
                <div class="col-7 text-center d-flex align-items-center">
                    <strong class="text-muted text-center">Seleccionar</strong>
                </div>
            </div>
        </div>
        <div class="col-1 mt-2">
            <hr>
        </div>
        <div class="col-2">
            <div class="row">
                <div class="col-5 d-flex justify-content-end" style="opacity: 0.1;">
                    <div class="circulo bg-success row justify-content-center align-items-center">
                        <strong>2</strong>
                    </div>
                </div>
                <div class="col-7 text-center d-flex align-items-center">
                    <strong class="text-muted text-center">Resumen</strong>
                </div>
            </div>
        </div>
        <div class="col-1 mt-2">
            <hr>
        </div>
        <div class="col-2">
            <div class="row">
                <div class="col-5 d-flex justify-content-end" style="opacity: 0.1;">
                    <div class="circulo bg-success row justify-content-center align-items-center">
                        <strong>3</strong>
                    </div>
                </div>
                <div class="col-7 text-center d-flex align-items-center">
                    <strong class="text-muted text-center">Método de Pago</strong>
                </div>
            </div>
        </div>
        <div class="col-1 mt-2">
            <hr>
        </div>
        <div class="col-2">
            <div class="row">
                <div class="col-5 d-flex justify-content-end" style="opacity: 0.1;">
                    <div class="circulo bg-success row justify-content-center align-items-center">
                        <strong>3</strong>
                    </div>
                </div>
                <div class="col-7 text-center d-flex align-items-center">
                    <strong class="text-muted text-center">Pago</strong>
                </div>
            </div>
        </div>
    </div>
</div>

<form action="{{ route('shopping.resume') }}" method="GET">
    <div class="container d-flex justify-content-center mt-3">
        @if($resultado->count())
            <div class="card">
                <div class="card-header bg-verde text-center border-none">
                    <strong class="m-auto text-white">SELECCIONA LOS PENSIONES A CANCELAR</strong>
                </div>
                <div class="card-body text-center shadow">
                    <table class="table table-striped">
                        <thead>
                            <tr class="">
                                <th scope="col">DESCRIPCIÓN</th>
                                <th scope="col">F. VENCIMIENTO</th>
                                <th scope="col">V. ADEUDADO</th>
                                <th scope="col">VALOR A CANCELAR</th>
                                <th sope="row">
                                    <div class="form-check">
                                        <input class="form-check-inputt" type="checkbox" id="check_padre">
                                        <label class="form-check-label" for="defaultCheck1"></label>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($resultado as $r)
                                <tr class="">
                                    <td class="text-muted">{{ $r->cob_cobro->descripcion }}</td>
                                    <td class="text-muted">{{ $r->cob_cobro->fecha_vencimiento }}</td>
                                    <td class="text-muted">{{ $r->valor_a_tomar }}</td>
                                    <td class="text-muted">{{ $r->saldo }}</td>
                                    <td scope="row" class="">
                                        <div class="form-check">
                                            <input class="form-check-inputt check_hijo" type="checkbox" name="id[]" value="{{ $r->id }}">
                                            <label class="form-check-label" for="defaultCheck1"></label>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @else
            <div class="alert alert-white" role="alert">
                <strong>¡Estas al día! No tienes nada por cancelar. <i class="fas fa-smile text-success"></i></strong>
            </div>
        @endif
    </div>
    <div class="container d-flex justify-content-center">
        <a class="btn btn-success mb-3 p-2 m-1" href="{{ route('representante.home') }}"><i class="fas fa-home"></i> Volver</a>
        <button type="submit" class="btn btn-success mb-3 p-2 m-1">Siguiente <i class="fas fa-arrow-alt-circle-right"></i></button>
    </div>
    <input type="hidden" name="nombre" value="{{ $ci->primer_nombre }}"> 
    <input type="hidden" name="apellido" value="{{ $ci->apellido_paterno }}">
</form>
@stop

@section('css')
<!-- sweetalert2 -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Icono del Sistema -->
<link rel="shortcut icon" href="{{ asset('imagenes/VirgenNSC.png') }}" type="image/x-icon">

<style>

.id:focus{
    border-bottom: 3px solid #8d4a26 !important;
}
.bg{
    background: #E8F0FE !important;
}
.bg-verde{
    background: #8AB473;
}
.circulo {
    width: 45px;
    height: 45px;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}

</style>
@stop



@section('js')
<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
   
@if(session('paso1') == 'Paso 1-3 Seleccionar' )
<script>
    const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  })

  Toast.fire({
    icon: 'success',
    title: 'Paso 1-3 Seleccionar'
  })
</script>
@endif

@if(session('exito') == 'Datos actualizados correctamente' )
    <script>
      Swal.fire({
      icon: 'success',
      title: 'Exito',
      text: 'Datos actualizados correctamente',
      })
    </script>
@endif

@if(session('error') == 'Verifica que los datos esten introducidos correctamente' )
    <script>
      Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'Verifica que los datos esten introducidos correctamente',
      footer: '<a href="">Why do I have this issue?</a>'
      })
    </script>
@endif

@if(session('error') == 'Debe seleccionadar por lo menos un mes' )
<script>
    const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
  })

  Toast.fire({
    icon: 'error',
    title: 'Debe seleccionadar por lo menos un mes'
  })
</script>
@endif

@if(session('error') == 'Error en la Verificación' )
<script>
    const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
  })

  Toast.fire({
    icon: 'error',
    title: 'Error en la Verificación'
  })
</script>
@endif

@if(session('error') == 'Error' )
<script>
    const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
  })

  Toast.fire({
    icon: 'error',
    title: 'Error'
  })
</script>
@endif

@if(session('error') == 'error inesperado' )
<script>
    const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
  })

  Toast.fire({
    icon: 'error',
    title: 'error inesperado'
  })
</script>
@endif

@if(session('info') == 'Primero tienes que agregar una tarjeta para continuar con el proceso de pago' )
<script>
    Swal.fire({
      title: 'Primero tienes que agregar una tarjeta para continuar con el proceso de pago',
      text: "Da click en el botón añadir tarjeta para continuar",
      icon: 'info',
      showCancelButton: true,
      confirmButtonColor: '#8AB473',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Añadir Tarjeta'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = "http://localhost/nsc/public/representante/paymentez/add/card";
      }
    });
</script>
@endif

<script>
var check_padre = document.getElementById("check_padre");
var check_hijo = document.getElementsByClassName("check_hijo");
 
window.onload = function(){
    for(var i = 1; i < check_hijo.length; i++){
        check_hijo[i].disabled = true;
    }
}
 
 
// Habilitar y Desabilitar de manera general.
check_padre.addEventListener('click', function(){
    if(check_padre.checked == false){
        check_hijo[0].checked = false;
        for( var i = 1; i < check_hijo.length; i++ ){
            check_hijo[i].checked = false;
            check_hijo[i].disabled = true;
        }
    }else{
        for( var i = 0; i < check_hijo.length; i++ ){
            check_hijo[i].checked = true;
            check_hijo[i].disabled = false;
        }
    }
});
     
//Habilitar y desablitar mes por mes.
for(let i = 0; i < check_hijo.length - 1; i++){
    check_hijo[i].addEventListener('click', function(){
    if(check_hijo[i].checked == true){
       check_hijo[i + 1].disabled = false;
    }else{
        for( var j = i + 1; j < check_hijo.length; j++){
            check_hijo[j].disabled = true;
            check_hijo[j].checked = false;
        }
     }
    });
}
</script>
@stop
