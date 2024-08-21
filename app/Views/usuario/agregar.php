<!-- inicio contenido -->
<div class="container-fluid">
    <div class="row">
        <div class="card-box table-responsive">
            <h1 class="header-title">Agregar Usuario</h1><br>
            <?php echo form_open_multipart('usuario/agregarbd'); ?>
            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <label for="nombres">Nombres</label>
                        <input class="form-control" id="nombres" name="nombres" type="text" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="apellido_paterno">Apellido Paterno</label>
                        <input class="form-control" id="apellido_paterno" name="apellido_paterno" type="text" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="apellido_materno">Apellido Materno</label>
                        <input class="form-control" id="apellido_materno" name="apellido_materno" type="text">
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="telefono">Teléfono</label>
                        <input class="form-control" id="telefono" name="telefono" type="text" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="rol">Rol</label>
                        <select class="form-control" id="rol" name="rol" required>
                            <option value="">Elige un Rol...</option>
                            <option value="administrador">Administrador</option>
                            <option value="recepcionista">Recepcionista</option>
                        </select>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="email">Email</label>
                        <input class="form-control" id="email" name="email" type="email" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="password">Password</label>
                        <input class="form-control" id="password" name="password" type="password" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Agregar</button>
                <a href="<?php echo base_url('usuario'); ?>" class="btn btn-danger">Cancelar</a>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<!-- fin contenido -->