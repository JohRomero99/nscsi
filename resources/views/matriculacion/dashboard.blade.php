@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Estudiantes Registrados <i class="far fa-user"></i></h1>
@stop

@section('content')
    <div class="conatiner">
        <table class="table table-hover table-striped text-center" id="usuarios">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">CI</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Proceso</th>
                    <th scope="col">N. Estudiantes</th>
                    <th scope="col">Mas información</th>
                    <th scope="col">Acción</th>
                </tr>
            </thead>
            <tbody>
                @for($i = 0; $i < count($representante); $i++)
                    <tr class="text-center">
                        <td><strong>{{ $representante[$i]->persona->identificacion }}</strong></td>
                        <td><strong>{{ $representante[$i]->persona->primer_nombre }}</strong></td>
                        <td><strong>{{ $representante[$i]->persona->apellido_paterno }}</strong></td>
                        <td> 
                            <div class="progress bg-white">
                                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                        <td>4</td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                                Mas información
                            </button>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Mas Información <i class="far fa-user"></i></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="conatiner">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <label for="">Estudiante:</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Understood</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td><button class="btn btn-success">Imprimir <i class="fas fa-print"></i></button></td>
                    </tr>
                @endfor
            </tbody>
            <tfoot>
              <!--  -->
            </tfoot>
        </table>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

    <!-- Icono página -->
    <link rel="shortcut icon" href="{{ asset('imagenes/VirgenNSC.png') }}" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <style>
    .inputDiseño{
        padding: 20px 20px !important;
        height: 47px !important;
        margin: 8px 0;
        display: inline-block !important;
        border: none !important;
        border-bottom: 1px solid #A29390 !important;
        border-radius: 0px !important;
        background-color: #fff !important;
        background-color: #F2F8F8 !important;
    }
    </style>

@stop

@section('js')
    <script> console.log('Hi!'); </script>

    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap4.min.js"></script>

    <script>
        $('#usuarios').DataTable({
            responsive: true,
            autoWidth: false,
            "language": {
                "lengthMenu": "Mostrar _MENU_ pagos realizados",
                "zeroRecords": "Ningun dato disponible por el momento",
                "info": "Mostrando la pagina _PAGE_ de _PAGES_",
                "infoEmpty": "No hay registros disponibles",
                "infoFiltered": "(filtrado de _MAX_ registros totales)",
                "search": "Buscar:",
                "paginate": {
                "next": "Siguiente",
                "previous": "Anterior",
                }
            }
        });
    </script>
@stop