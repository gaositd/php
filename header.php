<?php
  session_start();
  if (isset($_SESSION['userApp']) != "12345"){
    header("Location:loginApp.php");
  }else{
    //print_r(isset($_SESSION));
  }

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sitio hecho con php</title>
  <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
    crossorigin="anonymous"
  >
  <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" 
    crossorigin="anonymous"
  >
  </script>
</head>
<body>
  <div class="container">
    <a href="index.php">Inicio</a>
    <a href="portfolio.php">Portafolio</a>
    <a href="closeSession.php">Cerrar</a>
  
  <!-- Aquí inicia el proyecto en PHP -->