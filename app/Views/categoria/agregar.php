<!-- inicio contenido -->
<div class="container-fluid">
    <div class="row">
        <div class="card-box table-responsive">
            <h1 class="header-title">Agregar Categoria</h1><br>
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
            <?= form_open_multipart('categoria/agregarbd'); ?>
            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <label for="nombre">Nombre</label>
                        <textarea class="form-control" id="nombre" name="nombre" required></textarea>
                    </div>
                </div>
            </div>
            <a href="<?= base_url(); ?>/categoria" class="btn btn-success">Volver</a>
            <button type="submit" class="btn btn-primary">Agregar</button>
            <?= form_close(); ?>
        </div>
    </div><!-- end row -->
</div><!-- end container-fluid -->
<!-- fin contenido -->
