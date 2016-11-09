<?php
/* Smarty version 3.1.29, created on 2016-10-20 02:03:51
  from "/Applications/XAMPP/xamppfiles/htdocs/Semana3/view/templates/contenido.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_580826072b8f31_31770181',
  'file_dependency' => 
  array (
    'b4d2da81bdb98462522a77620148c54e7eb97e7d' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Semana3/view/templates/contenido.tpl',
      1 => 1476928919,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_580826072b8f31_31770181 ($_smarty_tpl) {
?>
<form action="index.php" id="frm" method="get">
    <center>
        <h2>Login</h2>
        <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

        <div id="error"></div>
        <table>
            <tr>
                <td>Usuario</td>
                <td><input type="text" name="usu" id="usu" required></td>                
            <tr>  
            <tr>
                <td>Password</td>
                <td><input type="password" name="pass" id="pass" required></td>                
            <tr>
            <tr>
                <td>
                    <input type="button" onclick="Validar();" value="Entrar">
                </td>
                <td>
                    <input type="button" onclick="Registrar();" value="Registrar">
                </td>        
            <tr>                  
        </table> 
   </center>
</form>

<?php }
}
