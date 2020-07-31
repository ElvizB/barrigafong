<?php
include_once 'app/config.inc.php';
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/nav/index.php';
?>


<section class="service-one">
    <div class="grid-service-one">
        <div>
            <img src="<?php echo RUTA_IMG?>servicios/s_1.png" draggable="false" class="img-fluid" />
        </div>
        <div class="description-service-one">
            <div class="content-service-one">
                <div class="title-service-one wow fadeIn" data-wow-delay="0.4s">
                    <h2>Apendicectomía laparoscópica</h2>
                    <p>
                        La apendicitis es uno de los problemas quirúrgicos más comunes. A una de cada dos mil personas
                        se le practica una apendicectomía en algún momento de la vida. El tratamiento requiere que se
                        haga una operación para extirpar el apéndice infectado. Lo tradicional es que el apéndice se
                        quite a través de una incisión en la pared abdominal inferior derecha.
                    </p>
                    <p>
                        En la mayoría de las apendicectomías laparoscópicas los cirujanos operan a través de tres
                        pequeñas incisiones (cada una mide aprox. entre 6 y 12,5 mm) mientras se observa una imagen
                        ampliada de los órganos internos del paciente en una pantalla de televisión. En algunos casos,
                        una de las pequeñas aberturas puede alargarse hasta medir 5 a 7,5 cm a fin de completar el
                        procedimiento.
                    </p>
                </div>
                <div class="title-service-one wow fadeIn" data-wow-delay="0.4s">
                    <h2>Ventajas</h2>
                    <p>
                        Los resultados pueden variar según el procedimiento que se use y la condición general del
                        paciente. Las ventajas comunes son:
                    </p>
                </div>
                <div>
                    <a href="<?php echo RUTA_CONTACTO ?>" target="_blank" class="btn-contacto">Contactenos</a> <img
                        src="<?php echo RUTA_IMG?>servicios/flecha.png" draggable="false" class="img-fluid" />
                </div>
            </div>
        </div>

    </div>
    </div>
</section>


<section class="u-bg-precio-one">
    <div class="grid-precio wow fadeIn" data-wow-delay="0.4s">
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

</section>

<section class="service-two">
    <div class="grid-service-two">
        <div class="description-service-two">
            <div class="content-service-two wow fadeInUp" data-wow-delay="0.4s">
                <div class="title-service-two">
                    <h2>Colecistectomía laparoscópica</h2>
                    <p>
                        La colecistectomía es una intervención quirúrgica para extirpar la vesícula biliar, un órgano en
                        forma
                        de pera que se encuentra justo debajo del hígado, en la parte superior derecha del abdomen. La
                        vesícula
                        biliar recoge y almacena la bilis, un jugo digestivo producido en el hígado.
                    </p>
                    <p> Una colecistectomía se realiza más comúnmente insertando una cámara de video diminuta e
                        instrumentos
                        quirúrgicos especiales a través de cuatro pequeñas incisitwos para ver dentro de tu abdomen y
                        extirpar
                        la vesícula biliar.</p>
                </div>
                <div class="title-service-two wow fadeInUp" data-wow-delay="0.4s">
                    <h2>Ventajas</h2>
                    <p>
                        La mayoría de las personas no tiene problemas digestivos después de una colecistectomía. La
                        vesícula
                        no es fundamental para una digestión saludable. Algunas personas pueden tener deposicitwos
                        blandas
                        ocasionales después del procedimiento, que generalmente se resuelven con el tiempo. Habla con tu
                        médico sobre cualquier cambio en tus hábitos intestinales o nuevos síntomas después del
                        procedimiento.</p>
                </div>
                <div>
                    <a href="<?php echo RUTA_CONTACTO ?>" target="_blank" class="btn-contacto">Contactenos</a> <img
                        src="<?php echo RUTA_IMG?>servicios/flecha.png" draggable="false" class="img-fluid" />
                </div>
            </div>
        </div>
        <div>
            <img src="<?php echo RUTA_IMG?>servicios/s_2.png" draggable="false" class="img-fluid" />
        </div>
    </div>
    </div>
</section>

<section class="u-bg-precio-two">
    <div class="grid-precio wow fadeInUp" data-wow-delay="0.4s">
        <div class="title-precio">
            <p>COSTOS RELACIONADOS</p>
        </div>
        <div class="subtitle-precio">
            <p>Precio de la cirugía</p>
        </div>
        <div class="precio-number">
            <p class="desde"><i>DESDE</i></p>
            <p class="number-p">S/4300</p>
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