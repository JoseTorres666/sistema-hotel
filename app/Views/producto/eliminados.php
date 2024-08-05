<!-- inicio contenido -->
<!-- Start Content-->
<div class="container-fluid">
    <div class="row">
        <div class="card-box table-responsive">
            <h1 class="header-title">Productos Eliminados</h1>
            <br>
            <div>
                <a href="<?php echo base_url('producto'); ?>">
                    <button type="button" class="btn btn-dark">Productos Activos</button>
                </a>
            </div>
            <br>
            <table id="datatable-buttons" class="table table-bordered table-striped text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <!-- el id="datatable-buttons" es para la descarga del archivo js -->
                    <tr>
                        <th>N°</th>
                        <th>Nombre</th>
                        <th>Categoría</th>
                        <th>Precio de Venta</th>
                        <th>Precio de Compra</th>
                        <th>Stock disponible</th>
                        <th>Reintegrar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $contador = 1;
                    foreach ($productos as $producto) { ?>
                    <tr>
                        <td><?php echo $contador; ?></td>
                        <td><?php echo $producto['nombre']; ?></td>
                        <td><?php echo $producto['categoria_nombre']; ?></td>
                        <td><?php echo $producto['precio_venta']; ?></td>
                        <td><?php echo $producto['precio_compra']; ?></td>
                        <td><?php echo $producto['stock']; ?></td>
                        <td>
                            <a href="#" data-href="<?php echo base_url('producto/integrar/'.$producto['id']); ?>" 
                               data-toggle="modal" data-target="#modal-confirma" data-placement="top" 
                               title="Reintegrar Producto" class="btn btn-primary">
                               <i class="fa-solid fa-recycle"></i>
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
        <h5 class="modal-title" id="exampleModalLongTitle">Eliminar Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>¿Estás seguro de eliminar este producto?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <a class="btn btn-primary btn-ok">Sí</a>
      </div>
    </div>
  </div>
</div>
