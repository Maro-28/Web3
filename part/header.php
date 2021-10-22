
<?php
require_once('helpers/string.php');
include_once("config/config.php");
?>
<header id="_top">

<div class="menu">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.php">
            <img src="imagenes/logo.png" width="102" height="100" alt="Logo teckel's">
        </a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="quienessomos.php"><img class="icono"
                            src="imagenes/documento.png" alt="quienessomos">¿Quiénes somos?</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="tienda.php"><img class="icono"
                            src="imagenes/carro.png" alt="tienda">Tienda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto.php"><img class="icono"
                            src="imagenes/carta.png" alt="contacto">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="faqs.php"><img class="icono"
                            src="imagenes/ayudar.png" alt="Preguntas frecuentes">Faq's</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Admin/login.php"><img class="icono"
                            src="imagenes/pngegg.png" alt="Preguntas frecuentes">Login</a>
                </li>
            </ul>

        </div>
    </nav>
</div>

</header>
<body>