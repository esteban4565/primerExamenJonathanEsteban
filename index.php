<?php

/*
  require_once("control/Control.php");
  $ins = new Control("Calculadora", "V 1.0");
  $ruta=0;

  if (isset($_REQUEST['accion']) && $_REQUEST['accion']==4) {
  $ruta=4;
  }

  if (isset($_REQUEST['accion']) && $_REQUEST['accion']==5) {
  $ruta=5;
  }

  if (isset($_REQUEST['Usuario'])) {
  $ruta=1;
  }

  if (isset($_REQUEST['accion']) && $_REQUEST['accion']==2) {
  $ruta=2;
  }

  if (isset($_REQUEST['usuNuevo'])) {
  $ruta=3;
  }

  if (isset($_REQUEST['Autor'])) {
  $ruta=6;
  }

  switch ($ruta){
  case 0:
  $ins->viewForm("");
  break;
  case 1:
  $ins->ValidarLogin();
  break;
  case 2:
  $ins->viewReg();
  break;
  case 3:
  $ins->ValidarNuevoUsr();
  break;
  case 4:
  $ins->inicioSesion();
  break;
  case 5:
  $ins->ingresarLibro();
  break;
  case 6:
  $ins->guardarLibro();
  break;
  }
 */

require_once("control/Control.php");
$ins = new Control("Calculadora", "V 1.0");

if (isset($_REQUEST['accion'])) {
    switch ($_REQUEST['accion']) {
        case 1:
            if (isset($_REQUEST['Usuario'])) {
                $ins->ValidarLogin();
            } else {
                $ins->inicioSesion();
            }
            break;
        case 2:
            $ins->viewReg("");
            break;
        case 3:
            $ins->ValidarNuevoUsr();
            break;
        case 4:
            $ins->ingresarLibro();
            break;
        case 5:
            $ins->guardarLibro();
            break;
        case 6:
            $ins->listarLibro();
            break;
        case 7:
            print_r($_REQUEST['NombreLibro']);
            print_r($_REQUEST['Autor']);
            break;
    }
} else {
    $ins->viewForm("");
}
?>

