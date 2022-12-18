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
            <div class="header text-center">
                <p class="m-3 h4">REGISTRO ESTUDIANTE ADMITIDO <i class="far fa-user"></i></p>
            </div>
            <div class="card-body">
                <div class="form-text mb-4">
                    Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                </div>
                <div class="text-center">
                    <p class="m-3 h5">ESTUDIANTE</p>
                </div>
                <div class="col-md">
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="">
                        <label class="text-muted" for="floatingInputGrid">Cedula <i class="fas fa-address-card"></i></label>
                    </div>
                </div>
                <div class="row g-2 mt-1">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="">
                            <label class="text-muted" for="floatingInputGrid">Primer Nombre</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="">
                            <label class="text-muted" for="floatingInputGrid">Segundo Nombre</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="">
                            <label class="text-muted" for="floatingInputGrid">Apellido Paterno</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="">
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
                        <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="">
                        <label class="text-muted" for="floatingInputGrid">Cedula <i class="fas fa-address-card"></i></label>
                    </div>
                </div>
                <div class="row g-2 mt-1">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="">
                            <label class="text-muted" for="floatingInputGrid">Primer Nombre</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="">
                            <label class="text-muted" for="floatingInputGrid">Segundo Nombre</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="">
                            <label class="text-muted" for="floatingInputGrid">Apellido Paterno</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="">
                            <label class="text-muted" for="floatingInputGrid">Apellido Paterno</label>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="">
                        <label class="text-muted" for="floatingInputGrid">Correo <i class="fas fa-envelope"></i></label>
                    </div>
                </div>
                <div class="mt-4 text-center">
                    <button class="btn btn-success"><strong>Registrar </strong> <i class="far fa-save"></i></button>
                </div>
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
//! validateCI.js
//! version : 1.0.0
//! author : Insoutt
//! license : MIT
//! https://github.com/insoutt

/**
 * Comprueba si el número de cédula ingresado es valido.
 * @param  {string|integer}  ci Número de cédula
 * @return {Boolean}
 */
function isValidCI(ci) {
	var isNumeric = true;
	var total = 0, 
		individual;	

	for (var position = 0 ; position < 10 ; position++) {
		// Obtiene cada posición del número de cédula
		// Se convierte a string en caso de que 'ci' sea un valor numérico
		individual = ci.toString().substring(position, position + 1)

		if(isNaN(individual)) {
			console.log(ci, position,individual, isNaN(individual))
			isNumeric=false;				
			break;			
		} else {
			// Si la posición es menor a 9
			if(position < 9) {
				// Si la posición es par, osea 0, 2, 4, 6, 8.
				if(position % 2 == 0) {
					// Si el número individual de la cédula es mayor a 5
					if(parseInt(individual)*2 > 9) {
						// Se duplica el valor, se obtiene la parte decimal y se aumenta uno 
						// y se lo suma al total
						total += 1 + ((parseInt(individual)*2)%10);
					} else {
						// Si el número individual de la cédula es menor que 5 solo se lo duplica
						// y se lo suma al total
						total += parseInt(individual)*2;
					}
				// Si la posición es impar (1, 3, 5, 7)
				}else {
					// Se suma el número individual de la cédula al total
					total += parseInt(individual);		    		
				}
			} 
		}
	}

	if((total % 10) != 0) {
		total =  (total - (total%10) + 10) - total;		
	} else {
		total = 0 ; 	
	}


	if(isNumeric) {	
		// El total debe ser igual al último número de la cédula
		console.log(ci, total, individual);
		console.log(ci, typeof ci, ci.length)
		// La cédula debe contener al menos 10 dígitos
		if(ci.toString().length != 10) { 
			alert("La c\u00E9dula debe ser de: 10 d\u00EDgitos.");
			return false; 
		}

		// El número de cédula no debe ser cero
		if (parseInt(ci, 10) == 0) { 
			alert("La c\u00E9dula ingresada no puede ser cero.");
			return false;
		}

		// El total debe ser igual al último número de la cédula
		if(total != parseInt(individual)) { 
			alert("La c\u00E9dula ingresada no es v\u00E1lida.");
			return false;
		} 

		console.log('cédula válida', ci);
		return true;			
	}

	// Si no es un número  
	alert("El dato solo puede contener numeros.");
	return false;
}
</script>

</html>