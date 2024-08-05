<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Hostal Versalles</title>
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico">

    <!-- third party css -->
    <link href="<?php echo base_url(); ?>assets/libs/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/libs/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/libs/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/iconos/css/all.min.css"/>
    <script src="<?php echo base_url(); ?>assets/iconos/js/all.min.js"></script>
</head>

<body>
    <!-- Begin page -->
    <div id="wrapper">
        <!-- Topbar Start -->
        <div class="navbar-custom">
            <!-- LOGO -->
            <div class="logo-box">
                <a href="index.html" class="logo text-center">
                    <span class="logo-lg">
                        <img src="<?php echo base_url(); ?>assets/images/logo-light.png" alt="" height="25">
                    </span>
                    <span class="logo-sm">
                        <img src="<?php echo base_url(); ?>assets/images/logo-sm.png" alt="" height="28">
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
                                <input type="text" class="form-control" placeholder="Buscar.">
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
                            <a>
                                <i class="fa-solid fa-cart-shopping"></i>
                                <span> Productos </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="<?php echo base_url(); ?>Producto">Productos</a></li>
                                <li><a href="<?php echo base_url(); ?>Categoria">Categoria</a></li>
                            </ul>
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
            <div class="content">
                <!-- fin escabezado -->

                
