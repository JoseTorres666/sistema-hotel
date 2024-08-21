<!-- inicio contenido -->
<div class="container-fluid">
    <div class="row">
        <div class="card-box table-responsive">
            <h1 class="header-title">Agregar producto</h1><br>
            <?php echo form_open_multipart('producto/agregarbd'); ?>
            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <label for="nombre">Nombre</label>
                        <input class="form-control" id="nombre" name="nombre" type="text" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="descripcion">Descripción</label>
                        <input class="form-control" id="descripcion" name="descripcion" type="text" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="precio_compra">Precio de Compra</label>
                        <input class="form-control" id="precio_compra" name="precio_compra" type="text" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="stock">Stock</label>
                        <input class="form-control" id="stock" name="stock" type="text" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="imagen">Subir Imagen</label>
                        <input class="form-control-file" id="imagen" name="imagen" type="file" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Agregar</button>
                <a href="<?php echo base_url('producto'); ?>" class="btn btn-danger">Cancelar</a>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<!-- fin contenido -->
