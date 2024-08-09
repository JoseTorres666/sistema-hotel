<!-- inicio contenido -->
<div class="container-fluid">
    <div class="row">
        <div class="card-box table-responsive">
            <h1 class="header-title">Lista de Usuarios Eliminados</h1></br>
            <div>
                <a href="<?php echo base_url('usuario'); ?>">
                    <button type="button" class="btn btn-dark">Usuarios Activos</button>
                </a>
            </div>
            </br>
            <table id="datatable-buttons" class="table table-bordered table-striped text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Nombres</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Teléfono</th>
                        <th>Sueldo</th>
                        <th>Rol</th>
                        <th>Email</th>
                        <th>Integrar</th>
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
                          <a href="#" data-href="<?php echo base_url('usuario/integrar/'.$usuario['id']); ?>" 
                            data-toggle="modal" data-target="#modal-confirma" data-placement="top" 
                            title="Reingresar Registro" class="btn btn-purple">
                            <i class="mdi mdi-recycle"style="font-size: 20px"></i>
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
<!-- Modal -->
<div class="modal fade" id="modal-confirma" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Reingresar usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>¿Estás seguro de reingresar a este usuario?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <a class="btn btn-primary btn-ok">Sí</a>
      </div>
    </div>
  </div>
</div>
