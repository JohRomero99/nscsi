<!DOCTYPE html>
<html lang="en">
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
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="text" name="cedulaEstudiante" class="form-control  @error('cedulaEstudiante') is-invalid @enderror" id="floatingInputGrid" placeholder="cedula" value="{{ old('cedula') }}">
                            @error('cedulaEstudiante')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label class="text-muted" for="floatingInputGrid">Cedula <i class="fas fa-address-card"></i></label>
                        </div>
                    </div>
                    <div class="row g-2 mt-1">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" name="primerNombreEstudiante" class="form-control @error('primerNombreEstudiante') is-invalid @enderror" id="floatingInputGrid" placeholder="name@example.com" value="">
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
                                <input type="text" name="segundoNombreEstudiante" class="form-control @error('segundoNombreEstudiante') is-invalid @enderror" id="floatingInputGrid" placeholder="name@example.com" value="">
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
                                <input type="text" name="apellidoPaternoEstudiante" class="form-control @error('apellidoPaternoEstudiante') is-invalid @enderror" id="floatingInputGrid" placeholder="name@example.com" value="">
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
                                <input type="text" name="apellidoMaternoEstudiante" class="form-control @error('apellidoMaternoEstudiante') is-invalid @enderror" id="floatingInputGrid" placeholder="name@example.com" value="">
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
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="text" name="cedulaRepresentante" class="form-control @error('cedulaRepresentante') is-invalid @enderror" id="floatingInputGrid" placeholder="name@example.com" value="">
                            @error('cedulaRepresentante')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label class="text-muted" for="floatingInputGrid">Cedula <i class="fas fa-address-card"></i></label>
                        </div>
                    </div>
                    <div class="row g-2 mt-1">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" name="primerNombreRepresentante" class="form-control @error('primerNombreRepresentante') is-invalid @enderror" id="floatingInputGrid" placeholder="name@example.com" value="">
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
                                <input type="text" name="segundoNombreRepresentante" class="form-control @error('segundoNombreRepresentante') is-invalid @enderror" id="floatingInputGrid" placeholder="name@example.com" value="">
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
                                <input type="text" name="apellidoPaternoRepresentante" class="form-control @error('apellidoPaternoRepresentante') is-invalid @enderror" id="floatingInputGrid" placeholder="name@example.com" value="">
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
                                <input type="text" name="apellidoMaternoRepresentante" class="form-control @error('apellidoMaternoRepresentante') is-invalid @enderror" id="floatingInputGrid" placeholder="name@example.com" value="">
                                @error('apellidoMaternoRepresentante')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label class="text-muted" for="floatingInputGrid">Apellido Paterno</label>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="form-floating">
                            <input type="email" name="correoRepresentante" class="form-control @error('correoRepresentante') is-invalid @enderror" id="floatingInputGrid" placeholder="name@example.com" value="">
                            @error('correoRepresentante')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label class="text-muted" for="floatingInputGrid">Correo <i class="fas fa-envelope"></i></label>
                        </div>
                    </div>
                    <div class="mt-4 text-center">
                        <button type="submit" class="btn btn-success"><strong>Registrar </strong> <i class="far fa-save"></i></button>
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
</html>