<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <form action="agregar/transaccion" method="post">
            <div class="form-group">
                <label for="title">Billetera</label>
                <select id="billeteras" name="id_billetera">
                {foreach from=$billeteras_s item=billetera}
                    <option value="{$billetera->id}">{$billetera->nombre}</option>
                {/foreach}
                </select>
            </div>
            <div class="form-group moneda">
            <label for="priority">Seleccione Moneda</label>
                <select id="monedas" name="monedas">
                <option value="0">Seleccione una moneda ...</option>
                {foreach from=$monedas_s item=moneda}
                    <option value="{$moneda->id}">{$moneda->iso} ({$moneda->nombre})</option>
                {/foreach}
                </select>
        </div>
            <div class="form-group">
                <label for="description">Fecha de Transacción</label>
                <input type="text" class="form-control" name="fecha_tns" value="">
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
</div>

<script src="assets/js/banca_local.js"></script>