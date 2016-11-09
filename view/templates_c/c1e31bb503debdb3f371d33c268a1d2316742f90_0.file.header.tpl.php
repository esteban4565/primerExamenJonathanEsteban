<?php
/* Smarty version 3.1.29, created on 2016-11-08 23:47:41
  from "C:\xampp\htdocs\primerExamenJonathanEsteban\view\templates\header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5822560de3e3b7_42693278',
  'file_dependency' => 
  array (
    'c1e31bb503debdb3f371d33c268a1d2316742f90' => 
    array (
      0 => 'C:\\xampp\\htdocs\\primerExamenJonathanEsteban\\view\\templates\\header.tpl',
      1 => 1478645258,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5822560de3e3b7_42693278 ($_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
        <title>Tienda de libros UAM</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/lightbox.css" />

    </head>
    <body>
        <div id="wrap">

            <div class="header">
                <div class="logo"><a href="index.html"><img src="images/logo.gif" alt="" title="" border="0" /></a></div>            
                <div id="menu">
                    <ul>                                                                       
                        <li class="selected"><a href="index.php">Inicio</a></li>
                        <li><a href="nosotros.php">sobre nosotros</a></li>
                        <li><a href="libros.php">Libros</a></li>
                        <li><a href="index.php?accion=4">Ingresar Libros</a></li>
                        <li><a href="index.php?accion=1">mi cuenta</a></li>
                        <li><a href="index.php?accion=2">Registrate</a></li>
                    </ul>
                </div> 
            </div> 
            <?php echo '<script'; ?>
 type="text/javascript">
                function Registrar() {
                    window.location.href = 'index.php?accion=2';
                }

                function ValPuntoCom(Cadena) {
                    var res = Cadena.split(".");
                    var indice = res.length - 1;
                    if (res[indice] == "com") {
                        //alert('es .com');
                        return true;
                    }
                    return false;
                }
                function ValCaractEspec(Cadena) {
                    var Contador = 0;
                    for (var i = 0; i < Cadena.length; i++)
                        {
                            var caracter = Cadena[i];
                            if (caracter == "*" || caracter == "$") {
                                Contador = Contador + 1;
                            }
                        }
                        if (Contador > 0) {
                            return true;
                        } else {
                            return false;
                        }
                    }

                    function Validar() {

                        var usu = document.getElementById('Usuario').value;
                        var pass = document.getElementById('Password').value;

                        var puntoCo = ValPuntoCom(usu);
                        var Caracesp = ValCaractEspec(pass);

                        if (usu != '') {
                            if (pass != '') {
                                document.forms["contact"].submit();
                            } else {
                                document.getElementById('error').innerHTML = 'Ingrese un password';
                            }
                        } else {
                            document.getElementById('error').innerHTML = 'Ingrese un usuario';
                        }
                    }

                    function ValidarRegistro() {
                        var usu = document.getElementById('usuNuevo').value;
                        var pass = document.getElementById('passNuevo').value;

                        var puntoCo = ValPuntoCom(usu);
                        var Caracesp = ValCaractEspec(pass);

                        if (usu != '') {
                            if (pass != '') {
                                document.forms["contact"].submit();
                            } else {
                                document.getElementById('error').innerHTML = 'Ingrese un password';
                            }
                        } else {
                            document.getElementById('error').innerHTML = 'Ingrese un usuario';
                        }
                    }

                    function ingresarLibro() {
                        var Autor = document.getElementById('Autor').value;
                        var Titulo = document.getElementById('Titulo').value;
                        if (Autor != '') {
                            if (Titulo != '') {
                                document.forms["contact"].submit();
                            } else {
                                document.getElementById('error').innerHTML = 'Ingrese un Titulo';
                            }
                        } else {
                            document.getElementById('error').innerHTML = 'Ingrese un Autor';
                        }
                    }
            <?php echo '</script'; ?>
> <?php }
}
