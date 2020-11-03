<?php 

//define('NOMBRE_SERVIDOR', 'localhost');
//define('NOMBRE_USUARIO', 'root');
//define('PASSWORD', '');
//define('NOMBRE_BD', 'andean');

//rutas de la web
//https://barrigafong.herokuapp.com/
//http://localhost/barrigafong

define("SERVIDOR", "https://barrigafong.herokuapp.com/");
// define("RUTA_SERVICIOS", SERVIDOR."servicios");
define("RUTA_CONTACTO", SERVIDOR."contacto");
define("RUTA_LOCALES", SERVIDOR."locales");
define("RUTA_CL", SERVIDOR."colecistectoia-laparoscopica");
define("RUTA_AL", SERVIDOR."apendicectomia-laparoscopica");
define("RUTA_VIAS", SERVIDOR."colecistectomia-mas-exploracion-de-vias-biliares-laparoscopica");
define("RUTA_HIL", SERVIDOR."hernioplastia-inguinal-laparoscopica");
define("RUTA_EA", SERVIDOR."eventroplastia-abdominal");
define("RUTA_HU", SERVIDOR."hernioplastia-umbilical");
define("RUTA_HC", SERVIDOR."hernioplastia-crural");
define("RUTA_HEMORROIDECTOMIA", SERVIDOR."hemorroidectomia");
define("RUTA_FP", SERVIDOR."fistulectomia-perianal");

//recursos
define("RUTA_CSS", SERVIDOR . "css/");
define("RUTA_JS", SERVIDOR . "js/");
define("RUTA_IMG", SERVIDOR . "images/");
define("RUTA_PDF", SERVIDOR . "pdf/");