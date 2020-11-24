<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-19 11:37:36
  from '/home/airtm/public_html/templates/crearbilletera.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8db2c0a170d7_81735945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09b26dc7c982aa5d1e8d3ea1ca9326b4a84d269f' => 
    array (
      0 => '/home/airtm/public_html/templates/crearbilletera.tpl',
      1 => 1603121850,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8db2c0a170d7_81735945 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade bd-example-modal-lg billetera" tabindex="-1" role="dialog" aria-labelledby="CrearBilletera" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="agregar/billetera" method="post">
                <div class="form-group">
                    <label for="title">Billetera Nueva</label>
                    <input class="form-control" id="title" name="nombre">
                    <small id="emailHelp" class="form-text text-muted">Nombre</small>
                </div>
                <div class="form-group">
                    <label for="description">Comisión Única (decimal con punto)</label>
                    <input class="form-control" id="comision_unica" name="comision_unica">
                </div>
                <div class="form-group">
                    <label for="priority">Comisión Porcentual (decimal con punto)</label>
                    <input class="form-control" id="comision_porcentual" name="comision_porcentual">
                </div>
                <div class="form-group">
                <label for="priority">Comisión Mínima (decimal con punto)</label>
                <input class="form-control" id="comision_minima" name="comision_minima">
            </div>                
                <button type="submit" class="btn btn-primary">Agregar</button>
            </form>
        </div>
    </div>
</div>
</div><?php }
}
