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
                        <li class="breadcrumb-item active">daftar_bmi</li>
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
                            <h3 class="card-title">Daftar BMI</h3>

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
                                <title>Daftar BMI</title>
                                <style>
                                    /* Chrome, Safari, Edge, Opera */
                                    input::-webkit-outer-spin-button,
                                    input::-webkit-inner-spin-button {
                                        -webkit-appearance: none;
                                        margin: 0;
                                    }

                                    /* Firefox */
                                    input[type=number] {
                                        -moz-appearance: textfield;
                                    }

                                    #image {
                                        border: 0;
                                    }

                                    #imageCard {
                                        border: 1px solid rgba(0, 0, 0, 0.125);
                                    }

                                    #imageCard:hover {
                                        cursor: pointer;
                                    }

                                    .gambar:checked+label>#imageCard {
                                        border: 3px solid rgba(0, 0, 0, 0.5);
                                    }
                                </style>
                            </head>

                            <form action="hasil_bmi.php" method="post">
                                <div class="mb-3">
                                    <p class="fw-bold text-center">Pilih jenis kelamin</p>
                                    <div class="row justify-content-evenly">
                                        <div class="col-md-4 col-6 m-0">
                                            <div class="form-check form-check-inline m-0 p-0 w-100">
                                                <input class="gambar form-check-input d-none" type="radio" name="gender" id="image1" value="L" checked>
                                                <label class="card" id="image" for="image1">
                                                    <div class="card-body text-center rounded-3" id="imageCard">
                                                        <img src="assets/img/man.png" width="100%" alt="" draggable="false">
                                                        <span>Laki-laki</span>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-6 m-0">
                                            <div class="form-check form-check-inline m-0 p-0 w-100">
                                                <input class="gambar form-check-input d-none" type="radio" name="gender" id="image2" value="P">
                                                <label class="card" id="image" for="image2">
                                                    <div class="card-body text-center rounded-3" id="imageCard">
                                                        <img src="assets/img/woman.png" width="100%" alt="" draggable="false">
                                                        <span>Perempuan</span>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6 col-12">
                                        <p class="fw-bold">Siapa nama anda?</p>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input id="nama" name="nama" type="text" class="form-control" value="" placeholder="Nama anda" aria-label="Nama" aria-describedby="basic-addon1" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-6 col-12">
                                        <p class="fw-bold">Dimana tempat lahir anda?</p>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control" value="" placeholder="Tempat lahir" aria-label="Tempat Lahir" aria-describedby="basic-addon2" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6 col-12">
                                        <p class="fw-bold">Kapan tanggal lahir anda?</p>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control" value="" placeholder="Tanggal lahir" aria-label="Tanggal Lahir" aria-describedby="basic-addon3">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-6 col-12">
                                        <p class="fw-bold">Apa email anda?</p>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input id="email" name="email" type="email" class="form-control" value="" placeholder="Email anda" aria-label="Email" aria-describedby="basic-addon4" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6 col-12">
                                        <p class="fw-bold">Berapa berat anda</p>
                                        <div class="form-group row">
                                            <div class="input-group">
                                                <input id="berat" name="berat" type="number" min="0" step="0.01" class="form-control" value="" placeholder="Berat anda" aria-label="Berat" aria-describedby="basic-addon5" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-6 col-12">
                                        <p class="fw-bold">Berapa tinggi anda?</p>
                                        <div class="form-group row">
                                            <div class="input-group">
                                                <input id="tinggi" name="tinggi" type="number" min="0" class="form-control" value="" placeholder="Tinggi anda" aria-label="Tinggi" aria-describedby="basic-addon6" oninput="this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div class="form-group col-md-auto col-12 ">
                                        <input type="submit" class="btn btn-primary w-100" value="Simpan" name="submit">
                                    </div>
                                </div>
                            </form>
                            <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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