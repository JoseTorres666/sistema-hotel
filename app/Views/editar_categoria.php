<!-- inicio contenido -->
<div class="container-fluid">
    <div class="row">
        <div class="card-box table-responsive">
            <h1 class="header-title">Editar Categoría</h1><br>
            <?php echo form_open('categoria/actualizarbd'); ?>
            <div class="form-group">
                <div class="row">
                    <input type="hidden" name="id" value="<?php echo $categoria['id']; ?>">
                    <div class="col-12 col-sm-12">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required value="<?php echo $categoria['nombre']; ?>">
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url('categoria'); ?>" class="btn btn-success">Volver</a>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <?php echo form_close(); ?>
        </div>
    </div><!-- end row -->
</div><!-- end container-fluid -->
<!-- fin contenido -->

