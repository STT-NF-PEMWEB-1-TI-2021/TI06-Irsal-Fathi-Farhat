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
						<li class="breadcrumb-item active">05_array_buah</li>
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
							<h3 class="card-title">Array Buah</h3>

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
							$ar_buah = ['Pepaya', 'Mangga', 'Pisang', 'Jambu'];
							// cetak buah ke index ke 2
							echo $ar_buah[2];
							// cetak jumlah buah
							echo '<br/>Jumlah Buah ' . count($ar_buah);
							// cetak seluruh buah
							echo '<ol>';
							foreach ($ar_buah as $buah) {
								echo '<li>' . $buah . '</li>';
							}
							echo '</ol>';
							// tambahkan buah
							$ar_buah[] = 'Durian';
							// hapus buah index ke 1
							unset($ar_buah[1]);
							// ubah buah index ke 2 menjadi Manggis
							$ar_buah[2] = 'Manggis';
							// cetak seluruh buah dengan indexnya
							echo '<ul>';
							foreach ($ar_buah as $k => $v) {
								echo '<li>buah index - ' . $k . ' adalah ' . $v . '</li>';
							}
							echo '</ul>';
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