<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/iconos/css/all.min.css"/>
    <script src="<?php echo base_url(); ?>assets/iconos/js/all.min.js"></script>
</head>

<body class="authentication-bg bg-dark authentication-bg-pattern d-flex align-items-center pb-0 vh-100">

    <div class="account-pages w-100 mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card mb-0">
                        <div class="card-body p-4">
                            <div class="account-box">
                                <div class="account-logo-box">
                                    <div class="text-center">
                                        <a href="index.html">
                                            <img src="<?php echo base_url(); ?>assets/images/logo-dark.png" alt="" height="30">
                                        </a>
                                    </div>
                                    <h3 class="text-uppercase mb-1 mt-4 center">Iniciar sesión</h3>
                                    <p class="mb-0">Inicie sesión en su cuenta</p>
                                </div>

                                <div class="account-content mt-4">
                                    <form class="form-horizontal" method="POST" action="<?php echo base_url();?>/login/validar">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="email">Dirección de correo electrónico</label>
                                                <input class="form-control" type="email" name="email" id="email" required="" placeholder="Ingresa tu usuario">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <a href="page-recoverpw.html" class="text-muted float-right"><small>¿Olvidaste tu contraseña?</small></a>
                                                <label for="password">Contraseña</label>
                                                <input class="form-control" type="password" required="" name="password" id="password" placeholder="Ingrese tu contraseña">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row text-center mt-2">
                                            <div class="col-12">
                                                <button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit">Iniciar sesión</button>
                                            </div>
                                        </div>

                                        <?php if (session()->getFlashdata('error')) : ?>
                                            <div class="alert alert-danger" role="alert">
                                                <?= session()->getFlashdata('error') ?>
                                            </div>
                                        <?php endif; ?>

                                        <?php if (session()->getFlashdata('errors')) : ?>
                                            <div class="alert alert-danger" role="alert">
                                                <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                                                    <p><?= $error ?></p>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php endif; ?>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <script src="<?php echo base_url(); ?>assets/js/vendor.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/app.min.js"></script>
</body>

</html>
