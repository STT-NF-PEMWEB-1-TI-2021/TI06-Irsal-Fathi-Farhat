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
                        <li class="breadcrumb-item"><a href="#">Proyek 1</a></li>
                        <li class="breadcrumb-item active">hasil_bmi</li>
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
                            <h3 class="card-title">Hasil BMI</h3>

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
                            <!DOCTYPE html>
                            <html lang="en">

                            <head>
                                <meta charset="UTF-8">
                                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
                                <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
                                <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.2.2/css/fixedHeader.dataTables.min.css">
                                <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
                                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
                                <style>
                                    @media (max-width: 768px) {
                                        #scroll {
                                            overflow: scroll hidden;
                                        }
                                    }
                                </style>
                                <title>Hasil BMI</title>
                            </head>

                            <body>
                                <?php
                                require_once 'class_bmi.php';

                                $daftarPasien = array(
                                    1 =>
                                    array(1, '2022-01-30', 'P001', 'Ahmad', 'L', 69.8, 169, 24.7, 'Kelebihan Berat Badan'),
                                    array(2, '2022-01-10', 'P002', 'Rina', 'P', 55.3, 165, 20.3, 'Normal (Ideal)'),
                                    array(3, '2022-01-11', 'P003', 'Lutfi', 'L', 45.2, 171, 15.4, 'Kekurangan Berat Badan')
                                );

                                $submit = $_POST['submit'];
                                $gender = $_POST['gender'];
                                $nama = $_POST['nama'];
                                $tmp_lahir = $_POST['tmp_lahir'];
                                $tgl_lahir = $_POST['tgl_lahir'];
                                $berat = $_POST['berat'];
                                $tinggi = $_POST['tinggi'];
                                $email = $_POST['email'];

                                $pasienBaru = new BMIPasien(count($daftarPasien) + 1, $nama, $tmp_lahir, $tgl_lahir, $email, $gender, $tinggi, $berat);
                                $pasienBaru->bmi = $pasienBaru->nilaiBMI();

                                array_push($daftarPasien, array($pasienBaru->id, $pasienBaru->tanggal, $pasienBaru->kode, $pasienBaru->nama, $pasienBaru->gender, $pasienBaru->berat, $pasienBaru->tinggi, $pasienBaru->bmi, $pasienBaru->statusBMI($pasienBaru->bmi)));
                                echo "<h1 class='fw-bold text-center'>BMI Anda adalah <span class='text-primary'>{$pasienBaru->bmi}</span></h1>";
                                ?>
                                <div id="scroll">
                                    <div class="m-auto my-5" style="display: flex; width: 800px; align-items: flex-start; justify-content: center;">
                                        <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; width: 100%; overflow-y: hidden;">
                                            <?php
                                            if ($pasienBaru->bmi <= 18.4) {
                                            ?>
                                                <div style="display: flex; min-width: 97px; justify-content: center;">
                                                    <img alt="condition-icon-underweight" src="assets/svg/bmi-underweight-male-active.svg" style="object-fit: contain; height: 100%; width: auto;">
                                                </div>
                                                <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; margin-top: 16px; text-align: center;">
                                                    <b>Kekurangan Bobot</b>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                            <?php
                                            if ($pasienBaru->bmi > 18.4) {
                                            ?>
                                                <div style="display: flex; min-width: 97px; justify-content: center;">
                                                    <img alt="condition-icon-underweight" src="assets/svg/bmi-underweight-male-inactive.svg" style="object-fit: contain; height: 100%; width: auto;">
                                                </div>
                                                <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; margin-top: 16px; text-align: center;">
                                                    <p>Kekurangan Bobot</p>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>

                                        <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; width: 100%; overflow-y: hidden;">
                                            <?php
                                            if ($pasienBaru->bmi >= 18.5 && $pasienBaru->bmi <= 23.9) {
                                            ?>
                                                <div style="display: flex; min-width: 97px; justify-content: center;">
                                                    <img alt="condition-icon-healthy" src="assets/svg/bmi-healthy-male-active.svg" style="object-fit: contain; height: 100%; width: auto;">
                                                </div>
                                                <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; margin-top: 16px; text-align: center;">
                                                    <b>Sehat</b>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                            <?php
                                            if ($pasienBaru->bmi < 18.5 || $pasienBaru->bmi > 23.9) {
                                            ?>
                                                <div style="display: flex; min-width: 97px; justify-content: center;">
                                                    <img alt="condition-icon-healthy" src="assets/svg/bmi-healthy-male-inactive.svg" style="object-fit: contain; height: 100%; width: auto;">
                                                </div>
                                                <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; margin-top: 16px; text-align: center;">
                                                    <p>Sehat</p>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>

                                        <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; width: 100%; overflow-y: hidden;">
                                            <?php
                                            if ($pasienBaru->bmi >= 24 && $pasienBaru->bmi <= 26.9) {
                                            ?>
                                                <div style="display: flex; min-width: 97px; justify-content: center;">
                                                    <img alt="condition-icon-overweight" src="assets/svg/bmi-overweight-male-active.svg" style="object-fit: contain; height: 100%; width: auto;">
                                                </div>
                                                <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; margin-top: 16px; text-align: center;">
                                                    <b>Kelebihan Bobot</b>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                            <?php
                                            if ($pasienBaru->bmi < 24 || $pasienBaru->bmi > 26.9) {
                                            ?>
                                                <div style="display: flex; min-width: 97px; justify-content: center;">
                                                    <img alt="condition-icon-overweight" src="assets/svg/bmi-overweight-male-inactive.svg" style="object-fit: contain; height: 100%; width: auto;">
                                                </div>
                                                <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; margin-top: 16px; text-align: center;">
                                                    <p>Kelebihan Bobot</p>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>

                                        <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; width: 100%; overflow-y: hidden;">
                                            <?php
                                            if ($pasienBaru->bmi >= 27.0 && $pasienBaru->bmi <= 29.9) {
                                            ?>
                                                <div style="display: flex; min-width: 97px; justify-content: center;">
                                                    <img alt="condition-icon-obese_level_1" src="assets/svg/bmi-obese_level_1-male-active.svg" style="object-fit: contain; height: 100%; width: auto;">
                                                </div>
                                                <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; margin-top: 16px; text-align: center;">
                                                    <b>Obesitas 1</b>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                            <?php
                                            if ($pasienBaru->bmi < 27.0 || $pasienBaru->bmi > 29.9) {
                                            ?>
                                                <div style="display: flex; min-width: 97px; justify-content: center;">
                                                    <img alt="condition-icon-obese_level_1" src="assets/svg/bmi-obese_level_1-male-inactive.svg" style="object-fit: contain; height: 100%; width: auto;">
                                                </div>
                                                <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; margin-top: 16px; text-align: center;">
                                                    <p>Obesitas 1</p>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>

                                        <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; width: 100%; overflow-y: hidden;">
                                            <?php
                                            if ($pasienBaru->bmi >= 30.0) {
                                            ?>
                                                <div style="display: flex; min-width: 97px; justify-content: center;">
                                                    <img alt="condition-icon-obese_level_2" src="assets/svg/bmi-obese_level_2-male-active.svg" style="object-fit: contain; height: 100%; width: auto;">
                                                </div>
                                                <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; margin-top: 16px; text-align: center;">
                                                    <b>Obesitas 2</b>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                            <?php
                                            if ($pasienBaru->bmi < 30.0) {
                                            ?>
                                                <div style="display: flex; min-width: 97px; justify-content: center;">
                                                    <img alt="condition-icon-obese_level_2" src="assets/svg/bmi-obese_level_2-male-inactive.svg" style="object-fit: contain; height: 100%; width: auto;">
                                                </div>
                                                <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; margin-top: 16px; text-align: center;">
                                                    <p>Obesitas 2</p>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>

                                <table class="example display nowrap table-striped table-bordered table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal Periksa</th>
                                            <th>Kode Pasien</th>
                                            <th>Nama Pasien</th>
                                            <th>Gender</th>
                                            <th>Berat (kg)</th>
                                            <th>Tinggi (cm)</th>
                                            <th>Nilai BMI</th>
                                            <th>Status BMI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($daftarPasien as $pasien) {
                                            echo "<tr>";
                                            echo "<td>" . $pasien[0] . "</td>";
                                            echo "<td>" . $pasien[1] . "</td>";
                                            echo "<td>" . $pasien[2] . "</td>";
                                            echo "<td>" . $pasien[3] . "</td>";
                                            echo "<td>" . $pasien[4] . "</td>";
                                            echo "<td>" . $pasien[5] . "</td>";
                                            echo "<td>" . $pasien[6] . "</td>";
                                            echo "<td>" . $pasien[7] . "</td>";
                                            echo "<td>" . $pasien[8] . "</td>";
                                            echo "</tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>

                                <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
                                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
                                <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
                                <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
                                <script src="https://cdn.datatables.net/fixedheader/3.2.2/js/dataTables.fixedHeader.min.js"></script>
                                <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
                                <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap.min.js"></script>
                                <script type="text/javascript">
                                    $(document).ready(function() {
                                        var table = $('.example').DataTable({
                                            responsive: true
                                        });

                                        new $.fn.dataTable.FixedHeader(table);
                                    });
                                </script>
                            </body>

                            </html>
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