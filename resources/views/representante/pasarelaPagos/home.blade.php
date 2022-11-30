@extends('adminlte::page')

@section('title', 'NSC')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-9 p-2 mt-2 text-left">
            <h3>
                <small class="text-muted h3"><strong><i class="fas fa-home"></i> NSC - Nuestra Señora Del Carmen</strong></small>
            </h3>
        </div>
    </div>
    <div class="row d-flex justify-content-center mt-2">
        <div class="col-3 ml-1 p-2 small-box bg-white shadow">
            <div class="inner">
                <h3 class="valor">$106.00</h3>
                <p>Próximo Mes: Junio</p>
                <small class="text-small mt-10 d-block">6% higher than last month</small>
            </div>
            <div class="icon">
                <i class="fas fa-coins"></i>
            </div>
        </div>
        <div class="col-3 ml-1 p-2  small-box bg-white shadow">
            <div class="inner">
                <h3 class="valor">${{ $total_deuda }}</h3>
                <p>Total Valor Adeudado</p>
                <small class="text-small mt-10 d-block">6% higher than last month</small>
            </div>
            <div class="icon">
                <i class="fas fa-user"></i>
            </div>
        </div>
        <div class="col-3 ml-1 p-2  small-box bg-white shadow" data-aos="zoom-in">
            <div class="inner">
                <h3 class="valor">{{ $total_pensiones }}</h3>
                <p>Pensiones cancelas</p>
                <small class="text-small mt-10 d-block">6% higher than last month</small>
            </div>
            <div class="icon">
                <i class="fas fa-hand-holding-usd"></i>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center mb-2 container_cuenta">
        <div class="col-9 p-2 mt-1 small-box bg-white shadow p-4">
            <h3 class="card-title">
                <span class="h5 text-muted text-center"><strong>SALDOS PENDIENTES</strong> <i class="fas fa-hand-holding-usd"></i></span>
            </h3>
            <table class="table table-borderless text-center">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">Estudiantes</th>
                        <th scope="col">Próx. mes</th>
                        <th scope="col">Progreso</th>
                        <th scope="col">Estado de Cuenta</th>
                    </tr>
                </thead>
                <tbody>
                    @for($i = 0; $i < 2; $i++)
                        <tr>
                            <td class="p-0">
                                <div class="d-flex align-items-center m-1">
                                    <div class="p-3 m-2">
                                        <span class="symbol-label">
                                            <i class="fas fa-user text-success"></i>
                                        </span>
                                    </div>
                                    <div class="w-100">
                                        <span class="fw-semibold d-block text-muted">{{ $datos[$i]->primer_nombre }} {{ $datos[$i]->apellido_paterno }}</span>
                                    </div>
                                </div>
                            </td>
                            <td><p class="mt-3 text-muted">Junio</p></td>
                            <td class="">
                                <p class="m-auto text-muted">{{ $progreso[$i] }}%</p>
                                <div class="progress mt-1">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: {{ $progreso[$i] }}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                            @if( $progreso[$i] == 100 )
                                <form action="{{ route('shopping.cart') }}" method="GET">
                                    <input type="hidden" name="id" value="{{ $datos[$i]->id }}">
                                    <td><button disabled class="btn btn-success p-2 col-md-4"><i class="fas fa-check-circle"></i></button></td>
                                </form>
                            @elseif( $progreso[$i] < 100 )
                                <form action="{{ route('shopping.cart') }}" method="GET">
                                    <input type="hidden" name="id" value="{{ $datos[$i]->id }}">
                                    <td><button class="btn btn-success p-2 col-md-4"><strong>Ver</strong></td>
                                </form>
                            @endif
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
</div>

@if(session('warnnig') == 'Tu pago ya fue procesado!' )
<script>
Swal.fire({
  icon: 'warning',
  title: 'Tu pago ya fue procesado',
  text: 'Gracias.',
})
</script>
@endif

@if(session('error') == 'Transacción Fallida' )
<script>
    const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
  })

  Toast.fire({
    icon: 'error',
    title: 'Error en la Verificación'
  })
</script>
@endif

@stop

@section('css')

<!-- Icono página -->
<link rel="shortcut icon" href="{{ asset('imagenes/VirgenNSC.png') }}" type="image/x-icon">

<!-- Sweetalert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<style>
    .progress{
        border-radius: 13px;
        height: 7px;
    }
</style>

@stop

@section('js')

<!--  -->

@stop


