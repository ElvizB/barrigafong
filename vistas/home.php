<?php
include_once 'app/config.inc.php';
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/nav/index.php';
?>



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
                <div class="grid-btn-life">
                    <p>Hoja de vida</p>
                    <a href="<?php echo RUTA_PDF?>hojadevidaBF.pdf" download="hojadevidaBF" class="">
                        <img src="<?php echo RUTA_IMG?>dw.png" draggable="false" class="img-fluid" />
                    </a>
                </div>
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
        <div class="view overlay zoom service-img wow zoomIn position_r" data-wow-delay="0.4s" data-toggle="modal"
            data-target="#f_1">

            <img src="<?php echo RUTA_IMG?>home/uno.png" draggable="false" class="img-fluid" />
            <h4 class="title-servicios-ab">Apendicectomía</h4>
            <div class="mask waves-effect waves-light rgba-red-strong descriptions-service">
                <h4>Apendicectomía</h4>
                <p>El apéndice se extrae a través de pequeños cortes, por los cuales se introduce una pequeña cámara y
                    los instrumentos quirúrgicos. En este tipo de cirugía la recuperación es más rápida y la cicatriz es
                    más pequeña, pudiendo ser casi imperceptible. </p>
            </div>
            <!-- Modal: modalCart -->
            <div class="modal fade" id="f_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">

                <!-- Change class .modal-sm to change the size of the modal -->
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="bg-modal-service">
                            <h4 class="modal-title w-100" id="myModalLabel"></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <img src="<?php echo RUTA_IMG?>equis.png" draggable="false" />
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="grid-service-modal">
                                <div class="description-service-modal">
                                    <h2>Apendicectomía</h2>

                                </div>
                                <div class="title-beneficio">
                                    <h4>INCLUYE :</h4>
                                    <ul class="link_check">
                                        <li>Exámenes pre-quirúrgicos.</li>
                                        <li>Dos Cirujanos (Cirujanos generales y laparoscópicos).</li>
                                        <li>Un Médico Anestesiólogo.</li>
                                        <li>Dos enfermeras.</li>
                                        <li>Técnicas de enfermería.</li>
                                        <li>Un día de hospitalización.</li>
                                        <li>Medicamentos durante la hospitalización.</li>
                                        <li>Medicamentos al alta.</li>
                                        <li>Controles post operatorios.</li>
                                    </ul>
                                </div>
                                <div class="precio-serv">
                                    <p class="desde"><i>DESDE</i></p>
                                    <p class="number-p">S/2500</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Modal: modalCart -->
        </div>
        <div class="view overlay zoom service-img wow zoomIn position_r" data-wow-delay="0.4s" data-toggle="modal"
            data-target="#f_2">
            <img src="<?php echo RUTA_IMG?>home/2.png" draggable="false" class="img-fluid" />
            <h4 class="title-servicios-ab">Fistulectomía perianal</h4>
            <div class="mask waves-effect waves-light rgba-red-strong descriptions-service">
                <h4>Fistulectomía perianal</h4>
                <p>Mediante el procedimiento quirúrgico se espera eliminar de manera definitiva la fístula, con la
                    consiguiente desaparición de las molestias dolorosas, supuración, inflamación e infección que
                    conlleva, así como la contaminación de los tejidos perianales en los que se producen los abscesos.
                </p>
            </div>
            <!-- Modal: modalCart -->
            <div class="modal fade" id="f_2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">

                <!-- Change class .modal-sm to change the size of the modal -->
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="bg-modal-service">
                            <h4 class="modal-title w-100" id="myModalLabel"></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <img src="<?php echo RUTA_IMG?>equis.png" draggable="false" />
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="grid-service-modal">
                                <div class="description-service-modal">
                                    <h2>Fistulectomía perianal</h2>

                                </div>
                                <div class="title-beneficio">
                                    <h4>INCLUYE :</h4>
                                    <ul class="link_check">
                                        <li>Exámenes pre-quirúrgicos</li>
                                        <li>Dos Cirujanos Cirujanos generales y laparoscópicos.</li>
                                        <li>Un Médico Anestesiólogo.</li>
                                        <li>Dos enfermeras.</li>
                                        <li>Técnicas de enfermería.</li>
                                        <li>Un día de hospitalización.</li>
                                        <li>Medicamentos durante la hospitalización.</li>
                                        <li>Medicamentos al alta.</li>
                                    </ul>
                                </div>
                                <div class="precio-serv">
                                    <p class="desde"><i>DESDE</i></p>
                                    <p class="number-p">S/2500</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Modal: modalCart -->
        </div>
        <div class="view overlay zoom service-img wow zoomIn position_r" data-wow-delay="0.4s" data-toggle="modal"
            data-target="#f_3">
            <img src="<?php echo RUTA_IMG?>home/3.png" draggable="false" class="img-fluid" />
            <h4 class="title-servicios-ab">Hemorroidectomía</h4>
            <div class="mask waves-effect waves-light rgba-red-strong descriptions-service">
                <h4>Hemorroidectomía</h4>
                <p>Las hemorroides son pequeñas varices que se sitúan en el canal anal. Se producen cuando las venas
                    situadas en la zona del ano se dilatan excesivamente. Esta cirugía es un tratamiento seguro y eficaz
                    con un menor dolor postoperatorio y una incorporación más pronta a su vida diaria </p>
            </div>
            <!-- Modal: modalCart -->
            <div class="modal fade" id="f_3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">

                <!-- Change class .modal-sm to change the size of the modal -->
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="bg-modal-service">
                            <h4 class="modal-title w-100" id="myModalLabel"></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <img src="<?php echo RUTA_IMG?>equis.png" draggable="false" />
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="grid-service-modal">
                                <div class="description-service-modal">
                                    <h2>Hemorroidectomía</h2>

                                </div>
                                <div class="title-beneficio">
                                    <h4>INCLUYE :</h4>
                                    <ul class="link_check">
                                        <li>Exámenes pre-quirúrgicos.</li>
                                        <li>Dos Cirujanos Cirujanos generales y laparoscópicos.</li>
                                        <li>Un Médico Anestesiólogo.</li>
                                        <li>Dos enfermeras.</li>
                                        <li>Técnicas de enfermería.</li>
                                        <li>Un día de hospitalización.</li>
                                        <li>Medicamentos durante la hospitalización.</li>
                                        <li>Medicamentos al alta.</li>
                                        <li>Controles post operatorios.</li>
                                    </ul>
                                </div>
                                <div class="precio-serv">
                                    <p class="desde"><i>DESDE</i></p>
                                    <p class="number-p">S/2500</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Modal: modalCart -->
        </div>
        <div class="view overlay zoom service-img wow zoomIn position_r" data-wow-delay="0.4s" data-toggle="modal"
            data-target="#f_4">
            <img src="<?php echo RUTA_IMG?>home/4.png" draggable="false" class="img-fluid" />
            <h4 class="title-servicios-ab">Hernioplastía umbilical</h4>
            <div class="mask waves-effect waves-light rgba-red-strong descriptions-service">
                <h4>Hernioplastía umbilical</h4>
                <p>La hernia umbilical se reparará usando un laparoscopio. Este es un tubo delgado y con luz que le
                    permite al médico ver dentro del abdomen. El laparoscopio se introducirá a través de una de varias
                    pequeñas incisiones. Los instrumentos se insertarán a través de los otros cortes. </p>
            </div>
            <!-- Modal: modalCart -->
            <div class="modal fade" id="f_4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">

                <!-- Change class .modal-sm to change the size of the modal -->
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="bg-modal-service">
                            <h4 class="modal-title w-100" id="myModalLabel"></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <img src="<?php echo RUTA_IMG?>equis.png" draggable="false" />
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="grid-service-modal">
                                <div class="description-service-modal">
                                    <h2>Hernioplastía umbilical</h2>

                                </div>
                                <div class="title-beneficio">
                                    <h4>INCLUYE :</h4>
                                    <ul class="link_check">
                                        <li>Exámenes pre-quirúrgicos.</li>
                                        <li>Dos Cirujanos Cirujanos generales y laparoscópicos.</li>
                                        <li>Un Médico Anestesiólogo.</li>
                                        <li>Dos enfermeras.</li>
                                        <li>Técnicas de enfermería.</li>
                                        <li>Un día de hospitalización.</li>
                                        <li>Medicamentos durante la hospitalización.</li>
                                        <li>Medicamentos al alta.</li>
                                        <li>Controles post operatorios.</li>
                                    </ul>
                                </div>
                                <div class="precio-serv">
                                    <p class="desde"><i>DESDE</i></p>
                                    <p class="number-p">S/2000</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Modal: modalCart -->
        </div>
        <div class="view overlay zoom service-img wow zoomIn position_r" data-wow-delay="0.4s" data-toggle="modal"
            data-target="#f_5">
            <img src="<?php echo RUTA_IMG?>home/5.png" draggable="false" class="img-fluid" />
            <h4 class="title-servicios-ab">Hernioplastía inguinal</h4>
            <div class="mask waves-effect waves-light rgba-red-strong descriptions-service">
                <h4>Hernioplastía inguinal</h4>
                <p>La reparación de la hernia por laparoscopia se realiza a través de tres pequeñas incisiones a la
                    altura del ombligo de unos 0,5-1 cm. A través de uno de los orificios se introduce una pequeña
                    cámara conectada a un monitor; a través de los otros dos orificios el cirujano puede trabajar y
                    reparar la hernia colocando una malla que se fija con clips absorbibles o adhesivo sellante.</p>
            </div>
            <!-- Modal: modalCart -->
            <div class="modal fade" id="f_5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">

                <!-- Change class .modal-sm to change the size of the modal -->
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="bg-modal-service">
                            <h4 class="modal-title w-100" id="myModalLabel"></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <img src="<?php echo RUTA_IMG?>equis.png" draggable="false" />
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="grid-service-modal">
                                <div class="description-service-modal">
                                    <h2>Hernioplastía inguinal</h2>

                                </div>
                                <div class="title-beneficio">
                                    <h4>INCLUYE :</h4>
                                    <ul class="link_check">
                                        <li>Exámenes pre-quirúrgicos.</li>
                                        <li>Incluye malla de polipropileno.</li>
                                        <li>Dos Cirujanos Cirujanos generales y laparoscópicos.</li>
                                        <li>Un Médico Anestesiólogo.</li>
                                        <li>Dos enfermeras.</li>
                                        <li>Técnicas de enfermería.</li>
                                        <li>Un día de hospitalización.</li>
                                        <li>Medicamentos durante la hospitalización.</li>
                                        <li>Medicamentos al alta.</li>
                                        <li>Controles post operatorios.</li>

                                    </ul>
                                </div>
                                <div class="precio-serv">
                                    <p class="desde"><i>DESDE</i></p>
                                    <p class="number-p">S/2500</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Modal: modalCart -->
        </div>
        <div class="view overlay zoom service-img wow zoomIn position_r" data-wow-delay="0.4s" data-toggle="modal"
            data-target="#f_6">
            <img src="<?php echo RUTA_IMG?>home/6.png" draggable="false" class="img-fluid" />
            <h4 class="title-servicios-ab">Colecistectomía</h4>
            <div class="mask waves-effect waves-light rgba-red-strong descriptions-service">
                <h4>Colecistectomía</h4>
                <p>La operación se realiza para extirpar la vesícula biliar debido a la presencia de cálculos biliares
                    que causan dolor o una infección. La vesícula biliar es extirpada con instrumentos que se colocan en
                    pequeñas incisiones en el abdomen. </p>
            </div>
            <!-- Modal: modalCart -->
            <div class="modal fade" id="f_6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">

                <!-- Change class .modal-sm to change the size of the modal -->
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="bg-modal-service">
                            <h4 class="modal-title w-100" id="myModalLabel"></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <img src="<?php echo RUTA_IMG?>equis.png" draggable="false" />
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="grid-service-modal">
                                <div class="description-service-modal">
                                    <h2>Hernioplastía inguinal</h2>

                                </div>
                                <div class="title-beneficio">
                                    <h4>INCLUYE :</h4>
                                    <ul class="link_check">
                                        <li>Exámenes pre-quirúrgicos.</li>
                                        <li>Dos Cirujanos Cirujanos generales y laparoscópicos.</li>
                                        <li>Un Médico Anestesiólogo.</li>
                                        <li>Dos enfermeras.</li>
                                        <li>Técnicas de enfermería.</li>
                                        <li>Un día de hospitalización.</li>
                                        <li>Medicamentos durante la hospitalización.</li>
                                        <li>Medicamentos al alta.</li>
                                        <li>Controles post operatorios.</li>
                                    </ul>
                                </div>
                                <div class="precio-serv">
                                    <p class="desde"><i>DESDE</i></p>
                                    <p class="number-p">S/3500</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Modal: modalCart -->
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