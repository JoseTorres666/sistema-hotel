<!-- inicio contenido -->
<div class="container-fluid">
    <div class="row">
        <div class="card-box table-responsive">
            <h1 class="header-title"> Lista de Usuario </h1> </br>
            <div>
                <a href="<?php echo base_url('usuario/agregar'); ?>">
                    <button type="button" class="btn btn-primary">Agregar Usuario</button>
                </a>
                <a href="<?php echo base_url('usuario/eliminados'); ?>">
                    <button type="button" class="btn btn-dark">Usuarios Eliminados</button>
                </a>
            </div>
            </br>
            <table id="datatable-buttons" class="table table-bordered table-striped text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Nombres </th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Teléfono</th>
                        <th>Sueldo</th>
                        <th>Rol</th>
                        <th>Email</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $contador = 1;
                    foreach ($usuarios as $usuario) { ?>
                    <tr>
                        <td><?php echo $contador; ?></td>
                        <td><?php echo $usuario['nombres']; ?></td>
                        <td><?php echo $usuario['apellido_paterno']; ?></td>
                        <td><?php echo $usuario['apellido_materno']; ?></td>
                        <td><?php echo $usuario['telefono']; ?></td>
                        <td><?php echo $usuario['sueldo']; ?></td>
                        <td><?php echo $usuario['rol']; ?></td>
                        <td><?php echo $usuario['email']; ?></td>
                        <td>
                            <a href="<?php echo base_url('usuario/editar/'.$usuario['id']); ?>" class="btn btn-warning"><i class=" mdi mdi-eyedropper" style="font-size: 20px;"></i></a>
                        </td>
                        <td>
                          <a href="#" data-href="<?php echo base_url('usuario/eliminarbd/'.$usuario['id']); ?>" 
                            data-toggle="modal" data-target="#modal-confirma" data-placement="top" 
                            title="Eliminar Registro" class="btn btn-danger">
                            <i class="mdi mdi-delete" style="font-size: 20px;"></i>
                          </a>
                        </td>

                    </tr>
                    <?php
                    $contador++;
                    } ?>
                </tbody>
            </table>
        </div>
    </div><!-- end row -->
</div> <!-- end container-fluid -->
<!-- fin contenido -->
<div class="modal fade bs-example-modal-center" id="modal-confirma" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title mt-0">Eliminar Usuario</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>¿Estás seguro de eliminar este Usuario?</p>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <a class="btn btn-primary btn-ok" href="#">Sí</a>
            </div>
        </div>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->