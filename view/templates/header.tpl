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
                        <li><a href="index.php?accion=6">Libros</a></li>
                            {if isset($smarty.session.estado) && $smarty.session.estado == 'true'} 
                            <li><a href="index.php?accion=4">Ingresar Libros</a></li>
                            <li><a href="index.php?accion=9">{$smarty.session.Usuario} ¡Bienvenid@!</a></li>
                            <li><a href="index.php?accion=8">Salir</a></li>
                            {else}
                            <li><a href="index.php?accion=1">Iniciar Sesión</a></li>
                            <li><a href="index.php?accion=2">Registrate</a></li>
                            {/if}

                    </ul>
                </div> 
            </div> 
            <script type="text/javascript">
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
                                var Descripcion = document.getElementById('Descripcion').value;
                                var Precio = document.getElementById('Precio').value;
                                var Caratula = document.getElementById('Caratula').value;
                                if (Autor != '') {
                                    if (Titulo != '') {
                                        if (Descripcion != '' && Precio != '' && Caratula != '') {
                                            alert("Libro: " + Titulo + " / Autor: " + Autor + " agregado correctamente. Para ver libros agregados dirijase a Menu->Libros");
                                            document.forms["contact"].submit();
                                        }
                                    } else {
                                        document.getElementById('error').innerHTML = 'Ingrese un Titulo';
                                    }
                                } else {
                                    document.getElementById('error').innerHTML = 'Ingrese un Autor';
                                }
                            }
            </script> 