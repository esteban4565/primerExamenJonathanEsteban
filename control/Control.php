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

    function inicioSesion() {
        $this->insSmarty->GenDisplay('header.tpl');
        $this->insSmarty->GenDisplay('inicioSesion.tpl');
        $this->insSmarty->GenDisplay('footer.tpl');
    }
    
    function cerrarSession() {
        $_SESSION['estado'] = 'false';
        session_destroy();
        $this->insSmarty->CreateAssing("msg", "");
        $this->insSmarty->GenDisplay('header.tpl');
        $this->insSmarty->GenDisplay('index.tpl');
        $this->insSmarty->GenDisplay('footer.tpl');
    }

    function miCuenta() {
        $datosUsuario=array();
        $insModel = new model;
        $datos = $insModel->consultaDatosUsuario();
        for ($i = 0; $i < sizeof($datos); $i++) {
            $elem = $datos[$i];
            if ($elem["usr"] == $_SESSION['Usuario'] && $elem["pass"] == $_SESSION['Password']) {
                $datosUsuario['id']=$elem["id"];
                $datosUsuario['usr']=$elem["usr"];
                $datosUsuario['pass']=$elem["pass"];
                $datosUsuario['Email']=$elem["Email"];
                $datosUsuario['Telefono']=$elem["Telefono"];
                $datosUsuario['TarjetaCredito']=$elem["TarjetaCredito"];
                $datosUsuario['Domicilio']=$elem["Domicilio"];
                $datosUsuario['tipoTarjeta']=$elem["tipoTarjeta"];
                $datosUsuario['fechaExpiracion']=$elem["fechaExpiracion"];
                break;
            }
        }
        
        $this->insSmarty->CreateAssing("datosUsuario", $datosUsuario);
        $this->insSmarty->GenDisplay('header.tpl');
        $this->insSmarty->GenDisplay('datosUsuario.tpl');
        $this->insSmarty->GenDisplay('footer.tpl');
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
            if (isset($_REQUEST['tipoTarjeta'])) {
                $datos["tipoTarjeta"] = $_REQUEST['tipoTarjeta'];
            } else {
                $datos["tipoTarjeta"] ="";
            }
            if (isset($_REQUEST['fechaExpiracion'])) {
                $datos["fechaExpiracion"] = $_REQUEST['fechaExpiracion'];
            } else {
                $datos["fechaExpiracion"] ="";
            }
            $insModel->agregarUsuario($datos);
            $this->insSmarty->CreateAssing("msg", "Usuario Registrado correctamente!!!");
            $this->insSmarty->GenDisplay('header.tpl');
            $this->insSmarty->GenDisplay('index.tpl');
            $this->insSmarty->GenDisplay('footer.tpl');
        } else {
            echo 'error al insertar usuario';
        }
    }

    function ValidarLogin() {
        $insModel = new model;
        $datos = $insModel->consultaUsuarios();
        $Status = false;
        for ($i = 0; $i < sizeof($datos); $i++) {
            $elem = $datos[$i];

            if ($elem["usr"] == $_REQUEST['Usuario'] && $elem["pass"] == $_REQUEST['Password']) {
                $Status = true;
                $_SESSION['estado'] = 'true';
                $_SESSION['Usuario'] = $elem["usr"];
                $_SESSION['Password'] = $elem["pass"];
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

    function ingresarLibro() {
        $this->insSmarty->GenDisplay('header.tpl');
        $this->insSmarty->GenDisplay('ingresarLibro.tpl');
        $this->insSmarty->GenDisplay('footer.tpl');
    }

    function listarLibro() {
        $listaLibros=array();
        $insModel = new model;
        $datos = $insModel->abrirBdLibros();
        for ($i = 0; $i < sizeof($datos); $i++) {
            $elem = $datos[$i];
            $listaLibros[$i]['id']=$elem["id"];
            $listaLibros[$i]['Autor']=$elem["Autor"];
            $listaLibros[$i]['Titulo']=$elem["Titulo"];
            $listaLibros[$i]['Descripcion']=$elem["Descripcion"];
            $listaLibros[$i]['Caratula']=$elem["Caratula"];
            $listaLibros[$i]['Precio']=$elem["Precio"];
        }
        $this->insSmarty->CreateAssing("listaLibros", $listaLibros);
        $this->insSmarty->GenDisplay('header.tpl');
        $this->insSmarty->GenDisplay('listaLibros.tpl');
        $this->insSmarty->GenDisplay('footer.tpl');
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
            if (isset($_REQUEST['Caratula'])) {
                $datos["Caratula"] = $_REQUEST['Caratula'];
            } else {
                $datos["Caratula"] ="";
            }
            if (isset($_REQUEST['Precio'])) {
                $datos["Precio"] = $_REQUEST['Precio'];
            } else {
                $datos["Precio"] ="";
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
