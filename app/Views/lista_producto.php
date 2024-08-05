<!-- inicio contenido -->
                    <!-- Start Content-->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="card-box table-responsive">
                                <h1 class="header-title"> Lista de Productos </h1> </br>
                                <div>
                                    <a href="<?php echo base_url('producto/agregar'); ?>">
                                        <button type="button" class="btn btn-primary">Agregar Producto</button>
                                    </a>
                                    <a href="<?php echo base_url('producto/eliminados'); ?>">
                                        <button type="button" class="btn btn-dark">Productos Eliminados</button>
                                    </a>
                                </div>
                                </br>
                                <table id="datatable-buttons" class="table table-bordered table-striped text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <!-- el id="datatable-buttons" es para la descarga del archivo js -->
                                        <tr>
                                            <th>N°</th>
                                            <th>Descripcion</th>
                                            <th>unidad de medida</th>
                                            <th>Precio de venta</th>
                                            <th>Cantida disponoble</th>
                                            <th>Modificar</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $contador = 1;
                                        foreach ($productos as $producto) { ?>
                                        <tr>
                                            <td><?php echo $contador; ?></td>
                                            <td><?php echo $producto['descripcion']; ?></td>
                                            <td><?php echo $producto['unidad_medida']; ?></td>
                                            <td><?php echo $producto['precio_base']; ?></td>
                                            <td><?php echo $producto['cantidad_productos']; ?></td>
                                            <td>
                                                <a href="<?php echo base_url('producto/editar/'.$producto['idproducto']); ?>" class="btn btn-warning"><i class="fa-solid fa-cart-shopping"></i></a>
                                            </td>
                                            <td>
                                                <a href="#" data-href="<?php echo base_url('usuario/eliminarbd/'.$usuario['id']); ?>" 
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
                </div> <!-- end content -->
                <!-- fin contenido -->
                 <!-- Modal -->
<div class="modal fade" id="modal-confirma" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Eliminar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>¿Estás seguro de eliminar este Usuario?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <a class="btn btn-primary btn-ok">Sí</a>
      </div>
    </div>
  </div>
</div>