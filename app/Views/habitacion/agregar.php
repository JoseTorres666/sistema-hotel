<!-- Inicio del contenido -->
<div class="container-fluid">
    <div class="row">
        <div class="card-box table-responsive">
            <h1 class="header-title">Agregar habitación</h1><br>
            <?php echo form_open_multipart('habitacion/agregarbd'); ?>
            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <label for="numero">Número de Habitación</label>
                        <input class="form-control" id="numero" name="numero" type="text" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="precio">Precio</label>
                        <input class="form-control" id="precio" name="precio" type="number" step="0.01" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="piso">Piso</label>
                        <input class="form-control" id="piso" name="piso" type="text" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="categoria">Categoría</label>
                        <input class="form-control" id="categoria" name="categoria" type="text" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="estado">Estado</label>
                        <select class="form-control" id="estado" name="estado" required>
                            <option value="1">Disponible</option>
                            <option value="2">Ocupada</option>
                            <option value="3">Limpieza</option>
                            <option value="4">En Mantenimiento</option>
                            <option value="5">Reservada</option>
                        </select>
                    </div>

                   
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Agregar</button>
                <a href="<?php echo base_url('habitacion/accion'); ?>" class="btn btn-danger">Cancelar</a>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<!-- Fin del contenido -->
