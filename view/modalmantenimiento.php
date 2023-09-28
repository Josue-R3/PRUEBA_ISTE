<div id="modalmantenimiento" class="modal fade bd-example-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" id="producto_form">
                <div class="modal-header">
                    <h4 class="modal-title" id="mdltitulo"></h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="id" name="id">

                    <div class="form-group">
                        <label class="form-label" for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre" required>
                    </div>
                </div>
                
                <div class="form-group">
                        <label class="form-label" for="descripcion">Descripcion</label>
                        <textarea type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingrese una descripcion" required></textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="descripcion">Precio</label>
                        <input type="number" class="form-control" id="precio" name="precio" step="0.01" min="0" placeholder="Ingrese precio" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="descripcion">Cantidad en stock</label>
                        <input type="number" class="form-control" id="stock" name="stock" placeholder="Ingrese cantidad en stock" required>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-rounded btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" name="action" id="#" value="add" class="btn btn-rounded btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>