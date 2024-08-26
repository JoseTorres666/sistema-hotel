<!-- Inicio del contenido -->
<div class="container-fluid">
    <div class="row">
        <div class="card-box table-responsive">
            <h1 class="header-title">Editar Habitación</h1><br>
            <?php echo form_open_multipart('habitacion/actualizarbd'); ?>
            <!-- Campo oculto para el ID de la habitación -->
            <input type="hidden" name="id" value="<?php echo $habitacion['id']; ?>">
            
            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <label for="numero">Número de Habitación</label>
                        <input class="form-control" id="numero" name="numero" type="text" value="<?php echo $habitacion['numero']; ?>" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="precio">Precio</label>
                        <input class="form-control" id="precio" name="precio" type="number" step="0.01" value="<?php echo $habitacion['precio']; ?>" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="piso">Piso</label>
                        <input class="form-control" id="piso" name="piso" type="text" value="<?php echo $habitacion['piso']; ?>" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="categoria">Categoría</label>
                        <input class="form-control" id="categoria" name="categoria" type="text" value="<?php echo $habitacion['categoria']; ?>" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="estado">Estado</label>
                        <select class="form-control" id="estado" name="estado" required>
                            <option value="1" <?php echo ($habitacion['estado'] == 1) ? 'selected' : ''; ?>>Disponible</option>
                            <option value="0" <?php echo ($habitacion['estado'] == 0) ? 'selected' : ''; ?>>Ocupada</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a href="<?php echo base_url('habitacion'); ?>" class="btn btn-danger">Cancelar</a>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<!-- Fin del contenido -->
