@extends('layouts.app')

@section('content')

</div>
  <div class="container form">
    <div class="card">
      <div class="card-header Display-5">
        <div class="d-flex justify-content-center">
            Datos del Representante
        </div>
      </div>
      <div class="card-body p-3">
        <form action="">
          <div class="row">
            <div class="form-group col-md-6 p-3">
              <label for="inputEmail4">Cedula</label>
              <input type="text" class="form-control" id="inputEmail4" placeholder="">
            </div>
            <div class="form-group col-md-6 p-3">
              <label for="inputEmail4">Fecha de Nacimiento</label>
              <input type="date" class="form-control" name="Fecha_nacimiento">
            </div>
            <div class="form-group col-md-12 p-3">
              <label for="inputPassword4">Nombre</label>
              <input type="text" class="form-control" id="inputPassword4" placeholder="nombre...">
            </div>
            <div class="form-group col-md-12 p-3">
              <label for="inputPassword4">Apellido</label>
              <input type="text" class="form-control" id="inputPassword4" placeholder="apellido...">
            </div>

            <div class="row">
              <div class="form-group col-md-12 p-3">
                <label for="inputPassword4">Telefono</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="telefono...">
              </div>
              <div class="form-group col-md-12 p-3">
                <label for="inputPassword4">Direccion</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="direccion...">
              </div>
            </div>
          </div>

          <div class="d-flex justify-content-center m-2" >
            <Button class="btn btn-dark">Siguiente</Button>
          </div>
        </form>
    </div>
  </div>
</div>

<style>
.form{
  width: 550px !important;
}
</style>

@endsection
