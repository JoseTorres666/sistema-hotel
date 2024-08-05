<div class="container-fluid">
    <div class="row">
        <div class="card-box table-responsive">
            <h1 class="header-title">Editar Categoría</h1>
            <?php echo form_open('categoria/actualizarbd'); ?>
            <div class="form-group">
                <div class="row">
                    <input type="hidden" name="id" value="<?php echo $categoria['id']; ?>">
                    <div class="col-12 col-sm-12">
                        <label>Nombre</label>
                        <input class="form-control" id="nombre" name="nombre" type="text" value="<?php echo $categoria['nombre']; ?>" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a href="<?php echo base_url('categoria'); ?>" class="btn btn-danger">Volver</a>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
