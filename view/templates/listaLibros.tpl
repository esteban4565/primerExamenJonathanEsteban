<div class="center_content">
    <div class="left_content">
        <div class="crumb_nav">
            <a href="index.html">home</a> &gt;&gt; Catalogo de libros
        </div>
        <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Libros disponibles</div>

        <div class="new_products">
            {foreach from=$listaLibros item=libro}
                <div class="new_prod_box">
                    <a href="#">
                        {$libro['Titulo']}
                    </a>
                    <div class="new_prod_bg">
                        <a href="controles/libs.php?NombreLibro=digital&Cantidad=1&Precios=100">
                            <img src="images/{$libro['Caratula']}" alt="" title="" class="thumb" border="0" />
                        </a>
                    </div>
                    <div class="new_prod_bg">
                        <a href="index.php?accion=7&NombreLibro={$libro['Titulo']}&Autor={$libro['Autor']}">
                            <img src="images/cart.gif" alt="" title="" class="thumb" border="0" />
                        </a>
                    </div>
                </div>
            {/foreach}

            <div class="pagination">
                <span class="disabled"><<</span><span class="current">1</span><a href="#?page=2">2</a><a href="#?page=3">3</a>…<a href="#?page=199">10</a><a href="#?page=200">11</a><a href="#?page=2">>></a>
            </div>  

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
