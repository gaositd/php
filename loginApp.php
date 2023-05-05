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
          <form action="login.php" method="post">
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
            <button id="login" type="submit" name="login" class="btn btn-success">Entrar al portafolio</button>
          </form>
        </div>

        <div class="card-footer text-muted">
        Iniciar sesión 5:45:43
        </div>
      </div>

    </div>

    <div class="col-md-4"></div>
  </div>

  </div>
</body>

</html>