<?php
include_once 'app/config.inc.php';
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/nav/index.php';
?>


<section class="title-serv">
    <div class="grid-title-serv">
        <h2>- servicios -</h2>
    </div>
</section>

<section class="servicios-options">
    <div class="grid-servicio-options">
        <div class="img-serivio-options">

        </div>
        <div class="content-servicio-options">
            <div class="grid-description-options">
                <h2>Apendicectomía laparoscópica</h2>
                <p>El tratamiento requiere que se haga una operación para extirpar el apéndice infectado. Lo tradicional
                    es que el apéndice se quite a través de una incisión en la pared abdominal inferior derecha.
                </p>
                <p>
                    En la mayoría de las apendicectomías laparoscópicas los cirujanos operan a través de tres pequeñas
                    incisiones (cada una mide aprox. entre 6 y 12,5 mm) mientras se observa una imagen ampliada de los
                    órganos internos del paciente en una pantalla de televisión. En algunos casos, una de las pequeñas
                    aberturas puede alargarse hasta medir 5 a 7,5 cm a fin de completar el procedimiento.
                </p>
                <a href="<?php echo RUTA_CONTACTO ?>" class="btncontacto" target="_blank">Contáctanos</a>
                <img src="<?php echo RUTA_IMG?>servicios/flecha.png" draggable="false" class="img-fluid" />
            </div>
            <div class="grid-precio">
                <div class="title-precio">
                    <p>COSTOS RELACIONADOS</p>
                </div>
                <div class="subtitle-precio">
                    <p>Precio de la cirugía</p>
                </div>
                <div class="precio-number">
                    <p class="desde"><i>DESDE</i></p>
                    <p class="number-p">S/3800</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="servicios-options">
    <div class="grid-servicio-options-two">

        <div class="content-servicio-options">
            <div class="grid-description-options-two">
                <h2>Apendicectomía laparoscópica</h2>
                <p>El tratamiento requiere que se haga una operación para extirpar el apéndice infectado. Lo tradicional
                    es que el apéndice se quite a través de una incisión en la pared abdominal inferior derecha.
                </p>
                <p>
                    En la mayoría de las apendicectomías laparoscópicas los cirujanos operan a través de tres pequeñas
                    incisiones (cada una mide aprox. entre 6 y 12,5 mm) mientras se observa una imagen ampliada de los
                    órganos internos del paciente en una pantalla de televisión. En algunos casos, una de las pequeñas
                    aberturas puede alargarse hasta medir 5 a 7,5 cm a fin de completar el procedimiento.
                </p>
                <a href="<?php echo RUTA_CONTACTO ?>" class="btncontacto" target="_blank">Contáctanos</a>
                <img src="<?php echo RUTA_IMG?>servicios/flecha.png" draggable="false" class="img-fluid" />
            </div>
            <div class="grid-precio">
                <div class="title-precio">
                    <p>COSTOS RELACIONADOS</p>
                </div>
                <div class="subtitle-precio">
                    <p>Precio de la cirugía</p>
                </div>
                <div class="precio-number">
                    <p class="desde"><i>DESDE</i></p>
                    <p class="number-p">S/3800</p>
                </div>
            </div>
        </div>
        <div class="img-serivio-options">
        </div>
    </div>
</section>


<section class="servicio">
    <div class="grid-servicio wow fadeInUp" data-wow-delay="0.4s">
        <div class="img-servicio">
            <img src="<?php echo RUTA_IMG?>servicios/logo-s.png" draggable="false" class="img-fluid" />
        </div>
        <h2>¿Preguntas?</h2>
        <p>Agendemos una cita para resolver con tiempo sus consultas e inquietudes.</p>
        <div class="grid-btn-cita">
            <a href="<?php echo RUTA_CONTACTO ?>" target="_blank" class="btn-reserva">Reserva tu cita</a>
        </div>
    </div>
</section>


<?php
  include_once 'plantillas/footer.php';
  include_once 'plantillas/documento-cierre.inc.php';
?>