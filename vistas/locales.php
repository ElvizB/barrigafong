<?php
include_once 'app/config.inc.php';
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/nav/index.php';
?>


<section class="banner_home">
    <div class="bg-banner_home">
        <img loading="lazy" src="<?php echo RUTA_IMG?>locales/bg_local.png" draggable="false" height="1953" />

        <div class="u-center pt-5">
            <h2 class="title-locales-m">nuestros locales</h2>
            <div class="grid-locales">
                <div class="info-local wow fadeIn" data-wow-delay="0.4s">
                    <div class="arrow descriptions-local">
                        <h2>PISCO</h2>
                        <p>
                            Clínica FamiSalud<br />
                            Calle Ayacucho N° 270 - Pisco - Perú<br />
                            (56) 534 821<br />
                            admision1.pisco@famisalud.com.pe
                        </p>
                        <div class="descriptions-local">
                            <h2>Horario de atención</h2>
                            <p>
                                Miércoles 08:30 hrs - 18:00 hrs
                            </p>
                        </div>
                    </div>
                </div>
                <div class="map-local">
                    <div id="map-container-section" class="map-container-section z-depth-1">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.159689437495!2d-76.20345108517004!3d-13.708776390375323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x911065f555f68185%3A0xb5832a6b6f1c7d30!2sCalle%20Ayacucho%20270%2C%20Pisco%2011601!5e0!3m2!1ses!2spe!4v1596567552664!5m2!1ses!2spe"
                            width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""
                            tabindex="0">
                        </iframe>
                    </div>
                </div>
            </div>

            <div class="grid-locales">
                <div class="info-local wow fadeIn" data-wow-delay="0.4s">
                    <div class="arrow descriptions-local">
                        <h2>ICA </h2>
                        <p>
                            Clínica Regional<br />
                            Av. Huacachina 195 – Ica<br />
                            (56) 611 993

                        </p>
                        <div class="descriptions-local">
                            <h2>Horario de atención</h2>
                            <p>
                                Lunes – Domingos 00:00 hrs – 24:00 hrs
                            </p>
                        </div>
                    </div>

                </div>
                <div class="map-local">
                    <div id="map-container-section" class="map-container-section z-depth-1">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1935.009248086689!2d-75.74495554180902!3d-14.076085095861298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9110e2ee64872acf%3A0x6923a1d57a9fee25!2sHuacachina%20295%2C%20Ica%2011004!5e0!3m2!1ses-419!2spe!4v1596017669552!5m2!1ses-419!2spe"
                            width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""
                            tabindex="0">
                        </iframe>
                    </div>
                </div>
            </div>

            <div class="grid-locales">
                <div class="info-local wow fadeIn" data-wow-delay="0.4s">
                    <div class="arrow descriptions-local">
                        <h2>NASCA </h2>
                        <p>
                            Clínica Napoleon II<br />
                            Av. Lima 300<br />
                            (56) 522 387
                        </p>
                        <div class="descriptions-local">
                            <h2>Horario de atención</h2>
                            <p>
                                Lunes – Viernes 07:00 hrs – 21:00 hrs
                                <br>
                                Sábado – Domingo 07:00 hrs – 21:00 hrs
                            </p>
                        </div>
                    </div>
                </div>
                <div class="map-local">
                    <div id="map-container-section" class="map-container-section z-depth-1">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3856.935342594103!2d-74.94243988454186!3d-14.828886503899426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91141f4140bc17ef%3A0x482d105d1d017dde!2sClinica%20Napoleon%20II!5e0!3m2!1ses-419!2spe!4v1596017772772!5m2!1ses-419!2spe"
                            width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""
                            tabindex="0">
                        </iframe>
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