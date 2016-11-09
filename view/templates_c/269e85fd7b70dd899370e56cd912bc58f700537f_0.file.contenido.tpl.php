<?php
/* Smarty version 3.1.29, created on 2016-10-20 03:22:05
  from "C:\xampp\htdocs\Semana3\view\templates\contenido.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58081c3df3e6b3_79811369',
  'file_dependency' => 
  array (
    '269e85fd7b70dd899370e56cd912bc58f700537f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Semana3\\view\\templates\\contenido.tpl',
      1 => 1476926507,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58081c3df3e6b3_79811369 ($_smarty_tpl) {
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
                <td colspan="2">
                    <input type="button" onclick="Validar();" value="Entrar">
                </td>
                              
            <tr>                  
        </table> 
   </center>
</form>

<?php }
}
