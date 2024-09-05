<!-- inicio contenido -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1 class="header-title">Agregar Huésped</h1>
                </div>
                <div class="card-body">
                    <?php echo form_open_multipart('huesped/agregarbd'); ?>
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="nombres">Nombres</label>
                                <input class="form-control" id="nombres" name="nombres" type="text" placeholder="Ingrese los nombres" required>
                            </div>
                            <div class="col-md-6">
                                <label for="apellidos">Apellidos</label>
                                <input class="form-control" id="apellidos" name="apellidos" type="text" placeholder="Ingrese los apellidos" required>
                            </div>
                            <div class="col-md-6">
                                <label for="nacionalidad">Nacionalidad</label>
                                <input class="form-control" id="nacionalidad" name="nacionalidad" type="text" placeholder="Ingrese la nacionalidad" required>
                            </div>
                            <div class="col-md-6">
                                <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                                <input class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" type="date" required>
                            </div>
                            <div class="col-md-6">
                                <label for="estado_civil">Estado Civil</label>
                                <select class="form-control" id="estado_civil" name="estado_civil" required>
                                    <option value="" disabled selected>Seleccione su estado civil</option>
                                    <option value="soltero">Soltero</option>
                                    <option value="casado">Casado</option>
                                    <option value="viudo">Viudo</option>
                                    <option value="divorciado">Divorciado</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="profesion">Profesión</label>
                                <input class="form-control" id="profesion" name="profesion" type="text" placeholder="Ingrese su profesión" required>
                            </div>
                            <div class="col-md-6">
                                <label for="tipo_documento">Tipo de Documento</label>
                                <select class="form-control" id="tipo_documento" name="tipo_documento" required>
                                    <option value="" disabled selected>Seleccione el tipo de documento</option>
                                    <option value="cedula_identidad">CI (Cédula de Identidad)</option>
                                    <option value="dni">DNI (Documento Nacional de Identidad)</option>
                                    <option value="pasaporte">Pasaporte</option>
                                    <option value="licencia_conducir">Licencia de Conducir</option>
                                    <option value="tarjeta_residencia">Tarjeta de Residencia</option>
                                    <option value="certificado_nacimiento">Certificado de Nacimiento</option>
                                    <option value="visa">Visa</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="numero_documento">Número de Documento</label>
                                <input class="form-control" id="numero_documento" name="numero_documento" type="text" placeholder="Ingrese el número de documento" required>
                            </div>
                            <div class="col-md-6">
                                <label for="procedencia">Procedencia</label>
                                <input class="form-control" id="procedencia" name="procedencia" type="text" placeholder="Ingrese la procedencia" required>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Agregar</button>
                        <a href="<?php echo base_url('huesped'); ?>" class="btn btn-secondary">Cancelar</a>
                    </div>
                    
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- fin contenido -->
