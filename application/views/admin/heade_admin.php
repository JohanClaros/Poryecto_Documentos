<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Prueba</title>
    <!-- base:css -->
    <link rel="stylesheet" href="<?= base_url() ?>admin_temp/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>admin_temp/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url() ?>admin_temp/css/style.css">
    <!-- endinject -->
    <link rel="stylesheet" href="<?= base_url() ?>admin_temp/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />

</head>


<body>
    <div class="container-scroller d-flex">
        <!-- partial:../../partials/_sidebar.html -->


        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">

                <li class="nav-item sidebar-category">
                    <p>Administrador</p>
                    <span></span>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>index.php/Admin">
                        <i class="mdi mdi-home menu-icon"></i>
                        <span class="menu-title">Inicio</span>
                    </a>
                </li>

               
                <!-- <li class="nav-item"> <a class="nav-link" href="<?= base_url() ?>">Clientes</a></li> -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>index.php/Login/cerrarSession">
                        <i class="mdi mdi-logout menu-icon"></i>
                        <span class="menu-title">Cerrar session</span>
                    </a>
                </li>
            </ul>

        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_navbar.html -->
            <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
                <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>

                    <h4 class="font-weight-bold mb-0 d-none d-md-block mt-1">Bienvenido, <?= $perfil->nombre ?> </h4>

                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                        <span class="mdi mdi-menu"></span>
                    </button>
                </div>

            </nav>
            <!-- partial -->


</html>