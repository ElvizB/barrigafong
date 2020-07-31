<?php
include_once 'app/config.inc.php';
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/nav/index.php';
?>

<section class="contacto">
    <div class="grid-contacto">
        <div class="bg-info-contacto wow fadeInUp" data-wow-delay="0.4s">
            <div class="info-contacto">
                <div>
                    <img src="<?php echo RUTA_IMG?>footer/icon.png" draggable="false" class="img-fluid" />
                    <div class="datos-contacto">
                        <p>
                            Dr. Barriga Fong <br />
                            Cirujano General y Laparoscópico
                        </p>
                        <p>
                            Pisco: Clínica Las Américas<br />
                            Ica: Clínica Regional<br />
                            Nasca: Clínica Napoleón
                        </p>
                        <p>
                            949-703-230<br />
                            hengui_fong@hotmail.com
                        </p>
                    </div>
                </div>
                <div class="redes-contacto">
                    <a href="#" target="_blank"> <img src="<?php echo RUTA_IMG?>contacto/fb.png" draggable="false"
                            class="img-fluid" /></a>
                    <a href="#" target="_blank"> <img src="<?php echo RUTA_IMG?>contacto/ig.png" draggable="false"
                            class="img-fluid" /></a>
                    <a href="#" target="_blank"> <img src="<?php echo RUTA_IMG?>contacto/ln.png" draggable="false"
                            class="img-fluid" /></a>
                    <a href="#" target="_blank"> <img src="<?php echo RUTA_IMG?>contacto/wp.png" draggable="false"
                            class="img-fluid" /></a>
                    <a href="#" target="_blank"> <img src="<?php echo RUTA_IMG?>contacto/yt.png" draggable="false"
                            class="img-fluid" /></a>
                </div>
            </div>
        </div>
        <div class="form-contacto">
            <div class="grid-form-contacto wow fadeInUp" data-wow-delay="0.4s">
                <form id="formulario" class="form" role="form" action="" method="POST">

                    <div class="grid-inputs">
                        <div class="md-form">
                            <input type="text" class="form-control" id="nombre" name="nombre">
                            <label for="nombre">APELLIDO</label>
                        </div>

                        <div class="md-form">

                            <input type="text" class="form-control" id="email" name="email">
                            <label for="email">EMAIL</label>
                        </div>
                    </div>


                    <div class="grid-inputs">
                        <div class="md-form">

                            <input type="text" class="form-control" id="asunto" name="asunto">
                            <label for="asunto">TELÉFONO</label>
                        </div>

                        <div class="md-form">

                            <input type="text" class="form-control" id="asunto" name="asunto">
                            <label for="asunto">MOTIVO</label>
                        </div>

                    </div>

                    <div class="md-form">

                        <textarea class="form-control md-textarea" id="mensaje" name="mensaje" rows="3"></textarea>
                        <label for="mensaje">CASO</label>
                    </div>
                    <div class="form-group">
                        <div class="g-recaptcha text-center" data-sitekey="6LfgYbwUAAAAAPWDkxumlQNLS2gssZzO_2zkYc8l">
                        </div>
                        <div id="g-recaptcha-error"></div>
                    </div>

                    <div id="respuesta"></div>

                    <button id="btnenviar" class="btn-enviar">
                        Enviar
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>


<?php
  include_once 'plantillas/footer.php';
  include_once 'plantillas/documento-cierre.inc.php';
?>