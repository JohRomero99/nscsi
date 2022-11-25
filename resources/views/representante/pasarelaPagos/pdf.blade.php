<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://i.ibb.co/rbpNhJS/Virgen-NSC.png" type="image/x-icon">
    <title>NSC</title>

    <!-- Icono Virgen -->
    <link rel="shortcut icon" href="{{ asset('imagenes/VirgenNSC.png') }}" type="image/x-icon">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- fontawesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

</head>
<body>
    <!-- <p class="h5 p-3 text-center bg-dark text-white"><strong>Nuestra Señora del Carmen</strong></p> -->
    <div class="container bg-transparent">
        <div class="card border-0 bg-transparent">
            <div class="card-body bg-transparent">
                <p class="text-center"><img src="{{ asset('imagenes/Logo-NSCFinal-Negro.png') }}" width="300" height="100" alt=""></p>
                <p class="h5 text-center bg-dark text-white p-3 rounded">
                    @if( $voucher->status_transaction == "success" )
                    <strong>
                        APROBADA<i class="fas fa-check-circle"></i>
                        <img src="{{ asset('imagenes/check.png') }}" class="mt-3" width="25" height="25" alt="check">
                    </strong>
                    @endif
                </p>
                <h1 class="display-4 text-center mt-3 text-success h4"><strong>${{ $voucher->amount }}</strong></h1>

                <p class="text-center m-auto text-dark"><strong>Fecha:</strong></p>
                <p class="text-center m-auto">{{ $voucher->payment_date }}</p>
                <p></p>
                <p class="text-center m-auto text-dark"><strong>No. Factura:</strong></p>
                <p class="text-center m-auto">{{ $voucher->dev_reference; }}</p>
                <p></p>   
                <p class="text-center m-auto text-dark"><strong>Mensaje:</strong></p>
                <p class="text-center m-auto">{{ $voucher->message; }}</p>
                <p></p>
                <p class="text-center m-auto text-dark"><strong>Descripción del Prodcuto:</strong></p>
                <p class="text-center m-auto">{{ $voucher->product_description }}</p>
                <p></p>
                <p class="text-center m-auto text-dark"><strong>Cuotas:</strong></p>
                <p class="text-center m-auto">{{ $diferido->cuota }}</p>
                <p></p>
                <p class="text-center m-auto text-dark"><strong>Código de autorización:</strong></p>
                <p class="text-center m-auto">{{ $voucher->authorization_code }}</p>
                <p></p>
                <p class="text-center m-auto text-dark"><strong>Referencia:</strong></p>
                <p class="text-center m-auto">{{ $voucher->transaction_reference }}</p>
                <p></p>
                <p class="text-center m-auto text-dark"><strong>Metodo de Pago:</strong></p>
                @if( $voucher->card->type == "vi")
                    <p class="text-center m-auto text-dark"><img src="{{ asset('imagenes/visa.png') }}" alt="visa"></h6>
                @elseif( $voucher->card->type == "mc" )
                    <p class="text-center m-auto text-dark"><img src="{{ asset('imagenes/mastercard.png') }}" alt="mastercard"></h6>
                @elseif( $voucher->card->type == "ax" )
                    <p class="text-center m-auto text-dark"><img src="{{ asset('imagenes/american-express.png') }}" alt="american-express"></h6>
                @elseif( $voucher->card->type == "di" )
                    <p class="text-center m-auto text-dark"><img src="{{ asset('imagenes/diners-club.png') }}" alt="Diners"></h6>
                @elseif( $voucher->card->type == "dc" )
                    <p class="text-center m-auto text-dark"><img src="{{ asset('imagenes/discover.png') }}" alt="Discover"></h6>
                @else( $voucher->card->type == "ms" )
                    <p class="text-center m-auto text-dark"><img src="{{ asset('imagenes/tool.png') }}" alt="Maestro"></h6>
                @endif
                <p></p>
                <p class="text-center m-auto text-dark"><strong>Tarjeta:</strong></p>
                <p class="text-center m-auto">{{ $voucher->card->bin }}*****</p>
            </div>
        </div>
    </div>
    <p></p>
    <p class="h5 text-center text-dark m-auto"><strong>GRACIAS POR SU CONFIANZA.</strong></p>
</body>
</html>

<style>
    body{
        background-image: url("https://investigarte.in/wp-content/uploads/2022/06/boseto.png")
    }
</style>