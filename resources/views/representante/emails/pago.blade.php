<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NSC</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

    <!-- fontawesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

</head>
<body>
    <div class="">
        <div class="card-body m-0 vh-100 row justify-content-center align-items-center">
            <div class="container-imagen p-1 col-md-5 rounded bg-white fondo" style="">
                <div class="d-flex justify-content-center mt-2" style="display: flex; align-items: center; justify-content: center;">
                    <img src="https://i.ibb.co/R28B24P/Logo-NSCFinal-Negro.png" width="300" height="85" alt="">
                </div>
                <div class="mt-3">
                    <p class="p-3 h5 m-auto text-info text-center" style="text-align:center;">
                    <strong>Hola!, {{ Auth::user()->representante->persona->primer_nombre }}</strong></p>
                    <p class="mb-4 text-center h6" style="text-align: center;">Tu transacion por el valor de <strong class="text-success">${{ $voucher->amount }}</strong> ha sido: {{ $voucher->status }}</p>
                </div>
                @if( $voucher->estado_reembolso == "success" )
                    <div class="" style="text-align:center; display: flex;align-items: center; justify-content: center; color:#fff;">
                        <div class="mb-1 w-50 p-3 bg-dark text-white rounded" style="text-align:center; background-color: #1A4052; border-radius: 10px; width: 50%">
                            <p class="imagen mb-2" style="text-align:center;">
                                <img src="https://i.ibb.co/8DHcqP3/correct.png" style="text-align:center;" width="30" height="30" alt="success">
                            </p>
                            <p class="m-auto text-center h6" style="text-align: center;"><strong>Reembolsada</strong></p>
                        </div>
                    </div>
                @elseif( $voucher->status_transaction == "success")
                    <div class="" style="text-align:center; display: flex;align-items: center; justify-content: center; color:#fff;">
                        <div class="mb-1 w-50 p-3 bg-dark text-white rounded" style="text-align:center; background-color: #1A4052; border-radius: 10px; width: 50%">
                            <div class="imagen mb-2" style="text-align:center; margin: 10px;">
                                <img src="https://i.ibb.co/8DHcqP3/correct.png" style="text-align:center;" width="30" height="30" alt="success">
                            </div>
                            <p class="m-auto text-center h6" style="text-align: center;"><strong>Aprobada</strong></p>
                        </div>
                    </div>
                @else
                    <div class="" style="text-align:center; display: flex;align-items: center; justify-content: center; color:#fff;">
                        <div class="mb-1 w-50 p-3 bg-dark text-white rounded" style="text-align:center; background-color: #1A4052; border-radius: 10px; width: 50%">
                            <div class="text-center mb-2" style="text-align:center; margin: 10px;">
                                <img src="https://i.ibb.co/CbPsJXJ/delete.png" style="text-align:center;" width="30" height="30" alt="success">
                            </div>
                            <p class="m-auto text-center h6"><strong>Rechazada</strong></p>
                        </div>
                    </div>
                @endif()
                <div class="text-center mt-4" style="text-align: center;">
                    <p class="m-auto"><strong class="p-0">Fecha: </strong></p>
                    <p class="m-auto">{{ $voucher->payment_date }}</p>
                </div>
                <div class="text-center" style="text-align: center;">
                    <p class="m-auto"><strong class="p-0">No. Factura: </strong></p>
                    <p class="m-auto">{{ $voucher->dev_reference }}</p>
                </div>
                <div class="text-center" style="text-align: center;">
                    <p class="m-auto"><strong class="p-0">Descripción del Prodcuto: </strong></p>
                    <p class="m-auto">{{ $voucher->product_description }}</p>
                </div>
                <div class="text-center" style="text-align: center;">
                    <p class="m-auto"><strong class="p-0">Cuota: </strong></p>
                    <p class="m-auto">${{ $voucher->diferido->cuota }}</p>
                </div>
                <div class="text-center" style="text-align: center;">
                    <p class="m-auto"><strong class="p-0">Código de autorización: </strong></p>
                    <p class="m-auto">{{ $voucher->authorization_code }}</p>
                </div>
                <div class="text-center" style="text-align: center;">
                    <p class="m-auto"><strong class="p-0">Refrencia: </strong></p>
                    <p class="m-auto">{{ $voucher->transaction_reference }}</p>
                </div>
                <div class="text-center" style="text-align: center;">
                    <p class="m-auto"><strong class="p-0">Tarjeta: </strong></p>
                    <p class="m-auto">****{{ $voucher->card->number }}</p>
                </div>
                <div class="container text-center" style="text-align: center;">
                    <p class="m-auto"><strong class="">Método de Pago:</strong></p>
                    @if( $voucher->card->type  == "vi")
                        <p class="m-auto"><img src="https://i.ibb.co/QXb0rcN/visa.png" alt="visa"></p>
                    @elseif( $voucher->card->type == "mc" )
                        <p class="m-auto"><img src="https://i.ibb.co/S6t7sfL/mastercard.png" alt="mastercard"></p>
                    @elseif( $voucher->card->type == "ax" )
                        <p class="m-auto"><img src="https://i.ibb.co/zJTKCGN/american-express.png" alt="american-express"></p>
                    @elseif( $voucher->card->type == "di" )
                        <p class="m-auto"><img src="https://i.ibb.co/BGHYV8N/diners-club.png" alt="Diners"></p>
                    @elseif( $voucher->card->type == "dc" )
                        <p class="m-auto"><img src="https://i.ibb.co/T8SVvcG/discover.png" alt="Discover"></p>
                    @else( $voucher->card->type == "ms" )
                        <p class="m-auto"><img src="https://i.ibb.co/NW6yfjN/tool.png" alt="Maestro"></p>
                    @endif
                </div>
                <div class="d-flex justify-content-center" style="text-align: center;">
                    <img src="https://i.ibb.co/vc9GL17/Logos-Iso-Ht-NSC.png" width="400" height="80" alt="">
                </div>
                <div class="text-center" style="text-align: center;">
                    <p><small><strong class="text-success text-muted">NSC - Nuestra Señora Del Carmen</strong></small></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<style>
    /* body{
        background-color: #edf2f7;
    }
    .container-principal{
        padding: 5px;
        margin: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .container-secundario{
        padding: 5px;
        margin: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #1A4052;
        border-radius: 10px;
        color: #fff;
    }
    .container-imagen{
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .imagen{
        margin: 10px auto 10px auto;
        padding: 5px auto 5px auto;
        text-align:center;
    }
    .text-center{
        text-align:center;
    } */
</style>