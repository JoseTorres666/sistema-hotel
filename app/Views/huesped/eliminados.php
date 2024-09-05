<!-- inicio contenido -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1 class="header-title">Lista de Huéspedes Eliminados</h1>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <a href="<?php echo base_url('huesped'); ?>" class="btn btn-dark">
                            Huéspedes Activos
                        </a>
                    </div>
                    <!-- Mensaje de éxito -->
                    <?php if (session()->getFlashdata('message')) : ?>
                    <div class="alert alert-success">
                      <?= session()->getFlashdata('message') ?>
                    </div>
                      <?php endif; ?>
                    
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-bordered table-striped text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>N°</th>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Nacionalidad</th>
                                    <th>Edad</th>
                                    <th>Número de Documento</th>
                                    <th>Integrar</th>
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
                                    <td><?php echo $huesped['edad']; ?></td>
                                    <td><?php echo $huesped['numero_documento']; ?></td>
                                    <td>
                          <a href="#" data-href="<?php echo base_url('huesped/integrar/'.$huesped['id']); ?>" 
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
        <h5 class="modal-title" id="exampleModalLongTitle">Reingresar Huésped</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>¿Estás seguro de reingresar a este huésped?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <a class="btn btn-primary btn-ok">Sí</a>
      </div>
    </div>
  </div>
</div>
