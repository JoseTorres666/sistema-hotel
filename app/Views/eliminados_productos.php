<!-- inicio contenido -->
<!-- Start Content-->
<div class="container-fluid">
    <div class="row">
        <div class="card-box table-responsive">
            <h1 class="header-title">Productos Eliminados</h1><br>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Unidad de Medida</th>
                        <th>Precio de Venta</th>
                        <th>Descripción</th>
                        <th>Fecha de Registro</th>
                        <th>Fecha de Actualización</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($productos) && is_array($productos)) : ?>
                        <?php foreach ($productos as $producto) : ?>
                            <tr>
                                <td><?php echo $producto['idproducto']; ?></td>
                                <td><?php echo $producto['unidad_medida']; ?></td>
                                <td><?php echo $producto['precio_venta']; ?></td>
                                <td><?php echo $producto['descripcion']; ?></td>
                                <td><?php echo $producto['fecha_registro']; ?></td>
                                <td><?php echo $producto['fecha_actualizacion']; ?></td>
                                <td>
                                    <a href="<?php echo base_url('producto/integrar/' . $producto['idproducto']); ?>" class="btn btn-success">Restaurar</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="7" class="text-center">No hay productos eliminados</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
            <a href="<?php echo base_url('producto'); ?>" class="btn btn-primary">Volver a Productos</a>
        </div>
    </div><!-- end row -->
</div><!-- end container-fluid -->
<!-- fin contenido -->
