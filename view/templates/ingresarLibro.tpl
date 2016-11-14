<div class="center_content">
    <div class="left_content">
        <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Ingresar Libro</div>

        <div class="feat_prod_box_details">
            <p class="details">
                Para ingresar libros rellene los siguientes campos.
            </p>
        </div>
        <div class="contact_form">
            <div class="form_subtitle">Datos del libro</div>
            <form id="contact" action="index.php?accion=5" method="post">
                <div id="error"></div>
                <div class="form_row">
                    <label class="contact"><strong>Autor:</strong></label>
                    <input type="text" name="Autor" id="Autor" required>
                </div>
                <div class="form_row">
                    <label class="contact"><strong>Titulo:</strong></label>
                    <input type="text" name="Titulo" id="Titulo" required>
                </div>
                <div class="form_row">
                    <label class="contact"><strong>Descripcion:</strong></label>
                    <input type="text" name="Descripcion" id="Descripcion" required>
                </div>
                <div class="form_row">
                    <label class="contact"><strong>Precio:</strong></label>
                    <input type="number" name="Precio" id="Precio" required>
                </div>
                <div class="form_row">
                    <label class="contact"><strong>Caratula Libro:</strong></label>
                    <input type="file" name="Caratula" id="Caratula" required>
                </div>
                <div class="form_row">
                    <button class="register" onclick="ingresarLibro();" name="submit" type="submit" id="contact-submit" data-submit="...Sending">Agregar</button>
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
