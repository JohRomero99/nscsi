@extends('adminlte::page')

@section('title', 'NSC')

@section('content_header')
<div class="text-center">
  <h3>
    <small class="text-muted h4"><strong>HISTORIAL DE PAGOS <i class="fas fa-clipboard-list"></i></strong></small>
  </h3>
</div>
@stop

@section('content')

<div class="container p-4">
  <div class="card card-success card-outline card-outline-tabs shadow">
    <div class="card-header p-0 border-bottom-0">
      <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="false"><strong>Cobros</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link  id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false"><strong>Reembolsos</strong></a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link  id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false"><strong>Cobros Fallidos</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link  id="custom-tabs-four-settings-tab" data-toggle="pill" href="#custom-tabs-four-settings" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="true"><strong>Reembolsos Fallidos</strong></a>
        </li> -->
      </ul>
    </div>
    <div class="card-body">
      <div class="tab-content" id="custom-tabs-four-tabContent">
        <div class="tab-pane fade active show" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
          <table class="table table-hover table-striped text-center" id="usuarios">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">CI</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">N. Factura</th>
                  <th scope="col">Monto</th>
                  <th scope="col">Transaction_reference</th>
                  <th scope="col">Mas información</th>
                  <th scope="col">Reembolsar</th>
                </tr>
              </thead>
              <tbody>
                @foreach($cobro as $u)
                <tr class="text-center">
                    <td>{{ $u->representante->persona->cedula}}</td>
                    <td>{{ $u->representante->persona->primer_nombre}}</td>
                    <td>{{ $u->dev_reference }}</td>
                    <td>${{ $u->amount }}</td>
                    <td>{{ $u->transaction_reference }}</td>
                    <td>
                      <!-- Button trigger modal -->
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#Model{{ $u->id }}">
                          Mas info <i class="fas fa-info-circle"></i>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="Model{{ $u->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Información Detallada</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body fondo">
                                <div class="container bg-white col-md-8 p-4 rounded mb-2 shadow-sm">
                                  <p class="d-inline"><strong>Correo de representante:</strong></p>
                                  <p class="d-inline">{{ $u->representante->persona->correo }}</p>
                                  <p></p>
                                  <p class="d-inline"><strong>Fecha:</strong></p>
                                  <p class="d-inline">{{ $u->payment_date }}</p>
                                  <p></p>
                                  <p class="d-inline"><strong>Codigo de autorización:</strong></p>
                                  <p class="d-inline">{{ $u->authorization_code }}</p>
                                  <p></p>
                                  <p class="d-inline"><strong>No. Factura:</strong></p>
                                  <p class="d-inline">{{ $u->dev_reference}}</p>
                                  <p></p>
                                  <p class="d-inline"><strong>Código devuelto del Procesador:</strong></p>
                                  <p class="d-inline">{{ $u->carrier_code	 }}</p>
                                  <p></p>
                                  <p class="m-auto"><strong>Descripcion del producto:</strong></p>
                                  <p class="m-auto">{{ $u->product_description }}</p>
                                  <p></p>
                                  <p class="m-auto"><strong>Tipo de método de Pago:</strong></p>
                                  @if( $u->payment_method_type == 0 )
                                    <p class="m-auto">Tarjeta de Crédito</p>
                                  @elseif( $u->payment_method_type == 1 )
                                    <p class="m-auto">Boleto (Bank Ticket)</p>
                                  @elseif( $u->payment_method_type == 2 )
                                    <p class="m-auto">E-wallet (Billetera electrónica)</p>
                                  @elseif( $u->payment_method_type == 3 )
                                    <p class="m-auto">Tarjeta de Vales</p>
                                  @elseif( $u->payment_method_type == 4 )
                                    <p class="m-auto">Transferencia Bancaria</p>
                                  @elseif( $u->payment_method_type == 5 )
                                    <p class="m-auto">Tarjeta de Débito</p>
                                  @elseif( $u->payment_method_type == 6 )
                                    <p class="m-auto">Tarjeta Prepagada</p>
                                  @endif
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </td>
                    <td> 
                      @if( $u->estado == "COBRO EXITOSO" )
                        <a class="btn btn-success confirmar" href="{{ route('paymentez.refound', $u->transaction_reference) }}">Revertir <i class="fas fa-redo"></i></a>
                      @elseif( $u->estado == "COBRO PENDIENTE" )
                        <a class="btn btn-success" style="opacity: 0.5" href="#">Revertir <i class="fas fa-redo"></i></a>
                      @elseif( $u->estado == "COBRO EN REVISION" )
                        <a class="btn btn-success" style="opacity: 0.5" href="#">Revertir <i class="fas fa-redo"></i></a>
                      @endif
                    </td>
                </tr>
                @endforeach
              </tbody>
              <tfoot>
                <!--  -->
              </tfoot>
          </table>
        </div>
        <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
        
          <table class="table table-hover table-striped text-center" id="reembolso">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">CI</th>
                  <th scope="col">Nombre</th>
                  <!-- <th scope="col">Fecha</th> -->
                  <th scope="col">transaction_reference</th>
                  <th scope="col">Monto</th>
                  <th scope="col">Detalle</th>
                  <th scope="col">Estado</th>
                </tr>
              </thead>
              <tbody>
                @foreach($reembolso as $u)
                <tr class="text-center">
                    <td>{{ $u->representante->persona->cedula }}</td>
                    <td>{{ $u->representante->persona->primer_nombre }}</td>
                    <!-- <td>{{ $u->payment_date }}</td> -->
                    <td>{{ $u->transaction_reference }}</td>
                    <td>${{ $u->amount }}</td>
                    <td>{{ $u->detalle_reembolso }}</td>
                    @if($u->estado == "REEMBOLSO EXITOSO")
                      <td><p class="col-md-10 p-2 m-auto bg-success rounded">{{ $u->estado_reembolso }} <i class="fas fa-check-circle"></i></p></td>
                    @elseif($u->estado == "REEMBOLSO FALLIDO")
                      <td><p class="col-md-10 p-2 m-auto bg-danger rounded">{{ $u->estado_reembolso }} <i class="fas fa-times-circle"></i></p></td>
                    @elseif($u->estado == "REEMBOLSO PENDIENTE")
                      <td><p class="col-md-10 p-2 m-auto bg-warning rounded">{{ $u->estado_reembolso }} <i class="fas fa-minus-circle"></i></p></td>
                    @endif
                    </tr>
                @endforeach
              </tbody>
              <tfoot>
                <!--  -->
              </tfoot>
          </table>

        </div>
        <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
          <!--  -->
        </div>
        <div class="tab-pane fade" id="custom-tabs-four-settings" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
          Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
        </div>
      </div>
    </div>
  </div>
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
    <link rel="shortcut icon" href="https://i.ibb.co/rbpNhJS/Virgen-NSC.png" type="image/x-icon">

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