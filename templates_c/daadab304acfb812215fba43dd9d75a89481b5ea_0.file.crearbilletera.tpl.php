<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-23 01:54:06
  from '/home/soycajero/public_html/templates/crearbilletera.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f926ffef259c0_37988217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'daadab304acfb812215fba43dd9d75a89481b5ea' => 
    array (
      0 => '/home/soycajero/public_html/templates/crearbilletera.tpl',
      1 => 1603432368,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f926ffef259c0_37988217 (Smarty_Internal_Template $_smarty_tpl) {
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
