<!DOCTYPE html>
<html lang="en">
<head>
<title>Nuestra Señora del Carmen</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <!-- Icono página -->
    <link rel="shortcut icon" href="{{ asset('imagenes/VirgenNSC.png') }}" type="image/x-icon">

    <!-- Paymentez -->
    <link href="https://cdn.paymentez.com/ccapi/sdk/payment_stable.min.css" rel="stylesheet" type="text/css"/>
    <script src="https://cdn.paymentez.com/ccapi/sdk/payment_stable.min.js" charset="UTF-8"></script>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- Iconos bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
<style>
    body{
        background-image: url("https://investigarte.in/wp-content/uploads/2022/06/boseto.png");
    }
    .panel {
        margin: 0 auto;
        /* background-color: #F5F5F7; */
        /* border: 1px solid #ddd; */
        padding: 20px;
        display: block;
        width: 80%;
        border-radius: 6px;
        /* box-shadow: 0 2px 4px rgba(0, 0, 0, .1); */
    }

    .btn {
        background-color: #343a40;
        /* background: rgb(140, 197, 65); Old browsers */
        /* background: -moz-linear-gradient(top, rgba(140, 197, 65, 1) 0%, rgba(20, 167, 81, 1) 100%); FF3.6-15 */
        /* background: -webkit-linear-gradient(top, rgba(140, 197, 65, 1) 0%, rgba(20, 167, 81, 1) 100%); Chrome10-25,Safari5.1-6 */
        /* background: linear-gradient(to bottom, rgba(140, 197, 65, 1) 0%, rgba(20, 167, 81, 1) 100%); W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#44afe7', endColorstr='#3198df', GradientType=0);
        color: #fff;
        display: block;
        width: 100%;
        /* border: 1px solid rgba(46, 86, 153, 0.0980392); */
        /* border-bottom-color: rgba(46, 86, 153, 0.4); */
        border-top: 0;
        border-radius: 4px;
        font-size: 17px;
        text-shadow: rgba(46, 86, 153, 0.298039) 0px -1px 0px;
        line-height: 34px;
        -webkit-font-smoothing: antialiased;
        font-weight: bold;
        display: block;
        margin-top: 20px;
    }
    .i{
        font-size: 20px;
    }
    .btn:hover {
        cursor: pointer;
    }
    .margen{
        margin:0;
        padding:0;
    }
    .back-btn {
        left: 17px;
        margin-top: -175px;
        opacity: .7;
        position: absolute;
        top: 50%;
    }
    .back-btn:hover{
        opacity: 1;
    }
</style>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand mt-2 mb-2 text-white" href="#">
        <img src="https://i.ibb.co/CQpVr0x/Virgen-NSC.png"  width="50" height="50">
        Nuestra Señora del Carmen
    </a>
</nav>

<div class="container mt-5">
    <div class="card">
        <div class="card-body margen col-md-12">
            <div class="card-title border text-center p-3">
            <a href="{{ route('paymentez.formaPago') }}"><img src="https://i.ibb.co/JqHzMgS/back.png" class="back-btn" width="30" height="30"></a>
                <strong>
                        Añadir nuevo Método de Pago
                </strong>
            </div>
            <div class="panel mt-5">
                <form id="add-card-form">
                    <div class="payment-form" id="my-card" data-capture-name="true"></div>
                        <button class="btn">Agregar tarjeta</button>
                    <br/>
                    <!-- <div id="messages"></div> -->
                </form>
            </div>
        </div>
    </div>
</div>

<div class="text-center">
    <p class="mt-2 text-muted">NSC - Nuestra Señora del Carmen</p>
</div>

<!-- Sweetalert2@11 -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
<script>
    function mensaje(icono, mensaje){
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
            icon: icono,
            title: mensaje,
        })
    }
</script>

<script>
  $(function () {
        Payment.init("stg", "{{config('services.paymentez.keyClient')}}", "{{config('services.paymentez.keyTokenClient')}}");

        let form = $("#add-card-form");
        let submitButton = form.find("button");
        let submitInitialText = submitButton.text();

    $("#add-card-form").submit(function (e) {
        let myCard = $('#my-card');
        $('#messages').text("");
        let cardToSave = myCard.PaymentForm('card');
        if (cardToSave == null) {
            // $('#messages').text("Invalid Card Data");
            mensaje("success","Invalid Card Data");
        } else {
            submitButton.attr("disabled", "disabled").text("Procesando Tarjeta...");

            let uid = "{{  Auth::user()->code_paymentez  }}";
            let email = "{{ Auth::user()->email }}";

            Payment.addCard(uid, email, cardToSave, successHandler, errorHandler);
        }
        e.preventDefault();
    });

    let successHandler = function (cardResponse) {
        if (cardResponse.card.status === 'valid') {

            var myCard = $('#my-card');
            var name = myCard.PaymentForm('name');
            var data = [":bin", ":status", ":token", ":holder_name", ":expiry_year", ":expiry_month", ":transaction_reference", ":type", ":number"];
            var tarjeta = [cardResponse.card.bin, cardResponse.card.status, cardResponse.card.token, name, cardResponse.card.expiry_year, cardResponse.card.expiry_month, cardResponse.card.transaction_reference, cardResponse.card.type, cardResponse.card.number];
            var url = '{{ route("guardar.tarjeta",[":bin", ":status", ":token", ":holder_name", ":expiry_year", ":expiry_month", ":transaction_reference", ":type", ":number"]) }}'; 
            for(var i = 0; i < data.length; i++){
                url = url.replace(data[i],tarjeta[i]);
            }
            
            mensaje("success","Tarjeta añadida con éxito");
            setTimeout( function() { window.location.href = url ; }, 3000 );

        } else if (cardResponse.card.status === 'review' || cardResponse.card.status === 'pending') {

            mensaje("success","Tarjeta en revisión");
            var transaction_reference = cardResponse.card.transaction_reference;
            var url = '{{ route("paymentez.otp",[":transaction", "ruta_add_card","null", "null", "null"]) }}';
            url = url.replace(':transaction',transaction_reference);
            setTimeout( function() { window.location.href = url ; }, 3000 );
            
        } else {

            var message_token = cardResponse.card.message;
            mensaje("error","Error");
            
        }
        submitButton.removeAttr("disabled");
        submitButton.text(submitInitialText);
    }; 

        let errorHandler = function (err) {
        $('#messages').html(err.error.type);
        mensaje("info","Ocurrio un error");
        submitButton.removeAttr("disabled");
        submitButton.text(submitInitialText);
        };

        var session_id = Payment.getSessionId();

  });
</script>
</html>