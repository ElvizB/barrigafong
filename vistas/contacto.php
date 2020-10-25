<?php
include_once 'app/config.inc.php';
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/nav/index.php';
?>

<section class="banner_contact">
    <div class="bg-banner_contact">
        <img loading="lazy" src="<?php echo RUTA_IMG?>contacto/banner.png" draggable="false" height="830" />
        <div class="u-center">
            <div class="u-grid-content wow fadeIn" data-wow-delay="0.4s">
                <div class="grid-contact">
                    <div class="content-contact-info">
                        <div class="padding-form">
                            <div class="content-info-doc">
                                <h2><b>Dr. Barriga Fong </b></h2>
                                <p>Cirujano General y Laparoscópico</p>
                            </div>
                            <div class="content-info-hospital">
                                <p><b>Pisco:</b> Clínica FamiSalud</p>
                                <p><b>Ica</b>: Clínica Regional</p>
                                <p><b>Nasca:</b> Clínica Napoleón</p>
                            </div>
                            <div class="content-info-telephone">
                                <p>949-703-230 </p>
                                <p>hengui_fong@hotmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="content-contact-info">
                        <div class="contacto-formulario">
                            <div class="formulario">
                                <div class="wrapper-form">
                                    <form id="formulario" class="form" role="form" action="" method="POST">
                                        <p class="title-cita"><b>AGENDEMOS UNA CITA</b></p>
                                        <div class="grid-input-two">
                                            <div class="form-inputs">
                                                <!-- <label for="">Nombre y Apellido</label> -->
                                                <input type="text" id="nombre" name="nombre" class="form-control"
                                                    placeholder="Nombre">
                                            </div>
                                        </div>
                                        <div class="grid-input-two">
                                            <div class="form-inputs">
                                                <!-- <label for="">Teléfono</label> -->
                                                <input type="text" id="telefono" name="telefono" class="form-control"
                                                    placeholder="Teléfono">
                                            </div>
                                        </div>
                                        <div class="grid-input-two">
                                            <div class="form-inputs">
                                                <!-- <label for="">Email</label> -->
                                                <input type="text" id="email" name="email" class="form-control"
                                                    placeholder="Email">
                                            </div>
                                        </div>

                                        <div class="grid-input-two">
                                            <div class="select_form">
                                                <!-- <p class="title_planes">Clínica</p> -->
                                                <select name="planes" id="planes">
                                                    <option value="" selected disabled>Clinica
                                                    </option>
                                                    <option value="Plan Bronce">Clinica 1</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="md-form">
                                            <div class="g-recaptcha text-center"
                                                data-sitekey="6LeD_M0ZAAAAAJ2nGHnWrY0FBtBs6LojyQjNp5pH">
                                            </div>
                                            <div id="g-recaptcha-error"></div>
                                        </div>
                                        <div class="condiciones-form">
                                            <p>Acepto la política de privacidad y el area legal.</p>
                                        </div>

                                        <div id="respuesta"></div>
                                        <div class="grid-btn-enviar">
                                            <button id="btnenviar"
                                                class="btn waves-effect waves-light btn-enviar-contacto">
                                                <b> enviar</b>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
  include_once 'plantillas/footer.php';
  include_once 'plantillas/documento-cierre.inc.php';
?>