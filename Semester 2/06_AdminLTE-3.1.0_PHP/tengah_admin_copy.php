<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Program Studi Teknik Informatika</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="ti.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Praktikum</a></li>
                        <li class="breadcrumb-item"><a href="#">Praktikum 3</a></li>
                        <li class="breadcrumb-item"><a href="#">admin</a></li>
                        <li class="breadcrumb-item active">tengah</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tengah</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="layoutSidenav">
                                <div id="layoutSidenav_nav">
                                    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                                        <div class="sb-sidenav-menu">
                                            <div class="nav">
                                                <div class="sb-sidenav-menu-heading">Core</div>
                                                <a class="nav-link" href="#">
                                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                                    Dashboard
                                                </a>
                                                <div class="sb-sidenav-menu-heading">Interface</div>
                                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                                    Layouts
                                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                                </a>
                                                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                                    <nav class="sb-sidenav-menu-nested nav">
                                                        <a class="nav-link" href="#">Static Navigation</a>
                                                        <a class="nav-link" href="#">Light Sidenav</a>
                                                    </nav>
                                                </div>
                                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                                    Pages
                                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                                </a>
                                                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                                            Authentication
                                                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                                        </a>
                                                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                                            <nav class="sb-sidenav-menu-nested nav">
                                                                <a class="nav-link" href="#">Login</a>
                                                                <a class="nav-link" href="#">Register</a>
                                                                <a class="nav-link" href="#">Forgot Password</a>
                                                            </nav>
                                                        </div>
                                                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                                            Error
                                                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                                        </a>
                                                        <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                                            <nav class="sb-sidenav-menu-nested nav">
                                                                <a class="nav-link" href="#">401 Page</a>
                                                                <a class="nav-link" href="#">404 Page</a>
                                                                <a class="nav-link" href="#">500 Page</a>
                                                            </nav>
                                                        </div>
                                                    </nav>
                                                </div>
                                                <div class="sb-sidenav-menu-heading">Addons</div>
                                                <a class="nav-link" href="#">
                                                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                                    Charts
                                                </a>
                                                <a class="nav-link" href="#">
                                                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                                    Tables
                                                </a>
                                            </div>
                                        </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
include_once 'footer.php';
?>