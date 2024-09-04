<!-- inicio contenido -->
<div class="container-fluid">
    <div class="row">
        <div class="card-box table-responsive">
            <h1 class="header-title">Lista de Habitaciones Eliminadas</h1><br>
            <div>
                <a href="<?php echo base_url('habitacion/accion'); ?>">
                    <button type="button" class="btn btn-dark">Habitaciones Activas</button>
                </a>
            </div>
            <br>
            <table id="datatable-buttons" class="table table-bordered table-striped text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Número</th>
                        <th>Precio</th>
                        <th>Piso</th>
                        <th>Categoría</th>
                        <th>Fecha Registro</th>
                        <th>Fecha Actualización</th>
                        <th>Integrar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $contador = 1;
                    foreach ($habitaciones as $habitacion) { ?>
                    <tr>
                        <td><?php echo $contador; ?></td>
                        <td><?php echo $habitacion['numero']; ?></td>
                        <td><?php echo $habitacion['precio']; ?></td>
                        <td><?php echo $habitacion['piso']; ?></td>
                        <td><?php echo $habitacion['categoria']; ?></td>
                        <td><?php echo $habitacion['fecha_registro']; ?></td>
                        <td><?php echo $habitacion['fecha_actualizacion']; ?></td>
                        <td>
                            <a href="#" data-href="<?php echo base_url('habitacion/integrar/'.$habitacion['id']); ?>" 
                               data-toggle="modal" data-target="#modal-confirma" 
                               title="Reintegrar Habitación" class="btn btn-purple">
                                <i class="mdi mdi-recycle" style="font-size: 20px"></i>
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
<div class="modal fade" id="modal-confirma" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Reingresar Habitación</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>¿Estás seguro de reingresar esta habitación?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <a class="btn btn-primary btn-ok">Sí</a>
      </div>
    </div>
  </div>
</div>
