<div class="modal fade bd-example-modal-lg billetera" tabindex="-1" role="dialog" aria-labelledby="CrearBilletera" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="agregar/billetera" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="priority">Imagen</label>
                    <input type="file" name="input_name" id="imagen">
                </div>
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
</div>