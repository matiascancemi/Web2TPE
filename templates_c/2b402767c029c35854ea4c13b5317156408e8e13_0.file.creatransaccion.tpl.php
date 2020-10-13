<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-29 07:21:53
  from 'C:\xampp\htdocs\TPE_Web2\templates\creatransaccion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f72c471b55298_62330314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b402767c029c35854ea4c13b5317156408e8e13' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_Web2\\templates\\creatransaccion.tpl',
      1 => 1601356907,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f72c471b55298_62330314 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <form action="<?php echo BASE_URL;?>
agregar/transaccion" method="post">
            <div class="form-group">
                <label for="title">Billetera</label>
                <select id="billeteras" name="id_billetera">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['billeteras_s']->value, 'billetera');
$_smarty_tpl->tpl_vars['billetera']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['billetera']->value) {
$_smarty_tpl->tpl_vars['billetera']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['billetera']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['billetera']->value->nombre;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Fecha de Transacción</label>
                <input type="text" class="form-control" name="fecha_tns" value="" placeholder="Ej: 22/02/1986">
            </div>
            <div class="form-group">
                <label for="priority">Tipo de Operación</label>
                    <select id="billeteras" name="tipo_de_operacion">
                        <option value="Fondeo">Fondeo</option>
                        <option value="Retiro">Retiro</option>
                    </select>
            </div>
            <div class="form-group">
                <label for="priority">Saldo a Enviar</label>
                <input class="form-control" id="saldo_enviar" name="saldo_enviar">
            </div>
            <div class="form-group">
                <label for="priority">Saldo a Recibir</label>
                <input class="form-control" id="saldo_recibir" name="saldo_recibir">
            </div>     
            <div class="form-group">
                <label for="priority">Tipo de Cambio</label>
                <input class="form-control" id="tipo_cambio" name="tipo_cambio">
            </div>                        
            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
        </div>
    </div>
</div><?php }
}
