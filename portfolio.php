<?php include 'header.php'; ?>
<?php include 'cxn.php'; ?>
<?php
  if($_POST){
    print_r($_POST);
    $nombre = $_POST['nombre'];
    // $cxnPortfolio = new cxn();
    // $ruta   = $_POST['ruta'];
    // $qry = "INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, '".$nombre."', '".$ruta."')";
    // $cxnPortfolio.loadSQL($qry);
  }
?>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          Datos del protecto
        </div>
        <div class="card-body">
          <form
            action="portfolio.php"
            method="post"
            id="portfolio"
            name="portfolio"
            enctype="multipart/form-data"
          >
            <label
              for="nombre"
              id="labelNombre"
              class="form-label"
              >
              Nombre
            </label>
            <input
              type="text"
              name="nombre"
              id="nombre"
              class="form-control"
              placeholder="Nombre del proyecto"
              aria-placeholder="Nombre del proyecto"
            />
            <label
              for="web-path"
              id="label-file"
              name="label-file"
              class="form-label mt-2"
            >
              Ruta Web
            </label>
            <input
              type="text"
              name="web-path"
              id="web-path"
              class="form-control"
            />
            <label
              type="file"
              name="ruta"
              id="ruta"
              class="form-label mt-2"
            >
              Imagen del proyecto
            </label>
            <input
              type="file"
              name="input-file"
              id="input-file"
              class="form-control"
            />
            <input type="submit" value="Enviar Proyecto" id="enviar-proyecto" class="btn btn-success mt-3">
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">WEB</th>
              <th scope="col">Foto</th>
            </tr>
          </thead>
          <tbody>
            <tr class="">
              <td scope="row">ABC</td>
              <td>nombre</td>
              <td>
                <img
                  src="#"
                  alt="imagen"
                  class="img-thumbnail"
                />
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  
</div>
<?php include 'footer.php'; ?>