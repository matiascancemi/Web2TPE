<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-05 07:34:53
  from 'C:\xampp\htdocs\TPE_Web2\templates\vertransaccion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7ab07de0eb50_99838799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5cc33f6e6fa279ff234fd91e7e0b6f88a0b47c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_Web2\\templates\\vertransaccion.tpl',
      1 => 1601874984,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f7ab07de0eb50_99838799 (Smarty_Internal_Template $_smarty_tpl) {
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
              <div class="pic"><img src="/imgs/logo_airtm.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['transaccion']->value->nombre, 'UTF-8');?>
</h4>
                <span><?php echo $_smarty_tpl->tpl_vars['transaccion']->value->fecha_tns;?>
</span>
                <span><?php echo $_smarty_tpl->tpl_vars['transaccion']->value->tipo_de_operacion;?>
</span>
                <span><?php echo $_smarty_tpl->tpl_vars['transaccion']->value->saldo_enviar;?>
</span>
                <span><?php echo $_smarty_tpl->tpl_vars['transaccion']->value->saldo_recibir;?>
</span>
                <span><?php echo $_smarty_tpl->tpl_vars['transaccion']->value->tipo_cambio;?>
</span>
                <span><?php echo $_smarty_tpl->tpl_vars['transaccion']->value->ganancia;?>
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
