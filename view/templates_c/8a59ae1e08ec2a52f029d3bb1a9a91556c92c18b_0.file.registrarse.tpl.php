<?php
/* Smarty version 3.1.29, created on 2016-10-20 02:22:14
  from "/Applications/XAMPP/xamppfiles/htdocs/Semana3/view/templates/registrarse.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58082a56176283_88616710',
  'file_dependency' => 
  array (
    '8a59ae1e08ec2a52f029d3bb1a9a91556c92c18b' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Semana3/view/templates/registrarse.tpl',
      1 => 1476930094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58082a56176283_88616710 ($_smarty_tpl) {
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
