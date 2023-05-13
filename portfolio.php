<?php include 'header.php'; ?>
<?php include 'cxn.php'; ?>
<div class="container">
  <div class="row">
    <div class="col-md-3">
      <div class="card">
        <div class="card-header">
          Datos del protecto
        </div>
        <div class="card-body">
          <form
            action="portfolio.php" method="post" id="portfolio" name="portfolio" enctype="multipart/form-data" >
            <label for="nombre" id="labelNombre" class="form-label" >
              Nombre
            </label>
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre del proyecto" aria-placeholder="Nombre del proyecto" />
            <label
              for="web_path"
              id="label-file"
              name="label-file"
              class="form-label mt-2"
              >
              Ruta Web
            </label>
            <input
            type="text"
            name="web_path"
            id="web_path"
            class="form-control"
            />
            <label
              for="filename"
              id="filename-label"
              name="filename"
              class="form-label mt-2"
            >
              Imagen del proyecto 
            </label>
            <input
              type="file"
              name="archivo"
              id="archivo"
              class="form-control"
              accept="image/png,image/jpeg, png, jpeg, webp, gif"
            />
            <input type="submit" value="Enviar Proyecto" id="enviar-proyecto" class="btn btn-success mt-3">
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">WEB</th>
              <th scope="col">Foto</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $selectCxn = new cxn();

              $qry = "SELECT * FROM `fotos` WHERE marca_borrado != 'X';";
              $fotos = $selectCxn->selectSQL($qry);
              foreach($fotos as $foto){
                $ruta_web = substr($foto['ruta'],8,17);
                print_r("
                  <tr class=''>
                    <td class='align-self-center ms-1'>$foto[nombre]</td>
                    <td class='ms-1'>
                      <a 
                        href='$foto[ruta]'
                        title='$foto[nombre]'
                        target='_blank'
                        class='ms-md-auto'
                      >
                        $ruta_web
                      </a>
                    </td>
                    <td class='ms-1'>
                      <img
                        src='$foto[ruta]'
                        alt='$foto[nombre]'
                        class='img-fluid img-thumbnail'
                        title='$foto[nombre]'
                        width='30px'
                        height='auto'
                      />
                    </td>
                    <td class='ms-1'>
                      <a href='?mod=$foto[id]' class='ms-3'>
                        <i
                          class='fa-solid fa-eraser'
                          title='Modificar'
                        ></i>
                      </a>
                      <a 
                        href='?del=$foto[id]'
                        class='ms-3'
                      > 
                        <i 
                          class='fa-solid fa-trash fa-xs ms-3'
                          title='Borrar'
                        ></i>
                      </a>
                    </td>
                  </tr>
                ");
              }
              $selectCxn->closeCxn();
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  
</div>
<?php include 'footer.php'; ?>
<?php

  function fError($flag){
    echo "==>>".$flag;
    if($flag == true){
      die('<div class="" role="alert"></div>');
    }else if($flag == false){
      print_r('<div class="alert alert-danger" role="alert">
      Faltan campos por llenar o informacion incorrecta
    </div>');
    }
  }


  if($_POST){
    $nombre = $_POST['nombre'];
    $web_path = $_POST['web_path'];
    $filename = $_FILES['archivo']['name'];

    if(strlen($nombre) <= 5){
      fError(false);
    }else{
      $qry = "INSERT INTO `fotos` (`id`, `nombre`, `ruta`, `file-path`) VALUES (NULL, '".$nombre."','".$web_path."','".$filename."');";
      $cxnPortfolio = new cxn();
      $cxnPortfolio->actionsSQL($qry);
      $cxnPortfolio->closeCxn();
    }
  
  }

  if($_GET){
    // $deleteId = $_GET['del'];
    // echo '<div class="alert alert-danger" role="alert">$deleteId</div>';
    // $updateId = $_GET['mod'];
    // $cxnActions = new cxn();
    // echo '<script>alert($deleteId)</script>';
    // if($deleteId > 0){
      $qry="Delete From `fotos` WHERE `fotos`.`id` = ".$_GET['del'].";";
      // $deleteId";
      // echo '<div class="alert alert-danger" role="alert">$qry</div>';
      $cxnActions->actionsSQL($qry);
      $cxnActions->closeCxn();
    // }else{//6:50:43
    //   echo '<div class="alert alert-danger" role="alert">No entró</div>';
    // }

    // if($updateId){
    //   // update($updateId);
    // }
    
  }else{
    echo '<script>alert("no entró")</script>';
  }
?>