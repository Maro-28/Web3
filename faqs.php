<?php
include_once("config/config.php");
require_once(DIR_BASE."part/head.php");
require_once(DIR_BASE."part/header.php");
?>

    <main>
        <section class="container">
            <h1>FAQ'S</h1>
            <div class="row">
                <h2 class="fq">Preguntas frecuentes</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <article>
                            <h2>¿Hacen envíos en CABA?</h2>
                            <img src="https://fakeimg.pl/100x100/?text=1" alt="icono especificacion 1" width="100"
                                height="100" class="float-left rounded-circle especificacionesimagen">
                            <p>Realizamos envíos dentro de CABA con un monto adicional.</p>
                        </article>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <article class="especificacionesarticulo">
                            <h2>¿Tiempos de entrega?</h2>
                            <img src="https://fakeimg.pl/100x100/?text=2" alt="icono especificacion 2" width="100"
                                height="100" class="float-left rounded-circle especificacionesimagen">
                            <p>Las entregas se realizan de 8 a 20hs.</p>
                        </article>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <article class="especificacionesarticulo">
                            <h2>¿Dónde están ubicados?</h2>
                            <img src="https://fakeimg.pl/100x100/?text=3" alt="icono especificacion 3" width="100"
                                height="100" class="float-left rounded-circle especificacionesimagen">
                            <p>Estamos úbicados en el barrio de Caballito; Thompson 455.</p>
                        </article>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <article class="especificacionesarticulo">
                            <h2>¿Hacen mesas dulces?</h2>
                            <img src="https://fakeimg.pl/100x100/?text=4" alt="icono especificacion 4" width="100"
                                height="100" class="float-left rounded-circle especificacionesimagen">
                            <p>Hacemos mesas dulces empresariales y para cumpleaños.</p>
                        </article>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <article class="especificacionesarticulo">
                            <h2>¿Qué medios de pago?</h2>
                            <img src="https://fakeimg.pl/100x100/?text=5" alt="icono especificacion 5" width="100"
                                height="100" class="float-left rounded-circle especificacionesimagen">
                            <p>Podés abonar con tarjeta de crédito/débito o Mercado Pago.</p>
                        </article>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <article class="especificacionesarticulo">
                            <h2>¿Qué horarios tienen?</h2>
                            <img src="https://fakeimg.pl/100x100/?text=6" alt="icono especificacion 6" width="100"
                                height="100" class="float-left rounded-circle especificacionesimagen">
                            <p>Lun a Vie de 9 a 18hs y Sábados de 9 a 14hs</p>
                        </article>
                    </div>



                </div>
            </div>
        </section>
    </main>
    <?php
        require_once(DIR_BASE.'part/footer.php');
        require_once(DIR_BASE.'part/java.php');
    ?>
</body>

</html>