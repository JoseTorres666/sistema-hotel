<!-- inicio contenido -->
<div class="container-fluid">
    <div class="row">
        <div class="card-box table-responsive">
            <h1 class="header-title">Editar Producto</h1><br>
            <?php echo form_open_multipart('producto/actualizarbd'); ?>
            <input type="hidden" name="id" value="<?php echo $producto['id']; ?>">

            <!-- Mostrar errores de validación -->
            <?php if (session()->getFlashdata('errors')): ?>
                <div class="alert alert-danger">
                    <?php foreach (session()->getFlashdata('errors') as $error): ?>
                        <p><?php echo $error; ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <!-- Mostrar mensaje de éxito -->
            <?php if (session()->getFlashdata('success')): ?>
                <div class="alert alert-success">
                    <?php echo session()->getFlashdata('success'); ?>
                </div>
            <?php endif; ?>

            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <label for="nombre">Nombre</label>
                        <input class="form-control" id="nombre" name="nombre" type="text" value="<?php echo $producto['nombre']; ?>" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="descripcion">Descripción</label>
                        <input class="form-control" id="descripcion" name="descripcion" type="text" value="<?php echo $producto['descripcion']; ?>">
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="precio_compra">Precio de Compra</label>
                        <input class="form-control" id="precio_compra" name="precio_compra" type="text" value="<?php echo $producto['precio_compra']; ?>" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="stock">Stock</label>
                        <input class="form-control" id="stock" name="stock" type="number" value="<?php echo $producto['stock']; ?>" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="imagen">Imagen</label>
                        <input class="form-control" id="imagen" name="imagen" type="file">
                        <?php if (!empty($producto['imagen'])): ?>
                            <img src="<?php echo base_url('imagen/producto/' . $producto['imagen']); ?>" alt="Imagen actual" style="width: 100px; height: auto; margin-top: 10px;">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a href="<?php echo base_url('producto'); ?>" class="btn btn-danger">Cancelar</a>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<!-- fin contenido -->
