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
                <h2>Colecistectomía laparoscópica</h2>
                <p>La colecistectomía es una intervención quirúrgica para extirpar la vesícula biliar, un órgano en
                    forma de pera que se encuentra justo debajo del hígado, en la parte superior derecha del abdomen. La
                    vesícula biliar recoge y almacena la bilis, un jugo digestivo producido en el hígado.
                </p>
                <p>
                    Una colecistectomía se realiza más comúnmente insertando una cámara de video diminuta e instrumentos
                    quirúrgicos especiales a través de cuatro pequeñas incisitwos para ver dentro de tu abdomen y
                    extirpar la vesícula biliar.
                </p>
                <a href="<?php echo RUTA_CONTACTO ?>" class="btncontacto" target="_blank">Contáctanos</a>
                <img src="<?php echo RUTA_IMG?>servicios/flecha.png" draggable="false" class="img-fluid" />
            </div>
            <div class="grid-precio-two">
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
        </div>
        <div class="img-serivio-options-two">
        </div>
    </div>
</section>


<section class="title-serv">
    <div class="grid-title-serv">
        <h2>- galería -</h2>
    </div>
</section>

<section class="galery">
    <div class="grid-galery">
        <div class="img-galeria p-4">
            <img src="<?php echo RUTA_IMG?>galeria/1.jpeg" draggable="false" class="img-fluid" data-toggle="modal"
                data-target="#g_1" />
            <!-- Modal: modalCart -->
            <div class="modal fade" id="g_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">

                <!-- Change class .modal-sm to change the size of the modal -->
                <div class="modal-dialog modal-lg" role="document">

                    <div class="modal-content">
                        <div class="modal-header bg-modal">
                            <h4 class="modal-title w-100" id="myModalLabel"></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal-lg-white">
                            <div class="img_galaria_modal">
                                <img src="<?php echo RUTA_IMG?>galeria/1.jpeg" draggable="false"
                                    class="img-fluid p-4" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal: modalCart -->
        </div>

        <div class="img-galeria p-4">
            <img src="<?php echo RUTA_IMG?>galeria/2.jpeg" draggable="false" class="img-fluid" data-toggle="modal"
                data-target="#g_2" />
            <!-- Modal: modalCart -->
            <div class="modal fade" id="g_2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">

                <!-- Change class .modal-sm to change the size of the modal -->
                <div class="modal-dialog modal-lg" role="document">

                    <div class="modal-content">
                        <div class="modal-header bg-modal">
                            <h4 class="modal-title w-100" id="myModalLabel"></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal-lg-white">
                            <div class="img_galaria_modal">
                                <img src="<?php echo RUTA_IMG?>galeria/2.jpeg" draggable="false"
                                    class="img-fluid p-4" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal: modalCart -->
        </div>

        <div class="img-galeria p-4">
            <img src="<?php echo RUTA_IMG?>galeria/3.jpeg" draggable="false" class="img-fluid" data-toggle="modal"
                data-target="#g_3" />
            <!-- Modal: modalCart -->
            <div class="modal fade" id="g_3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">

                <!-- Change class .modal-sm to change the size of the modal -->
                <div class="modal-dialog modal-lg" role="document">

                    <div class="modal-content">
                        <div class="modal-header bg-modal">
                            <h4 class="modal-title w-100" id="myModalLabel"></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal-lg-white">
                            <div class="img_galaria_modal">
                                <img src="<?php echo RUTA_IMG?>galeria/3.jpeg" draggable="false"
                                    class="img-fluid p-4" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal: modalCart -->
        </div>

        <div class="img-galeria p-4">
            <img src="<?php echo RUTA_IMG?>galeria/4.jpeg" draggable="false" class="img-fluid" data-toggle="modal"
                data-target="#g_4" />
            <!-- Modal: modalCart -->
            <div class="modal fade" id="g_4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">

                <!-- Change class .modal-sm to change the size of the modal -->
                <div class="modal-dialog modal-lg" role="document">

                    <div class="modal-content">
                        <div class="modal-header bg-modal">
                            <h4 class="modal-title w-100" id="myModalLabel"></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal-lg-white">
                            <div class="img_galaria_modal">
                                <img src="<?php echo RUTA_IMG?>galeria/4.jpeg" draggable="false"
                                    class="img-fluid p-4" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal: modalCart -->
        </div>

        <div class="img-galeria p-4">
            <img src="<?php echo RUTA_IMG?>galeria/5.jpeg" draggable="false" class="img-fluid" data-toggle="modal"
                data-target="#g_5" />
            <!-- Modal: modalCart -->
            <div class="modal fade" id="g_5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">

                <!-- Change class .modal-sm to change the size of the modal -->
                <div class="modal-dialog modal-lg" role="document">

                    <div class="modal-content">
                        <div class="modal-header bg-modal">
                            <h4 class="modal-title w-100" id="myModalLabel"></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal-lg-white">
                            <div class="img_galaria_modal">
                                <img src="<?php echo RUTA_IMG?>galeria/5.jpeg" draggable="false"
                                    class="img-fluid p-4" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal: modalCart -->
        </div>

        <div class="img-galeria p-4">
            <img src="<?php echo RUTA_IMG?>galeria/6.jpeg" draggable="false" class="img-fluid" data-toggle="modal"
                data-target="#g_6" />
            <!-- Modal: modalCart -->
            <div class="modal fade" id="g_6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">

                <!-- Change class .modal-sm to change the size of the modal -->
                <div class="modal-dialog modal-lg" role="document">

                    <div class="modal-content">
                        <div class="modal-header bg-modal">
                            <h4 class="modal-title w-100" id="myModalLabel"></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal-lg-white">
                            <div class="img_galaria_modal">
                                <img src="<?php echo RUTA_IMG?>galeria/6.jpeg" draggable="false"
                                    class="img-fluid p-4" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal: modalCart -->
        </div>

        <div class="img-galeria p-4">
            <img src="<?php echo RUTA_IMG?>galeria/7.jpeg" draggable="false" class="img-fluid" data-toggle="modal"
                data-target="#g_7" />
            <!-- Modal: modalCart -->
            <div class="modal fade" id="g_7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">

                <!-- Change class .modal-sm to change the size of the modal -->
                <div class="modal-dialog modal-lg" role="document">

                    <div class="modal-content">
                        <div class="modal-header bg-modal">
                            <h4 class="modal-title w-100" id="myModalLabel"></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal-lg-white">
                            <div class="img_galaria_modal">
                                <img src="<?php echo RUTA_IMG?>galeria/7.jpeg" draggable="false"
                                    class="img-fluid p-4" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal: modalCart -->
        </div>

        <div class="img-galeria p-4">
            <img src="<?php echo RUTA_IMG?>galeria/8.jpeg" draggable="false" class="img-fluid" data-toggle="modal"
                data-target="#g_8" />
            <!-- Modal: modalCart -->
            <div class="modal fade" id="g_8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">

                <!-- Change class .modal-sm to change the size of the modal -->
                <div class="modal-dialog modal-lg" role="document">

                    <div class="modal-content">
                        <div class="modal-header bg-modal">
                            <h4 class="modal-title w-100" id="myModalLabel"></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal-lg-white">
                            <div class="img_galaria_modal">
                                <img src="<?php echo RUTA_IMG?>galeria/8.jpeg" draggable="false"
                                    class="img-fluid p-4" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal: modalCart -->
        </div>

        <div class="img-galeria p-4">
            <img src="<?php echo RUTA_IMG?>galeria/9.jpeg" draggable="false" class="img-fluid" data-toggle="modal"
                data-target="#g_9" />
            <!-- Modal: modalCart -->
            <div class="modal fade" id="g_9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">

                <!-- Change class .modal-sm to change the size of the modal -->
                <div class="modal-dialog modal-lg" role="document">

                    <div class="modal-content">
                        <div class="modal-header bg-modal">
                            <h4 class="modal-title w-100" id="myModalLabel"></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal-lg-white">
                            <div class="img_galaria_modal">
                                <img src="<?php echo RUTA_IMG?>galeria/9.jpeg" draggable="false"
                                    class="img-fluid p-4" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal: modalCart -->
        </div>

        <div class="img-galeria p-4">
            <img src="<?php echo RUTA_IMG?>galeria/10.jpeg" draggable="false" class="img-fluid" data-toggle="modal"
                data-target="#g_10" />
            <!-- Modal: modalCart -->
            <div class="modal fade" id="g_10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">

                <!-- Change class .modal-sm to change the size of the modal -->
                <div class="modal-dialog modal-lg" role="document">

                    <div class="modal-content">
                        <div class="modal-header bg-modal">
                            <h4 class="modal-title w-100" id="myModalLabel"></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal-lg-white">
                            <div class="img_galaria_modal">
                                <img src="<?php echo RUTA_IMG?>galeria/10.jpeg" draggable="false"
                                    class="img-fluid p-4" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal: modalCart -->
        </div>

        <div class="img-galeria p-4">
            <img src="<?php echo RUTA_IMG?>galeria/11.jpeg" draggable="false" class="img-fluid" data-toggle="modal"
                data-target="#g_11" />
            <!-- Modal: modalCart -->
            <div class="modal fade" id="g_11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">

                <!-- Change class .modal-sm to change the size of the modal -->
                <div class="modal-dialog modal-lg" role="document">

                    <div class="modal-content">
                        <div class="modal-header bg-modal">
                            <h4 class="modal-title w-100" id="myModalLabel"></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal-lg-white">
                            <div class="img_galaria_modal">
                                <img src="<?php echo RUTA_IMG?>galeria/11.jpeg" draggable="false"
                                    class="img-fluid p-4" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal: modalCart -->
        </div>

        <div class="img-galeria p-4">
            <img src="<?php echo RUTA_IMG?>galeria/12.jpeg" draggable="false" class="img-fluid" data-toggle="modal"
                data-target="#g_12" />
            <!-- Modal: modalCart -->
            <div class="modal fade" id="g_12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">

                <!-- Change class .modal-sm to change the size of the modal -->
                <div class="modal-dialog modal-lg" role="document">

                    <div class="modal-content">
                        <div class="modal-header bg-modal">
                            <h4 class="modal-title w-100" id="myModalLabel"></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal-lg-white">
                            <div class="img_galaria_modal">
                                <img src="<?php echo RUTA_IMG?>galeria/12.jpeg" draggable="false"
                                    class="img-fluid p-4" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal: modalCart -->
        </div>

        <div class="img-galeria p-4">
            <img src="<?php echo RUTA_IMG?>galeria/13.jpeg" draggable="false" class="img-fluid" data-toggle="modal"
                data-target="#g_13" />
            <!-- Modal: modalCart -->
            <div class="modal fade" id="g_13" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">

                <!-- Change class .modal-sm to change the size of the modal -->
                <div class="modal-dialog modal-lg" role="document">

                    <div class="modal-content">
                        <div class="modal-header bg-modal">
                            <h4 class="modal-title w-100" id="myModalLabel"></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal-lg-white">
                            <div class="img_galaria_modal">
                                <img src="<?php echo RUTA_IMG?>galeria/13.jpeg" draggable="false"
                                    class="img-fluid p-4" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal: modalCart -->
        </div>

        <div class="img-galeria p-4">
            <img src="<?php echo RUTA_IMG?>galeria/14.jpeg" draggable="false" class="img-fluid" data-toggle="modal"
                data-target="#g_14" />
            <!-- Modal: modalCart -->
            <div class="modal fade" id="g_14" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">

                <!-- Change class .modal-sm to change the size of the modal -->
                <div class="modal-dialog modal-lg" role="document">

                    <div class="modal-content">
                        <div class="modal-header bg-modal">
                            <h4 class="modal-title w-100" id="myModalLabel"></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal-lg-white">
                            <div class="img_galaria_modal">
                                <img src="<?php echo RUTA_IMG?>galeria/14.jpeg" draggable="false"
                                    class="img-fluid p-4" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal: modalCart -->
        </div>

        <div class="img-galeria p-4">
            <img src="<?php echo RUTA_IMG?>galeria/15.jpeg" draggable="false" class="img-fluid" data-toggle="modal"
                data-target="#g_15" />
            <!-- Modal: modalCart -->
            <div class="modal fade" id="g_15" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">

                <!-- Change class .modal-sm to change the size of the modal -->
                <div class="modal-dialog modal-lg" role="document">

                    <div class="modal-content">
                        <div class="modal-header bg-modal">
                            <h4 class="modal-title w-100" id="myModalLabel"></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal-lg-white">
                            <div class="img_galaria_modal">
                                <img src="<?php echo RUTA_IMG?>galeria/15.jpeg" draggable="false"
                                    class="img-fluid p-4" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal: modalCart -->
        </div>

        <div class="img-galeria p-4">
            <img src="<?php echo RUTA_IMG?>galeria/16.jpeg" draggable="false" class="img-fluid" data-toggle="modal"
                data-target="#g_16" />
            <!-- Modal: modalCart -->
            <div class="modal fade" id="g_16" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">

                <!-- Change class .modal-sm to change the size of the modal -->
                <div class="modal-dialog modal-lg" role="document">

                    <div class="modal-content">
                        <div class="modal-header bg-modal">
                            <h4 class="modal-title w-100" id="myModalLabel"></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal-lg-white">
                            <div class="img_galaria_modal">
                                <img src="<?php echo RUTA_IMG?>galeria/16.jpeg" draggable="false"
                                    class="img-fluid p-4" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal: modalCart -->
        </div>

    </div>
</section>


<section class="servicio">
    <div class="grid-servicio wow fadeInUp" data-wow-delay="0.4s">
        <div class="img-servicio">
            <img src="<?php echo RUTA_IMG?>servicios/logo-s.png" draggable="false" class="img-fluid" />
        </div>
        <h2>¿Tienes alguna consulta?</h2>
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