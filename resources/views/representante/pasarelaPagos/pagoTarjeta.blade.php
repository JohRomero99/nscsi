@extends('adminlte::page')

@section('title', 'NSC')

@section('content_header')
<div class="conatiner">
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
            <div class="col-5 d-flex justify-content-end">
                <div class="circulo bg-success row justify-content-center align-items-center">
                    <strong>4</strong>
                </div>
            </div>
                <div class="col-7 text-center d-flex align-items-center">
                    <strong class="text-muted text-center">Pago</strong>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container bg-light col-md-10">
    <div class="card shadow">
        <div class="card-header text-white text-center bg-verde">
            <p class="m-auto"><strong>PAGO CON TARJETA DE CREDITO</strong></p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col p-1">
                    <div class="d-flex justify-content-center">
                        <p class="mt-4 text-muted">Pago seguro con</p>
                        <img src="{{ asset('imagenes/paymentez.png') }}" width="200" height="70">
                    </div>
                <form id="form" method="POST" action="{{ route('paymentez.buy',$token) }}">
                    @csrf
                    <table class="table text-center col-md-12">
                        <tbody>
                        <tr class="borde">
                            <th style="width:50%"><p class="text-muted m-auto">Subtotal</p></th>
                            <td><input type="text" class="text-center border-0 shadow-none" name="subtotal" readonly value="{{ $subtotal }}"></td>
                        </tr>
                        <tr class="borde">
                            <th><p class="text-muted m-auto">IVA (12%)</p></th>
                            <td><input type="text" class="text-center border-0 shadow-none" name="vat" readonly value="{{ $vat }}"></td>
                        </tr>
                        <tr class="borde">
                            <th><p class="text-muted m-auto">Total:</p></th>
                            <td><input type="text" class="text-center border-0 shadow-none" name="amount" readonly value="{{ $amount }}"></td>
                        </tr>
                        </tbody>
                    </table>  
                    <div class="container">
                        <p class="h5 text-center text-success"><strong>Métodos de Pago:</strong></p>
                        <div class="text-center p-2 bg-white">
                            <img src="{{ asset('imagenes/mastercard-4.svg') }}" class="rounded" width="100" height="65" alt="mastercard">
                            <img src="{{ asset('imagenes/visa.svg') }}" class="m-0 p-0" width="100" height="65" alt="visa">
                            <img src="{{ asset('imagenes/american-express-card.svg') }}" class="" width="100" height="65" alt="American Express">
                        </div>
                    </div>
                    </div>
                    <div class="col d-flex align-items-center">
                        <div class="container shadow p-4 bg-light rounded">          
                            <div class="form-group">
                                <div class="text-center mt-3">
                                    <div class="form-group">
                                        <div class="border-bottom d-flex justify-content-between">
                                            <p class="blockquote text-muted mb-0"><strong><i class="fas fa-wallet text-success"></i> Método de pago</strong></p>
                                            <p class="blockquote text-muted mb-0">${{ $amount }}</p>
                                        </div>
                                        <p class="text-left m-0 mt-3"><strong>Tipo de Financiamiento</strong></p>
                                        <select name="tipoDiferido" class="custom-select rounded-0 col-md-12 mb-2" onclick="toggle(this)">
                                            <option value="Rotativo">Rotativo</option>
                                            <option value="Diferido">Diferido con intereses</option>
                                        </select>
                                        <div class="masElementos"  style="display: none">
                                            <p class="m-auto text-left"><strong>Plazo (meses)</strong></p>
                                            <select name="numeroCuota" class="custom-select rounded-0 col-md-10 mt-1" id="cuota" disabled>
                                                @if( $amount >= $num[0]->diferir_a_partir )
                                                    <option value="{{$num[0]->cuota->numero_cuotas}}">{{$num[0]->cuota->numero_cuotas}}</option>
                                                @elseif( $amount >= $num[1]->diferir_a_partir && $amount < $num[2]->diferir_a_partir )
                                                    <option value="{{$num[1]->cuota->numero_cuotas}}">{{$num[1]->cuota->numero_cuotas}}</option>
                                                @elseif(  $amount >= $num[2]->diferir_a_partir && $amount < $num[3]->diferir_a_partir )
                                                    <option value="{{$num[2]->cuota->numero_cuotas}}">{{$num[2]->cuota->numero_cuotas}}</option>
                                                @elseif ( $amount >= $num[3]->diferir_a_partir )
                                                    <option value="{{$num[3]->cuota->numero_cuotas}}">{{$num[3]->cuota->numero_cuotas}}</option>
                                                @endif
                                            </select>
                                            <button type="button" class="btn btn-success mt-1" id="calcular"><i class="fas fa-calculator"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-success p-2 col-md-7" type="submit" id="aceptar">
                                    <div class="text-center d-inline">
                                        <strong id="total" class="text-white">Pagar</strong>
                                    </div>
                                    <div class="text-left d-inline" id="icono">
                                        <i class="fas fa-shopping-bag text-white"></i>
                                    </div>
                                </button>
                            </div>
                            <p class="m-auto text-muted well well-sm shadow-none text-center" style="margin-top: 10px;">
                                <input class="mt-3 form-check-inputt check_hijo mx-auto @error('terminos') is-invalid @enderror" id="terminos" name="terminos" type="checkbox"> Términos y condiciones <a target="_blank" href="../../../../../public/documentos/TÉRMINOS Y CONDICIONES.pdf"><u>Ver aquí</u></a>
                                @error('terminos')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Debe aceptar los términos y condiciones para continuar.</strong>
                                    </span>
                                @enderror
                            </p>
                            <div class="text-center">
                                <p class="m-auto"><strong>He leído y estoy de acuerdo con los</strong> <div class="text-success d-inline"><strong>términos</strong></div> <strong>y</strong> <div class="text-success d-inline"><strong>condiciones*</strong></div>.</p>
                            </div>
                            @for($i = 0; $i < count($id); $i++)
                                <input type="text" class="d-none" name="id[]" value="{{ $id[$i] }}">
                                <input type="text" class="d-none" name="saldos[]" value="{{ $saldos[$i] }}">
                            @endfor()
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-12 text-center">
  <a class="btn btn-success mb-3 p-2" href="{{ URL::previous() }}"><i class="fas fa-arrow-alt-circle-left"></i> Volver</a>
