<?php
include_once("config/config.php");
require_once(DIR_BASE."part/head.php");
require_once(DIR_BASE."part/header.php");

require_once(DIR_BASE.'Business/contactBusiness.php');

	if(!empty($_POST['email'])){
		//var_dump($_POST);
		sendMail($_POST);
	}

    ?>

<main id="contacto">
    <title>Contacto</title>
    <section>
        <h1>Contacto</h1>
        <div class="container-fluid" id="contacto">
            <div class="row center">
                
                <div class="col-md-6 contacto-col-left">
                    <a href="https://www.google.com.ar/maps/@-34.6010516,-58.4287612,15z" target="_blank"><img
                            src="imagenes/mapa.jpeg" alt="mapa" width="640" height="358"></a>
                </div>

                <div class="col-md-3">
                    <div>
                        <h2>Dejanos tu consulta</h2>
                        <p class="p2"><span class="block">Pero antes…</span> <span>¿Has leído nuestras <a
                                    class="oblique" href="faqs.php">preguntas frecuentes? </a></span> <span> Quizá contengan la
                                información que buscas, </span><span class="oblique">¡y así te ahorrararías tiempo, y a Teckel's
                                recursos!</span></p>
                    </div>
                    <form class="form-horizontal" action="" method="post">
                        <fieldset>
                            <div class="control-group">
                                <input type="text" name="name" placeholder="Nombre" class="input-xlarge textbox"/>
                            </div>
                            <div class="control-group">
                                <input type="text" name="email" placeholder="Email" class="input-xlarge textbox"/>
                            </div>
                            <div class="control-group">
                                <input type="text" name="tel"  placeholder="Teléfono" class="input-xlarge textbox"/>
                            </div>
                            <div class="control-group">
                                <textarea rows="3" id="textarea" name="message"  class="input-xlarge textbox"></textarea>
                            </div>
                            <button class="shopBtn" type="submit">Enviar</button>
                        </fieldset>
                    </form>
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