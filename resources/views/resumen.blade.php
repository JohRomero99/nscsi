@extends('layouts.app')

@section('content')

    <div class="conatiner">
        <div class="row d-flex justify-content-center align-items-center mt-2">
            <div class="col-4">

                <div class="card text-center shadow">
                    <div class="card-header">
                        Resumen
                    </div>
                    <div class="card-body">
                        <p>Alumno: JOHN JAIRO ROMERO SANCHEZ</p>
                        <h4>Saldo: $100</h4>
                    </div>
                    <div class="card-footer text-muted">
                        <a class="text-decoration-none text-white" href="carrito.php"><button class="btn btn-dark">Detalle completo</button></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection