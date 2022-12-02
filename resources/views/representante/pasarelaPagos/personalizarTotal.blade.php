@extends('adminlte::page')

@section('title', 'NSC')

@section('content_header')
<div class="conatiner">
    <div class="text-center">
        <h3>
            <small class="text-muted h4"><strong>ESTADO DE CUENTA</strong></small>
        </h3>
        <!-- <p class="m-auto"><i class="far fa-user-circle"></i> Estudiante: {{ $nombre }} {{ $apellido }}</p> -->
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

<form action="{{ route('metodo.pago') }}" method="GET">
    <div class="container d-flex justify-content-center mt-3">
        <div class="card w-75 rounded-0">
            <div class="card-header text-center text-white bg-verde-claro rounded-0">
                <p class="m-auto"><strong>PERSONALIZA TU VALOR A CANCELAR</strong></p>
            </div>
            <div class="card-body text-center shadow">
                <!-- <div class="row border-0"> -->
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">DESCRIPCIÓN</th>
                                <th scope="col">F. VENCIMIENTO</th>
                                <th scope="col">VALOR ADEUDADO</th>
                                <th scope="col">VALOR A PAGAR</th> 
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datos as $d)
                                <tr>
                                    <td class="text-muted">{{ $d->cob_cobro->descripcion }}</td>
                                    <td class="text-muted">{{ $d->cob_cobro->fecha_vencimiento }}</td>
                                    <td class="text-muted valorAdeudado">{{ $d->valor_a_tomar }}</td>
                                    <td style="width: 100px;"><input type="text" name="saldo[]" readOnly class="saldos input text-center" value="{{ $d->saldo }}"></td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <th scope="row"></th>
                            <th></th>
                            <td class="mt-5 text-muted"><strong>Total: </strong></td>
                            <td>
                                <label class="">
                                    <small><strong>Personaliza tu saldo a cancelar.</strong></small>
                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-dollar-sign text-success"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="total form-control text-center @error('total') is-invalid @enderror" id="total" name="total" value="{{ $total }}" placeholder=" ">
                                    <div class="input-group-append">
                                        <div class="input-group-text">.00</div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="button" id="actualizar" class="btn btn-success mt-3 m-1">Actualizar <i class="fas fa-sync-alt"></i></button>
                                </div>
                            </td>
                            @error('total')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            @foreach($datos as $i)
                                <input type="text" class="d-none" name="id[]" value="{{ $i->id }}">
                            @endforeach
                        </tfoot>
                    </table>
                <!-- </div> -->
            </div>
        </div>
    </div>
    <div class="container d-flex justify-content-center">
        <a href="{{ URL::previous() }}"class="btn btn-success m-2 mb-3 p-2 text-left" ><i class="fas fa-arrow-alt-circle-left"></i> Anterior</a>
        <button type="submit" class="btn btn-success m-2 mb-3 p-2">Siguiente <i class="fas fa-arrow-alt-circle-right"></i></button>
    </div>
    <!-- <input type="hidden" name="nombre" value="{{ $nombre}}"> 
    <input type="hidden" name="apellido" value="{{ $apellido }}"> -->
</form>
@stop

@section('css')
<!-- Icono de Sistema -->
<link rel="shortcut icon" href="{{ asset('imagenes/VirgenNSC.png') }}" type="image/x-icon">

<!-- sweetalert2 -->
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
    .input{
        border:0;
    }
    .input:focus{
        outline: none;
        background-color: #fff;
        border: 0;
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

<!-- Funcion para convertir float a String -->
<script>
    function toNumberString(num) { 
        if (Number.isInteger(num)) { 
            return num + ".00"
        } else {
            return num.toString(); 
        }
    }
</script>

<!-- Funcion para mostrar mensajes Sweetalert -->
<script>
    function mensaje(tipo, mensaje){
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
        })

        Toast.fire({
            icon: tipo,
            title: mensaje
        })
    }
