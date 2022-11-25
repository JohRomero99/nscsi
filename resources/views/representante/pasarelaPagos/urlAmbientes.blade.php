@extends('adminlte::page')

@section('title', 'NSC')

@section('content_header')
<div class="text-center">
    <h3>
        <small class="text-muted h4"><strong>PRUEBAS <i class="fas fa-link"></i></strong></small>
    </h3>
</div>
@stop

@section('content')

<div class="container col-md-7">
    <form action="{{ route('ambiente-produccion-datos') }}" class="confirmar" method="GET">
        <div class="card">
            <div class="card-header bg-success">
                <p class="m-auto text-center h4"><strong>Url de Paymentez</strong></p>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach($url as $u)
                        <div class="col">
                            <p class="text-center">{{ $u->ambiente }}</p>
                            <div class="custom-control custom-radio">
                                @if($u->estado == "ACTIVO")
                                    <input type="radio" id="customRadio{{ $u->id }}" checked name="radio" value="{{ $u->id }}" class="radio custom-control-input">
                                @else($u->estado == null)
                                    <input type="radio" id="customRadio{{ $u->id }}" name="radio" value="{{ $u->id }}" class="radio custom-control-input">
                                @endif
                                <label class="custom-control-label" for="customRadio{{ $u->id }}">{{ $u->url }}</label>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-success">Actualizar <i class="fas fa-sync-alt"></i></button>
                </div>
            </div>
        </div>
    </form>
</div>

@if(session('exito') == 'url actualizada con exito' )
<script>
    Swal.fire(
    'Exito',
    'Url cambiada con exito',
    'success'
    )
</script>
@endif

@stop

@section('css')

    <!-- Sweetalert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Icono de Sistema -->
    <link rel="shortcut icon" href="https://i.ibb.co/rbpNhJS/Virgen-NSC.png" type="image/x-icon">

@stop

@section('js')
    <script>
        $('.confirmar').submit(function(e){
            e.preventDefault();
            Swal.fire({
            title: '¿Esta seguro que desea realizar esta operación?',
            text: "Cambiado ambiente url",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, continuar'
          }).then((result) => {
            if (result.isConfirmed) {
            this.submit()
            }
          })
        });
    </script>
@stop