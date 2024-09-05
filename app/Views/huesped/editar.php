<!-- inicio contenido -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1 class="header-title">Editar Huésped</h1>
                </div>
                <div class="card-body">
                    <?php echo form_open_multipart('huesped/actualizarbd'); ?>
                    
                    <!-- Campo oculto para el ID del huésped -->
                    <input type="hidden" name="id" value="<?php echo $huesped['id']; ?>">
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="nombres">Nombres</label>
                                <input class="form-control" id="nombres" name="nombres" type="text" value="<?php echo set_value('nombres', $huesped['nombres']); ?>" placeholder="Ingrese los nombres" required>
                            </div>
                            <div class="col-md-6">
                                <label for="apellidos">Apellidos</label>
                                <input class="form-control" id="apellidos" name="apellidos" type="text" value="<?php echo set_value('apellidos', $huesped['apellidos']); ?>" placeholder="Ingrese los apellidos" required>
                            </div>
                            <div class="col-md-6">
                                <label for="nacionalidad">Nacionalidad</label>
                                <input class="form-control" id="nacionalidad" name="nacionalidad" type="text" value="<?php echo set_value('nacionalidad', $huesped['nacionalidad']); ?>" placeholder="Ingrese la nacionalidad" required>
                            </div>
                            <div class="col-md-6">
                                <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                                <input class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" type="date" value="<?php echo set_value('fecha_nacimiento', $huesped['fecha_nacimiento']); ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label for="estado_civil">Estado Civil</label>
                                <select class="form-control" id="estado_civil" name="estado_civil" required>
                                    <option value="" disabled>Seleccione su estado civil</option>
                                    <option value="soltero" <?php echo set_select('estado_civil', 'soltero', $huesped['estado_civil'] == 'soltero'); ?>>Soltero</option>
                                    <option value="casado" <?php echo set_select('estado_civil', 'casado', $huesped['estado_civil'] == 'casado'); ?>>Casado</option>
                                    <option value="viudo" <?php echo set_select('estado_civil', 'viudo', $huesped['estado_civil'] == 'viudo'); ?>>Viudo</option>
                                    <option value="divorciado" <?php echo set_select('estado_civil', 'divorciado', $huesped['estado_civil'] == 'divorciado'); ?>>Divorciado</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="profesion">Profesión</label>
                                <input class="form-control" id="profesion" name="profesion" type="text" value="<?php echo set_value('profesion', $huesped['profesion']); ?>" placeholder="Ingrese su profesión" required>
                            </div>
                            <div class="col-md-6">
                                <label for="tipo_documento">Tipo de Documento</label>
                                <select class="form-control" id="tipo_documento" name="tipo_documento" required>
                                    <option value="" disabled>Seleccione el tipo de documento</option>
                                    <option value="cedula_identidad" <?php echo set_select('tipo_documento', 'cedula_identidad', $huesped['tipo_documento'] == 'cedula_identidad'); ?>>CI (Cédula de Identidad)</option>
                                    <option value="dni" <?php echo set_select('tipo_documento', 'dni', $huesped['tipo_documento'] == 'dni'); ?>>DNI (Documento Nacional de Identidad)</option>
                                    <option value="pasaporte" <?php echo set_select('tipo_documento', 'pasaporte', $huesped['tipo_documento'] == 'pasaporte'); ?>>Pasaporte</option>
                                    <option value="licencia_conducir" <?php echo set_select('tipo_documento', 'licencia_conducir', $huesped['tipo_documento'] == 'licencia_conducir'); ?>>Licencia de Conducir</option>
                                    <option value="tarjeta_residencia" <?php echo set_select('tipo_documento', 'tarjeta_residencia', $huesped['tipo_documento'] == 'tarjeta_residencia'); ?>>Tarjeta de Residencia</option>
                                    <option value="certificado_nacimiento" <?php echo set_select('tipo_documento', 'certificado_nacimiento', $huesped['tipo_documento'] == 'certificado_nacimiento'); ?>>Certificado de Nacimiento</option>
                                    <option value="visa" <?php echo set_select('tipo_documento', 'visa', $huesped['tipo_documento'] == 'visa'); ?>>Visa</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="numero_documento">Número de Documento</label>
                                <input class="form-control" id="numero_documento" name="numero_documento" type="text" value="<?php echo set_value('numero_documento', $huesped['numero_documento']); ?>" placeholder="Ingrese el número de documento" required>
                            </div>
                            <div class="col-md-6">
                                <label for="procedencia">Procedencia</label>
                                <input class="form-control" id="procedencia" name="procedencia" type="text" value="<?php echo set_value('procedencia', $huesped['procedencia']); ?>" placeholder="Ingrese la procedencia" required>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                        <a href="<?php echo base_url('huesped'); ?>" class="btn btn-secondary">Cancelar</a>
                    </div>
                    
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- fin contenido -->
