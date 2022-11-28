@extends('adminlte::page')

@section('title', 'Registro Cobro | Nsc')

@section('content')
<div class="content p-3">
        <div class="card shadow">
            <div class="card-header bg-success">
                <div class="p-2 text-center">
                    <strong class="h4">RESGISTRAR COBRO <i class="fas fa-cash-register"></i></strong>
                </div>
            </div>
            <div class="card-body">
                <div class="row pb-2">
                    <form action="{{ route('colector.cobro') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label"><i class="far fa-user-circle"></i> Estudiante</label>
                            <div class="col-lg-8">
                                <input type="text" id="searchEstdiante" name="nombres" class="form-control @error('nombres') is-invalid @enderror">
                                @error('nombres')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-success">Buscar <i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                    <div class="col-12 col-sm-6 col-lg-6">
                        <div class="form-group row">
                            <label class="col-12 col-sm-4 col-lg-4 col-form-label"><i class="fas fa-file-invoice text-success"></i> N° Factura</label>
                            <div class="col-12 col-sm-5 col-lg-5">
                                <input type="text" class="form-control" placeholder="001-001">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-sm-4 col-lg-4 col-form-label"><i class="far fa-calendar"></i> Fecha</label>
                            <div class="col-12 col-sm-5 col-lg-5">
                                <input type="date" class="form-control"  value="<?php echo $fcha = date("Y-m-d")?>" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-sm-5 col-lg-4 col-form-label"><i class="fas fa-dollar-sign text-success"></i> Tipo de pago</label>
                            <div class="col-12 col-sm-5 col-lg-5">
                                <div class="form-group">
                                    <select class="form-control" id="exampleFormControlSelect1" onchange="">
                                        <option selected>Seleccione</option>
                                        <option value="1">Efectivo</option>
                                        <option value="2">Tarjeta de Crédito</option>
                                        <option value="3">Tranferencia</option>
                                        <option value="4">DataLink</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div style="display: none" id="elementoUno">
                            <div class="form-group row">
                                <label class="col-12 col-sm-4 col-lg-4 col-form-label"><i class="fas fa-calendar-minus text-success"></i> Comprobrande</label>
                                <div class="col-12 col-sm-5 col-lg-5">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">Subir</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="display: none" id="elementoDos">
                            <div class="form-group row">
                                <label class="col-12 col-sm-4 col-lg-4 col-form-label"><i class="fas fa-file-invoice text-success"></i> Referencia</label>
                                <div class="col-12 col-sm-5 col-lg-5">
                                    <input type="text" class="form-control" placeholder="###">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 mt-2">
                        <div class="form-group row">
                            <div class="d-flex justify-content-center mb-3">
                                <div class="card-body shadow col-md-12 rounded">
                                    <div class="p-3">
                                        <div class="text-center mb-2">
                                            <p class="h5"><i class="far fa-money-bill-alt"></i> Generar Cobro</p>
                                        </div>
                                        <div class="input-group mb-3 m-2 mt-2">
                                            <input type="text" class="form-control text-center">
                                            <div class="input-group-append">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-success m-2" id="generar">Generar Cobro <i class="fas fa-coins"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="input-group">

                            </div>
                        </div>
                    </div>
                    <div class="col-12">

                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-2 shadow">
            <div class="border rounded"> 
                <div class="card-body">
                    @if($estadoDeCuenta == "null")
                    <div class="d-flex justify-content-center">
                        <h3 class="p-4">
                            Estudiante
                            <small class="text-muted">no encontrado <i class="fas fa-user-circle"></i></small>
                        </h3>
                    </div>
                    @else
                    <table class="table table-striped" id="usuario">
                        <thead class="thead">
                            <tr>
                                <th scope="col">Estudiante</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Fecha de Vencimiento</th>
                                <th scope="col">Saldo Inicial</th>
                                <th scope="col">Abono</th>
                                <th scope="col">Saldo Final</th>
                                <th scope="col">Estado</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($estadoDeCuenta as $i)
                                <tr class="">
                                    <td class="p-3">{{ $i->Estudiante->persona->primer_nombre }} {{ $i->Estudiante->persona->segundo_nombre }} {{ $i->Estudiante->persona->apellido_paterno }} {{ $i->Estudiante->persona->apellido_materno }}</td>
                                    <td class="p-3">{{ $i->cob_cobro->descripcion }}</td>
                                    <td class="p-3">{{ $i->cob_cobro->fecha_vencimiento }}</td>
                                    <td class="p-3">{{ $i->valor_a_tomar }}</td>
                                    <td class="p-3">{{ $i->valor_cobrado }}</td>
                                    <td class="p-3"><strong>{{ $i->saldo }}</strong></td>
                                    <td class="p-3 text-dark">{{ $i->estado }}</td>
                                    <th>
                                </tr>    
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-end">
                        {{ $estadoDeCuenta->links() }}
                    </div>
                </div>
                    @endif
            </div>
        </div>  
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
@stop
@section('css')
    <!-- Icono del Sistema -->
    <link rel="shortcut icon" href="iconos/VirgenNSC.ico" type="image/x-icon">

    <!-- jQuery UI -->
    <link rel="stylesheet" href="{{asset('vendor/jquery-ui-1.13.2/jquery-ui.min.css')}}">

    <!-- Sweetalert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="shortcut icon" href="iconos/VirgenNSC.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@stop

@section('js')
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <!-- jQuery UI -->
    <script src="{{asset('vendor/jquery-ui-1.13.2/jquery-ui.min.js')}}"></script>

    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>
    <!-- <script>
        $('#usuario').DataTable({
            responsive: true,
            autoWidth: false,
            language: {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Entradas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Estudiante:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
        });
    </script> -->

    <script>
        $('#searchEstdiante').autocomplete({
            source: function(request, response){
                $.ajax({
                    url: "{{route('colector.show')}}",
                    dataType: 'json',
                    data: {
                        term: request.term
                    },
                    success: function(data){
                        response(data)
                    }
                });
            }
        });
    </script>

    <script>
        var select = document.getElementById("exampleFormControlSelect1");
        var elementoUno = document.getElementById("elementoUno");
        var elementoDos = document.getElementById("elementoDos");

        select.addEventListener("change", () => {
        if (select.value === "2") {
            elementoUno.style.display = 'block';
            elementoDos.style.display = 'none';
        } else if(select.value === "3" || select.value === "4") {
            elementoUno.style.display = 'none';
            elementoDos.style.display = 'block';
        } else {
            elementoDos.style.display = 'none';
            elementoUno.style.display = 'none';
        }
        });
    </script>
    
    @if(session('error') == 'Estudiante no encontrado' )
        <script>
            Swal.fire(
                'Error',
                'Estudiante no encontrado',
                'error'
            )
        </script>
    @endif

    <script>
        var generar = document.getElementById("generar");

        generar.addEventListener("click", function(){
            Swal.fire({
                title: '¿Estas séguro?',
                text: "No podrás revertir este proceso",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Generar'
                }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Exito!',
                        'Cobro generado con éxito.',
                        'success'
                    )
                }
            });
        });
    </script>
@stop
