@extends('adminlte::page')

@section('title', 'NSC')

@section('content_header')
<div class="text-center">
    <h3>
      <small class="text-muted h4"><strong>CONSULTA TUS PAGOS <i class="fas fa-search-dollar"></i></strong></small>
    </h3>
</div>
@stop

@section('content')

<div class="container bg-white p-3 shadow rounded">
    <table class="table table-hover table-striped text-center" id="usuarios">
        <thead class="thead-dark">
          <tr>
            <th scope="col">CI</th>
            <th scope="col">Nombre</th>
            <th scope="col">Monto</th>
            <th scope="col">Referencia</th>
            <th scope="col">Código de autorización</th>
            <th scope="col">Mas detalle</th>
            <th scope="col">Imprimir</th>
          </tr>
        </thead>
        <tbody>
        @foreach( $voucher as $a )
          <tr class="text-center">
            <td>{{ $a->representante->persona->cedula }}</td>
            <td>{{ $a->representante->persona->primer_nombre }}</td>
            <td>{{ $a->amount }}</td>
            <td>{{ $a->transaction_reference }}</td>
            <td>{{ $a->authorization_code }}</td>
            <td> <button class="btn btn-primary">Mas detalle</button></td>
            <td><button class="btn btn-success"><i class="fas fa-print"></i></button></td>
          </tr>
        @endforeach
        </tbody>
        <tfoot>
          <!--  -->
        </tfoot>
    </table>
</div>

<a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
    <i class="fas fa-chevron-up"></i>
</a>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Sweetalert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Icono del Sistema -->
    <link rel="shortcut icon" href="{{ asset('imagenes/VirgenNSC.png') }}" type="image/x-icon">

    <style>
    .fondo{
      background-image: url("https://investigarte.in/wp-content/uploads/2022/06/boseto.png")
    }
    </style>
@stop

@section('js')
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
        $('#reembolso').DataTable({
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

  @if(session('confirmar') == 'Reembolso exitoso' )
      <script>
        Swal.fire(
          'Reembolso exitoso',
          'La transacción fue revertida con éxito.',
          'success'
        )
      </script>
  @endif
  @if(session('confirmar') == 'Reembolso pendiente' )
      <script>
        Swal.fire(
          'Reembolso pendiente',
          'La transacción fue revertida con éxito.',
          'success'
        )
      </script>
  @endif
  @if(session('error') == 'Ocurrio un error' )
      <script>
        Swal.fire(
          'Ocurrio un error',
          'Intentalo nuevamente.',
          'error'
        )
      </script>
  @endif
  @if(session('error') == 'error inesperado' )
    <script>
        const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
      })

      Toast.fire({
        icon: 'error',
        title: 'error inesperado'
      })
    </script>
  @endif

    <script>
      var confirmar = document.getElementsByClassName("confirmar");

      for(var i=0; i < confirmar.length; i++){
        confirmar[i].addEventListener('click', function(e){
          e.preventDefault();
          Swal.fire({
            title: '¿Esta seguro que desea realizar esta operación?',
            text: "¡No podrás revertir este proceso!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, continuar'
          }).then((result) => {
            if (result.isConfirmed) {
              window.location = this.href;
            }
          }) 
        });
      }
    </script>
@stop

@section('css')

<!--  -->

@stop
