<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-21 02:35:25
  from '/home/soycajero/public_html/templates/estadisticas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8fd6ad36ecd9_24394493',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '515ce9979b31fa5d56e92fee6047eaefe971c846' => 
    array (
      0 => '/home/soycajero/public_html/templates/estadisticas.tpl',
      1 => 1603262123,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f8fd6ad36ecd9_24394493 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/soycajero/public_html/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="index.html">Estadísticas</a></li>
                <li><?php echo $_smarty_tpl->tpl_vars['titulo_s']->value;?>
</li>
            </ol>
            <h2><?php echo $_smarty_tpl->tpl_vars['titulo_s']->value;?>
</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <section id="services" class="services portfolio">
        <div class="container" data-aos="fade-up">

        <form action="estadisticas/fecha" method="POST">
            <div class="row filtros">
            
                <div class="col-lg-4 col-sm-1">
                    <h3>filtro por fecha</h3>
                      <div class="form-group">
                        Desde: <input name="desde" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['desde_s']->value,"%d-%m-%Y");?>
">
                      </div>
                      <div class="form-group">
                        Hasta: <input name="hasta" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['hasta_s']->value,"%d-%m-%Y");?>
">
                      </div>
                </div>
                <div class="col-lg-4 col-sm-1">
                    <h3>filtro por billetera</h3>
                      <div class="form-group">
                      <select name="id_billetera">
                            <option value="0">Todas</option>
                          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['billeteras_s']->value, 'billetera');
$_smarty_tpl->tpl_vars['billetera']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['billetera']->value) {
$_smarty_tpl->tpl_vars['billetera']->do_else = false;
?>
                          <option value="<?php echo $_smarty_tpl->tpl_vars['billetera']->value->id;?>
" <?php ob_start();
echo $_smarty_tpl->tpl_vars['billetera']->value->id;
$_prefixVariable1 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['id_billetera_s']->value;
$_prefixVariable2 = ob_get_clean();
if (($_prefixVariable1 == $_prefixVariable2)) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['billetera']->value->nombre;?>
</option>
                          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                      </div>
                </div>                
            <div class="col-lg-4 col-sm-1">
              <button type="submit" class="btn btn-primary">filtrar</button>
           </div>                
        </div>       

            </form>
                <div class="row transacciones estadisticas">
                <div class="col-xl-4 col-md-4 d-flex align-items-stretch mt-4 mt-md-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon-box">
                    <div class="icon"><i class="far fa-calendar-alt"></i></div>
                    <h4><a href="">fecha</a></h4>
                    <h5><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['desde_s']->value,"%d/%m/%Y");?>
 / <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['hasta_s']->value,"%d/%m/%Y");?>
 </h5>
                  </div>
                </div>
      
                <div class="col-xl-4 col-md-4 d-flex align-items-stretch mt-4 mt-md-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                  <div class="icon-box">
                    <div class="icon"><i class="fas fa-handshake"></i></div>
                    <h4><a href="">cantidad de transacciones</a></h4>
                    <h2><?php echo $_smarty_tpl->tpl_vars['totaldetns_s']->value;?>
</h2>
                  </div>
                </div>

                <div class="col-xl-4 col-md-4 d-flex align-items-stretch mt-4 mt-md-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-box">
                  <div class="icon"><i class="fas fa-money-bill-alt"></i></div>
                  <h4><a href="">ganancias totales</a></h4>
                  <h2><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['total_s']->value);?>
</h2>
                </div>
              </div>                

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Billetera</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Tipo de Operación</th>
                                <th scope="col">Saldo Enviado</th>
                                <th scope="col">Saldo Recibido</th>
                                <th scope="col">Tipo de Cambio</th>
                                <th scope="col">Ganancia</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['transacciones_s']->value, 'transaccion', false, 'key');
$_smarty_tpl->tpl_vars['transaccion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['transaccion']->value) {
$_smarty_tpl->tpl_vars['transaccion']->do_else = false;
?>
                                <tr>
                                    <th scope="row"><a href="ver/transaccion/<?php echo $_smarty_tpl->tpl_vars['transaccion']->value->id_tns;?>
"><div class="icono icono-<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['billeteras_s']->value, 'billetera');
$_smarty_tpl->tpl_vars['billetera']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['billetera']->value) {
$_smarty_tpl->tpl_vars['billetera']->do_else = false;
ob_start();
echo $_smarty_tpl->tpl_vars['transaccion']->value->id_billetera;
$_prefixVariable3 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['billetera']->value->id;
$_prefixVariable4 = ob_get_clean();
if (($_prefixVariable3 == $_prefixVariable4)) {
echo mb_strtolower($_smarty_tpl->tpl_vars['billetera']->value->nombre, 'UTF-8');
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>"></a></th>
                                    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['transaccion']->value->fecha_tns,"%d/%m/%Y");?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['transaccion']->value->tipo_de_operacion;?>
</td>
                                    <td>$ <?php echo $_smarty_tpl->tpl_vars['transaccion']->value->saldo_enviar;?>
</td>
                                    <td>$ <?php echo $_smarty_tpl->tpl_vars['transaccion']->value->saldo_recibir;?>
</td>
                                    <td>$ <?php echo $_smarty_tpl->tpl_vars['transaccion']->value->tipo_cambio;?>
</td>
                                    <td>$ <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['transaccion']->value->ganancia);?>
</td>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <tr>
                                    <th scope="row">Total</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>$ <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['total_s']->value);?>
</td>
                                </tr>
                        </tbody>
                      </table>
                </div>
        </div>
    </section>

</main>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
