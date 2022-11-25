<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NSC</title>
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
      
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Icono de Sistema -->
    <link rel="shortcut icon" href="{{ asset('imagenes/VirgenNSC.png') }}" type="image/x-icon">

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->
    <!-- Fontawesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand text-white p-3" href="#">
        <img src="{{ asset('imagenes/VirgenNSC.png') }}"  width="50" height="50">
        Nuestra Señora del Carmen
    </a>
</nav>

<div class="container">
    <div class="row align-items-center g-lg-5 py-2">
        <div class="col-md-12">
            <div class="d-flex justify-content-center">
                <!-- <p class="text-center h5 p-3 bg-success text-white rounded"><strong>CÓDIGO DE VERIFICACIÓN</strong></p> -->
            </div>
        </div>
        <div class="col-lg-7 text-center text-lg-start">
            <div class="img d-flex justify-content-center">
                <img src="{{ asset('imagenes/verificarCodigo.png') }}" width="400" height="400" alt="verificacion-codigo">
                
            </div>
        </div>
        <div class="col-md-10 mx-auto col-lg-5">
            <form class="border rounded-3 bg-light" id="form" action="{{ route('paymentez.verify',[$transaction, $ruta]) }}" method="POST">
                @csrf  
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <p class="h5 p-2 m-auto text-center"><strong>VERIFICACIÓN</strong></p>
                    </div>
                    <div class="card-body">
                        <p class="p-3">Digita el código de verificacion que se te fue enviado para continuar.</p>
                        <div class="form-floating mb-3">
                            <input name="codigo" type="text" class="form-control shadow-none @error('codigo') is-invalid @enderror" id="floatingInput" placeholder=" ">
                            @error('codigo')
                                <span class="invalid-feedback text-center" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="floatingInput">código</label>
                        </div> 
                        <div class="d-flex justify-content-center mb-3">
                            <a class="btn btn-success m-1" href="{{ route('representante.home') }}"><i class="fas fa-home"></i> Regresar</a>
                            <button class="btn btn-success m-1" id="aceptar" type="submit">Verificar <i id="i" class="fas fa-check-circle"></i></button>
                        </div>
                        <hr class="my-2">
                        <div class="text-center">
                            <small class="text-muted text-center">Nuestra Señora del Carmen.</small>
                        </div>
                    </div>
                  @if($ruta == "ruta_buy")
                        @for($i = 0; $i < count($saldos); $i++)
                            <input type="hidden" value="{{ $saldos[$i] }}" name="saldos[]">
                        @endfor()
                        @for($i = 0; $i < count($id); $i++)
                            <input type="hidden" value="{{ $id[$i] }}" name="id[]">
                        @endfor()
                  @endif()
            </form>
        </div>
    </div>
</div>
</body>

<!-- Función para Estilo de boton de carga -->
<script>
let form = $("#form");
let submitButton = form.find("button");
$("#form").submit(function (e) {
    $("#verificar").empty();
    $("#i").removeClass("fas fa-check-circle");
    $("#i").addClass("fa fa-spinner fa-spin");
    submitButton.attr("disabled", "disabled");
});
</script>

<!-- Funcion para enviar código por formulario -->
<script>
window.onload=function(){
    document.getElementById("form").onkeyup=function(event){
        var input=event.target;//alert(input.name);
        if(input.type == "text"){
            input.nextElementSibling.focus();
        }
    }
}
</script>

<!-- Estilos css -->
<style>
body{
    background-image: url("https://investigarte.in/wp-content/uploads/2022/06/boseto.png")
}
/* .input{
    width: 15%;
    border-radius: 5px;
    height: 40px;
    border:none;
    transition-property: all;
    transition-duration: 0.1s;
    font-weight: bold;
}
.input:focus{
    background-color: #A1A1E2;
    box-shadow: none;
} */
.outlinenone{
    outline: none;
    background-color: #CFCFEA;
}
</style>
</html>