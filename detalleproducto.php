<?php
include_once("config/config.php");
require_once(DIR_BASE."part/head.php");
require_once(DIR_BASE."part/header.php");
include_once(DIR_BASE."dao/dao_comentarios.php");
include_once(DIR_BASE."dao/dao_producto.php");
if (isset($_POST['subitCom'])) {
guardarComentario($_POST);
}
?>
<main>
    <section class="conteiner">
        <h1 class="conteiner fluid">Tienda</h1>
        <?php
        require_once(DIR_BASE."part/sub_menu.php");
        ?>
        <div>
            <div class="container-fluid galeriadivcards">
                <div class="row">

                    <?php
                    $producto = obtenerProducto($_GET['producto']);
                    ?>
                    <div class="col-lg-3 col-md-3 col-sm-12 center">
                        <article class="card">
                            <h2><strong><?php echo $producto['nombre'] ?></strong></h2>
                            <img src="<?php echo $producto['imagen'] ?>" alt="" class="img-fluid">
                            <h2><strong><?php echo $producto['precio'] ?></strong></h2>
                            <p class="pi"><?php echo $producto['descripcion'] ?>
                            </p>
                        </article>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 center">
                        <!-- /.FORMULARIO -->
                        <form action="#" method="post">
                            <fieldset>
                                <div class="form-group container-fluid">
                                    <h3>Comentarios</h3>
                                    <label for="inputEmail3" class="col-form-label" id="inputEmail4">
                                            Nombre y Apellido</label>
                                    <div class="col-sm-4">
                                            <input type="text" name="nombre" placeholder="Ingrese su Nombre y Apellido" class="form-control">
                                    </div>
                                    <label for="inputEmail3" class="col-form-label" id="inputEmail4">Email</label>
                                    <div class="col-sm-4">
                                        <input type="email" name="email" class="form-control" placeholder="email">
                                    </div>
                                    <label for="inputEmail3" class="col-sm-12 col-form-label">
                                            Comentario:</label>
                                    <div class="col-sm-10">
                                            <textarea name="comentario" cols="50" rows="5"></textarea>
                                    </div>
                                    

                                    <!-- botones de enviar y cancelar -->
                                    <input type="submit" name="subitCom" value="Enviar">
                                    <input type="reset" value="Borrar">
                                    <input type="hidden" name="producto" value=<?php echo $producto['id'] ?> >
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="col-lg-12 col-md-12 col-sm-12 col-12 conteiner for">
          <!--/.Muestra comentario-->
            <?php 
            $comentario = obtenerComentarios();
            krsort($comentario);
            
            foreach ($comentario as $c) {
                if($producto['id'] == $c['producto']){
                        ?>
            <div class="col-md-6">
                <!-- Box Comment -->
                <div class="card card-widget">
                    <div class="card-header">
                        <div class="user-block">
                            <span class="username"><a><?php echo $c['nombre'] ?></a></span>
                            <span class="username"><a><?php echo $c['fecha'] ?></a></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- post text -->
                        <p><?php echo $c['comentario'] ?></p>
                    </div>
                </div>
            </div>
            <?php
                        }
                    }     ?>
        </div>
    </section>
</main>

<?php
require_once(DIR_BASE.'part/footer.php');
require_once(DIR_BASE.'part/java.php');
?>
</body>