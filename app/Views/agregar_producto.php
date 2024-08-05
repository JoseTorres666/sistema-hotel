<!-- inicio contenido -->
<!-- Start Content-->
<div class="container-fluid">
    <div class="row">
        <div class="card-box table-responsive">
            <h1 class="header-title">Agregar Producto</h1><br>
            <?php echo form_open_multipart('producto/agregarbd'); ?>
            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <label for="descripcion">Descripción</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" required></textarea>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="precio_venta">Unidad  de medida</label>
                        <input class="form-control" id="precio_venta" name="precio_venta" type="text" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="precio_venta">Precio de Venta</label>
                        <input class="form-control" id="precio_venta" name="precio_venta" type="text" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="precio_venta">Cantidades disponibles</label>
                        <input class="form-control" id="precio_venta" name="precio_venta" type="text" required>
                    </div>
                   
                </div>
            </div>
            <a href="<?php echo base_url(); ?>/producto" class="btn btn-success">Volver</a>
            <button type="submit" class="btn btn-primary">Agregar</button>
            <?php echo form_close(); ?>
        </div>
    </div><!-- end row -->
</div><!-- end container-fluid -->
<!-- fin contenido -->
