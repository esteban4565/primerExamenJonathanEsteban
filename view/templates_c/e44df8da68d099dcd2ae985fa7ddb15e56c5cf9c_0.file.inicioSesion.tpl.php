<?php
/* Smarty version 3.1.29, created on 2016-11-09 02:46:46
  from "C:\XAMPP\htdocs\primerExamenJonathanEsteban\view\templates\inicioSesion.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_582280061e7e63_27840779',
  'file_dependency' => 
  array (
    'e44df8da68d099dcd2ae985fa7ddb15e56c5cf9c' => 
    array (
      0 => 'C:\\XAMPP\\htdocs\\primerExamenJonathanEsteban\\view\\templates\\inicioSesion.tpl',
      1 => 1478655938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_582280061e7e63_27840779 ($_smarty_tpl) {
?>
<div class="center_content">
    <div class="left_content">
        <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Mi Cuenta</div>

        <div class="feat_prod_box_details">
            <p class="details">
                Para realizar compras deberas ingresar con tu cuenta.
            </p>
        </div>
        <div class="contact_form">
            <div class="form_subtitle">Logea tu cuenta</div>
            <form id="contact" name="contact" action="index.php?accion=1" method="post">
                    <div id="error"></div>
                    <div class="form_row">
                    <label class="contact"><strong>Usuario:</strong></label>
                    <input type="text" name="Usuario" id="Usuario" required>
                    </div>
                    <div class="form_row">
                    <label class="contact"><strong>Password:</strong></label>
                    <input type="password" name="Password" id="Password" required>
                    </div>
                    <div class="form_row">
                    <button class="register" name="submit" type="submit" onclick="Validar();" id="contact-submit" data-submit="...Sending">Entrar</button>
                    </div>
            </form>
        </div>
        <div class="clear"></div>
    </div><!--end of left content-->
    <div class="right_content">

        <div class="languages_box">

        </div>
        <div class="currency">

        </div>


        <div class="cart">
            <div class="title"><span class="title_icon"><img src="images/cart.gif" alt="" title="" /></span>My cart</div>
        </div>

        <div class="title"><span class="title_icon"><img src="images/bullet3.gif" alt="" title="" /></span>Sobre la tienda</div> 
        <div class="about">
            <p>
                <img src="images/about.gif" alt="" title="" class="right" />
                Estamos Ubicados en San Jose
                <br>
                COSTA RICA
            </p>

        </div>
    </div><!--end of right content-->
    <div class="clear"></div>
</div><!--end of center content-->
<div class="footer">
    <div class="left_footer"><img src="images/footer_logo.gif" alt="" title="" /><br /> <a href="http://csscreme.com/freecsstemplates/" title="free templates"><img src="images/csscreme.gif" alt="free templates" title="free templates" border="0" /></a></div>
</div>
</div><!--end of wrap-->
<?php }
}
