<?php
/* Smarty version 3.1.29, created on 2016-10-23 17:01:55
  from "C:\xampp\htdocs\TareaCreateRegisterEstebanQuesadaSilva\view\templates\contenido.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_580cd0e3235e68_57522054',
  'file_dependency' => 
  array (
    '46f629bc1aa50527dbdb3d6637ce1c0a4dc0535e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TareaCreateRegisterEstebanQuesadaSilva\\view\\templates\\contenido.tpl',
      1 => 1476928918,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_580cd0e3235e68_57522054 ($_smarty_tpl) {
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
