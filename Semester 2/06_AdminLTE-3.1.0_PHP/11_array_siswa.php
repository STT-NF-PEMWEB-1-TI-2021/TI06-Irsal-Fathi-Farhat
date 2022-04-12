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
						<li class="breadcrumb-item"><a href="#">Praktikum 1</a></li>
						<li class="breadcrumb-item active">11_array_siswa</li>
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
							<h3 class="card-title">Array Siswa</h3>

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
								<!-- Required meta tags -->
								<meta charset="utf-8">
								<meta name="viewport" content="width=device-width, initial-scale=1">

								<!-- Bootstrap CSS -->
								<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

								<title>Array Siswa</title>
							</head>

							<body class="bg-light">
								<?php
								$ns1 = ['id' => 1, 'nim' => '01101', 'uts' => 80, 'uas' => 84, 'tugas' => 78];
								$ns2 = ['id' => 2, 'nim' => '01121', 'uts' => 70, 'uas' => 50, 'tugas' => 68];
								$ns3 = ['id' => 3, 'nim' => '01130', 'uts' => 60, 'uas' => 86, 'tugas' => 70];
								$ns4 = ['id' => 4, 'nim' => '01134', 'uts' => 90, 'uas' => 91, 'tugas' => 82];

								$ar_nilai = [$ns1, $ns2, $ns3, $ns4];
								?>
								<div class="container-fluid">
									<h3 class="text-center">Daftar Nilai Siswa</h3>
									<table class="table table-dark table-striped table-hover text-center m-auto shadow">
										<thead>
											<tr>
												<th scope="col">No</th>
												<th scope="col">NIM</th>
												<th scope="col">UTS</th>
												<th scope="col">UAS</th>
												<th scope="col">Tugas</th>
												<th scope="col">Nilai Akhir</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$nomor = 1;
											foreach ($ar_nilai as $ns) {
												echo '<tr><th scope="row">' . $nomor . '</th>';
												echo '<td>' . $ns['nim'] . '</td>';
												echo '<td>' . $ns['uts'] . '</td>';
												echo '<td>' . $ns['uas'] . '</td>';
												echo '<td>' . $ns['tugas'] . '</td>';
												$nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas']) / 3;
												echo '<td>' . number_format($nilai_akhir, 2, ',', '.') . '</td>';
												echo '<tr/>';
												$nomor++;
											}
											?>
										</tbody>
									</table>
								</div>

								<!-- Bootstrap Bundle with Popper -->
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