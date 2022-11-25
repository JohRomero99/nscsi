@extends('layouts.app')

@section('content')

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="container border shadow">

    <div class="container d-inline-flex justify-content-center">
        <img class="" src="logo.png" alt="">
    </div>

    <div class="d-flex justify-content-center fs-3 m-3 fw-bold">PROGRAMACION DE PAGOS</div>

    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-circle"></i> <p class ="d-inline m-1">Alumno</p> </span>
                <!-- <input type="text text-default" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1"  value="JOHN JAIRO ROMERO SANCHEZ" disabled> -->
                <select class="form-select border shadow-none bg-white" aria-label="Default select example">
                    <option selected>Seleccione--</option>
                    <option value="1">John Jairo Romero Sanchez</option>
                    <option value="2">Jose Carlos Romero Saanchez</option>
                </select>
                <button class="btn btn-dark shadow" >Actualizar</button>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <div class="d-flex justify-content-center align-items-center border rounded">
                <table class="table table-hover">
                        <thead class="table table-light">
                            <tr>
                            <th scope="col"></th>
                            <th scope="col">Cuota</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Fecha de Vencimiento</th>
                            <th scope="col">Saldo</th>
                            <th scope="col">Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" disabled>
                                    <div class="form-check">
                                        <input class="form-check-input uno" type="checkbox" value="" id="uno">
                                    </div>
                                </th>
                                <td>1</td>
                                <td>Matricula</td>
                                <td>22-03-12</td>
                                <td>$60</td>
                                <td>Por pagar</td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input dos" type="checkbox" value="" id="dos" disabled>
                                    </div>
                                </th>
                                <td>2</td>
                                <td>Pension</td>
                                <td>24-09-02</td>
                                <td>$110</td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input tres" type="checkbox" value="" id="tres" disabled>
                                    </div>
                                </th>
                                <td>3</td>
                                <td>Pesion</td>
                                <td>15-15-15</td>
                                <td>$110</td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input tres" type="checkbox" value="" id="tres" disabled>
                                    </div>
                                </th>
                                <td>4</td>
                                <td>Pesion</td>
                                <td>15-15-15</td>
                                <td>$110</td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input tres" type="checkbox" value="" id="tres" disabled>
                                    </div>
                                </th>
                                <td>5</td>
                                <td>Pesion</td>
                                <td>15-15-15</td>
                                <td>$110</td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input tres" type="checkbox" value="" id="tres" disabled>
                                    </div>
                                </th>
                                <td>6</td>
                                <td>Pesion</td>
                                <td>15-15-15</td>
                                <td>$110</td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input tres" type="checkbox" value="" id="tres" disabled>
                                    </div>
                                </th>
                                <td>7</td>
                                <td>Pesion</td>
                                <td>15-15-15</td>
                                <td>$110</td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input tres" type="checkbox" value="" id="tres" disabled>
                                    </div>
                                </th>
                                <td>8</td>
                                <td>Pesion</td>
                                <td>15-15-15</td>
                                <td>$110</td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input tres" type="checkbox" value="" id="tres" disabled>
                                    </div>
                                </th>
                                <td>9</td>
                                <td>Pesion</td>
                                <td>15-15-15</td>
                                <td>$110</td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input tres" type="checkbox" value="" id="tres" disabled>
                                    </div>
                                </th>
                                <td>10</td>
                                <td>Pesion</td>
                                <td>15-15-15</td>
                                <td>$110</td>
                            </tr>
                        </tbody>
                </table>
            </div>
        </div>
        <div class="col-6">
            <div class="container mt-2">
                <div class="row">
                    <div class="col rounded">
                        <div class="card text-center">
                            <div class="card-header">
                                <i class="bi bi-cart"></i> Resumen de Pago
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Total a Pagar: $300</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-4">
                <div class="row">
                    <div class="col roundend">
                        <div class="card text-center">
                            <div class="card-header">
                                <i class="bi bi-cash-coin"></i> Metodos de Pago 
                            </div>
                             <div class="card-body">
                                 <img src="" alt="">
                                <img src="imagenes/visa.png" alt="">
                                <img src="imagenes/mastercard.png"  width="150" height="90" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="alert alert-dark d-flex justify-content-center m-2" role="alert">
        Verifique que la información seleccionada es la correcta!
    </div>

    <div class="form-check d-flex justify-content-center m-2">
    <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" onclick="activar.disabled = !this.checked" name="">
        <label class="form-check-label" for="flexCheckDefault">
           <p class ="d-inline m-1" >He leído y estoy de acuerdo con las condiciones.</p> <a href="#">(Ver aquí)</a>
        </label>
    </div>

    <div class="container d-inline-flex justify-content-center">
        <button class="btn btn-dark m-2" name="activar" disabled>Finalizar Compra</button>
    </div>

</div>

<script>

    const boton_1 = document.getElementById('uno');
    const boton_2 = document.getElementById('dos');
    const boton_3 = document.getElementById('tres');

    // boton.forEach(function(item){
    //     item.addEventListener('click',function(){
    //         item.disabled = true;
    //     });
    // });

    boton_1.addEventListener('click',function(){
        boton_2.disabled = false;
        boton_3.disabled = true;
    })

    boton_2.addEventListener('click',function(){
        boton_3.disabled = false;
    })

</script>






@endsection
