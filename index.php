<?php

//$componentes_url = parse_url($_SERVER['REQUEST_URI']);

$componentes_url = parse_url($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
//barrigafong.herokuapp.com

$ruta = $componentes_url['path'];

$partes_ruta = explode('/', $ruta);
$partes_ruta = array_filter($partes_ruta);
$partes_ruta = array_slice($partes_ruta, 0);

$ruta_elegida = 'vistas/404.php';

if($partes_ruta[0] == 'barrigafong.herokuapp.com'){
  if (count($partes_ruta) == 1){
    $ruta_elegida = 'vistas/home.php';
  }else if (count($partes_ruta) == 2){
    switch($partes_ruta[1]){
      case 'contacto':
        $ruta_elegida = 'vistas/contacto.php';
        break;
      case 'locales':
        $ruta_elegida = 'vistas/locales.php';
        break;
      case 'colecistectoia-laparoscopica':
        $ruta_elegida = 'vistas/servicios/colecistectoia-laparoscopica.php';
        break;
      case 'apendicectomia-laparoscopica':
        $ruta_elegida = 'vistas/servicios/apendicectomia-laparoscopica.php';
        break;
      case 'colecistectomia-mas-exploracion-de-vias-biliares-laparoscopica':
        $ruta_elegida = 'vistas/servicios/colecistectomia-mas-exploracion-de-vias-biliares-laparoscopica.php';
        break;
      case 'hernioplastia-inguinal-laparoscopica':
        $ruta_elegida = 'vistas/servicios/hernioplastia-inguinal-laparoscopica.php';
        break;
      case 'eventroplastia-abdominal':
        $ruta_elegida = 'vistas/servicios/eventroplastia-abdominal.php';
        break;
      case 'hernioplastia-umbilical':
        $ruta_elegida = 'vistas/servicios/hernioplastia-umbilical.php';
        break;
      case 'hernioplastia-crural':
        $ruta_elegida = 'vistas/servicios/hernioplastia-crural.php';
        break;
      case 'hemorroidectomia':
        $ruta_elegida = 'vistas/servicios/hemorroidectomia.php';
        break;
      case 'fistulectomia-perianal':
        $ruta_elegida = 'vistas/servicios/fistulectomia-perianal.php';
        break;
    }
  }
}

include_once $ruta_elegida;