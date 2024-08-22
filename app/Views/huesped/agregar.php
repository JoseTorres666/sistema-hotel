<!-- inicio contenido -->
<div class="container-fluid">
    <div class="row">
        <div class="card-box table-responsive">
            <h1 class="header-title">Agregar Huésped</h1><br>
            <?php echo form_open_multipart('huesped/agregarbd'); ?>
            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <label for="nombres">Nombres</label>
                        <input class="form-control" id="nombres" name="nombres" type="text" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="apellidos">Apellidos</label>
                        <input class="form-control" id="apellidos" name="apellidos" type="text" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="nacionalidad">Nacionalidad</label>
                        <input class="form-control" id="nacionalidad" name="nacionalidad" type="text" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                        <input class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" type="date" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="estado_civil">Estado Civil</label>
                        <select class="form-control" id="estado_civil" name="estado_civil" required>
                            <option value="soltero">Soltero</option>
                            <option value="casado">Casado</option>
                            <option value="viudo">Viudo</option>
                            <option value="divorciado">Divorciado</option>
                        </select>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="profesion">Profesión</label>
                        <input class="form-control" id="profesion" name="profesion" type="text" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="tipo_documento">Tipo de Documento</label>
                        <select class="form-control" id="tipo_documento" name="tipo_documento" required>
                                <option value="cedula_identidad">CI (Cédula de Identidad)</option>
                                <option value="dni">DNI (Documento Nacional de Identidad)</option>
                                <option value="pasaporte">Pasaporte</option>
                                <option value="licencia_conducir">Licencia de Conducir</option>
                                <option value="tarjeta_residencia">Tarjeta de Residencia</option>
                                <option value="certificado_nacimiento">Certificado de Nacimiento</option>
                                <option value="visa">Visa</option>
                        </select>
                    </div>

                    <div class="col-12 col-sm-6">
                        <label for="numero_documento">Número de Documento</label>
                        <input class="form-control" id="numero_documento" name="numero_documento" type="text" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="procedencia">Procedencia</label>
                        <input class="form-control" id="procedencia" name="procedencia" type="text" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Agregar</button>
                <a href="<?php echo base_url('huesped'); ?>" class="btn btn-danger">Cancelar</a>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<!-- fin contenido -->
