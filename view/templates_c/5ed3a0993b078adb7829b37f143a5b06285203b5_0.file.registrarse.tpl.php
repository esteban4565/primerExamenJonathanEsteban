<?php
/* Smarty version 3.1.29, created on 2016-11-14 04:51:03
  from "C:\xampp\htdocs\primerExamenJonathanEsteban\view\templates\registrarse.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_582934a76698d1_76189349',
  'file_dependency' => 
  array (
    '5ed3a0993b078adb7829b37f143a5b06285203b5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\primerExamenJonathanEsteban\\view\\templates\\registrarse.tpl',
      1 => 1479095447,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_582934a76698d1_76189349 ($_smarty_tpl) {
?>
<div class="center_content">
    <div class="left_content">
        <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Registrate</div>

        <div class="feat_prod_box_details">
            <p class="details">
                Gracias por afiliarce a esta tienda, es un gusto servirle
            </p>

            <div class="contact_form">
                <div class="form_subtitle">Crea una Nueva Cuenta</div>
                <form id="contact" action="index.php?accion=3" method="post">         
                    <div class="form_row">
                        <label class="contact"><strong>Usuario:</strong></label>
                        <input type="text" class="contact_input" name="usuNuevo" id="usuNuevo" required/>
                    </div>  


                    <div class="form_row">
                        <label class="contact"><strong>Password:</strong></label>
                        <input type="text" class="contact_input" name="passNuevo" id="passNuevo" required/>
                    </div> 

                    <div class="form_row">
                        <label class="contact"><strong>Email:</strong></label>
                        <input type="text" class="contact_input" name="Email" id="Email" required/>
                    </div>


                    <div class="form_row">
                        <label class="contact"><strong>Telefono:</strong></label>
                        <input type="text" class="contact_input" name="Telefono" id="Telefono" required/>
                    </div>

                    <div class="form_row">
                        <label class="contact"><strong>Tipo de Tarjeta:</strong></label>
                        <input type="radio" name="tipoTarjeta" value="visa" required> Visa<br>
                        <input type="radio" name="tipoTarjeta" value="mastercard"> Mastercard<br>
                    </div>  

                    <div class="form_row">
                        <label class="contact"><strong>Numero de tarjeta de credito</strong></label>
                        <input type="text" class="contact_input" name="TarjetaCredito" id="TarjetaCredito" required/>
                    </div>  

                    <div class="form_row">
                        <label class="contact"><strong>Fecha de expiracion</strong></label>
                        <input type="date" class="contact_input" name="fechaExpiracion" id="fechaExpiracion" required/>
                    </div>

                    <div class="form_row">
                        <label class="contact"><strong>Enviar a:</strong></label>
                        <input type="text" class="contact_input" name="Domicilio" id="Domicilio" required/>
                    </div>                  

                    <div class="form_row">
                        <div class="terms">
                            <input type="checkbox" name="terms" name="AceptarTerminos" id="AceptarTerminos" required/>
                            Acepto los terminos y condiciones
                        </div>
                    </div> 
                    <div class="form_row">
                        <button class="register" onclick="ValidarRegistro();" name="submit" type="submit" id="contact-submit" data-submit="...Sending">Registrarse</button>
                    </div>
                </form>
            </div> 
        </div>
        <div class="clear"></div>
    </div><!--end of left content-->

    <div class="right_content">
        <div class="cart">
            <div class="title"><span class="title_icon"><img src="images/cart.gif" alt="" title="" /></span>Mi carrito</div>
            <div class="home_cart_content"></div>
        </div>
        <div class="title"><span class="title_icon"><img src="images/bullet3.gif" alt="" title="" /></span>Sobre la tienda</div> 
        <div class="about">
            <p>
                <img src="images/about.gif" alt="" title="" class="right" />
                Estamos Ubicados en San Jose,
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

<!--
<form id="contact" action="index.php?accion=3" method="post">
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
                    <button onclick="ValidarRegistro();" name="submit" type="submit" id="contact-submit" data-submit="...Sending">Registrarse</button>
                </td>
            <tr>                  
        </table> 
    </center>
</form>
--><?php }
}
