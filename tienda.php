<?php
require_once("part/head.php");
require_once("part/header.php");
?>
<body>
    <main>
        <section class="conteiner">
            <h1 class="conteiner fluid">Tienda</h1>
            <?php
            require_once("part/sub_menu.php");
            ?>
            <div class="container-fluid galeriadivcards">
                <div class="row">
                    <?php
                    $arrayProductos = json_decode(file_get_contents('array/producto.json'), TRUE);
                    foreach($arrayProductos as $producto){ 
                        $print = true;
                        if(!empty($_GET['categoria']) AND $print){
                            if($producto['categoria'] != $_GET['categoria']) $print = FALSE;
                        }
                        if(!empty($_GET['subcategoria']) AND $print){
                            if($producto['subcategoria'] != $_GET['subcategoria']) $print = FALSE;
                        }
                         if($print){
                    ?>
                            <ul class="thumbnails">
                                <li>
                                    <div class="thumbnail">
                                        <a href="detalleproducto.php?producto=<?php echo $producto['id'] ?>"><img src="<?php echo $producto['imagen'] ?>" alt="" class="img-fluid"></a>
                                        <div class="caption cntr">
                                            <p><strong><?php echo $producto['nombre'] ?></strong></p>
                                            <p class="pi"><?php echo cortar_palabras($producto['descripcion'], 50) ?></p>
                                            <h4><a class="shopBtn" href="detalleproducto.php?producto=<?php echo $producto['id'] ?>" title="Ver"> VER </a></h4>
                                            <br class="clr">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                    <?php
                        }
                    }     
                    ?>
                </div>
            </div>
        </section>
    </main>
    <?php
    require_once('part/footer.php');
    require_once('part/java.php');
    ?>