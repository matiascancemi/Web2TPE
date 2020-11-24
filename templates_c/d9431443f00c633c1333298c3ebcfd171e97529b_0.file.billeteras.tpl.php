<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-24 06:57:07
  from 'C:\xampp\htdocs\cajeros_airtm\templates\billeteras.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbca0b3373df4_88057322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9431443f00c633c1333298c3ebcfd171e97529b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cajeros_airtm\\templates\\billeteras.tpl',
      1 => 1606197424,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fbca0b3373df4_88057322 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="index.html">Home</a></li>
                <li><?php echo $_smarty_tpl->tpl_vars['titulo_s']->value;?>
</li>
            </ol>
            <h2><?php echo $_smarty_tpl->tpl_vars['titulo_s']->value;?>
</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <section id="services" class="services contact">
        <div class="container contact" data-aos="fade-up">

            <div class="row transacciones contact">

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['billeteras_s']->value, 'billetera');
$_smarty_tpl->tpl_vars['billetera']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['billetera']->value) {
$_smarty_tpl->tpl_vars['billetera']->do_else = false;
?>
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 pricing" data-aos="zoom-in" data-aos-delay="200">
                        <div class="info">
                            <div class="icono icono-<?php echo mb_strtolower($_smarty_tpl->tpl_vars['billetera']->value->nombre, 'UTF-8');?>
"></div>
                            <?php if ((isset($_smarty_tpl->tpl_vars['billetera']->value->imagen))) {?>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['billetera']->value->imagen;?>
"/>
                            <?php }?>                        
                            <div><h6>Comisión Unica:</h6> <span><?php echo $_smarty_tpl->tpl_vars['billetera']->value->comision_unica;?>
</span></div>
                            <div><h6>Comisión Porcentual:</h6> <span><?php echo $_smarty_tpl->tpl_vars['billetera']->value->comision_porcentual;?>
</span></div>
                            <div><h6>Comisión Mínima:</h6> <span><?php echo $_smarty_tpl->tpl_vars['billetera']->value->comision_minima;?>
</span></div>
                            <?php if ($_SESSION['ROL'] == 0) {?>
                                <a href="eliminar/billetera/<?php echo $_smarty_tpl->tpl_vars['billetera']->value->id;?>
" class="buy-btn">Borrar</a>
                                <a href="editar/billetera/<?php echo $_smarty_tpl->tpl_vars['billetera']->value->id;?>
" class="buy-btn">Editar</a>
                            <?php }?>
                        </div>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </div>
        </div>
    </section>

</main>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
