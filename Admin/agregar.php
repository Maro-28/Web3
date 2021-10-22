<?php
include_once('navbar.php');
if (isset($_POST['subitProd'])) {
  if (!empty($_GET['edit'])) {
    businessModificarProducto($_POST, $_GET['edit']);
  } else {
    businessGuardarProducto($_POST);
  }
  redirect('projects.php');
}

$producto = array('nombre' => '', 'precio' => '', 'categoria' => '', 'subcategoria' => '', 'disponibilidad' => '', 'descripcion' => '', 'imagen' => '');
if (!empty($_GET['edit'])) {
  $producto = obtenerProducto($_GET['edit']);
}
?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Agregar productos</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
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
            <h3 class="card-title">Detalle del producto nuevo</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="#" method="post" enctype="multipart/form-data">
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="text" name='nombre' class="form-control" id="exampleInputEmail1" placeholder="Nombre del producto" value="<?php echo $producto['nombre'] ?>">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Descripcion</label>
                <input type="text" name='descripcion' class="form-control" id="exampleInputEmail1" placeholder="Descripcion" value="<?php echo $producto['descripcion'] ?>">
              </div>
              <div class="form-group">
                <label>Categoria</label>
                <select class="form-control" name='categoria'>
                  <?php
                  foreach (ObtenerCategorias() as $cat) {
                  ?>
                    <option value="<?php echo $cat['id'] ?>" <?php echo ($cat['id'] == $producto['categoria']) ? 'selected' : '' ?>> <?php echo $cat['categoria'] ?></option>
                  <?php
                  } ?>
                </select>
              </div>
              <div class="form-group">
                <label>Subcategoria</label>
                <select class="form-control" name='subcategoria'>
                  <?php
                  foreach (obtenerSubsubcategoria() as $subcat) {
                  ?>
                    <option value="<?php echo $subcat['id'] ?>" <?php echo ($subcat['id'] == $producto['subcategoria']) ? 'selected' : '' ?>> <?php echo $subcat['subcategoria'] ?></option>
                  <?php
                  } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Precio</label>
                <input type="text" name='precio' class="form-control" id="exampleInputPassword1" placeholder="$" value="<?php echo $producto['precio'] ?>">
              </div>
              <div class="custom-control custom-radio">
                <input type="checkbox" class="form-check-label" id="exampleInputEmail1" value="true" name="activa" <?php echo ($producto['disponibilidad'] == TRUE) ? 'checked' : '' ?>>
                <label class="form-check-label" name='activa'>Disponible</label>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Imagen</label>
                <div class="input-group">
                  <div class="custom-file">
                  <input type="file" name="imagen" class="custom-file-input" id="exampleInputFile">
                    <input type="hidden" name="old_imagen" value="<?php echo $producto['imagen']?>" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile"><?php echo $producto['imagen']?></label>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" name="subitProd" class="btn btn-primary">Cargar</button>
            </div>
          </form>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </section>
  <!-- /.content -->
</div>
<?php
include_once('footer.php');
?>