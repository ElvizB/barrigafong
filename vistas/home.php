<?php
include_once 'app/config.inc.php';
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/nav/index.php';
?>

<section class="banner_home">
    <div class="bg-banner_home">
        <img loading="lazy" src="<?php echo RUTA_IMG?>home/banner_home.png" draggable="false" height="763" />
        <div class="u-center">
            <div class="u-grid-content wow fadeIn" data-wow-delay="0.4s">
                <div class="u-center-info">
                    <p class="primary-title-home z-depth-2"> Tu bienestar </p>
                    <p class="secondary-title-home">en buenas manos</p>
                    <p class="subtitle_banner"> Atención personalizada y el seguimiento desde el primer día hasta la
                        recuperación de
                        cada
                        paciente.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="secondary-home">
    <div class="bg-secondary-home">
        <img loading="lazy" src="<?php echo RUTA_IMG?>home/bg_2.png" draggable="false" height="240" />
        <div class="u-center">
            <div class="u-grid-content wow fadeIn" data-wow-delay="0.4s">
                <div class="u-center-info">
                    <div class="content-secondary-home">
                        <div class="grid-valores">
                            <h2>confianza</h2>
                            <h2>profesionalismo</h2>
                            <h2>experiencia</h2>
                        </div>
                    </div>
                    <div class="info-secondary-home">
                        <p>
                            Especializado en <b>Cirugía General</b> y <b>laparoscópica</b>.
                        </p>
                        <p>
                            Desde el 2013 apoyando a diversas ONG con cirugías gratuitas, orgulloso de los logros
                            obtenidos y la gratitud de cada uno de mis pacientes.
                        </p>
                    </div>
                    <div class="u-line">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="tertiary-home">
    <div class="grid-tertiary-home">
        <div class="img-tertiary-home">
            <img loading="lazy" src="<?php echo RUTA_IMG?>home/bg_3.png" draggable="false" height="629" />
        </div>
        <div class="bg-hoja-vida">
            <div class="grid-hoja-vida">
                <h1>!HOLA!</h1>
                <p>
                    Soy Cirujano General y Laparoscópico; con registro del Colegio Médico del Perú 56737 y Registro
                    Nacional de Especialidad 31929. Natural de la ciudad de Trujillo, conocida como la Ciudad de la
                    Eterna Primavera. Soy parte de diversas ONG como Misión Caritas Felices, Healing The Children y
                    Mercy Mission, realizando operaciones gratuitas y con resultados positivos.
                </p>
                <p>
                    Actualmente trabajo en la hermosa región de Ica. Si necesita una intervención quirúrgica puede
                    contactarnos, estaremos gustosos en poder ayudarlo.
                </p>
                <h2>
                    Dr. Barriga Fong
                </h2>
                <div class="grid-btn-vida">
                    <div class="bg-btn-vida">
                        <a href="<?php echo RUTA_PDF?>hojadevidaBF.pdf" download="hojadevidaBF" class="btn-life">
                            Hoja de vida
                            <img loading="lazy" src="<?php echo RUTA_IMG?>home/icon_hoja.png" draggable="false"
                                height="629" class="img-fluid" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="quaternary-home">
    <div class="grid-quaternary-home">
        <div class="img-quaternary-home">
            <img loading="lazy" src="<?php echo RUTA_IMG?>home/bg_4.png" draggable="false" height="950" />
        </div>
        <div class="u-center">
            <div class="u-grid-content">
                <div class="content-servicios">
                    <div class="grid-testimonio">
                        <div class="u-line2 u-spacing-line">
                        </div>
                        <div class="owl-carousel owl-theme" id="slider-testimonio">
                            <div class="item">
                                <div class="grid-testimonio-img">
                                    <p>
                                        Es un excelente médico, muy amable, se preocupa mucho por sus pacientes. Tuve la
                                        oportunidad que me atendiera en el seguro de Pisco. Gracias, doctor.
                                    </p>
                                    <h6>- Ariana Marcani -</h6>
                                </div>
                            </div>
                            <div class="item">
                                <div class="grid-testimonio-img">
                                    <p>
                                        Es un excelente médico, muy amable, se preocupa mucho por sus pacientes. Tuve la
                                        oportunidad que me atendiera en el seguro de Pisco. Gracias, doctor.
                                    </p>
                                    <h6>- Ariana Marcani2 -</h6>
                                </div>
                            </div>
                            <div class="item">
                                <div class="grid-testimonio-img">
                                    <p>
                                        Es un excelente médico, muy amable, se preocupa mucho por sus pacientes. Tuve la
                                        oportunidad que me atendiera en el seguro de Pisco. Gracias, doctor.
                                    </p>
                                    <h6>- Ariana Marcani3 -</h6>
                                </div>
                            </div>
                        </div>
                        <div class="u-line2 u-spacing-line">
                        </div>
                    </div>


                    <div class="grid-bg-servicios">
                        <div class="img-bg-servicios">
                            <img loading="lazy" src="<?php echo RUTA_IMG?>home/img_04.png" draggable="false"
                                height="692" />
                        </div>
                        <div class="info-servicios">
                            <div class="grid-info-servicios">
                                <h2 class="title-servicio">servicios</h2>
                                <h2 class="tltle-quirurgico">quirúrgicos</h2>
                                <ul class="list-servicios-home">
                                    <li>Colecistectomía laparoscópica</li>
                                    <li>Apendicectomía</li>
                                    <li>Exploración de vías biliares</li>
                                    <li>Hernioplastía inguinal</li>
                                    <li>Hernioplastía umbilical</li>
                                    <li>Hemorroidectomía</li>
                                    <li>Fistulectomía perianal</li>
                                    <li>Cirugías de Emergencia</li>
                                    <li>Cirugías menores</li>
                                </ul>
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