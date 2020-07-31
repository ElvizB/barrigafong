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
    <?php include_once 'plantillas/slider/index.php';?>
</section>

<section class="experiencia">
    <div class="grid-exp">
        <div class="title-exp wow fadeIn" data-wow-delay="0.4s">
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
        <div class="grid-description-vida wow fadeIn" data-wow-delay="0.4s">
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
    <div class="linea">
        <hr />
    </div>
    <div class="title-salud">
        <h2>Tu salud importa</h2>
    </div>
    <div class="grid-salud">

        <div class="owl-carousel owl-theme wow fadeIn" data-wow-delay="0.4s" id="slider-testimonio">
            <div class="item">
                <div class="grid-description-salud">
                    <div>
                        <span class="comillas-pr">“</span>
                    </div>
                    <div class="content-comillas">
                        <p>
                            Excelente médico que trabaja con un estupendo equipo multidisciplinario, capacitados en la
                            materia,
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
            <div class="item">
                <div class="grid-description-salud">
                    <div>
                        <span class="comillas-pr">“</span>
                    </div>
                    <div class="content-comillas">
                        <p>
                            Primero su humanidad, acompañada de su extremada afabilidad, amabilidad y cariñoso trato
                            hacia un paciente, sin importar su condición social.
                            Segundo su profesionalismo y celo en medio de sus consultas e intervenciones quirúrgicas, su
                            sonrisa y paciencia, que te hacen sentir cómoda y confiada, ante cualquier dolencia la más
                            extrema que involucre su campo médico...
                            En resumen un hombre de Dios... Dios bendiga a este joven profesional de la ciencia médica.
                        </p>
                    </div>
                    <div class="comillas-pr2">
                        <span>“</span>
                    </div>
                </div>
                <div class="author-salud">
                    <p> Ana María Calmet</p>
                </div>
            </div>
            <div class="item">
                <div class="grid-description-salud">
                    <div>
                        <span class="comillas-pr">“</span>
                    </div>
                    <div class="content-comillas">
                        <p>
                            Excelente profesional, que no solo se evoca a lo profesional, sino que tiene lo que se ha
                            perdido en algunos profesionales: el lado HUMANO. Agradezco de todo corazón al Dr. porque
                            operó a mi hermano.
                        </p>
                    </div>
                    <div class="comillas-pr2">
                        <span>“</span>
                    </div>
                </div>
                <div class="author-salud">
                    <p> Fabiola PG</p>
                </div>
            </div>
            <div class="item">
                <div class="grid-description-salud">
                    <div>
                        <span class="comillas-pr">“</span>
                    </div>
                    <div class="content-comillas">
                        <p>
                            Aparte de ser un gran médico, es un ser humano increible. Mi hijo se operó con el Dr. y la
                            operación fue un éxito. Todas las veces que sentía alguna duda con respecto al post
                            operatorio, inmediatamente contestaba mis mensajes y me daba las pautas necesarias para mi
                            tranquilidad. Muchas gracias, lo recomiendo al 100%.


                        </p>
                    </div>
                    <div class="comillas-pr2">
                        <span>“</span>
                    </div>
                </div>
                <div class="author-salud">
                    <p> Marielena Berrospi</p>
                </div>
            </div>

        </div>
    </div>
</section>
<!----->
<section class="service">
    <div class="grid-service">
        <!--Zoom effect-->
        <div class="view overlay zoom service-img wow zoomIn" data-wow-delay="0.4s">
            <img src="<?php echo RUTA_IMG?>home/uno.png" draggable="false" class="img-fluid" />
            <div class="mask waves-effect waves-light rgba-red-strong descriptions-service">
                <h4>Apendicectomía</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas
                    accumsan lacus vel facilisis. </p>
            </div>
        </div>
        <div class="view overlay zoom service-img wow zoomIn" data-wow-delay="0.4s">
            <img src="<?php echo RUTA_IMG?>home/2.png" draggable="false" class="img-fluid" />
            <div class="mask waves-effect waves-light rgba-red-strong descriptions-service">
                <h4>Fistulectomía perianal</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas
                    accumsan lacus vel facilisis. </p>
            </div>
        </div>
        <div class="view overlay zoom service-img wow zoomIn" data-wow-delay="0.4s">
            <img src="<?php echo RUTA_IMG?>home/3.png" draggable="false" class="img-fluid" />
            <div class="mask waves-effect waves-light rgba-red-strong descriptions-service">
                <h4>Hemorroidectomía</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas
                    accumsan lacus vel facilisis. </p>
            </div>
        </div>
        <div class="view overlay zoom service-img wow zoomIn" data-wow-delay="0.4s">
            <img src="<?php echo RUTA_IMG?>home/4.png" draggable="false" class="img-fluid" />
            <div class="mask waves-effect waves-light rgba-red-strong descriptions-service">
                <h4>Hernioplastía umbilical</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas
                    accumsan lacus vel facilisis. </p>
            </div>
        </div>
        <div class="view overlay zoom service-img wow zoomIn" data-wow-delay="0.4s">
            <img src="<?php echo RUTA_IMG?>home/5.png" draggable="false" class="img-fluid" />
            <div class="mask waves-effect waves-light rgba-red-strong descriptions-service">
                <h4>Hernioplastía inguinal</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas
                    accumsan lacus vel facilisis. </p>
            </div>
        </div>
        <div class="view overlay zoom service-img wow zoomIn" data-wow-delay="0.4s">
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