<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 07:34:18
  from 'C:\xampp\htdocs\TPE_Web2\templates\transacciones.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f87df5a2b9388_00295066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2cacc9a352c6b0b53ec31b31d77eb759ed29c64' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_Web2\\templates\\transacciones.tpl',
      1 => 1602740028,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f87df5a2b9388_00295066 (Smarty_Internal_Template $_smarty_tpl) {
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

    <section id="services" class="services portfolio">
      <div class="container" data-aos="fade-up">

<div class="row justify-content-center">
          <div class="col-lg-6">
                    <ul id="portfolio-flters" class="d-flex justify-content-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                              <li class="<?php ob_start();
echo $_smarty_tpl->tpl_vars['id_billetera']->value;
$_prefixVariable1 = ob_get_clean();
if (($_prefixVariable1 == 0)) {?>filter-active<?php }?>"><a href="transacciones">Todos</li>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['billeteras_s']->value, 'billetera');
$_smarty_tpl->tpl_vars['billetera']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['billetera']->value) {
$_smarty_tpl->tpl_vars['billetera']->do_else = false;
?>
          <li class="<?php ob_start();
echo $_smarty_tpl->tpl_vars['billetera']->value->id;
$_prefixVariable2 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['id_billetera']->value;
$_prefixVariable3 = ob_get_clean();
if (($_prefixVariable2 == $_prefixVariable3)) {?>filter-active<?php }?>"><a href="transacciones/billetera/<?php echo $_smarty_tpl->tpl_vars['billetera']->value->id;?>
" class="btn-get-started scrollto"><?php echo $_smarty_tpl->tpl_vars['billetera']->value->nombre;?>
</a></li>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
          </div>
        </div>

          <div class="row transacciones">

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['transacciones_s']->value, 'transaccion', false, 'key');
$_smarty_tpl->tpl_vars['transaccion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['transaccion']->value) {
$_smarty_tpl->tpl_vars['transaccion']->do_else = false;
?>
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                      <div class="icon-box">
                        <a href="ver/transaccion/<?php echo $_smarty_tpl->tpl_vars['transaccion']->value->id_tns;?>
"><div class="icono icono-<?php echo mb_strtolower($_smarty_tpl->tpl_vars['transaccion']->value->nombre, 'UTF-8');?>
"></div></a>
                        <h6>Tipo de Operación: <?php echo $_smarty_tpl->tpl_vars['transaccion']->value->tipo_de_operacion;?>
</h6>
                        <h6>Saldo Enviado: <?php echo $_smarty_tpl->tpl_vars['transaccion']->value->saldo_enviar;?>
</h6>
                        <h6>Saldo Recibido: <?php echo $_smarty_tpl->tpl_vars['transaccion']->value->saldo_recibir;?>
</h6>
                        <h6>Tipo de Cambio: <?php echo $_smarty_tpl->tpl_vars['transaccion']->value->tipo_cambio;?>
</h6>
                        <a href="ver/transaccion/<?php echo $_smarty_tpl->tpl_vars['transaccion']->value->id_tns;?>
" class="buy-btn">Ver Ganancia</a>       
                        <?php if ((isset($_SESSION['USUARIO']))) {?>
                        <a href="eliminar/transaccion/<?php echo $_smarty_tpl->tpl_vars['transaccion']->value->id_tns;?>
" class="buy-btn">Borrar</a>       
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
