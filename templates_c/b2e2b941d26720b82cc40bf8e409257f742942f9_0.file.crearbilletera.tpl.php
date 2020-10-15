<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 07:02:18
  from 'C:\xampp\htdocs\TPE_Web2\templates\crearbilletera.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f87d7daf2b176_90363610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2e2b941d26720b82cc40bf8e409257f742942f9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_Web2\\templates\\crearbilletera.tpl',
      1 => 1602738137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f87d7daf2b176_90363610 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <button type="submit" class="btn btn-primary">Agregar</button>
                    </form>
                </div>
        </div>
    </div>
</div><?php }
}
