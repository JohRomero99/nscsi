<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NSC</title>

    <!-- Icono página -->
    <link rel="shortcut icon" href="{{ asset('imagenes/VirgenNSC.png') }}" type="image/x-icon">

    <!-- boostrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <!-- boostrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- fontawesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

    <!-- sweetalert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- Ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <div class="conatiner">
        <div class="d-flex justify-content-center mt-3">
            <img src="{{ asset('imagenes/Logo-NSCFinal-Negro.png') }}" width="320" height="100" alt="NSC">
        </div>
    </div>
    <div class="container col-md-6">
        <div class="card mt-5 mb-3 shadow border-0 p-2">

            <div class="conatiner">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active text-success" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><strong>Regsitro</strong></button>
                        <button class="nav-link text-success" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><strong>Estudiantes Registrados</strong></button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0"></div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0"></div>
                </div>
            </div>
            <div class="header text-center">
                <p class="m-3 h4">REGISTRO ESTUDIANTE ADMITIDO <i class="far fa-user"></i></p>
            </div>
            <div class="card-body">
                <form action="{{ route('registro.create') }}" method="POST">
                    @csrf
                    <div class="form-text mb-4">
                        Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                    </div>
                    <div class="text-center">
                        <p class="m-3 h5">ESTUDIANTE</p>
                    </div>
                    @if(session('error') == 'Ya se encuentra registrado')
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Ya existe </strong>un estudiante con ese número de cédula o pasaporte.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-4 col-form-label text-center">Tipo de Identificación</label>
                        <div class="col-sm-8">
                            <select class="form-select mb-2" aria-label="Default select example" id="identificacionEstudiante" name="identificacion" onchange="">
                                <option value="1" selected>Cédula</option>
                                <option value="2">Pasaporte</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="text" name="cedulaEstudiante" class="shadow-none border-opacity-50 form-control rounded-0 border-0 border-bottom border-success  @error('cedulaEstudiante') is-invalid @enderror" id="cedulaEstudiante" placeholder="cedula" value="{{ old('cedulaEstudiante') }}">
                            @error('cedulaEstudiante')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label class="text-muted" for="floatingInputGrid">CI <i class="fas fa-address-card"></i></label>
                        </div>
                        <div class="form-floating mt-2" style="display:none" name="pasaporteEstudiante">
                            <input type="text" name="pasaporteEstudiante" class="shadow-none border-opacity-50 form-control rounded-0 border-0 border-bottom border-success @error('pasaporteEstudiante') is-invalid @enderror" id="floatingInputGrid" placeholder="name@example.com" value="{{ old('pasaporteEstudiante') }}">
                            @error('pasaporteEstudiante')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label class="text-muted" for="floatingInputGrid">Pasaporte <i class="far fa-id-card"></i></label>
                        </div>
                    </div>
                    <div class="row g-2 mt-1">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" name="primerNombreEstudiante" class="form-control @error('primerNombreEstudiante') is-invalid @enderror" id="floatingInputGrid" placeholder="name@example.com" value="{{ old('primerNombreEstudiante') }}">
                                @error('primerNombreEstudiante')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label class="text-muted" for="floatingInputGrid">Primer Nombre</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" name="segundoNombreEstudiante" class="form-control @error('segundoNombreEstudiante') is-invalid @enderror" id="floatingInputGrid" placeholder="name@example.com" value="{{ old('segundoNombreEstudiante') }}">
                                @error('segundoNombreEstudiante')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label class="text-muted" for="floatingInputGrid">Segundo Nombre</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" name="apellidoPaternoEstudiante" class="form-control @error('apellidoPaternoEstudiante') is-invalid @enderror" id="floatingInputGrid" placeholder="name@example.com" value="{{ old('apellidoPaternoEstudiante') }}">
                                @error('apellidoPaternoEstudiante')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label class="text-muted" for="floatingInputGrid">Apellido Paterno</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" name="apellidoMaternoEstudiante" class="form-control @error('apellidoMaternoEstudiante') is-invalid @enderror" id="floatingInputGrid" placeholder="name@example.com" value="{{ old('apellidoMaternoEstudiante') }}">
                                @error('apellidoMaternoEstudiante')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label class="text-muted" for="floatingInputGrid">Apellido Paterno</label>
                            </div>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" id="floatingSelectGrid">
                                <option value="1">INICIAL 1A</option>
                                <option value="2">INICIAL 2A</option>
                                <option value="3">INICIAL 2B</option>
                                <option value="3">PREPARATORIA A</option>
                                <option value="3">PREPARATORIA B</option>
                                <option value="3">PREPARATORIA C</option>
                                <option value="3">SEGUNDO A</option>
                                <option value="3">SEGUNDO B</option>
                                <option value="3">SEGUNDO C</option>
                            </select>
                            <label for="floatingSelectGrid">Año de Básica <i class="fas fa-school"></i></label>
                        </div>

                    <hr class="border border-success border-1 opacity-50 mt-5">

                    <div class="text-center">
                        <p class="mt-3 h5">REPRESENTANTE</p>
                    </div>
                    <div class="form-text mb-4">
                        Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                    </div>
                    <div class="row">
                        <label for="inputPassword" class="col-sm-4 col-form-label text-center">Tipo de Identificación</label>
                        <div class="col-sm-8">
                            <select class=" form-select mb-2" aria-label="Default select example" id="identificacionRepresentante" name="identificacionRepresentante" onchange="">
                                <option value="1" selected>Cédula</option>
                                <option value="2">Pasaporte</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-floating">
                        <input type="text" name="cedulaRepresentante" id="cedulaRepresentante" class="shadow-none rounded-0 border-0 border-bottom border-success border-opacity-50 form-control @error('cedulaRepresentante') is-invalid @enderror" placeholder="name@example.com" value="{{ old('cedulaRepresentante') }}" onkeyup="GetDetail(this.value)">
                        @error('cedulaRepresentante')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label class="text-muted" for="floatingInputGrid">CI <i class="fas fa-address-card"></i></label>
                    </div>
                    <div class="form-floating" style="display:none" name="pasaporteRepresentante">
                        <input type="text" name="pasaporteRepresentante" class="shadow-none rounded-0 border-0 border-bottom border-success border-opacity-50 form-control @error('pasaporteRepresentante') is-invalid @enderror" placeholder="name@example.com" value="{{ old('pasaporteRepresentante') }}" onkeyup="GetDetail(this.value)">
                        @error('pasaporteRepresentante')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label class="text-muted" for="floatingInputGrid">Pasaporte <i class="far fa-id-card"></i></label>
                    </div>
                    <div class="row g-2 mt-1">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" name="primerNombreRepresentante" id="primerNombreRepresentante" class="form-control @error('primerNombreRepresentante') is-invalid @enderror" placeholder="name@example.com" value="{{ old('primerNombreRepresentante') }}">
                                @error('primerNombreRepresentante')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label class="text-muted" for="floatingInputGrid">Primer Nombre</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" name="segundoNombreRepresentante" id="segundoNombreRepresentante" class="form-control @error('segundoNombreRepresentante') is-invalid @enderror" placeholder="name@example.com" value="{{ old('segundoNombreRepresentante') }}">
                                @error('segundoNombreRepresentante')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label class="text-muted" for="floatingInputGrid">Segundo Nombre</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" name="apellidoPaternoRepresentante" id="apellidoPaternoRepresentante" class="form-control @error('apellidoPaternoRepresentante') is-invalid @enderror" placeholder="name@example.com" value="{{ old('apellidoPaternoRepresentante') }}">
                                @error('apellidoPaternoRepresentante')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label class="text-muted" for="floatingInputGrid">Apellido Paterno</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" name="apellidoMaternoRepresentante" id="apellidoMaternoRepresentante" class="form-control @error('apellidoMaternoRepresentante') is-invalid @enderror" placeholder="name@example.com" value="{{ old('apellidoMaternoRepresentante') }}">
                                @error('apellidoMaternoRepresentante')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label class="text-muted" for="floatingInputGrid">Apellido Paterno</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="email" name="correoRepresentante" id="correoRepresentante" class="form-control @error('correoRepresentante') is-invalid @enderror" placeholder="name@example.com" value="{{ old('correoRepresentante') }}">
                            @error('correoRepresentante')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label class="text-muted" for="floatingInputGrid">Correo <i class="fas fa-envelope"></i></label>
                        </div>
                    </div>
                    <div class="mt-4 text-center">
                        <button type="submit" class="btn btn-success"><strong>Registrar </strong> <i class="fas fa-share-square"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

