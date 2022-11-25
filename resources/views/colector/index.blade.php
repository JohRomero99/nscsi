@extends('adminlte::page')

@section('title', 'Registro Cobro | Nsc')

@section('content')

<div class="content p-3">

        <div class="card shadow">
            <div class="card-header">
                <div class="p-2 text-center">
                    <strong>RESGISTRAR COBRO <i class="far fa-edit fa-lg"></i></strong>
                </div>
            </div>
            <div class="card-body">
                <div class="row pb-2">
                    <div class="col-12 col-sm-6 col-lg-6">
                        <div class="form-group row">
                            <label class="col-12 col-sm-4 col-lg-4 col-form-label">N° Factura</label>
                            <div class="col-12 col-sm-5 col-lg-5">
                                <input type="text" class="form-control" placeholder="001-001">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-sm-5 col-lg-4 col-form-label">Tipo de pago</label>
                            <div class="col-12 col-sm-5 col-lg-5">
                                <div class="form-group">
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option selected>Seleccione</option>
                                        <option value="1">Efectivo</option>
                                        <option value="2">Targeta de Credito</option>
                                        <option value="3">Tranferencia</option>
                                        <option value="3">DataLink</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-6">
                        <div class="form-group row">
                            <label class="col-12 col-sm-4 col-lg-2 col-form-label">Fecha</label>
                            <div class="col-12 col-sm-5 col-lg-5">
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="input-group">
                                <label class="col-12 col-sm-4 col-lg-4 col-form-label">Subir comprobante</label>
                                <div class="col-12 col-sm-4 col-lg-8">
                                <div class="input-group mb-3 w-100">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupFileAddon01">Subir</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">Elija el Archivo</label>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-12 col-sm-4 col-lg-2 col-form-label">Estudiante</label>
                    <div class="col-12 col-sm-8 col-lg-10">
                        <input type="text" id="searchEstdiante" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-12 col-sm-4 col-lg-2 col-form-label">Representante</label>
                    <div class="col-12 col-sm-8 col-lg-10">
                        <input type="text" id="searchRepresentante" class="form-control">
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-2 shadow">
            <div class="d-flex justify-content-center align-items-center border rounded"> 
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <!-- <p class="p-1 h5"><i class="far fa-user"></i> Estudiante: John Romero</p> -->
                    </div>
                    <table class="table table-striped" id="usuario">
                        <thead class="thead">
                            <tr>
                                <!-- <th scope="col">#</th> -->
                                <th scope="col">Estudiante</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Fecha de Vencimiento</th>
                                <th scope="col">Saldo Inicial</th>
                                <th scope="col">Abono</th>
                                <th scope="col">Saldo Final</th>
                                <th scope="col">Estado</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- <form action="{{ route('colector.cobro') }}" method="POST"> -->
                            <!-- @csrf -->
                            @foreach($estadoDeCuenta as $estadoDeCuenta)
                                <tr class="">
                                    <!-- <td class="p-3">{{ $estadoDeCuenta->id }}</td> -->
                                    <td class="p-3">John Romero</td>
                                    <td class="p-3">{{ $estadoDeCuenta->cob_cobro->descripcion }}</td>
                                    <td class="p-3">{{ $estadoDeCuenta->cob_cobro->fecha_vencimiento }}</td>
                                    <td class="p-3">{{ $estadoDeCuenta->valor_a_tomar }}</td>
                                    <td class="p-3">{{ $estadoDeCuenta->valor_cobrado }}</td>
                                    <td class="p-3">{{ $estadoDeCuenta->saldo }}</td>
                                    <td class="p-3 text-dark">{{ $estadoDeCuenta->estado }}</td>
                                    <th>
                                        <form action="{{ route('colector.cobro') }}" method="POST">
                                            @csrf
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal{{ $estadoDeCuenta->id }}">
                                                <i class="fas fa-pencil-alt"></i>
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal{{ $estadoDeCuenta->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel"><strong>REGISTRO DE COBRO</strong></h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-12 col-sm-12 col-lg-12">
                                                                <div class="form-group row">
                                                                    <label class="col-12 col-sm-4 col-lg-4 col-form-label">N° Factura</label>
                                                                    <div class="col-12 col-sm-5 col-lg-5">
                                                                        <input type="text" readOnly value="{{ numero_factura() }}" name="n_factura" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-12 col-sm-5 col-lg-4 col-form-label">Tipo de pago</label>
                                                                    <div class="col-12 col-sm-5 col-lg-5">
                                                                        <div class="form-group">
                                                                            <select class="form-control" name="tipoPago" id="exampleFormControlSelect1">
                                                                                <option selected>Seleccione</option>
                                                                                <option value="1">Efectivo</option>
                                                                                <option value="2">Targeta de Credito</option>
                                                                                <option value="3">Tranferencia</option>
                                                                                <option value="3">DataLink</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-12 col-sm-5 col-lg-4 col-form-label">Fecha</label>
                                                                    <div class="col-12 col-sm-5 col-lg-5">
                                                                        <input type="date" class="form-control" value="<?php echo date("Y-m-d");?>" name="fecha_cobro">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="input-group">
                                                                        <label class="col-12 col-sm-5 col-lg-4 col-form-label">Subir comprobante</label>
                                                                        <div class="col-12 col-sm-5 col-lg-6">
                                                                            <div class="input-group mb-3 w-100">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text" id="inputGroupFileAddon01">Subir</span>
                                                                                </div>
                                                                                <div class="custom-file">
                                                                                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                                                    <label class="custom-file-label" for="inputGroupFile01">Elija el Archivo</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-12 col-sm-5 col-lg-4 col-form-label">Valor</label>
                                                                    <div class="col-12 col-sm-5 col-lg-6">
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text">$</span>
                                                                            </div>
                                                                            <input type="text" class="form-control text-center " name="saldo">
                                                                            <div class="input-group-append">
                                                                                <span class="input-group-text">.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @error('saldo')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input type="text" class="d-none" value="{{ $estadoDeCuenta->id }}" name="estadoCuentaId">
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-success">Generar Cobro <i class="fas fa-coins"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </th>
                                </tr>    
                                <!-- </form> -->
                            @endforeach
                     
                        </tbody>
                    </table>
                </div>
            </div>
        </div>  

</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
@stop
@section('css')
    <link rel="shortcut icon" href="iconos/VirgenNSC.ico" type="image/x-icon">

    <!-- jQuery UI -->
    <link rel="stylesheet" href="{{asset('vendor/jquery-ui-1.13.2/jquery-ui.min.css')}}">

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
    <script>
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
    </script>

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
@stop
