<?php 
$estados = [
    0 => ['class' => 'eliminado', 'texto' => 'Eliminado'],
    1 => ['class' => 'disponible', 'texto' => 'Disponible'],
    2 => ['class' => 'limpieza', 'texto' => 'Limpieza'],
    3 => ['class' => 'ocupado', 'texto' => 'Ocupado'],
    4 => ['class' => 'mantenimiento', 'texto' => 'Mantenimiento'],
    5 => ['class' => 'reservado', 'texto' => 'Reservado'],
];
?>

<div class="container-fluid">
    <div class="row">
        <div class="card-box table-responsive">
            <h1 class="header-title">Lista de habitaciones</h1>
            <br>
            <div>
                <a href="<?php echo base_url('habitacion/agregar'); ?>">
                    <button type="button" class="btn btn-primary">Agregar habitación</button>
                </a>
                <a href="<?php echo base_url('habitacion/eliminados'); ?>">
                    <button type="button" class="btn btn-dark">Habitaciones eliminadas</button>
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
                        <th>Estado</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $contador = 1;
                    foreach ($habitaciones as $habitacion) {
                        // Obtener el estado actual
                        $estado = $estados[$habitacion['estado']] ?? ['class' => 'desconocido', 'texto' => 'Desconocido'];
                    ?>
                    <tr>
                        <td><?php echo $contador; ?></td>
                        <td><?php echo htmlspecialchars($habitacion['numero']); ?></td>
                        <td><?php echo htmlspecialchars($habitacion['precio']); ?></td>
                        <td><?php echo htmlspecialchars($habitacion['piso']); ?></td>
                        <td><?php echo htmlspecialchars($habitacion['categoria']); ?></td>
                        <td class="<?php echo htmlspecialchars($estado['class']); ?>"><?php echo htmlspecialchars($estado['texto']); ?></td>
                        <td>
                            <a href="<?php echo base_url('habitacion/editar/'.$habitacion['id']); ?>" class="btn btn-warning">
                                <i class="mdi mdi-eyedropper" style="font-size: 20px;"></i>
                            </a>
                            <a href="#" data-href="<?php echo base_url('habitacion/eliminarbd/'.$habitacion['id']); ?>" 
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
    </div>
</div>

<!-- Modal de Confirmación de Eliminación -->
<div class="modal fade" id="modal-confirma" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Eliminar Registro</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>¿Estás seguro de eliminar este registro?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <a href="#" class="btn btn-danger btn-ok">Eliminar</a>
      </div>
    </div>
  </div>
</div>