</div>

<a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
  <i class="fas fa-chevron-up"></i>
</a>
@stop

@section('css')
<!-- SweetAlert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<!-- Icono de Sistema -->
<link rel="shortcut icon" href="{{ asset('imagenes/VirgenNSC.png') }}" type="image/x-icon">

<style>
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
.border-financiamiento{
    border-radius: 10px;
}
.card{
    border.radius: 30px !important;
}
</style>
@stop

@section('js')
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

<!-- Funcion para enviar y validar si los terminos y condiciones estan aceptados  -->
<script>
let form = $("#form");
let input = $("#terminos");
let submitButton = $("#aceptar");
$("#form").submit(function (e) {
    e.preventDefault();
    if( input.prop('checked') ){
        submitButton.attr("disabled", "disabled").text("Procesando pago...");
        this.submit();
    }else{
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            })
        Toast.fire({
            icon: 'info',
            title: 'Debes aceptar los términos y condiciones para realizar el pago'
        })
    }
});
</script>

<!-- Mostrar y ocultar cuota -->
<script>
function toggle(o){
    var el = document.querySelector(".masElementos");
    var cuota = document.getElementById("cuota");
    if (o.value=="Diferido"){
        el.style.display="block";
        cuota.disabled = false;
    } 
    if (o.value=="Rotativo"){
        el.style.display="none";
        cuota.disabled = true;
    }
}
</script>

<!-- Calcular Cuota -->
<script>
    var total_cuota;
    var select = document.getElementById('cuota');
    var calcular = document.getElementById('calcular');
    calcular.addEventListener('click',function(){
        var selected = select.options[select.selectedIndex].text;
        total_cuota = {{ $amount }} / selected;
        Swal.fire({
            icon: 'info',
            confirmButtonColor: '#8AB473',
            title: 'Tu cuota mensual sería de:',
            text: '$'+total_cuota.toFixed(2),
        })
    });
</script>
@stop
