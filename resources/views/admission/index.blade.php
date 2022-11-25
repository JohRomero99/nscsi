<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admisiones NSC</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="shortcut icon" href="iconos/VirgenNSC.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <script src="https://kit.fontawesome.com/1ed9c7538e.js" crossorigin="anonymous"></script>
  </head>
  <body style="background-color: #A83330 ">
    <div>
      <div id="loadAwesome" style="display:none; justify-content: center; align-items: center; background-color: black; position: fixed; top:0px; left:0px; z-index: 99999; width:100%; height:100%; opacity:.75;">
          <div class="la-ball-spin-clockwise-fade la-3x">
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
          </div>
      </div>
  </div>
      <div class="container my-5">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="card">
              <div class="card-body">
                <div class="card-title text-center">
                  <img src="https://nsc.edu.ec/edu/wp-content/uploads/2019/03/cropped-LogoNSCFinal-e1553231575518-300x97.png" alt="" width="235">
                  <h1> Formulario de Contacto</h1>
                </div>
                <div>
                  <form action="{{ route('admission.contact') }}"  method="POST" class="form-contact">
                    @csrf <!-- {{ csrf_field() }} -->
                    <hr>
                    <p class="h4 text-center">Datos del Representante</p>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="row g-3">
                          <div class="col-auto">
                            <label class="form-label">Cedula</label>
                            <input type="text" class="form-control" name="ci_representante" value="{{ old('ci_representante')}}">
                          </div>
                        </div>
                        <div class="row g-3">
                          <div class="col-auto">
                            <label class="form-label">Nombres</label>
                            <input type="text" class="form-control" name="rep_nombres" value="{{ old('rep_nombres')}}">
                          </div>
                          <div class="col-auto">
                            <label class="form-label">Apellido Paterno</label>
                            <input type="text" class="form-control" name="rep_apellidopaterno" value="{{ old('rep_apellidopaterno')}}">
                          </div>
                          <div class="col-auto">
                            <label class="form-label">Apellido Materno</label>
                            <input type="text" class="form-control" name="rep_apellidomaterno" value="{{ old('rep_apellidomaterno') }}">
                          </div>
                        </div>
                        <div class="row g-3">
                          <div class="col-auto">
                            <label class="form-label">Celular</label>
                            <input type="text" class="form-control" name="rep_celular" value="{{ old('rep_celular') }}">
                          </div>
                          <div class="col-auto">
                            <label class="form-label">Correo Electronico</label>
                            <input type="text" class="form-control" name="rep_email" value="{{ old('rep_email') }}">
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr>
                    <div class="row align-items-center">
                      <p class="h4 text-center">Datos del Estudiante</p>
                      <div class="col-lg-10">
                        <div class="">
                          <div class="row g-3">
                            <div class="col-auto">
                              <label class="form-label">Cedula</label>
                              <input type="text" class="form-control" name="est_cedula[]" minlength="10" maxlength="10" size="10" required >
                            </div>
                            <div class="col-auto">
                              <label class="form-label">Fecha de nacimiento</label>
                              <input type="date" class="form-control" name="est_fechanacimiento[]" required>
                            </div>
                          </div>
                          <div class="row g-3">
                            <div class="col-auto">
                              <label class="form-label">Primer Nombre</label>
                              <input type="text" class="form-control" name="est_primernombre[]" required>
                            </div>
                            <div class="col-auto">
                              <label class="form-label">Segundo Nombre</label>
                              <input type="text" class="form-control" name="est_segundonombre[]" required>
                            </div>
                          </div>
                          <div class="row g-3">
                            <div class="col-auto">
                              <label class="form-label">Apellido Paterno</label>
                              <input type="text" class="form-control" name="est_apellidopaterno[]" required>
                            </div>
                            <div class="col-auto">
                              <label class="form-label">Apellido Materno</label>
                              <input type="text" class="form-control" name="est_apellidomaterno[]" required>
                            </div>
                          </div>
                          <div class="row g-3">
                            <div class="col-auto">
                              <label class="form-label">Año Academico al que postula</label>
                              <select class="form-select" aria-label="Default select example" name="est_anio_academico[]" required>
                                <option value="">Seleccione</option>
                                <option value="Inicial">Inicial</option>
                                <option value="Preparatoria">Preparatoria</option>
                                <option value="Segundo">Segundo</option>
                                <option value="Tercero">Tercero</option>
                                <option value="Cuarto">Cuarto</option>
                                <option value="Quinto">Quinto</option>
                                <option value="Sexto">Sexto</option>
                                <option value="Septimo">Septimo</option>
                                <option value="Octavo">Octavo</option>
                                <option value="Noveno">Noveno</option>
                                <option value="Decimo">Decimo</option>
                                <option value="1ERO BGU">1ERO BGU</option>
                                <option value="2DO BGU">2DO BGU</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-2 text-center">
                        <h6 class="my-2">Agregar Estudiante</h6>
                        <button class="btn add-btn btn-success m-3"><i class="fas fa-plus"></i></button>
                      </div>
                    </div>

                    
                    <div class="newData"></div>
                      <div class="row mt-3">
                        <div class="col text-end">
                          <button type="submit" class="btn btn-primary" onclick="mostrarLoad()">Enviar<i class="fas fa-arrow-right"></i></button>
                        </div>
                        
                      </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-md-center mt-5">
          <div class="col-lg-4 col-sm-12 text-center ">
            <a href="https://maps.app.goo.gl/wvPm2VZY5XuMpsW7A" target="_blank" class="text-decoration-none text-light"> 
              <i class="fas fa-map-marked-alt"></i>
              <p>Cdla. Albonor Mz 9</p>
            </a>
          </div>
          <div class="col-lg-4 col-sm-12 text-center ">
            <a href="https://wa.link/em1od6" target="_blank" class="text-decoration-none text-light">
              <i class="fab fa-whatsapp"></i>
              <p>Nuestra Señora del Carmen</p>
            </a>
          </div>
          <div class="col-lg-4 col-sm-12 text-center ">
            <a href="mailto:escuela@nsc.edu.ec" target="_blank" class="text-decoration-none text-light">
              <i class="far fa-envelope"></i>
              <p>escuela@nsc.edu.ec</p>
            </a>
          </div>
        </div>
      </div>
      <style>
        .la-ball-spin-clockwise-fade,
        .la-ball-spin-clockwise-fade > div {
            position: relative;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
                    box-sizing: border-box;
        }
        .la-ball-spin-clockwise-fade {
            display: block;
            font-size: 0;
            color: #fff;
        }
        .la-ball-spin-clockwise-fade.la-dark {
            color: #333;
        }
        .la-ball-spin-clockwise-fade > div {
            display: inline-block;
            float: none;
            background-color: currentColor;
            border: 0 solid currentColor;
        }
        .la-ball-spin-clockwise-fade {
            width: 32px;
            height: 32px;
        }
        .la-ball-spin-clockwise-fade > div {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 8px;
            height: 8px;
            margin-top: -4px;
            margin-left: -4px;
            border-radius: 100%;
            -webkit-animation: ball-spin-clockwise-fade 1s infinite linear;
            -moz-animation: ball-spin-clockwise-fade 1s infinite linear;
                -o-animation: ball-spin-clockwise-fade 1s infinite linear;
                    animation: ball-spin-clockwise-fade 1s infinite linear;
        }
        .la-ball-spin-clockwise-fade > div:nth-child(1) {
            top: 5%;
            left: 50%;
            -webkit-animation-delay: -.875s;
            -moz-animation-delay: -.875s;
                -o-animation-delay: -.875s;
                    animation-delay: -.875s;
        }
        .la-ball-spin-clockwise-fade > div:nth-child(2) {
            top: 18.1801948466%;
            left: 81.8198051534%;
            -webkit-animation-delay: -.75s;
            -moz-animation-delay: -.75s;
                -o-animation-delay: -.75s;
                    animation-delay: -.75s;
        }
        .la-ball-spin-clockwise-fade > div:nth-child(3) {
            top: 50%;
            left: 95%;
            -webkit-animation-delay: -.625s;
            -moz-animation-delay: -.625s;
                -o-animation-delay: -.625s;
                    animation-delay: -.625s;
        }
        .la-ball-spin-clockwise-fade > div:nth-child(4) {
            top: 81.8198051534%;
            left: 81.8198051534%;
            -webkit-animation-delay: -.5s;
            -moz-animation-delay: -.5s;
                -o-animation-delay: -.5s;
                    animation-delay: -.5s;
        }
        .la-ball-spin-clockwise-fade > div:nth-child(5) {
            top: 94.9999999966%;
            left: 50.0000000005%;
            -webkit-animation-delay: -.375s;
            -moz-animation-delay: -.375s;
                -o-animation-delay: -.375s;
                    animation-delay: -.375s;
        }
        .la-ball-spin-clockwise-fade > div:nth-child(6) {
            top: 81.8198046966%;
            left: 18.1801949248%;
            -webkit-animation-delay: -.25s;
            -moz-animation-delay: -.25s;
                -o-animation-delay: -.25s;
                    animation-delay: -.25s;
        }
        .la-ball-spin-clockwise-fade > div:nth-child(7) {
            top: 49.9999750815%;
            left: 5.0000051215%;
            -webkit-animation-delay: -.125s;
            -moz-animation-delay: -.125s;
                -o-animation-delay: -.125s;
                    animation-delay: -.125s;
        }
        .la-ball-spin-clockwise-fade > div:nth-child(8) {
            top: 18.179464974%;
            left: 18.1803700518%;
            -webkit-animation-delay: 0s;
            -moz-animation-delay: 0s;
                -o-animation-delay: 0s;
                    animation-delay: 0s;
        }
        .la-ball-spin-clockwise-fade.la-sm {
            width: 16px;
            height: 16px;
        }
        .la-ball-spin-clockwise-fade.la-sm > div {
            width: 4px;
            height: 4px;
            margin-top: -2px;
            margin-left: -2px;
        }
        .la-ball-spin-clockwise-fade.la-2x {
            width: 64px;
            height: 64px;
        }
        .la-ball-spin-clockwise-fade.la-2x > div {
            width: 16px;
            height: 16px;
            margin-top: -8px;
            margin-left: -8px;
        }
        .la-ball-spin-clockwise-fade.la-3x {
            width: 96px;
            height: 96px;
        }
        .la-ball-spin-clockwise-fade.la-3x > div {
            width: 24px;
            height: 24px;
            margin-top: -12px;
            margin-left: -12px;
        }
        /*
        * Animation
        */
        @-webkit-keyframes ball-spin-clockwise-fade {
            50% {
                opacity: .25;
                -webkit-transform: scale(.5);
                        transform: scale(.5);
            }
            100% {
                opacity: 1;
                -webkit-transform: scale(1);
                        transform: scale(1);
            }
        }
        @-moz-keyframes ball-spin-clockwise-fade {
            50% {
                opacity: .25;
                -moz-transform: scale(.5);
                    transform: scale(.5);
            }
            100% {
                opacity: 1;
                -moz-transform: scale(1);
                    transform: scale(1);
            }
        }
        @-o-keyframes ball-spin-clockwise-fade {
            50% {
                opacity: .25;
                -o-transform: scale(.5);
                transform: scale(.5);
            }
            100% {
                opacity: 1;
                -o-transform: scale(1);
                transform: scale(1);
            }
        }
        @keyframes ball-spin-clockwise-fade {
            50% {
                opacity: .25;
                -webkit-transform: scale(.5);
                -moz-transform: scale(.5);
                    -o-transform: scale(.5);
                        transform: scale(.5);
            }
            100% {
                opacity: 1;
                -webkit-transform: scale(1);
                -moz-transform: scale(1);
                    -o-transform: scale(1);
                        transform: scale(1);
            }
        }
      </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    @include('sweetalert::alert')
    <script type="text/javascript">
      $(function() { 
        var i = 1;
        $('.add-btn').click(function (e) {
          e.preventDefault();
            i++;
          $('.newData').append(
                    '<div class="newRow'+i+'">'
                      +'<hr>'
                      +'<div class="row align-items-center">'
                        +'<p class="h4 text-center">Datos del Estudiante #'+i+'</p>'
                        +'<div class="col-lg-10">'
                          +'<div class="row g-3">'
                            +'<div class="col-auto">'
                              +'<label class="form-label">Cedula</label>'
                              +'<input type="text" class="form-control" name="est_cedula[]" minlength="10" maxlength="10" size="10" required>'
                            +'</div>'
                            +'<div class="col-auto">'
                              +'<label class="form-label">Fecha de nacimiento</label>'
                              +'<input type="date" class="form-control" name="est_fechanacimiento[]" required>'
                            +'</div>'
                          +'</div>'
                          +'<div class="row g-3">'
                            +'<div class="col-auto">'
                              +'<label class="form-label">Primer Nombre</label>'
                              +'<input type="text" class="form-control" name="est_primernombre[]" required>'
                            +'</div>'
                            +'<div class="col-auto">'
                              +'<label class="form-label">Segundo Nombre</label>'
                              +'<input type="text" class="form-control" name="est_segundonombre[]" required>'
                            +'</div>'
                          +'</div>'
                          +'<div class="row g-3">'
                            +'<div class="col-auto">'
                              +'<label class="form-label">Apellido Paterno</label>'
                              +'<input type="text" class="form-control" name="est_apellidopaterno[]" required>'
                            +'</div>'
                            +'<div class="col-auto">'
                              +'<label class="form-label">Apellido Materno</label>'
                              +'<input type="text" class="form-control" name="est_apellidomaterno[]" required>'
                            +'</div>'
                          +'</div>'
                          +'<div class="row g-3">'
                            +'<div class="col-auto">'
                              +'<label class="form-label">Año Academico al que postula</label>'
                              +'<select class="form-select" aria-label="Default select example" name="est_anio_academico[]" required>'
                                +'<option value="">Seleccione</option>'
                                +'<option value="Inicial">Inicial</option>'
                                +'<option value="Preparatoria">Preparatoria</option>'
                                +'<option value="Segundo">Segundo</option>'
                                +'<option value="Tercero">Tercero</option>'
                                +'<option value="Cuarto">Cuarto</option>'
                                +'<option value="Quinto">Quinto</option>'
                                +'<option value="Sexto">Sexto</option>'
                                +'<option value="Septimo">Septimo</option>'
                                +'<option value="Octavo">Octavo</option>'
                                +'<option value="Noveno">Noveno</option>'
                                +'<option value="Decimo">Decimo</option>'
                                +'<option value="1ERO BGU">1ERO BGU</option>'
                                +'<option value="2DO BGU">2DO BGU</option>'
                              +'</select>'
                            +'</div>'
                          +'</div>'
                        +'</div>'
                        +'<div class="col-lg-2 text-center">'
                          +'<h6 class="my-2">Quitar Estudiante</h6>'
                          +'<a href="#" id="'+i+'" class="btn btn-danger remove-lnk m-3"><i class="fas fa-minus"></i></a>'
                        +'</div>'
                      +'</div>'
                    +'</div>'
            );  
        });
   
         $(document).on('click', '.remove-lnk', function(e) {
           e.preventDefault();
            var id = $(this).attr("id");
             $('.newRow'+id+'').remove();
             i -= 1;
          });
   
      });
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      $('.form-contact').submit(function(e){
        e.preventDefault();
        Swal.fire({
          title: '¿Estás seguro de que tus datos son correctos?',
          text: "¡No podrás revertir esto!, si no estas seguro cancele, para revisar nuevamente",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          confirmButtonText: 'Sí, continuar!'
          cancelButtonColor: '#d33',
        }).then((result) => {
          if (result.isConfirmed) {
            this.submit();
          }
        })
      });
    </script>
    <script>
      function mostrarLoad() {
          document.getElementById('loadAwesome').style.display = 'flex';
      };
    </script>
  </body>
</html>