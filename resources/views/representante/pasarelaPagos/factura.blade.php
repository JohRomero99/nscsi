<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NSC</title>

    <!-- Icono Virgen -->
    <link rel="shortcut icon" href="{{ asset('imagenes/VirgenNSC.png') }}" type="image/x-icon">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- fontawesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand mt-2 mb-2 text-white" href="#">
            <img src="{{ asset('imagenes/VirgenNSC.png') }}"  width="50" height="50">
            Nuestra Señora del Carmen
        </a>
    </nav>

    <div class="container-fluid mt-3 shadow col-md-10">
        <div class="row">
            <div class="col-8 mb-3 bg-white">
                <div class="text-center">
                    <p class="mt-4 h4 p-2 text-white text-dark d-inline-block">Resumen de tu</p><small class="bg-success h4 text-white p-2 rounded">Pago</small>
                </div>
                <div class="container mt-5">
                    <table class="table table-striped text-center">
                        <thead class="thead-success">
                            <tr>
                                <th scope="col">Descripción</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Valor Cobrado</th>
                                <th scope="col">Saldo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for( $i = 0; $i < $limite; $i++)
                                <tr">
                                    <td class="m-auto">{{ $voucher->cobro[$i]->estado_cuenta->cob_cobro->descripcion }}</td>
                                    @if(  $voucher->cobro[$i]->estado_cuenta->estado == "cancelado")
                                        <td class="m-auto">{{ $voucher->cobro[$i]->estado_cuenta->estado }} <i class="fas fa-check-circle text-success"></i></td>
                                    @elseif(  $voucher->cobro[$i]->estado_cuenta->estado == "pendiente")
                                        <td class="m-auto">{{ $voucher->cobro[$i]->estado_cuenta->estado }} <i class="fas fa-minus-circle text-danger"></i></td>
                                    @endif
                                    <td class="m-auto">${{ $voucher->cobro[$i]->estado_cuenta->valor_cobrado }}</td>
                                    <td class="m-auto">${{ $voucher->cobro[$i]->estado_cuenta->saldo }}</td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-center">
                    <p class="mt-4 text-muted">Pago seguro con</p>
                    <img src="{{ asset('imagenes/paymentez.png') }}" width="200" height="70">
                </div>

                <div class="d-flex justify-content-center">
                    <img src="{{ asset('imagenes/Logos-Iso-Ht-NSC.png') }}" width="450" height="85">
                </div>

                <p class="h5 p-3 text-center text-dark"><strong>GRACIAS POR SU CONFIANZA.</strong></p>
                <div class="d-flex justify-content-center">
                    <a class="btn btn-success mt-2 p-2" href="{{ route('representante.home') }}"><i class="fas fa-arrow-circle-left"></i> Volver</a>
                </div>
            </div>
            <div class="col-4 mb-3 bg-light">
                @if( $voucher->status_transaction == "success" )
                    <p class="rounded h5 text-center mt-2 bg-success text-white p-3"><strong>APROBADO <i class="fas fa-check-circle"></i></strong></p>
                @endif
                <h1 class="display-4 text-center mt-3 text-dark h4"><strong>${{ $voucher->amount }}</strong></h1>
                <div class="d-flex justify-content-between mt-4">
                    <p><strong class="p-0">Fecha:</strong></p>
                    <p>{{ $voucher->payment_date }}</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p><strong class="p-0">No. Factura:</strong></p>
                    <p>{{ $voucher->dev_reference }}</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p><strong class="p-0">Mensaje:</strong></p>
                    <p>{{ $voucher->message }}</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p><strong class="p-0">Descripción del Prodcuto:</strong></p>
                    <p>{{ $voucher->product_description }}</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p><strong class="p-0">Cuota:</strong></p>
                    <p>${{ $voucher->diferido->cuota }}</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p><strong class="p-0">Código de autorización:</strong></p>
                    <p>{{ $voucher->authorization_code }}</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p><strong class="p-0">Refrencia:</strong></p>
                    <p>{{ $voucher->transaction_reference }}</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p><strong class="p-0">Método de Pago:</strong></p>
                    @if( $voucher->card->type  == "vi")
                        <p><img src="https://i.ibb.co/QXb0rcN/visa.png" alt="visa"></p>
                    @elseif( $voucher->card->type == "mc" )
                        <p><img src="https://i.ibb.co/S6t7sfL/mastercard.png" alt="mastercard"></p>
                    @elseif( $voucher->card->type == "ax" )
                        <p><img src="https://i.ibb.co/zJTKCGN/american-express.png" alt="american-express"></p>
                    @elseif( $voucher->card->type == "di" )
                        <p><img src="https://i.ibb.co/BGHYV8N/diners-club.png" alt="Diners"></p>
                    @elseif( $voucher->card->type == "dc" )
                        <p><img src="https://i.ibb.co/T8SVvcG/discover.png" alt="Discover"></p>
                    @else( $voucher->card->type == "ms" )
                        <p><img src="https://i.ibb.co/NW6yfjN/tool.png" alt="Maestro"></p>
                    @endif
                </div>
                <div class="d-flex justify-content-between">
                    <p><strong class="p-0">Tarjeta:</strong></p>
                    <p>******{{ $voucher->card->number }}</p>
                </div>
                <div class="d-flex justify-content-center">
                    <form action="{{ route('download-pdf', $voucher->transaction_reference) }}" method="GET">
                        @for($i = 0; $i < $limite; $i++)
                            <input type="hidden" class="d-none" name="id[]" value="{{ $voucher->cobro[0]->estado_cuenta->id }}">
                        @endfor
                        <button class="btn btn-success"><i class="fas fa-print"></i> Imprimir</button>
                    </form>
                </div>
            </div>      
        </div>
    </div>
</body>

<style>
    body{
        background-image: url("https://investigarte.in/wp-content/uploads/2022/06/boseto.png")
    }
</style>


</html>
