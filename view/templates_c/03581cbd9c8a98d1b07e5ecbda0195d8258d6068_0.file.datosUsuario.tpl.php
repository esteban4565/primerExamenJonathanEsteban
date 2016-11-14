<?php
/* Smarty version 3.1.29, created on 2016-11-14 04:57:09
  from "C:\xampp\htdocs\primerExamenJonathanEsteban\view\templates\datosUsuario.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58293615cd5152_15380910',
  'file_dependency' => 
  array (
    '03581cbd9c8a98d1b07e5ecbda0195d8258d6068' => 
    array (
      0 => 'C:\\xampp\\htdocs\\primerExamenJonathanEsteban\\view\\templates\\datosUsuario.tpl',
      1 => 1479095706,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58293615cd5152_15380910 ($_smarty_tpl) {
?>
<div class="center_content">
    <div class="left_content">
        <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Datos de Usuario</div>

        <div class="new_products">
            <label>Id:</label>
            <p><?php echo $_smarty_tpl->tpl_vars['datosUsuario']->value['id'];?>
</p>
            <label>Nombre de usuario:</label>
            <p><?php echo $_smarty_tpl->tpl_vars['datosUsuario']->value['usr'];?>
</p>
            <label>Email:</label>
            <p><?php echo $_smarty_tpl->tpl_vars['datosUsuario']->value['Email'];?>
</p>
            <label>Telefono:</label>
            <p><?php echo $_smarty_tpl->tpl_vars['datosUsuario']->value['Telefono'];?>
</p>
            <label>Tipo de Tarjeta:</label>
            <p><?php echo $_smarty_tpl->tpl_vars['datosUsuario']->value['tipoTarjeta'];?>
</p>
            <label>Numero de tarjeta de credito:</label>
            <p><?php echo $_smarty_tpl->tpl_vars['datosUsuario']->value['TarjetaCredito'];?>
</p>
            <label>Fecha de expiración:</label>
            <p><?php echo $_smarty_tpl->tpl_vars['datosUsuario']->value['fechaExpiracion'];?>
</p>
            <label>Enviar a:</label>
            <p><?php echo $_smarty_tpl->tpl_vars['datosUsuario']->value['Domicilio'];?>
</p>
        </div>
        <div class="clear"></div>
    </div><!--end of left content-->
    <div class="right_content">
        <div class="title"><span class="title_icon"><img src="images/bullet3.gif" alt="" title="" /></span>La tienda</div> 
        <div class="about">
            <p>
                <img src="images/about.gif" alt="" title="" class="right" />
                Nuestras oficinas centrales estan Ubicadas San Jose,<br> Heredia Costa Rica<br>
                Telefonos: 506 22777777
            </p>

        </div>
    </div><!--end of right content-->
    <div class="clear"></div>
</div><!--end of center content-->
<div class="footer">
    <div class="left_footer"><img src="images/footer_logo.gif" alt="" title="" /><br /></div>
    <div class="right_footer">
    </div>
</div>
</div><!--end of wrap-->
<?php }
}
