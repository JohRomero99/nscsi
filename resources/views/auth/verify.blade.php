<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
    
<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Vertically centered hero sign-up form</h1>
        <p class="col-lg-10 fs-4">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
        
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form action="{{route('verificar.codigo')}}" class="p-4 p-md-5 border rounded-3 bg-light" method="POST" >
          @csrf
            <div class="mb-3">
                <div class="d-flex justify-content-center">
                    <label for="exampleInputEmail1" class="form-label">Digita tu código</label>
                </div>
                <input type="text" class="form-control text-center" id="exampleInputEmail1" aria-describedby="emailHelp" name="codigo">
                <div class="d-flex justify-content-center">
                    <div id="emailHelp" class="form-text">¡No compartas tu código con nadie!</div>
                </div>
                <div class="d-flex justify-content-center">
                  <button class="btn btn-primary mt-3" >Continuar</button>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>

</body>
</html>

<style>
    body {
        /* background-color: #F5F5F5; */
        background-image: url("https://investigarte.in/wp-content/uploads/2022/06/boseto.png")
    }
</style>




  

