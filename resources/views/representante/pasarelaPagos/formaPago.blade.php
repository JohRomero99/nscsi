@extends('adminlte::page')

@section('title', 'NSC')

@section('content_header')
<div class="text-center">
    <h3>
        <small class="text-muted h4"><strong>AÑADE O ELIMINA TARJETAS <i class="far fa-credit-card"></i></strong></small>
    </h3>
</div>
@stop

@section('content_header')
<div class="text-center">
  <p class="lead text-center m-auto"><strong>Formas de Pago <i class="far fa-credit-card text-success"></i></strong></p>
  <small class="text-center">Añade o elimina una tarjeta de crédito.</small>
</div>
@stop

@section('content')
<div class="container d-flex justify-content-center">
    <div class="card w-75 mt-2 shadow">
        <div class="card-header bg-verde text-center text-white">
            <strong class="mt-2">TARJETAS</strong>
        </div>
        @if($contador > 0)
            <ul class="list-group list-group-flush">
                @for( $i = 0; $i < $contador; $i++ ) 
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <p class="h6">
                            <i class="far fa-credit-card fa-lg text-success"></i>
                                ************{{ $tarjetas[$i]['number'] }}
                        </p>
                        <small class="text-muted h6 m-2 ">Tarjeta de Crédito</small>
                    </div>
                        <span class="text-muted h6 m-2">
                            <form action="{{ route('paymentez.delete', $tarjetas[$i]['token']) }}" class="eliminarCard" method='POST'>
                                @csrf
                                <button class="btn btn-success">Eliminar <i class="far fa-trash-alt"></i></button>
                            </form>
                        </span>
                    </li>
                @endfor
            </ul>
        @else
            <div class="container d-flex justify-content-center">
                <div class="alert alert-white p-3 mt-3 text-center col-md-6" role="alert">
                    <p class="m-auto">Por el momento no tienes una tarjeta añadida</p>
                    <small>Agrega una para poder realizar tus pagos.</small>
                    <i class="far fa-smile"></i>
                </div>
            </div>
        @endif
    </div>
</div>

<div class="container d-flex justify-content-center">
    <a class="btn btn-success p-2" href="{{ route('paymentez.agregarTarjeta') }}"><strong>Añadir Método de Pago <i class="far fa-credit-card"></i></strong></a>
</div>

<a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
    <i class="fas fa-chevron-up"></i>
</a>
@stop

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

<!-- Icono del Sistema -->
<link rel="shortcut icon" href="{{ asset('imagenes/VirgenNSC.png') }}" type="image/x-icon">

<!-- Sweetalert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Fontawesome -->
<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

<style>
.ancho{
    width:100px;
}
.ancho:hover{
    background: #34DCCC;
}
.bg-verde{
    background: #8AB473;
}
</style>
@stop

@section('js')
<script>
$(function () {
    $('[data-toggle="popover"]').popover()
})
</script>

@if(session('eliminarCard') == 'Tarjeta eliminada con éxito' )
    <script>
        Swal.fire(
            'Tarjeta eliminada',
            'La tarjeta fue eliminada con éxito.',
            'success'
        )
    </script>
@endif

@if(session('error') == 'Error al momento de añadir la tarjeta')
<script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
    })

    Toast.fire({
        icon: 'error',
        title: 'Error al momento de añadir la tarjeta'
    })
  </script>
@endif

@if(session('exito') == 'Tarjeta añadida correctamente')
<script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
    })

    Toast.fire({
        icon: 'success',
        title: 'Tarjeta añadida correctamente'
    })
  </script>
@endif

@if(session('error') == 'Error inesperado')
  <script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
    })

    Toast.fire({
        icon: 'error',
        title: 'Error inesperado'
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

<script>
  $('.eliminarCard').submit(function(e){
    e.preventDefault();
    Swal.fire({
        title: '¿Esta seguro que desea eliminar esta Tarjeta?',
        text: "¡No podrás revertir este proceso!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, continuar'
    }).then((result) => {
        if (result.isConfirmed) {
          this.submit();
        }
    })
  });
</script>
@stop