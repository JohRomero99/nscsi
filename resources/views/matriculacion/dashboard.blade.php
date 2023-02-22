@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Estudiantes Registrados <i class="far fa-user"></i></h1>
@stop

@section('content')
    @if (session('correo') == 'Correo reenviado correctamente' )
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Correo reenviado correctamente <i class="far fa-envelope"></i></strong>.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="conatiner">
        <div class="card borde-0 shadow-none">
            <div class="card-body">
                <table class="table table-hover table-striped text-center shadow-sm" id="usuarios">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">CI</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Progreso</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i = 0; $i < count($info); $i++)
                            <tr class="text-center">
                                <td><strong>{{ $info[$i]['identificacion'] }}</strong></td>
                                <td>{{ $info[$i]['primer_nombre'] }} {{ $info[$i]['segundo_nombre'] }}</td>
                                <td>{{ $info[$i]['apellido_paterno'] }} {{ $info[$i]['apellido_materno'] }}</td>
                                <td>{{ $info[$i]['correo'] }}</td>
                                <td> 
                                    <div class="progress bg-light">
                                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
                                    </div>
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#staticBackdrop{{ $info[$i]['identificacion'] }}">
                                        <i class="fas fa-info-circle"></i>
                                    </button>
                                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop{{ $info[$i]['identificacion'] }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header bg-success">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Mas Información</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container">
                                                        <div class="card shadow-none">
                                                            <div class="card-header">
                                                                <h6><i class="far fa-user"></i> Estudiantes </h6>
                                                            </div>
                                                            @for($j = 0; $j < count($info[$i]['estudiante']); $j++)
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-sm-4">
                                                                            <label for="">Identidiación:</label>
                                                                        </div>
                                                                        <div class="col-sm-8">
                                                                            <p>{{ $info[$i]['estudiante'][$j]->estudiante->persona->identificacion }}</p>                                               
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-4">
                                                                            <label for="">Nombres:</label>
                                                                        </div>
                                                                        <div class="col-sm-8">
                                                                            <p>{{ $info[$i]['estudiante'][$j]->estudiante->persona->primer_nombre }}  {{ $info[$i]['estudiante'][$j]->estudiante->persona->segundo_nombre }} {{ $info[$i]['estudiante'][$j]->estudiante->persona->apellido_paterno }} {{ $info[$i]['estudiante'][$j]->estudiante->persona->apellido_materno }}</p>                                               
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-4">
                                                                            <label for="">Curso:</label>
                                                                        </div>
                                                                        <div class="col-sm-8">
                                                                            <p>{{ $info[$i]['estudiante'][$j]->estudiante->curso }}</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-4">
                                                                            <label for="">Año Lectivo:</label>
                                                                        </div>
                                                                        <div class="col-sm-8">
                                                                            <p>2022 - 2023</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                            @endfor
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer bg-light">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <!-- <button type="button" class="btn btn-primary">dqwdqwdqd</button> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="{{ route('registro.reenviarCorreo', $info[$i]['id'] ) }}" class="d-inline">
                                        @csrf
                                        <button type="button" class="btn btn-success correo"><i class="far fa-envelope"></i></button>
                                    </form>
                                    <button class="btn btn-success" disabled><i class="fas fa-print"></i></button>
                                </td>
                            </tr>
                        @endfor
                    </tbody>
                    <tfoot>
                        <!--  -->
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <script>
            Swal.fire(
                'Error',
                'Tienes algunos campos vacios por completar',
                'error'
            )
        </script>
    @endif
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

    <!-- Icono página -->
    <link rel="shortcut icon" href="{{ asset('imagenes/VirgenNSC.png') }}" type="image/x-icon">

    <!-- sweetalert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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

    <script>
        nuevoCorreo = document.getElementById('nuevoCorreo');
        inputNuevoCorreo = document.getElementById('inputNuevoCorreo');

        inputNuevoCorreo.addEventListener('click', function(){
            if(inputNuevoCorreo.checked == true){
                nuevoCorreo.style.display = 'block';
            }else{
                nuevoCorreo.style.display = 'none';
            }
        });
    </script>

    <script>
        var correo = document.getElementsByClassName('correo');

        for(let i = 0; i < correo.length; i++){
            correo[i].addEventListener('click', function(e){
                Swal.fire({
                    title: 'Recordatorio',
                    text: "¿Deseas enviar un recordatrio por correo?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, continuar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        this.submit();
                    }
                })
            })
        }
    </script>
@stop