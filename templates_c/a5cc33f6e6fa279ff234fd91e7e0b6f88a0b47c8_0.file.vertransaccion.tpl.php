<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 06:57:31
  from 'C:\xampp\htdocs\TPE_Web2\templates\vertransaccion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f87d6bbb89941_05615361',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5cc33f6e6fa279ff234fd91e7e0b6f88a0b47c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_Web2\\templates\\vertransaccion.tpl',
      1 => 1602737849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f87d6bbb89941_05615361 (Smarty_Internal_Template $_smarty_tpl) {
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

   <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-12">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="icono icono-<?php echo mb_strtolower($_smarty_tpl->tpl_vars['transaccion']->value->nombre, 'UTF-8');?>
 grande"></div>
              <div class="member-info">
                <span class="ganancia <?php ob_start();
echo $_smarty_tpl->tpl_vars['transaccion']->value->ganancia;
$_prefixVariable1 = ob_get_clean();
if (($_prefixVariable1 <= 0)) {?>perdida<?php }?>"><h5><?php ob_start();
echo $_smarty_tpl->tpl_vars['transaccion']->value->ganancia;
$_prefixVariable2 = ob_get_clean();
if (($_prefixVariable2 <= 0)) {?>Perdida<?php } else { ?>Ganancia<?php }?>:</h5> <?php echo $_smarty_tpl->tpl_vars['transaccion']->value->ganancia;?>
</span>
                <span><h5>Fecha:</h5> <?php echo $_smarty_tpl->tpl_vars['transaccion']->value->fecha_tns;?>
</span>
                <span><h5>Tipo de Operación:</h5> <?php echo $_smarty_tpl->tpl_vars['transaccion']->value->tipo_de_operacion;?>
</span>
                <span><h5>Saldo a Enviar:</h5> <?php echo $_smarty_tpl->tpl_vars['transaccion']->value->saldo_enviar;?>
</span>
                <span><h5>Saldor a Recibir:</h5> <?php echo $_smarty_tpl->tpl_vars['transaccion']->value->saldo_recibir;?>
</span>
                <span><h5>Tipo de Cambio:</h5> <?php echo $_smarty_tpl->tpl_vars['transaccion']->value->tipo_cambio;?>
</span>
                <?php if ((isset($_SESSION['USUARIO']))) {?>
                <a href="eliminar/transaccion/<?php echo $_smarty_tpl->tpl_vars['transaccion']->value->id_tns;?>
"  class="buy-btn">Borrar</a>
                <a href="editar/transaccion/<?php echo $_smarty_tpl->tpl_vars['transaccion']->value->id_tns;?>
"  class="buy-btn">eDITAR</a>
                <?php }?>
              </div>
            </div>
          </div>

      </div>
    </section>

  </main>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
