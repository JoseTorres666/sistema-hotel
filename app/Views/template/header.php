<?php
$session_user = \Config\Services::session();
$user_session = $session_user->get();?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Hostal Versalles</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url();?>/assets/images/favicon.ico">

        <!-- third party css -->
        <link href="<?php echo base_url();?>/assets/libs/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>/assets/libs/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>/assets/libs/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet" />

        <!-- App css -->
        <link href="<?php echo base_url();?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="<?php echo base_url();?>/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>/assets/css/app.min.css" rel="stylesheet" type="text/css"  id="app-stylesheet" />
        

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Barra superior -->
            <div class="navbar-custom">
                
                <div class="logo-box">
                    <a href="index.html" class="logo text-center">
                        <span class="logo-lg">
                            <img src="<?php echo base_url();?><?php echo base_url();?>/assets/images/logo-light.png" alt="" height="25">
                        </span>
                        <span class="logo-sm">
                            <img src="<?php echo base_url();?><?php echo base_url();?>/assets/images/logo-sm.png" alt="" height="28">
                        </span>
                    </a>
                </div>
            </div>
    <!-- Fin de la barra superior -->
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo htmlspecialchars($user_session['nombres'] ?? 'Ningún usuario'); ?>
                            <?php echo htmlspecialchars($user_session['apellido_paterno'] ?? ''); ?>
                            <?php echo htmlspecialchars($user_session['rol'] ?? ''); ?>
                            <i class="fe-settings noti-icon"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <a href="<?php echo base_url(); ?>usuario/editarpassword" class="dropdown-item notify-item">Cambiar contraseña</a>
                            <a href="<?php echo base_url(); ?>login/logout" class="dropdown-item notify-item">Cerrar sesión</a>
                        </div>
                    </li>
                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="index.html" class="logo text-center">
                        <span class="logo-lg">
                            <img src="<?php echo base_url();?>/assets/images/logo-light.png" alt="" height="25">
                            <!-- <span class="logo-lg-text-light">UBold</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-sm-text-dark">U</span> -->
                            <img src="<?php echo base_url();?>/assets/images/logo-sm.png" alt="" height="28">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile waves-effect waves-light">
                            <i class="fe-menu"></i>
                        </button>
                    </li>

                    

                </ul>
            </div>
            <!-- end Topbar -->

            
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                    <ul class="metismenu" id="side-menu">
                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-calendar-month" style="font-size: 30px;"></i>
                                <span>Reserva</span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo base_url();?>habitacion">
                                <i class="mdi mdi-exit-to-app" style="font-size: 30px;"></i>
                                <span>Recepcion</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-cart" style="font-size: 30px;"></i>
                                <span>Punto de Venta</span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo base_url();?>usuario">
                                <i class="mdi mdi-account-group" style="font-size: 30px;"></i>
                                <span> Usuarios </span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo base_url();?>huesped">
                                <i class="mdi mdi-account-group" style="font-size: 30px;"></i>
                                <span> Huesped </span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo base_url();?>producto">
                                <i class="mdi mdi-basket" style="font-size: 30px;"></i> 
                                <span> Productos </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-bed-empty" style="font-size: 30px;"></i>
                                <span>Habitaciones</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="<?php echo base_url();?>habitacion/agregar">Agregar</a></li>
                                <li><a href="<?php echo base_url();?>habitacion/listar">Editar/Eliminar</a></li>
                            </ul>
                        </li>



                    </ul>


                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <!-- Fin del contenido -->
                 
                <style>



/* Columnas ajustadas al contenido */
td {
    width: auto; /* Se ajusta al tamaño del contenido */
}

th {
    background-color: #f2f2f2;
    font-weight: bold;
    width: auto; /* Se ajusta al tamaño del contenido */
}

/* Botones ajustables */
.btn {
    padding: 8px 10px; /* Tamaño de los botones reducido */
    font-size: 14px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.btn-warning {
    background-color: #ffc107;
    color: black;
}

.btn-danger {
    background-color: #dc3545;
    color: white;
}

th {
    background-color: #f2f2f2;
    font-weight: bold;
    text-align: center; /* Centra el texto de los títulos */
}

</style>