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
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <div class="container" style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);">
        <table id="example" class="display nowrap table-striped table-bordered table" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                    <th>Thn Angkatan</th>
                    <th>IPK</th>
                    <th>Predikat</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once "class_mahasiswa.php";
                $mahasiswa1 = new Mahasiswa(02011, "Faiz Fikri");
                $mahasiswa2 = new Mahasiswa(02012, "Alissa Khairunnisa");
                $mahasiswa3 = new Mahasiswa(01011, "Rosalie Naurah");
                $mahasiswa4 = new Mahasiswa(01012, "Defghi Muhammad");
                $totalmahasiswa = array(
                    1 =>
                    array("nim" => $mahasiswa1->nim, "nama" => $mahasiswa1->nama, "prodi" => $mahasiswa1->prodi = "TI", "tahun" => $mahasiswa1->thn_angkatan = 2012, "ipk" => $mahasiswa1->ipk = 3.8, "predikat" => $mahasiswa1->predikat_ipk()),
                    array("nim" => $mahasiswa2->nim, "nama" => $mahasiswa2->nama, "prodi" => $mahasiswa2->prodi = "TI", "tahun" => $mahasiswa2->thn_angkatan = 2012, "ipk" => $mahasiswa2->ipk = 3.9, "predikat" => $mahasiswa2->predikat_ipk()),
                    array("nim" => $mahasiswa3->nim, "nama" => $mahasiswa3->nama, "prodi" => $mahasiswa3->prodi = "SI", "tahun" => $mahasiswa3->thn_angkatan = 2010, "ipk" => $mahasiswa3->ipk = 3.46, "predikat" => $mahasiswa3->predikat_ipk()),
                    array("nim" => $mahasiswa4->nim, "nama" => $mahasiswa4->nama, "prodi" => $mahasiswa4->prodi = "SI", "tahun" => $mahasiswa4->thn_angkatan = 2010, "ipk" => $mahasiswa4->ipk = 3.2, "predikat" => $mahasiswa4->predikat_ipk())
                );
                foreach ($totalmahasiswa as $no => $value) {
                    echo "<tr>";
                    echo "<td>" . $no . "</td>";
                    echo "<td>" . $value["nim"] . "</td>";
                    echo "<td>" . $value["nama"] . "</td>";
                    echo "<td>" . $value["prodi"] . "</td>";
                    echo "<td>" . $value["tahun"] . "</td>";
                    echo "<td>" . $value["ipk"] . "</td>";
                    echo "<td>" . $value["predikat"] . "</td>";
                    echo "<td>" . "<a href='#'><i class='bi bi-eye-fill text-primary me-1'></i></a><a href='#'><i class='bi bi-pencil-fill text-primary'></i></a>" . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.2.2/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('#example').DataTable({
                responsive: true
            });

            new $.fn.dataTable.FixedHeader(table);
        });
    </script>
</body>

</html>