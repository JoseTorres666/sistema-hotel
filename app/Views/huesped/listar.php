<div class="container-fluid">
    <div class="row">
        <div class="card-box table-responsive">
            <h1 class="header-title">Lista de huéspedes</h1>
            
            <!-- Botones de acción -->
            <div class="mb-3">
                <a href="<?= base_url('huesped/agregar'); ?>" class="btn btn-primary">Agregar huésped</a>
                <a href="<?= base_url('huesped/eliminados'); ?>" class="btn btn-dark">Huéspedes eliminados</a>
            </div>

            <!-- Mensajes de éxito -->
            <?php if (session()->getFlashdata('message')) : ?>
                <div class="alert alert-success">
                    <?= session()->getFlashdata('message') ?>
                </div>
            <?php endif; ?>

            <!-- Tabla de huéspedes -->
            <table id="datatable-buttons" class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Nacionalidad</th>
                        <th>Edad</th>
                        <th>Número de documento</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $contador = 1; ?>
                    <?php foreach ($huespedes as $huesped) : ?>
                        <tr>
                            <td><?= $contador++; ?></td>
                            <td><?= $huesped['nombres']; ?></td>
                            <td><?= $huesped['apellidos']; ?></td>
                            <td><?= $huesped['nacionalidad']; ?></td>
                            <td><?= $huesped['edad']; ?></td>
                            <td><?= $huesped['numero_documento']; ?></td>
                            <td>
                                <a href="<?= base_url('huesped/editar/' . $huesped['id']); ?>" class="btn btn-warning">
                                    <i class="mdi mdi-pencil" style="font-size: 20px;"></i>
                                </a>
                                <a href="#" data-href="<?= base_url('huesped/eliminarbd/' . $huesped['id']); ?>" 
                                   data-toggle="modal" data-target="#modal-confirma" class="btn btn-danger">
                                    <i class="mdi mdi-delete" style="font-size: 20px;"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal de confirmación -->
<div class="modal fade" id="modal-confirma" tabindex="-1" role="dialog" aria-labelledby="modalConfirmaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Eliminar huésped</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>¿Estás seguro de eliminar este huésped?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <a class="btn btn-primary btn-ok">Sí</a>
            </div>
        </div>
    </div>
</div>
