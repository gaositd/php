<!doctype html>
<html lang="en">

<head>
  <title>Login Portafolio</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
  <script src="./js/login.js" ></script>

</head>

<body>
  <div class="container mt-5">

  <div class="row">
    <div class="col-md-4"></div>

    <div class="col-md-4">


      <div class="card">
        <div class="card-header">
          Iniciar sesión
        </div>
        <div class="card-body">
          <form action="loginApp.php" method="post" id="formulario" name="formulario">
            <label for="userApp" class="form-control-label">
              Usuario:
            </label>
            <input type="text" class="form-control" name="userApp" id="userApp" placeholder="Usuario"
              aria-placeholder="Usuario">
            <br />
            <label for="passApp" class="form-control-label">
              Password
            </label>
            <input type="password" class="form-control" name="passApp" id="passApp" placeholder="Password"
              aria-placeholder="Password">
            <br />
            <button
              id="login" 
              type="submit" 
              name="login"
              class="btn btn-success"
              >
              <!-- onClick="checkLogin()" -->
              Entrar al portafolio
            </button>
          </form>
        </div>

        <div class="card-footer text-muted">
          <span 
            id="errorData" 
            name="errorData"
            class="text-danger"
          ></span>
          <!-- Iniciar sesión 5:45:43 -->
        </div>
      </div>

    </div>

    <div class="col-md-4"></div>
  </div>

  </div>
</body>
</html>
<?php
  if($_POST){
    $userApp = $_POST['userApp'];
    $passApp = $_POST['passApp'];
    
    if($userApp == "" || $passApp == ""){
      echo '<script> document.getElementById("errorData").innerHTML = "Error en usuario y/o password favor de revisar";</script>';
      die();
    }else{
      session_start();
      $_SESSION['userApp'] = $_POST['userApp'];

      header("location:index.php");
    }
  }
?>