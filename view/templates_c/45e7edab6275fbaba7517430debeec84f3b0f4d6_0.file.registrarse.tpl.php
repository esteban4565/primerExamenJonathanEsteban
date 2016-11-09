<?php
/* Smarty version 3.1.29, created on 2016-10-23 17:06:14
  from "C:\xampp\htdocs\TareaCreateRegisterEstebanQuesadaSilva\view\templates\registrarse.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_580cd1e6ae5025_12853623',
  'file_dependency' => 
  array (
    '45e7edab6275fbaba7517430debeec84f3b0f4d6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TareaCreateRegisterEstebanQuesadaSilva\\view\\templates\\registrarse.tpl',
      1 => 1476930094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_580cd1e6ae5025_12853623 ($_smarty_tpl) {
?>
<form action="index.php" id="frm_reg" method="get">
    <center>
        <h2>Registrarse</h2>
        <div id="error"></div>
        <table>
            <tr>
                <td>Usuario</td>
                <td><input type="text" name="usuNuevo" id="usuNuevo" required></td>                
            <tr>  
            <tr>
                <td>Password</td>
                <td><input type="password" name="passNuevo" id="passNuevo" required></td>                
            <tr>
            <tr>
                <td colspan="2">
                    <input type="button" onclick="ValidarRegistro();" value="Registrarse">
                </td>
            <tr>                  
        </table> 
   </center>
</form>

<?php }
}