<style>
    body{
       background-color:lavenderblush;
    }
</style>


<script>
    const identificacionEstudiante = document.querySelector("#identificacionEstudiante");
    const pasaporteEstudiante = document.querySelector("[name=pasaporteEstudiante]");
    const cedulaEstudiante = document.querySelector("#cedulaEstudiante");

    const identificacionRepresentante = document.querySelector("#identificacionRepresentante");
    const pasaporteRepresentante = document.querySelector("[name=pasaporteRepresentante]");
    const cedulaRepresentante = document.querySelector("#cedulaRepresentante");

    identificacionEstudiante.addEventListener("change", () => {
        if (identificacionEstudiante.value === "2") {
            pasaporteEstudiante.style.display = 'block';
            cedulaEstudiante.style.display = 'none';
        } else {
            pasaporteEstudiante.style.display = 'none';
            cedulaEstudiante.style.display = 'block';
        }
    });

    identificacionRepresentante.addEventListener("change", () => {
        if (identificacionRepresentante.value === "2") {
            pasaporteRepresentante.style.display = 'block';
            cedulaRepresentante.style.display = 'none';
        } else {
            pasaporteRepresentante.style.display = 'none';
            cedulaRepresentante.style.display = 'block';
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
            'Exito',
            'Datos guardados correctamente',
            'success'
        )
    @endif
</script>
</html>



