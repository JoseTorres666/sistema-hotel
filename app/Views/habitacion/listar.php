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
                        <th>Modificar</th>
                        <th>Eliminar</th>
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
                        <td><?php echo $habitacion['estado'] == 1 ? 'Disponible' : 'Ocupada'; ?></td>
                        <td>
                            <a href="<?php echo base_url('habitacion/editar/'.$habitacion['id']); ?>" class="btn btn-warning">
                                <i class="mdi mdi-eyedropper" style="font-size: 20px;"></i>
                            </a>
                        </td>
                        <td>
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
