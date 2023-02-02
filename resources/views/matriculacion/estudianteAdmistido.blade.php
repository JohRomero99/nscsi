@extends('adminlte::page')

@section('title', 'NSC')

@section('content_header')
    <div class="text-center">
        <img src="{{ asset('imagenes/Logo-NSCFinal-Negro.png') }}" width="300" height="85" alt="">
    </div>
@stop

@section('content')
    <div class="container col-md-8">
        <div class="card mt-1 mb-3 shadow border-0 p-2">
            <div class="text-center mt-3">
                <p class="h4 m-auto"><strong>REGISTRO ESTUDIANTE ADMITIDO</strong> <i class="far fa-user"></i></p>
            </div>
            <div class="card-body">
                <form action="{{ route('registro.create') }}" method="POST">
                    @csrf
                    <div class="text-muted mb-4">
                        Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                    </div>
                    @if(session('error') =='cédula registrada')
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            El número de cédula o pasaporte <strong>{{ Session::get('cedula'); }}</strong> ya se encuentra registrado.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="text-center">
                        <p class="m-3 h5">ESTUDIANTE</p>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-4 col-form-label text-center">Tipo de Identificación</label>
                        <div class="col-sm-8">
                            <select class="form-control mb-2"id="identificacionEstudiante" name="identificacion" onchange="">
                                <option value="1" selected>Cédula</option>
                                <option value="2">Pasaporte</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md w-100">
                        <!-- <div class="form-floating"> -->
                            <label class="text-muted" for="floatingInputGrid">CI <i class="fas fa-address-card"></i></label>
                            <input type="text" name="cedulaEstudiante" class="form-control @error('cedulaEstudiante') is-invalid @enderror" id="cedulaEstudiante" placeholder="000000000-0" value="{{ old('cedulaEstudiante') }}">
                            @error('cedulaEstudiante')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        <!-- </div> -->
                        <div class="mt-2" style="display:none" name="pasaporteEstudiante">
                            <label class="text-muted" for="floatingInputGrid">Pasaporte <i class="far fa-id-card"></i></label>
                            <input type="text" name="pasaporteEstudiante" class="form-control @error('pasaporteEstudiante') is-invalid @enderror" id="floatingInputGrid" placeholder="name@example.com" value="{{ old('pasaporteEstudiante') }}">
                            @error('pasaporteEstudiante')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row g-2 mt-1">
                        <div class="col-md-6">
                            <!-- <div class="form-floating"> -->
                                <!-- <label class="text-muted" for="floatingInputGrid">Primer Nombre</label> -->
                                <small>Primer Nombre</small>
                                <input type="text" name="primerNombreEstudiante" class="form-control @error('primerNombreEstudiante') is-invalid @enderror" id="floatingInputGrid" value="{{ old('primerNombreEstudiante') }}" placeholder="Primer nombre...">
                                @error('primerNombreEstudiante')
                                    <span class="invalid-feedback" role="alert"> 
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <!-- </div> -->
                        </div>
                        <div class="col-md-6">
                            <!-- <div class="form-floating"> -->
                                <!-- <label class="text-muted" for="floatingInputGrid">Segundo Nombre</label> -->
                                <small>Segundo Nombre</small>
                                <input type="text" name="segundoNombreEstudiante" class="form-control @error('segundoNombreEstudiante') is-invalid @enderror" id="floatingInputGrid" placeholder="Segundo nombre..." value="{{ old('segundoNombreEstudiante') }}">
                                @error('segundoNombreEstudiante')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <!-- </div> -->
                        </div>
                        <div class="col-md-6">
                            <!-- <div class="form-floating"> -->
                                <!-- <label class="text-muted" for="floatingInputGrid">Apellido Paterno</label> -->
                                <small>Apellido Paterno</small>
                                <input type="text" name="apellidoPaternoEstudiante" class="form-control @error('apellidoPaternoEstudiante') is-invalid @enderror" id="floatingInputGrid" placeholder="Apellido paterno..." value="{{ old('apellidoPaternoEstudiante') }}">
                                @error('apellidoPaternoEstudiante')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <!-- </div> -->
                        </div>
                        <div class="col-md-6">
                            <!-- <div class="form-floating"> -->
                                <!-- <label class="text-muted" for="floatingInputGrid">Apellido Paterno</label> -->
                                <small>Apellido Materno</small>
                                <input type="text" name="apellidoMaternoEstudiante" class="form-control @error('apellidoMaternoEstudiante') is-invalid @enderror" id="floatingInputGrid" placeholder="Apellido materno..." value="{{ old('apellidoMaternoEstudiante') }}">
                                @error('apellidoMaternoEstudiante')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <!-- </div> -->
                        </div>
                        <div class="container mt-2 mb-2">
                            <!-- <label for="floatingSelectGrid" class="text-muted">Año de Básica <i class="fas fa-school"></i></label> -->
                            <small>Año de Básica</small>
                            <select class="form-control mt-2" name="anoLectivoEstudiante">
                                <option value="INICIAL 1A">INICIAL 1A</option>
                                <option value="INICIAL 2A">INICIAL 2A</option>
                                <option value="INICIAL 2B">INICIAL 2B</option>
                                <option value="PREPARATORIA A">PREPARATORIA A</option>
                                <option value="PREPARATORIA B">PREPARATORIA B</option>
                                <option value="PREPARATORIA C">PREPARATORIA C</option>
                                <option value="SEGUNDO A">SEGUNDO A</option>
                                <option value="SEGUNDO B">SEGUNDO B</option>
                                <option value="SEGUNDO C">SEGUNDO C</option>
                                <option value="TERCERO A">TERCERO A</option>
                                <option value="TERCERO B">TERCERO B</option>
                                <option value="TERCERO C">TERCERO C</option>
                                <option value="CUARTO A">CUARTO A</option>
                                <option value="CUARTO B">CUARTO B</option>
                                <option value="CUARTO C">CUARTO C</option>
                                <option value="QUINTO A">QUINTO A</option>
                                <option value="QUINTO B">QUINTO B</option>
                                <option value="QUINTO C">QUINTO C</option>
                                <option value="SEXTO A">SEXTO A</option>
                                <option value="SEXTO B">SEXTO B</option>
                                <option value="SEPTIMO A">SEPTIMO A</option>
                                <option value="SEPTIMO B">SEPTIMO B</option>
                                <option value="OCTAVO A">OCTAVO A</option>
                                <option value="OCTAVO B">OCTAVO B</option>
                                <option value="NOVENO A">NOVENO A</option>
                                <option value="NOVENO B">NOVENO B</option>
                                <option value="DECIMO A">DECIMO A</option>
                                <option value="DECIMO B">DECIMO B</option>
                                <option value="1º BACHILLERATO A">1º BACHILLERATO A</option>
                                <option value="1º BACHILLERATO B">1º BACHILLERATO B</option>
                                <option value="2º BACHILLERATO A">2º BACHILLERATO A</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <!-- <div class="form-floating"> -->
                                <!-- <label class="text-muted" for="floatingInputGrid">Fecha de Nacimiento</label> -->
                                <small>Fecha de Nacimiento</small>
                                <input type="date" name="fechaNacimientoEstudiante" class="form-control @error('fechaNacimientoEstudiante') is-invalid @enderror" id="floatingInputGrid" value="{{ old('fechaNacimientoEstudiante') }}">
                                @error('fechaNacimientoEstudiante')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <!-- </div> -->
                        </div>

                    <div class="container bg-light p-3 mb-2">
                        <div class="text-center">
                            <p class="mt-3 h5">REPRESENTANTE</p>
                        </div>
                        <div class="text-muted mb-4">
                            Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                        </div>
                    </div>

                    <div class="row col-md-12">
                        <label for="inputPassword" class="col-form-label col-sm-4 text-center">Tipo de Identificación</label>
                        <div class="col-sm-8">
                            <select class="form-control mb-2" aria-label="Default select example" id="identificacionRepresentante" name="identificacionRepresentante" onchange="">
                                <option value="1" selected>Cédula</option>
                                <option value="2">Pasaporte</option>
                            </select>
                        </div>
                    </div>

                    <div class="w-100">
                        <label class="text-muted" for="floatingInputGrid">CI <i class="fas fa-address-card"></i></label>
                        <input type="text" name="cedulaRepresentante" id="cedulaRepresentante" class="form-control @error('cedulaRepresentante') is-invalid @enderror" value="{{ old('cedulaRepresentante') }}" placeholder="000000000-0" onkeyup="GetDetail(this.value)">
                        @error('cedulaRepresentante')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-12" style="display:none" name="pasaporteRepresentante">
                        <label class="text-muted" for="floatingInputGrid">Pasaporte <i class="far fa-id-card"></i></label>
                        <input type="text" name="pasaporteRepresentante" class="form-control @error('pasaporteRepresentante') is-invalid @enderror" value="{{ old('pasaporteRepresentante') }}" onkeyup="GetDetail(this.value)">
                        @error('pasaporteRepresentante')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-6">
                            <!-- <div class="form-floating"> -->
                                <!-- <label class="text-muted" for="floatingInputGrid">Primer Nombre</label> -->
                                <small>Primer Nomber</small>
                                <input type="text" name="primerNombreRepresentante" id="primerNombreRepresentante" class="form-control @error('primerNombreRepresentante') is-invalid @enderror" placeholder="Primer nombre..." value="{{ old('primerNombreRepresentante') }}">
                                @error('primerNombreRepresentante')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <!-- </div> -->
                        </div>
                        <div class="col-md-6">
                            <!-- <div class="form-floating"> -->
                                <!-- <label class="text-muted" for="floatingInputGrid">Segundo Nombre</label> -->
                                <small>Segundo Nombre</small>
                                <input type="text" name="segundoNombreRepresentante" id="segundoNombreRepresentante" class="form-control @error('segundoNombreRepresentante') is-invalid @enderror" placeholder="Segundo nombre..." value="{{ old('segundoNombreRepresentante') }}">
                                @error('segundoNombreRepresentante')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <!-- </div> -->
                        </div>
                        <div class="col-md-6">
                            <!-- <div class="form-floating"> -->
                                <!-- <label class="text-muted" for="floatingInputGrid">Apellido Paterno</label> -->
                                <small>Apellido Paterno</small>
                                <input type="text" name="apellidoPaternoRepresentante" id="apellidoPaternoRepresentante" class="form-control @error('apellidoPaternoRepresentante') is-invalid @enderror" placeholder="Apellido paterno..." value="{{ old('apellidoPaternoRepresentante') }}">
                                @error('apellidoPaternoRepresentante')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <!-- </div> -->
                        </div>
                        <div class="col-md-6">
                            <!-- <div class="form-floating"> -->
                                <!-- <label class="text-muted" for="floatingInputGrid">Apellido Paterno</label> -->
                                <small>Apellido Materno</small>
                                <input type="text" name="apellidoMaternoRepresentante" id="apellidoMaternoRepresentante" class="form-control @error('apellidoMaternoRepresentante') is-invalid @enderror" placeholder="Apellido materno..." value="{{ old('apellidoMaternoRepresentante') }}">
                                @error('apellidoMaternoRepresentante')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <!-- </div> -->
                        </div>
                    </div>
                    <div class="w-100">
                        <!-- <div class="form-floating"> -->
                            <!-- <label class="text-muted" for="floatingInputGrid">Correo <i class="fas fa-envelope"></i></label> -->
                            <small>Correo</small>
                            <input type="email" name="correoRepresentante" id="correoRepresentante" class="form-control @error('correoRepresentante') is-invalid @enderror" placeholder="exmaple@gmail.com" value="{{ old('correoRepresentante') }}">
                            @error('correoRepresentante')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        <!-- </div> -->
                    </div>
                    <div class="container mt-4 text-center">
                        <button type="submit" class="btn btn-success">Registrar <i class="far fa-edit"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('css')
    <style>
        body{
            background-color:lavenderblush;
        }
        input{
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
        .card{
            border-radius: 15px !important;
        }
    </style>

    <!-- Ajax -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

    <!-- sweetalert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- Ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Icono página -->
    <link rel="shortcut icon" href="{{ asset('imagenes/VirgenNSC.png') }}" type="image/x-icon">
@stop

@section('js')
<script>
    const identificacionEstudiante = document.querySelector("#identificacionEstudiante"); 
    const pasaporteEstudiante = document.querySelector("[name=pasaporteEstudiante]"); //input
    const cedulaEstudiante = document.querySelector("#cedulaEstudiante"); // input

    const identificacionRepresentante = document.querySelector("#identificacionRepresentante");
    const pasaporteRepresentante = document.querySelector("[name=pasaporteRepresentante]");
    const cedulaRepresentante = document.querySelector("#cedulaRepresentante");

    var nullCedulaEstudiante = document.querySelector("#cedulaEstudiante");
    var nullPasaporteEstudiante = document.querySelector("[name=pasaporteEstudiante]");
    var nullCedulaRepresentante = document.querySelector("#cedulaRepresentante");
    var nullPasaporteRepresentante = document.querySelector("[name=pasaporteRepresentante]");

    identificacionEstudiante.addEventListener("change", () => {
        if (identificacionEstudiante.value === "2") {
            pasaporteEstudiante.style.display = 'block';
            cedulaEstudiante.style.display = 'none';
            // nullCedulaEstudiante.value = 'nullCedulaEstudiante';
            document.querySelector("#cedulaEstudiante").value = 'nullCedulaEstudiante';
        } else {
            cedulaEstudiante.style.display = 'block';
            pasaporteEstudiante.style.display = 'none';
            document.querySelector("[name=pasaporteEstudiante]").value = 'nullPasaporteEstudiante';
            document.querySelector("#cedulaEstudiante").value = '';
            // nullPasaporteEstudiante.value = 'nullPasaporteEstudiante';
            // nullCedulaEstudiante.value = '';
        }
    });

    identificacionRepresentante.addEventListener("change", () => {
        if (identificacionRepresentante.value === "2") {
            pasaporteRepresentante.style.display = 'block';
            cedulaRepresentante.style.display = 'none';
            document.querySelector("#cedulaRepresentante").value = 'nullCedulaRepresentante';
            // nullCedulaRepresentante.value = 'nullCedulaRepresentante';
        } else {
            cedulaRepresentante.style.display = 'block';
            pasaporteRepresentante.style.display = 'none';
            document.querySelector("[name=pasaporteRepresentante]").value = 'nullPasaporteRepresentante';
            document.querySelector("#cedulaRepresentante").value = '';
            // nullPasaporteRepresentante.value = 'nullPasaporteRepresentante';
            // nullCedulaRepresentante.value = '';
        }
    });
</script>

<script>
    // onkeyup event will occur when the user 
    // release the key and calls the function
    // assigned to this event
    function GetDetail(str) {
        if (str.length == 0) {
            document.getElementById("primerNombreRepresentante").value = "";
            document.getElementById("segundoNombreRepresentante").value = "";
            document.getElementById("apellidoPaternoRepresentante").value = "";
            document.getElementById("apellidoMaternoRepresentante").value = "";
            document.getElementById("correoRepresentante").value = "";
            return;
        }
        else {

            // Creates a new XMLHttpRequest object
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {

                // Defines a function to be called when
                // the readyState property changes
                if (this.readyState == 4 && 
                        this.status == 200) {
                      
                    // Typical action to be performed
                    // when the document is ready
                    var myObj = JSON.parse(this.responseText);
           

                    // Returns the response data as a
                    // string and store this array in
                    // a variable assign the value 
                    // received to first name input field
                      
                    document.getElementById("primerNombreRepresentante").value = myObj[0];
                      
                    document.getElementById("segundoNombreRepresentante").value = myObj[1];

                    document.getElementById("apellidoPaternoRepresentante").value = myObj[2];

                    document.getElementById("apellidoMaternoRepresentante").value = myObj[3];

                    document.getElementById("correoRepresentante").value = myObj[4];
                }
            };
           
            // xhttp.open("GET", "filename", true);
            // xmlhttp.open("GET", "gfg.php?user_id=" + str, true);
            // xmlhttp.open("GET", "http://localhost/nscsi/public/matriculacion/registro/estudiante?user_id=" + str, true);
            xmlhttp.open("GET", "http://localhost/nscsi/public/matriculacion/registro/mostrar?cedulaRepresentante=" + str, true);
        

            // Sends the request to the server
            xmlhttp.send();
        }
    }
</script>

<script>
    @if(session('exito') == 'Datos guardados correctamente')
        Swal.fire(
            'Good job!',
            'You clicked the button!',
            'success'
            )
    @endif
</script>
@stop




