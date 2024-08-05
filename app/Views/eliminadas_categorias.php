<!-- inicio contenido -->
<div class="container-fluid">
    <div class="row">
        <div class="card-box table-responsive">
            <h1 class="header-title">Lista de Categorias Eliminadas</h1></br>
            <div>
                <a href="<?php echo base_url('categoria'); ?>">
                    <button type="button" class="btn btn-dark">Categorias Activas</button>
                </a>
            </div>
            </br>
            <table id="datatable-buttons" class="table table-bordered table-striped text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
            <thead>
                    <tr>
                        <th>N°</th>
                        <th>Nombre</th>
                        <th>Reintegrar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $contador = 1;
                    foreach ($categorias as $categoria) { ?>
                    <tr>
                        <td><?php echo $contador; ?></td>
                        <td><?php echo $categoria['nombre']; ?></td>
                        <td>
                            <a href="#" data-href="<?php echo base_url('categoria/integrar/'.$categoria['id']); ?>" 
                            data-toggle="modal" data-target="#modal-confirma" data-placement="top" 
                            title="Reingresar Categoría" class="btn btn-purple"><i class="fa-solid fa-address-book"></i></a>
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
                <h5 class="modal-title" id="exampleModalLongTitle">Reintegrar Categoría</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>¿Estás seguro de reintegrar esta categoría?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-primary btn-ok">Sí</a>
            </div>
        </div>
    </div>
</div>
<!-- fin contenido -->