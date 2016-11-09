<?php

require_once ("control/ConfigSmarty.php");
require_once ("model/model.php");

class Control {

    private $nameApp;
    private $versionApp;
    private $insSmarty;

    function __construct($nameApp, $versionApp) {
        $this->nameApp = $nameApp;
        $this->versionApp = $versionApp;
        $this->insSmarty = new ConfigSmarty();
    }

    function inicioSesion() {
        $this->insSmarty->GenDisplay('header.tpl');
        $this->insSmarty->GenDisplay('inicioSesion.tpl');
        $this->insSmarty->GenDisplay('footer.tpl');
    }

    function ingresarLibro() {
        $this->insSmarty->GenDisplay('header.tpl');
        $this->insSmarty->GenDisplay('ingresarLibro.tpl');
        $this->insSmarty->GenDisplay('footer.tpl');
    }

    function viewForm($str) {
        $this->insSmarty->CreateAssing("msg", $str);
        $this->insSmarty->GenDisplay('header.tpl');
        $this->insSmarty->GenDisplay('index.tpl');
        $this->insSmarty->GenDisplay('footer.tpl');
    }

    function viewReg() {
        $this->insSmarty->GenDisplay('header.tpl');
        $this->insSmarty->GenDisplay('registrarse.tpl');
        $this->insSmarty->GenDisplay('footer.tpl');
    }

    function getNameApp() {
        return $this->nameApp;
    }

    function getVersionApp() {
        return $this->versionApp;
    }

    function setNameApp($nameApp) {
        $this->nameApp = $nameApp;
    }

    function setVersionApp($versionApp) {
        $this->versionApp = $versionApp;
    }

    function ValidarLogin() {
        $insModel = new model;
        $datos = $insModel->fnOpenXml();
        $Status = false;
        for ($i = 0; $i < sizeof($datos); $i++) {
            $elem = $datos[$i];

            if ($elem["User"] == $_REQUEST['Usuario'] && $elem["Pass"] == $_REQUEST['Password']) {
                $Status = true;
                //Session::init();
                //Session::set('estado',true);
                break;
            }
        }

        if ($Status) {
            $this->insSmarty->CreateAssing("msg", "Bienvenido!!!");
            $this->insSmarty->GenDisplay('header.tpl');
            $this->insSmarty->GenDisplay('index.tpl');
            $this->insSmarty->GenDisplay('footer.tpl');
        } else {
            $this->insSmarty->CreateAssing("msg", "Usuario No encontrado!!!");
            $this->insSmarty->GenDisplay('header.tpl');
            $this->insSmarty->GenDisplay('index.tpl');
            $this->insSmarty->GenDisplay('footer.tpl');
        }
    }

    function ValidarNuevoUsr() {
        if (isset($_REQUEST['usuNuevo']) && isset($_REQUEST['passNuevo'])) {
            $insModel = new model;
            $datos["usr"] = $_REQUEST['usuNuevo'];
            $datos["pass"] = $_REQUEST['passNuevo'];
            if (isset($_REQUEST['Email'])) {
                $datos["Email"] = $_REQUEST['Email'];
            } else {
                $datos["Email"] ="";
            }
            if (isset($_REQUEST['Telefono'])) {
                $datos["Telefono"] = $_REQUEST['Telefono'];
            } else {
                $datos["Telefono"] ="";
            }
            if (isset($_REQUEST['TarjetaCredito'])) {
                $datos["TarjetaCredito"] = $_REQUEST['TarjetaCredito'];
            } else {
                $datos["TarjetaCredito"] ="";
            }
            if (isset($_REQUEST['Domicilio'])) {
                $datos["Domicilio"] = $_REQUEST['Domicilio'];
            } else {
                $datos["Domicilio"] ="";
            }
            $insModel->agregarNodo($datos);
            $this->insSmarty->CreateAssing("msg", "Usuario Registrado correctamente!!!");
            $this->insSmarty->GenDisplay('header.tpl');
            $this->insSmarty->GenDisplay('index.tpl');
            $this->insSmarty->GenDisplay('footer.tpl');
        } else {
            echo 'error al insertar usuario';
        }
    }

    function guardarLibro() {
        if (isset($_REQUEST['Autor']) && isset($_REQUEST['Titulo'])) {
            $insModel = new model;
            $datos["Autor"] = $_REQUEST['Autor'];
            $datos["Titulo"] = $_REQUEST['Titulo'];
            if (isset($_REQUEST['Descripcion'])) {
                $datos["Descripcion"] = $_REQUEST['Descripcion'];
            } else {
                $datos["Descripcion"] ="";
            }
            $insModel->agregarLibro($datos);
            $this->insSmarty->CreateAssing("msg", "Libro agregado correctamente!!!");
            $this->insSmarty->GenDisplay('header.tpl');
            $this->insSmarty->GenDisplay('ingresarLibro.tpl');
            $this->insSmarty->GenDisplay('footer.tpl');
        } else {
            echo 'error al insertar Libro';
        }
    }

}