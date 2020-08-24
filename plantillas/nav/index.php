<header class="barra">
    <div class="u-grid-content">
        <div class="navbar-web">
            <div class="grip-navbar">
                <div class="content-back-menu">
                    <div class="back-menu">
                        <img loading="lazy" src="<?php echo RUTA_IMG?>logo.png" draggable="false" />
                    </div>
                </div>
                <div class="grip-menu-logo">
                    <ul class="grid-list-navbar">
                        <li>
                            <a href="<?php echo SERVIDOR ?>">
                                INICIO
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo RUTA_SERVICIOS ?>">
                                SERVICIOS
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo RUTA_CONTACTO ?>">
                                CONTACTO
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo RUTA_LOCALES ?>">
                                LOCALES
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="logo-fong-movil">
            <a href="<?php echo SERVIDOR ?>">
                <img src="<?php echo RUTA_IMG?>logo.png" draggable="false" class="img-fluid" />
            </a>
        </div>
        <nav id="navbar-movil">
            <div id="toggleIcon" onclick="menuToggle()"></div>
            <div id="menu-overlay">
                <ul>
                    <li>
                        <a href="<?php echo SERVIDOR ?>">
                            INICIO
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo RUTA_SERVICIOS ?>">
                            SERVICIOS
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo RUTA_CONTACTO ?>">
                            CONTACTO
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo RUTA_LOCALES ?>">
                            LOCALES
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>