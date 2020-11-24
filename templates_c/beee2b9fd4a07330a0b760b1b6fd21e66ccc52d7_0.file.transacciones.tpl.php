<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-20 12:01:02
  from '/home/airtm/public_html/templates/transacciones.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8f09bee24ab6_82758253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'beee2b9fd4a07330a0b760b1b6fd21e66ccc52d7' => 
    array (
      0 => '/home/airtm/public_html/templates/transacciones.tpl',
      1 => 1603209658,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f8f09bee24ab6_82758253 (Smarty_Internal_Template $_smarty_tpl) {
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

          <div class="row transacciones contact">

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['transacciones_s']->value, 'transaccion', false, 'key');
$_smarty_tpl->tpl_vars['transaccion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['transaccion']->value) {
$_smarty_tpl->tpl_vars['transaccion']->do_else = false;
?>
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                      <div class="info">
                        <a href="ver/transaccion/<?php echo $_smarty_tpl->tpl_vars['transaccion']->value->id_tns;?>
"><div class="icono icono-<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['billeteras_s']->value, 'billetera');
$_smarty_tpl->tpl_vars['billetera']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['billetera']->value) {
$_smarty_tpl->tpl_vars['billetera']->do_else = false;
ob_start();
echo $_smarty_tpl->tpl_vars['transaccion']->value->id_billetera;
$_prefixVariable4 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['billetera']->value->id;
$_prefixVariable5 = ob_get_clean();
if (($_prefixVariable4 == $_prefixVariable5)) {
echo mb_strtolower($_smarty_tpl->tpl_vars['billetera']->value->nombre, 'UTF-8');
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>"></div></a>
                          <div><h6>Fecha</h6> <span><?php echo $_smarty_tpl->tpl_vars['transaccion']->value->fecha_tns;?>
</span></div>
                          <div><h6>Tipo de Operación</h6> <span><?php echo $_smarty_tpl->tpl_vars['transaccion']->value->tipo_de_operacion;?>
</span></div>
                        <div><h6>Saldo Enviado</h6> <span><?php echo $_smarty_tpl->tpl_vars['transaccion']->value->saldo_enviar;?>
</span></div>
                        <div><h6>Saldo Recibido</h6> <span><?php echo $_smarty_tpl->tpl_vars['transaccion']->value->saldo_recibir;?>
</span></div>
                        <div><h6>Tipo de Cambio</h6> <span><?php echo $_smarty_tpl->tpl_vars['transaccion']->value->tipo_cambio;?>
</span></div>
                        <div class="<?php ob_start();
echo $_smarty_tpl->tpl_vars['transaccion']->value->ganancia;
$_prefixVariable6 = ob_get_clean();
if (($_prefixVariable6 <= 0)) {?>perdida<?php } else { ?>ganancia<?php }?>"><h6><?php ob_start();
echo $_smarty_tpl->tpl_vars['transaccion']->value->ganancia;
$_prefixVariable7 = ob_get_clean();
if (($_prefixVariable7 <= 0)) {?>Perdida<?php } else { ?>Ganancia<?php }?>:</h6> $ </span><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['transaccion']->value->ganancia);?>
</span></div>
                        <div class="btn-detalles"><a href="ver/transaccion/<?php echo $_smarty_tpl->tpl_vars['transaccion']->value->id_tns;?>
" class="btn btn-primary">Detalles</a></div>
                        <div class="btn-borrar"><a href="eliminar/transaccion/<?php echo $_smarty_tpl->tpl_vars['transaccion']->value->id_tns;?>
" class="btn btn-danger">Borrar</a></div>
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
