<?php 
$user_session = session();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>Hostal Versalles</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico">

    <!-- CSS de terceros -->
    <link href="<?php echo base_url(); ?>assets/libs/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/libs/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/libs/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />

    <!-- CSS de la aplicación -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/iconos/css/all.min.css"/>
    <script src="<?php echo base_url(); ?>assets/iconos/js/all.min.js"></script>
</head>

<body>
    <!-- Inicio de la barra superior -->
    <div class="navbar-custom">
        <ul class="list-unstyled topnav-menu float-right mb-0">
            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fe-settings noti-icon"></i> <?php echo $user_session->nombre; ?>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a href="#" class="dropdown-item notify-item">Cerrar sesión</a>
                </div>
            </li>
        </ul>
    </div>

    
    <!-- Fin de la barra superior -->

    <!-- Inicio de la página -->
    <div id="wrapper">
        <!-- Barra lateral izquierda -->
        <div class="left-side-menu">
            <div class="slimscroll-menu">
                <div id="sidebar-menu">
                    <ul class="metismenu" id="side-menu">
                        <li class="menu-title">Apps</li>

                        <li>
                            <a href="<?php echo base_url(); ?>Usuario">
                                <i class="fa-solid fa-user"></i>
                                <span> Usuarios </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <span> Productos </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="<?php echo base_url(); ?>Producto">Productos</a></li>
                                <li><a href="<?php echo base_url(); ?>Categoria">Categoría</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="taskboard.html">
                                <i class="fe-file-text"></i> 
                                <span> Tablero de tareas </span>
                            </a>
                        </li>

                        <li>
                            <a href="todo.html">
                                <i class="fe-layers"></i>
                                <span> Todo </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Fin de la barra lateral -->

                <div class="clearfix"></div>
            </div>
            <!-- Fin de la barra lateral izquierda -->
        </div>
        <!-- Fin de la barra lateral izquierda -->

        <!-- Inicio del contenido de la página -->
        <div class="content-page">
            <div class="content">
                <!-- contenido de la página -->
                <!-- fin encabezado -->
               