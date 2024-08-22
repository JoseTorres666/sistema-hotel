<!-- inicio contenido -->
<div class="container-fluid">
    <div class="row">
        <div class="card-box table-responsive">
            <h1 class="header-title">Editar Huésped</h1><br>
            <?php echo form_open_multipart('huesped/actualizarbd'); ?>
            <!-- Campo oculto para el ID del huésped -->
            <input type="hidden" name="id" value="<?php echo $huesped['id']; ?>">
            
            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <label for="nombres">Nombres</label>
                        <input class="form-control" id="nombres" name="nombres" type="text" value="<?php echo $huesped['nombres']; ?>" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="apellidos">Apellidos</label>
                        <input class="form-control" id="apellidos" name="apellidos" type="text" value="<?php echo $huesped['apellidos']; ?>" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="nacionalidad">Nacionalidad</label>
                        <input class="form-control" id="nacionalidad" name="nacionalidad" type="text" value="<?php echo $huesped['nacionalidad']; ?>" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                        <input class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" type="date" value="<?php echo $huesped['fecha_nacimiento']; ?>" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="estado_civil">Estado Civil</label>
                        <select class="form-control" id="estado_civil" name="estado_civil" required>
                            <option value="soltero" <?php echo ($huesped['estado_civil'] == 'soltero') ? 'selected' : ''; ?>>Soltero</option>
                            <option value="casado" <?php echo ($huesped['estado_civil'] == 'casado') ? 'selected' : ''; ?>>Casado</option>
                            <option value="viudo" <?php echo ($huesped['estado_civil'] == 'viudo') ? 'selected' : ''; ?>>Viudo</option>
                            <option value="divorciado" <?php echo ($huesped['estado_civil'] == 'divorciado') ? 'selected' : ''; ?>>Divorciado</option>
                        </select>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="profesion">Profesión</label>
                        <input class="form-control" id="profesion" name="profesion" type="text" value="<?php echo $huesped['profesion']; ?>" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="tipo_documento">Tipo de Documento</label>
                        <select class="form-control" id="tipo_documento" name="tipo_documento" required>
                            <option value="cedula_identidad" <?php echo ($huesped['tipo_documento'] == 'cedula_identidad') ? 'selected' : ''; ?>>CI (Cédula de Identidad)</option>
                            <option value="dni" <?php echo ($huesped['tipo_documento'] == 'dni') ? 'selected' : ''; ?>>DNI (Documento Nacional de Identidad)</option>
                            <option value="pasaporte" <?php echo ($huesped['tipo_documento'] == 'pasaporte') ? 'selected' : ''; ?>>Pasaporte</option>
                            <option value="licencia_conducir" <?php echo ($huesped['tipo_documento'] == 'licencia_conducir') ? 'selected' : ''; ?>>Licencia de Conducir</option>
                            <option value="tarjeta_residencia" <?php echo ($huesped['tipo_documento'] == 'tarjeta_residencia') ? 'selected' : ''; ?>>Tarjeta de Residencia</option>
                            <option value="certificado_nacimiento" <?php echo ($huesped['tipo_documento'] == 'certificado_nacimiento') ? 'selected' : ''; ?>>Certificado de Nacimiento</option>
                            <option value="visa" <?php echo ($huesped['tipo_documento'] == 'visa') ? 'selected' : ''; ?>>Visa</option>
                        </select>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="numero_documento">Número de Documento</label>
                        <input class="form-control" id="numero_documento" name="numero_documento" type="text" value="<?php echo $huesped['numero_documento']; ?>" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="procedencia">Procedencia</label>
                        <input class="form-control" id="procedencia" name="procedencia" type="text" value="<?php echo $huesped['procedencia']; ?>" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a href="<?php echo base_url('huesped'); ?>" class="btn btn-danger">Cancelar</a>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<!-- fin contenido -->