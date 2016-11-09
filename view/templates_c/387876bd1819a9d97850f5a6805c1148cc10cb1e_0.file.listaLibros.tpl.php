<?php
/* Smarty version 3.1.29, created on 2016-11-09 05:35:54
  from "C:\xampp\htdocs\primerExamenJonathanEsteban\view\templates\listaLibros.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5822a7aa6efe49_88063725',
  'file_dependency' => 
  array (
    '387876bd1819a9d97850f5a6805c1148cc10cb1e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\primerExamenJonathanEsteban\\view\\templates\\listaLibros.tpl',
      1 => 1478666151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5822a7aa6efe49_88063725 ($_smarty_tpl) {
?>
<div class="center_content">
    <div class="left_content">
        <div class="crumb_nav">
            <a href="index.html">home</a> &gt;&gt; Catalogo de libros
        </div>
        <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Libros disponibles</div>

        <div class="new_products">
            <?php
$_from = $_smarty_tpl->tpl_vars['listaLibros']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_libro_0_saved_item = isset($_smarty_tpl->tpl_vars['libro']) ? $_smarty_tpl->tpl_vars['libro'] : false;
$_smarty_tpl->tpl_vars['libro'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['libro']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['libro']->value) {
$_smarty_tpl->tpl_vars['libro']->_loop = true;
$__foreach_libro_0_saved_local_item = $_smarty_tpl->tpl_vars['libro'];
?>
                <div class="new_prod_box">
                    <a href="#">
                        <?php echo $_smarty_tpl->tpl_vars['libro']->value['Titulo'];?>

                    </a>
                    <div class="new_prod_bg">
                        <a href="controles/libs.php?NombreLibro=digital&Cantidad=1&Precios=100">
                            <img src="images/<?php echo $_smarty_tpl->tpl_vars['libro']->value['Caratula'];?>
" alt="" title="" class="thumb" border="0" />
                        </a>
                    </div>
                    <div class="new_prod_bg">
                        <a href="index.php?accion=7&NombreLibro=<?php echo $_smarty_tpl->tpl_vars['libro']->value['Titulo'];?>
&Autor=<?php echo $_smarty_tpl->tpl_vars['libro']->value['Autor'];?>
">
                            <img src="images/cart.gif" alt="" title="" class="thumb" border="0" />
                        </a>
                    </div>
                </div>
            <?php
$_smarty_tpl->tpl_vars['libro'] = $__foreach_libro_0_saved_local_item;
}
if ($__foreach_libro_0_saved_item) {
$_smarty_tpl->tpl_vars['libro'] = $__foreach_libro_0_saved_item;
}
?>

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
<?php }
}
