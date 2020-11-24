<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-23 02:57:18
  from '/home/soycajero/public_html/templates/editar_transaccion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f927ece22e689_46267561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04e914b4f342f43be60c2b67da277361ea8cfff7' => 
    array (
      0 => '/home/soycajero/public_html/templates/editar_transaccion.tpl',
      1 => 1602745716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f927ece22e689_46267561 (Smarty_Internal_Template $_smarty_tpl) {
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

    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <form action="editar/transaccion/<?php echo $_smarty_tpl->tpl_vars['transaccion_s']->value->id_tns;?>
" method="post">
                <label for="title">Billetera</label>
                <select id="billeteras" name="id_billetera">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['billeteras_s']->value, 'billetera');
$_smarty_tpl->tpl_vars['billetera']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['billetera']->value) {
$_smarty_tpl->tpl_vars['billetera']->do_else = false;
?>
                      <option value="<?php echo $_smarty_tpl->tpl_vars['billetera']->value->id;?>
" <?php ob_start();
echo $_smarty_tpl->tpl_vars['transaccion_s']->value->id_billetera;
$_prefixVariable1 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['billetera']->value->id;
$_prefixVariable2 = ob_get_clean();
if (($_prefixVariable1 == $_prefixVariable2)) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['billetera']->value->nombre;?>
</option>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            <div class="form-group">
                <label for="description">Fecha de Transacción</label>
                <input type="text" class="form-control" name="fecha_tns" value="<?php echo $_smarty_tpl->tpl_vars['transaccion_s']->value->fecha_tns;?>
" placeholder="Ej: 22/02/1986">
            </div>
            <div class="form-group">
                <label for="priority">Tipo de Operación</label>
                    <select id="billeteras" name="tipo_de_operacion">
                        <option value="Fondeo" <?php ob_start();
echo $_smarty_tpl->tpl_vars['transaccion_s']->value->tipo_de_operacion == "Fondeo";
$_prefixVariable3 = ob_get_clean();
if (($_prefixVariable3)) {?>selected<?php }?>>Fondeo</option>
                        <option value="Retiro" <?php ob_start();
echo $_smarty_tpl->tpl_vars['transaccion_s']->value->tipo_de_operacion == "Retiro";
$_prefixVariable4 = ob_get_clean();
if (($_prefixVariable4)) {?>selected<?php }?>>Retiro</option>
                    </select>
            </div>
            <div class="form-group">
                <label for="priority">Saldo a Enviar</label>
                <input class="form-control" id="saldo_enviar" name="saldo_enviar" value="<?php echo $_smarty_tpl->tpl_vars['transaccion_s']->value->saldo_enviar;?>
">
            </div>
            <div class="form-group">
                <label for="priority">Saldo a Recibir</label>
                <input class="form-control" id="saldo_recibir" name="saldo_recibir" value="<?php echo $_smarty_tpl->tpl_vars['transaccion_s']->value->saldo_recibir;?>
">
            </div>     
            <div class="form-group">
                <label for="priority">Tipo de Cambio</label>
                <input class="form-control" id="tipo_cambio" name="tipo_cambio" value="<?php echo $_smarty_tpl->tpl_vars['transaccion_s']->value->tipo_cambio;?>
">
            </div>                        
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>

      </div>
    </section>

  </main>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
