<!-- inicio contenido -->
<!-- Start Content-->
<div class="container-fluid">
    <div class="row">
        <div class="card-box table-responsive">
            <h1 class="header-title">Editar Producto</h1><br>
            <?php echo form_open_multipart('producto/actualizarbd'); ?>
            <div class="form-group">
                <div class="row">
                    <input type="hidden" name="idproducto" value="<?php echo $producto['idproducto']; ?>">
                    
                    <div class="col-12 col-sm-6">
                        <label for="unidad_medida">Unidad de Medida</label>
                        <input class="form-control" id="unidad_medida" name="unidad_medida" type="text" value="<?php echo $producto['unidad_medida']; ?>" required>
                    </div>
                    
                    <div class="col-12 col-sm-6">
                        <label for="precio_venta">Precio de Venta</label>
                        <input class="form-control" id="precio_venta" name="precio_venta" type="text" value="<?php echo $producto['precio_venta']; ?>" required>
                    </div>
                    
                    <div class="col-12 col-sm-12">
                        <label for="descripcion">Descripción</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" required><?php echo $producto['descripcion']; ?></textarea>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url(); ?>/producto" class="btn btn-success">Volver</a>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <?php echo form_close(); ?>
        </div>
    </div><!-- end row -->
</div><!-- end container-fluid -->
<!-- fin contenido -->
