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

                    <li class="d-none d-sm-block">
                            <form class="app-search">
                                <div class="app-search-box">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <div class="input-group-append">
                                            <button class="btn" type="submit">
                                                <i class="fe-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
                                    <i class="fe-sidebar"></i>
                                    <span>  Layouts </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="layouts-horizontal.html">Horizontal</a></li>
                                    <li><a href="layouts-menucollapsed.html">Menu Collapsed</a></li>
                                    <li><a href="layouts-light-sidebar.html">Light Sidebar</a></li>
                                    <li><a href="layouts-small-sidebar.html">Small Sidebar</a></li>
                                    <li><a href="layouts-boxed.html">Boxed</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="<?php echo base_url();?>/usuario">
                                    <i class="  mdi mdi-account-group"></i>
                                    <span> Usuarios </span>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo base_url();?>/producto">
                                    <i class=" mdi mdi-cart"></i> 
                                    <span> Productos </span>
                                </a>
                            </li>

                            <li>
                                <a href="taskboard.html">
                                    <i class="fe-file-text"></i> 
                                    <span> Task Board </span>
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
                 