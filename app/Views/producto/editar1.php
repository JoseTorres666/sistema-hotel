<!-- inicio contenido -->
<div class="container-fluid">
    <div class="row">
        <div class="card-box table-responsive">
            <h1 class="header-title">Editar Producto</h1>
            <?php if (session()->get('errors')): ?>
                <div class="alert alert-danger">
                    <?php foreach (session()->get('errors') as $error): ?>
                        <p><?= $error ?></p>
                    <?php endforeach ?>
                </div>
            <?php endif ?>
            <?php if (session()->get('success')): ?>
                <div class="alert alert-success">
                    <?= session()->get('success') ?>
                </div>
            <?php endif ?>
            <?php form_open('producto/actualizarbd'); ?>
            <input type="hidden" name="idproducto" value="<?php echo $producto['id']; ?>">
            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <label>Nombre</label>
                        <input class="form-control" id="nombre" name="nombre"  value="<?php echo $producto['nombre']; ?>" type="text" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label>Categoría</label>
                        <select class="form-control" id="id_categoria" name="id_categoria" required>
                            <option value="">Seleccionar Categoría</option>
                            <?php foreach ($categorias as $categoria): ?>
                                <option value="<?= $categoria['id']; ?>" <?= $categoria['id'] == $producto['id_categoria'] ? 'selected' : '' ?>><?= $categoria['nombre']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label>Precio de Venta</label>
                        <input class="form-control" id="precio_venta" name="precio_venta" value="<?php echo $producto['precio_venta']; ?>" type="text" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label>Precio de Compra</label>
                        <input class="form-control" id="precio_compra" name="precio_compra" value="<?php echo $producto['precio_compra']; ?>" type="text" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label>Stock disponible</label>
                        <input class="form-control" id="stock" name="stock" value="<?php echo $producto['stock']; ?>" type="text" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a href="<?= base_url('producto'); ?>" class="btn btn-danger">Cancelar</a>
            </div>
            <?= form_close(); ?>
        </div>
    </div><!-- end row -->
</div><!-- end container-fluid -->
<!-- fin contenido -->
