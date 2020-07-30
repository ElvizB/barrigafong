<?php
include_once 'app/config.inc.php';
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/nav/index.php';
?>


<section class="cabecera">
    <div class="bg-cabecera">
        <h2>Bienestar en</h2>
        <p>buenas manos</p>
    </div>
</section>

<section>
    <!--Carousel Wrapper-->
    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="1"></li>
            <li data-target="#carousel-example-2" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="view">
                    <img class="d-block w-100" src="<?php echo RUTA_IMG?>home/banner1.png" alt="First slide">
                    <!-----------------
                  <div class="mask rgba-black-slight"></div>
                -------------------------->
                </div>
                <!-------------
             <div class="carousel-caption">
                <h3 class="h3-responsive">Light mask</h3>
                <p>First text</p>
            </div>
            ------------------------------------>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="<?php echo RUTA_IMG?>home/banner2.png" alt="Second slide">
                    <!-----------------
                  <div class="mask rgba-black-slight"></div>
                -------------------------->
                </div>
                <!-------------
             <div class="carousel-caption">
                <h3 class="h3-responsive">Light mask</h3>
                <p>First text</p>
            </div>
            ------------------------------------>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="<?php echo RUTA_IMG?>home/banner3.png" alt="Third slide">
                    <!-----------------
                  <div class="mask rgba-black-slight"></div>
                -------------------------->
                </div>
                <!-------------
             <div class="carousel-caption">
                <h3 class="h3-responsive">Light mask</h3>
                <p>First text</p>
            </div>
            ------------------------------------>
            </div>
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->
</section>

<section class="experiencia">
    <div class="grid-exp">
        <div class="title-exp">
            <h2>CONFIANZA
                EXPERIENCIA
                PROFESIONALISMO</h2>
            <div class="linea">
                <hr />
            </div>
            <p>
                Más de 10 años en medicina como médico general y desde el 2016 como cirujano general, especializado en
                cirugía laparoscópica. Apoyando a diversas ONG con cirugías gratuitas y orgulloso de los logros
                obtenidos y la gratitud de cada paciente.
            </p>
            <img src="<?php echo RUTA_IMG?>footer/icon.png" draggable="false" class="img-fluid" />
        </div>
    </div>
</section>

<section class="vida">
    <div class="grid-vida">
        <div class="bg-img-vida">
            <img src="<?php echo RUTA_IMG?>home/bg-v.png" draggable="false" class="img-fluid" />
        </div>
        <div class="grid-description-vida">
            <div class="content-title-vida">
                <p class="title-vida">DR.</p>
                <p class="subtitle-vida">Barriga Fong</p>
            </div>

            <div class="description-vida">
                <p>Soy Cirujano General y Laparoscópico; con registro del Colegio Médico del Perú 56737 y Registro
                    Nacional
                    de Especialidad 31929. Natural de la ciudad de Trujillo, conocida como la Ciudad de la Eterna
                    Primavera.
                    Soy parte de diversas ONG como Misión Caritas Felices, Healing The Children y Mercy Mission,
                    realizando
                    operaciones gratuitas y con resultados positivos.
                </p>
                <p>
                    Actualmente trabajo en la hermosa región de Ica. Si necesita una intervención quirúrgica puede
                    contactarnos, estaremos gustosos en poder ayudarlo.
                </p>
                <p>Hoja de vida</p>
            </div>
            <div class="firma-vida">
                <img src="<?php echo RUTA_IMG?>home/firma.png" draggable="false" class="img-fluid" />
            </div>
        </div>
    </div>
</section>

<section class="salud">
    <div class="grid-salud">
        <div class="linea">
            <hr />
        </div>
        <div class="title-salud">
            <h2>Tu salud importa</h2>
        </div>
        <div class="grid-description-salud">
            <div>
                <span class="comillas-pr">“</span>
            </div>
            <div class="content-comillas">
                <p>
                    Excelente médico que trabaja con un estupendo equipo multidisciplinario, capacitados en la materia,
                    con actitud admirable y un corazón de servicio.
                    No solo cura lo físico, también alienta el alma con seguridad y esperanza.
                </p>
            </div>
            <div class="comillas-pr2">
                <span>“</span>
            </div>
        </div>
        <div class="author-salud">
            <p>J Elias CM</p>
        </div>
    </div>
</section>

<section class="service">
    <div class="grid-service">
        <!--Zoom effect-->
        <div class="view overlay zoom service-img">
            <img src="<?php echo RUTA_IMG?>home/1.png" draggable="false" class="img-fluid" />
            <div class="mask waves-effect waves-light rgba-red-strong descriptions-service">
                <h4>Apendicectomía</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas
                    accumsan lacus vel facilisis. </p>
            </div>
        </div>
        <div class="view overlay zoom service-img">
            <img src="<?php echo RUTA_IMG?>home/2.png" draggable="false" class="img-fluid" />
            <div class="mask waves-effect waves-light rgba-red-strong descriptions-service">
                <h4>Fistulectomía perianal</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas
                    accumsan lacus vel facilisis. </p>
            </div>
        </div>
        <div class="view overlay zoom service-img">
            <img src="<?php echo RUTA_IMG?>home/3.png" draggable="false" class="img-fluid" />
            <div class="mask waves-effect waves-light rgba-red-strong descriptions-service">
                <h4>Hemorroidectomía</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas
                    accumsan lacus vel facilisis. </p>
            </div>
        </div>
        <div class="view overlay zoom service-img">
            <img src="<?php echo RUTA_IMG?>home/4.png" draggable="false" class="img-fluid" />
            <div class="mask waves-effect waves-light rgba-red-strong descriptions-service">
                <h4>Hernioplastía umbilical</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas
                    accumsan lacus vel facilisis. </p>
            </div>
        </div>
        <div class="view overlay zoom service-img">
            <img src="<?php echo RUTA_IMG?>home/5.png" draggable="false" class="img-fluid" />
            <div class="mask waves-effect waves-light rgba-red-strong descriptions-service">
                <h4>Hernioplastía inguinal</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas
                    accumsan lacus vel facilisis. </p>
            </div>
        </div>
        <div class="view overlay zoom service-img">
            <img src="<?php echo RUTA_IMG?>home/6.png" draggable="false" class="img-fluid" />
            <div class="mask waves-effect waves-light rgba-red-strong descriptions-service">
                <h4>Colecistectomía</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas
                    accumsan lacus vel facilisis. </p>
            </div>
        </div>

    </div>
</section>


<section class="cita">
    <div class="grid-cita">
        <a href="<?php echo RUTA_CONTACTO ?>" target="_blank" class="btn-cita">Reserva tu cita</a>
    </div>
</section>


<?php
  include_once 'plantillas/footer.php';
  include_once 'plantillas/documento-cierre.inc.php';
?>