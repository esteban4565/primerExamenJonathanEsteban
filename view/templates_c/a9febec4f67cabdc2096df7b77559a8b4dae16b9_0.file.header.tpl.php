<?php
/* Smarty version 3.1.29, created on 2016-10-20 02:22:02
  from "/Applications/XAMPP/xamppfiles/htdocs/Semana3/view/templates/header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58082a4aa78ef9_98916952',
  'file_dependency' => 
  array (
    'a9febec4f67cabdc2096df7b77559a8b4dae16b9' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Semana3/view/templates/header.tpl',
      1 => 1476930094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58082a4aa78ef9_98916952 ($_smarty_tpl) {
?>
<html>

    <head>
        <title>.:Mi Primer Site:.
        </title>

        <?php echo '<script'; ?>
 type="text/javascript">
            
            function Registrar(){
            window.location.href ='index.php?accion=2';
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
                if(Contador>0){
                    return true;
                }else{
                    return false;
                }
            }

            function Validar() {
                var usu = document.getElementById('usu').value;
                var pass = document.getElementById('pass').value;

                var puntoCo = ValPuntoCom(usu);
                var Caracesp = ValCaractEspec(pass);

                if (usu != '') {
                    if (pass != '') {
                        document.forms["frm"].submit();
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
                        document.forms["frm_reg"].submit();
                    } else {
                        document.getElementById('error').innerHTML = 'Ingrese un password';
                    }
                } else {
                    document.getElementById('error').innerHTML = 'Ingrese un usuario';
                }
            }

        <?php echo '</script'; ?>
>    

    </head>    
    <body><?php }
}