</script>
<!--  Personalizar el valor a pagar -->
<script>
    var saldos = document.getElementsByClassName('saldos');
    var valorAdeudado = document.getElementsByClassName('valorAdeudado');
    var total = document.getElementById('total');
    var actualizar = document.getElementById('actualizar');
    const totalOriginal = {{ $total }};
    var nuevoTotal = 0, valorDiferencia, resta, resultado, nuevoResultado, valorArreglo, totalCambio = 0, x = 1;
    var nuevoSaldo = [];

actualizar.addEventListener('click', function(){
    var valorTotal = Number(total.value);

    if( valorTotal > totalOriginal ){
        mensaje("error", "Tu valor no puede se mayor a $" +totalOriginal);
    }else if( valorTotal == 0 || valorTotal == " " ){
        mensaje("error","El campo no puede estar en cero ni tampoco vacío");
    }else if( valorTotal < totalOriginal){
    if( valorTotal < 0 ){
        mensaje("error","No puedes ingresar letras, caracteres especiales o números negativos");
    }else{
        x = x;
        if(x == 1){
        totalCambio = valorTotal;
        valorDiferencia = totalOriginal - valorTotal;
        resta = parseFloat(saldos[saldos.length - 1].value);
        resta = resta - valorDiferencia;
        if( resta < 0 ){
            for( i = saldos.length - 1 ;i >= 0; i-- ){
            resultado = valorDiferencia;
            valorArreglo = parseFloat(saldos[i].value);
            resultado =  valorArreglo - resultado;
            console.log(resultado);
                if(resultado <= 0){
                    saldos[i].value = toNumberString(0);
                }else{
                    saldos[i].value = toNumberString(resultado);
                    break;
                }
            valorDiferencia = (resultado) * -1;
            }
        }else{
            saldos[saldos.length - 1].value = resta;

        }
        mensaje("success","Carrito Actualizado correctamente");
        x = 0;

        }else if( totalCambio === valorTotal){

            totalCambio = valorTotal;
            mensaje("success","Carrito Actualizado correctamente");

        }else if(valorTotal > totalCambio ){

            valorDiferencia = valorTotal - totalCambio;
            var suma = parseFloat(saldos[0].value);
            suma = suma + valorDiferencia;

            for( var i = 0; i < saldos.length; i++ ){
                if(suma > valorAdeudado[i].innerHTML){
                resultado = valorDiferencia;
                valorArreglo = parseFloat(saldos[i].value);
                resultado =  valorArreglo + resultado;
                if (resultado >= valorAdeudado[i].innerHTML ){
                    saldos[i].value = toNumberString(valorAdeudado[i].innerHTML);
                }else{
                    saldos[i].value = toNumberString(resultado);
                    break;
                }
                valorDiferencia = resultado - valorAdeudado[i].innerHTML;
                }else{
                saldos[0].value = suma;
                break;
                }
            }
            totalCambio = valorTotal;

        }else if(valorTotal < totalCambio && totalCambio > 0){

            valorDiferencia = totalCambio - valorTotal;
            resta = parseFloat(saldos[saldos.length - 1].value);
            resta = resta - valorDiferencia;
            if( resta < 0 ){
                for( i = saldos.length - 1 ;i >= 0; i-- ){
                resultado = valorDiferencia;
                valorArreglo = parseFloat(saldos[i].value);
                resultado =  valorArreglo - resultado;
                    if(resultado <= 0){
                    saldos[i].value = 0;
                    }else{
                    saldos[i].value = toNumberString(resultado);
                    break;
                    }
                valorDiferencia = (resultado) * -1;
                }
            }else{
                saldos[saldos.length - 1].value = toNumberString(resta);
            }
                totalCambio = valorTotal;
            }
            mensaje("success","Carrito Actualizado correctamente");
    }
    }else if( valorTotal === totalOriginal ){

        for( i = 0; i < saldos.length; i++ ){
            saldos[i].value = valorAdeudado[i].innerHTML;
        }
        totalCambio = valorTotal;
        mensaje("success","Carrito Actualizado correctamente");

    }else{
        mensaje("error","No puedes ingresar letras, caracteres especiales o números negativos");
    }
});
</script>
@stop