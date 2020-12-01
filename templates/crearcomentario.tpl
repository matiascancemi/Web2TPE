<div class="modal fade bd-example-modal-lg agregar-comentario" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <form method="post" action="insert" data-id_user="{$smarty.session.ID}">
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

