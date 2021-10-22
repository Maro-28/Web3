<?php
include_once('navbar.php');
if (isset($_POST['subitCat'])) {
    daoGuardarCategoria($_POST);
  }
?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Agregar Categoria</h1>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Detalle de la categoria</h3>
          </div>
          <form action="#" method="post" enctype="multipart/form-data">
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Nombre Categoria</label>
                <input type="text" name='nombre' class="form-control" id="exampleInputEmail1" placeholder="Nombre del producto" >
              </div>
            <div class="card-footer">
              <button type="submit" name="subitCat" class="btn btn-primary">Cargar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>
<?php
include_once('footer.php');
?>