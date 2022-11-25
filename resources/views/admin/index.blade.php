@extends('adminlte::page')

@section('title', 'Nsc | admin')

@section('content_header')
    <h1>Usuarios</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped" id="usuarios">
                <thead>
                    <tr>
                        <th scope="col">Cedula</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Aciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($usuario as $user)
                    <tr>
                        <td>{{ $user->cedula }}</th>
                        <td>{{ $user->name }}</th>
                        <td>{{ $user->apellido }}</th>
                        <td>{{ $user->direccion }}</th>
                        <td>{{ $user->telefono }}</th>
                        <td>{{ $user->email }}</th>
                        <td>
                            <!-- Button trigger modal -->
                            <form action="{{route('admin.update', $user->id)}}" method = "post">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Editar
                                </button>
                            </form>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Datos de Usuario:</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body"  >
                                            <form action="" method = "post">
                                                @csrf
                                                @method('put')
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Nombre</label>
                                                    <input type="text" value="{{$user->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">Apellido</label>
                                                    <input type="text" value="{{$user->apellido}}"  class="form-control" id="exampleInputPassword1">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">Direccion</label>
                                                    <input type="text" value="{{$user->direccion}}" class="form-control" id="exampleInputPassword1">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">Telefono</label>
                                                    <input type="text" value="{{$user->telefono}}" class="form-control" id="exampleInputPassword1">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">Correo</label>
                                                    <input type="email" value="{{$user->email}}" class="form-control" id="exampleInputPassword1">
                                                </div>
                                                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            ....
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </th>
                    </tr>
                    @endforeach()
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{$usuario->links()}}
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="shortcut icon" href="iconos/VirgenNSC.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@stop

@section('js')
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>
    <script>
        $('#usuarios').DataTable({
            responsive: true,
            autoWidth: false
        });
    </script>
@stop