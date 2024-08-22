<!-- inicio contenido -->
<div class="container-fluid">
    <div class="row">
        <div class="card-box table-responsive">
            <h1 class="header-title"> Lista de huesped </h1> </br>
            <div>
                <a href="<?php echo base_url('huesped/agregar'); ?>">
                    <button type="button" class="btn btn-primary">Agregar huesped</button>
                </a>
                <a href="<?php echo base_url('huesped/eliminados'); ?>">
                    <button type="button" class="btn btn-dark">huesped Eliminados</button>
                </a>
            </div>
            </br>
            <table id="datatable-buttons" class="table table-bordered table-striped text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Nombres </th>
                        <th>Apellidos</th>
                        <th>Nacionalidad</th>
                        <th>Edad</th>
                        <th>Estado civuil</th>
                        <th>Profecion</th>
                        <th>Tipo de documento</th>
                        <th>Numero de documento</th>
                        <th>Procedencia</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $contador = 1;
                    foreach ($huespedes as $huesped) { ?>
                    <tr>
                        <td><?php echo $contador; ?></td>
                        <td><?php echo $huesped['nombres']; ?></td>
                        <td><?php echo $huesped['apellidos']; ?></td>
                        <td><?php echo $huesped['nacionalidad']; ?></td>
                        <td><?php echo $huesped['fecha_nacimiento']; ?></td>
                        <td><?php echo $huesped['estado_civil']; ?></td>
                        <td><?php echo $huesped['profesion']; ?></td>
                        <td><?php echo $huesped['tipo_documento']; ?></td>
                        <td><?php echo $huesped['numero_documento']; ?></td>
                        <td><?php echo $huesped['procedencia']; ?></td>
                        <td>
                            <a href="<?php echo base_url('huesped/editar/'.$huesped['id']); ?>" class="btn btn-warning"><i class="fa-solid fa-pencil"></i></a>
                        </td>
                        <td>
                            <a href="#" data-href="<?php echo base_url('huesped/eliminarbd/'.$huesped['id']); ?>" 
                            data-toggle="modal" data-target="#modal-confirma" data-placement="top" 
                            title="Eliminar Registro" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
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
        <h5 class="modal-title" id="exampleModalLongTitle">Eliminar huesped</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>¿Estás seguro de eliminar este huesped?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <a class="btn btn-primary btn-ok">Sí</a>
      </div>
    </div>
  </div>
</div>