<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-24 05:01:57
  from 'C:\xampp\htdocs\cajeros_airtm\templates\crearcomentario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbc85b573c298_15641560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76035da57ee7b13a8e083bf9c3e30d573022a06d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cajeros_airtm\\templates\\crearcomentario.tpl',
      1 => 1606190513,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbc85b573c298_15641560 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade bd-example-modal-lg agregar-comentario" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <form action="" method="post" action="insert" data-id_user="<?php echo $_SESSION['ID'];?>
">
            <div class="form-group">
                <label for="description">Comentario</label>
                <textarea rows="10" cols="50" name="comentario" id="comentario" value="">Su comentario aquí</textarea>
            </div>
            <div class="form-group">
            <label for="priority">Puntuación</label>
                <select id="calificacion" name="calificacion">
                <option value="1">... 1 ...</option>
                <option value="2">... 2 ...</option>
                <option value="3">... 3 ...</option>
                <option value="4">... 4 ...</option>
                <option value="5">... 5 ...</option>
                </select>
        </div>                
            <a href="#" id="agregar-comment">Agregar Comentario</a>
        </form>
        </div>
    </div>
</div>

<?php }
}
