@extends('adminlte::page')

@section('title', 'NSC')

@section('content_header')
<div class="container">
    <div class="text-center">
        <h3>
            <small class="text-muted h4"><strong>ESTADO DE CUENTA</strong></small>
        </h3>
        <p class="m-auto"><i class="far fa-user-circle"></i> Estudiante: {{ $nombre }} {{ $apellido }}</p>
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
                <div class="col-5 d-flex justify-content-end">
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
                <div class="col-5 d-flex justify-content-end">
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

<div class="container col-md-6">
    <div class="card">
        <div class="card-header text-center bg-verde-claro text-white">
            <div class="row">
                <div class="col mt-2">
                    <strong class="">ESCOGE TU TARJETA</strong>
                </div>
                <div class="col">
                    <!-- <button class="btn btn-light"><strong>Añadir nueva tarjeta</strong></button> -->
                    <a class="btn btn-light" href="{{ route('paymentez.agregarTarjeta') }}"><strong>Agregar Tarjeta</strong></a>
                </div>
            </div>
        </div>
        <div class="card-body text-center">
            @if( $contador == 0 )
                <div class="container">
                    <p class="m-auto">Todavía no tienes una tarjeta agregada.  <i class="fas fa-frown-open text-success"></i></p>
                    <p>Debes agregar una para poder continuar.</p>
                    <a class="btn btn-success" href="{{ route('paymentez.agregarTarjeta') }}">Agregar Tarjeta</a>
                </div>
            @elseif( $contador > 0 )
                <div class="container d-flex justify-content-center">
                    <ul class="list-group list-group-flush col-md-12">
                        <form action="{{ route('shopping.pay', $total) }}" class="border-0">
                            @for( $i = 0; $i < $contador; $i++ ) 
                                <div class="conatiner">
                                    <diw class="row p-1">
                                        <div class="col-2 border-success border-left bg-white text-center shadow-sm">
                                            <p class="m-auto"><i class="mt-3 far fa-credit-card text-success"></i></p>
                                        </div>
                                        <div class="col-6 bg-white text-center shadow-sm">
                                            <p class="m-auto">{{ $tarjetas[$i]['bin'] }}******{{ $tarjetas[$i]['number'] }}</p>
                                            <p class="m-auto text-muted">Tarjeta de crédito.</p>
                                        </div>
                                        <div class="col-3 d-flex justify-content-center bg-white shadow-sm">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="cardList[]" value="{{ $tarjetas[$i]['token'] }}" id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1"></label>
                                            </div>
                                        </div>
                                    </diw>
                                </div>
                            @endfor 
                            @for($i = 0; $i < count($id); $i++) 
                                <input type="text" class="d-none" name="id[]" value="{{ $id[$i] }}">
                                <input type="text" class="d-none" name="saldos[]" value="{{ $saldos[$i] }}">
                            @endfor
                            <a class="btn btn-success mt-2" href="{{ URL::previous() }}"><i class="fas fa-arrow-circle-left"></i> Anterior</a>
                            <button type="submit" class="btn btn-success mt-2">Siguiente <i class="fas fa-arrow-circle-right"></i></button>
                            <input type="hidden" name="nombre" value="{{ $nombre }}"> 
                            <input type="hidden" name="apellido" value="{{ $apellido }}">
                        </form>         
                    </ul>
                </div>
            @endif
        </div>
    </div>
</div>

<a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
  <i class="fas fa-chevron-up"></i>
</a>
@stop

@section('css')
<!-- Icono de Sistema -->
<link rel="shortcut icon" href="{{ asset('imagenes/VirgenNSC.png') }}" type="image/x-icon">

<!-- Sweetalert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<style>
.bg-verde-claro{
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
@if(session('error') == 'Debe seleccionar una tarjeta para continuar')
<script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })
    Toast.fire({
        icon: 'error',
        title: 'Debe seleccionar una tarjeta para continuar',
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
@stop