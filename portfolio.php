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
            action=""
            method="post"
            id="portfolio" 
            name="portfolio" 
            enctype="multipart/form-data"
          >
            <label for="nombre" id="labelNombre" class="form-label" >
              Nombre
            </label>
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre de la imágen" aria-placeholder="Nombre de la imágen" />
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
            <label for="descriptcion" class="control-label">
              Descripción
            </label>
            <textarea
            name="descripcion"
            id="descripcion"
            class="form-control"
            cols="30"
            rows="10"
            >
          </textarea>
          <label
            for="filename"
            id="filename-label"
            name="filename"
            class="form-label mt-2"
          >
            Imágen a cargar
          </label>
          <input
            type="file"
            name="archivo"
            id="archivo"
            class="form-control"
            accept="image/png,image/jpeg, png, jpeg, webp, gif, svg"
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
              <th scope="col">Descripción</th>
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
                    $foto[descripcion]
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

    if($flag == true){
      die('<div class="" role="alert"></div>');
    }else if($flag == false){
      print_r('<div class="alert alert-danger" role="alert">
      Faltan campos por llenar o informacion incorrecta
      </div>');
    }

  }

  if($_POST){
    $fecha = new DateTime();
    //nuevo nombre de archivo a subir
    $nombre = $_POST['nombre'];
    $web_path = $_POST['web_path'];
    $filename = 'images/'.$fecha->getTimestamp()."_".$_FILES['archivo']['name'];
    $tmp_name = $_FILES['archivo']['tmp_name'];
    $image_path = $tmp_name;
    $desc = $_POST['descripcion'];

    if(strlen($nombre) <= 3){
      fError(false);
    }else{
      $qry = "INSERT INTO `fotos` (
        `id`, 
        `nombre`, 
        `ruta`, 
        `file-path`, 
        `descripcion`,
        `marca_borrado`
      ) 
      VALUES (
        NULL, 
        '".$nombre."',
        '".$web_path."',
        '".$filename."',
        '".$desc."',
        ''
      );";
      $cxnPortfolio = new cxn();
      $cxnPortfolio->actionsSQL($qry);
      move_uploaded_file($image_path,$filename);
      // $cxnPortfolio->closeCxn();
    }
  }

  if($_GET){
    $cxnActions = new cxn();

    if($_GET['del'] > 0){
      $deleteId = $_GET['del'];
      $deleteImageFromServer = "Select file-path from fotos where id='$deleteId'";
      $qry ="Delete From `fotos` WHERE `fotos`.`id` = ".$deleteId.";";
      $cxnActions->actionsSQL($qry);
      unlink('images/'.$deleteImage);
    }else if($_GET['mod'] > 0){
      $updateId = $_GET['mod'];
      echo '<div class="alert alert-danger" role="alert">deleteId = '.$deleteId.'   updateId = '.$updateId.'</div>';
    }

  }
?>