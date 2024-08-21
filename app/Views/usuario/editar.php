<!-- inicio contenido -->
<div class="container-fluid">
    <div class="row">
        <div class="card-box table-responsive">
            <h1 class="header-title">Editar Usuario</h1><br>
            <?php echo form_open_multipart('usuario/actualizarbd'); ?>
            <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">
            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <label for="nombres">Nombres</label>
                        <input class="form-control" id="nombres" name="nombres" type="text" value="<?php echo $usuario['nombres']; ?>" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="apellido_paterno">Apellido Paterno</label>
                        <input class="form-control" id="apellido_paterno" name="apellido_paterno" type="text" value="<?php echo $usuario['apellido_paterno']; ?>">
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="apellido_materno">Apellido Materno</label>
                        <input class="form-control" id="apellido_materno" name="apellido_materno" type="text" value="<?php echo $usuario['apellido_materno']; ?>">
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="telefono">Teléfono</label>
                        <input class="form-control" id="telefono" name="telefono" type="text" value="<?php echo $usuario['telefono']; ?>" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="rol">Rol</label>
                        <input class="form-control" id="rol" name="rol" type="text" value="<?php echo $usuario['rol']; ?>" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="email">Email</label>
                        <input class="form-control" id="email" name="email" type="email" value="<?php echo $usuario['email']; ?>" required>
                    </div>
                    
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a href="<?php echo base_url('usuario'); ?>" class="btn btn-danger">Cancelar</a>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<!-- fin contenido -->