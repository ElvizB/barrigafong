<?php
include_once 'app/config.inc.php';
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/nav/index.php';
?>

<section class="service-one">
    <div class="grid-service-one">
        <div class="description-service-one">
            <div class="content-service-one">
                <div class="title-service-one">
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
                        quirúrgicos especiales a través de cuatro pequeñas incisiones para ver dentro de tu abdomen y
                        extirpar
                        la vesícula biliar.</p>
                </div>
                <div class="title-service-one">
                    <h2>Ventajas</h2>
                    <p>
                        La mayoría de las personas no tiene problemas digestivos después de una colecistectomía. La
                        vesícula
                        no es fundamental para una digestión saludable. Algunas personas pueden tener deposiciones
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


<section class="u-bg-precio">
    <div class="grid-precio">
        <div class="title-precio">
            <p>COSTOS RELACIONADOS</p>
        </div>
        <div class="subtitle-precio">
            <p>Precio de la cirujia</p>
        </div>
        <div class="precio-number">
            <p class="desde"><i>DESDE</i></p>
            <p class="number-p">S/4300</p>
        </div>
    </div>

</section>

<section class="servicio">
    <div class="grid-servicio">
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