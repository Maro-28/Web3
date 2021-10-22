<?php
include_once("config/config.php");
require_once(DIR_BASE."part/head.php");
require_once(DIR_BASE."part/header.php");
?>
    <main>
        <section>
            <h1>Teckel's Bakery</h1>

            <div class="container seccion">
                <div class="col-lg-12">
                    <?php
                            require_once(DIR_BASE."part/header.php");
                    ?>
                </div>
            </div>
            <?php
                require(DIR_BASE."part/carrusel_index.php");
                ?>
            <div class="container col-lg-6 col-sm-5 col-md-6">
                <p><span>Bienvenidos a Teckel's bakery, nos especializamos en pastelería clásica, todos nuestros
                        productos son artesanales y elaborados el día de la entrega para preservar su frescura</span>
                </p>
                <p><span>Tomamos pedidos con 48hs de anticipación para poder brindarte el mejor servicio. No dudes en
                        contactarnos!</span></p>
            </div>

            <?php
                require(DIR_BASE."part/carrusel_index.php");
                ?>

            <div class="container col-lg-6 col-sm-5 col-md-6">
                <p><span>Podes elegir nuestros productos desde la pestaña tienda, contamos con una amplia variedad de
                        tortas, cookies, budines, entre otros.</span></p>
                <p><span>Hacemos tortas personalizadas, no dudes en consultarnos por tamaños, sabores, colores y
                        coberturas!</span></p>
            </div>
        </section>
    </main>

    <?php
        require_once(DIR_BASE."part/footer.php");
        require_once(DIR_BASE."part/java.php");
    ?>
</body>

</html>