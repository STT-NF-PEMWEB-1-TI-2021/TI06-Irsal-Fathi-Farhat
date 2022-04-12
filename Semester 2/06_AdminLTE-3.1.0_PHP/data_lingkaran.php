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
                        <li class="breadcrumb-item"><a href="#">Praktikum 4</a></li>
                        <li class="breadcrumb-item active">data_lingkaran</li>
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
                            <h3 class="card-title">Data Lingkaran</h3>

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
                            <?php
                            require_once "class_lingkaran.php";
                            echo "NILAI PHI " . Lingkaran::PHI;
                            $lingkar1 = new Lingkaran(10);
                            $lingkar2 = new Lingkaran(4);
                            echo "<br>Luas Lingkaran I " . $lingkar1->getLuas();
                            echo "<br>Luas Lingkaran II " . $lingkar2->getLuas();
                            echo "<br>Keliling Lingkaran I " . $lingkar1->getKeliling();
                            echo "<br>Keliling Lingkaran II " . $lingkar2->getKeliling();
                            ?>
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