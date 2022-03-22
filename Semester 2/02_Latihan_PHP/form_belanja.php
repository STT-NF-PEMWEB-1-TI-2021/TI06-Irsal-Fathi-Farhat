<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<title>Array Siswa</title>
</head>

<body class="bg-light">
	<div class="container-fluid" style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);">
		<div class="m-auto">
			<h3 class="text-center">Form Nilai Siswa</h3>
			<hr class="featurette-divider mx-auto">
			<div class="row justify-content-between">
				<form class="col-12 col-md-6 pb-3 pb-md-0" method="POST" action="form_belanja.php">
					<div class="form-group row">
						<label for="customer" class="col-4 col-form-label text-end">Customer</label>
						<div class="col-6">
							<div class="input-group mb-3">
								<input id="customer" name="customer" type="text" class="form-control" value="" placeholder="Nama Customer" aria-label="Customer" aria-describedby="basic-addon1">
							</div>
						</div>
					</div>
					<div class="form-group row align-items-center">
						<label for="produk" class="col-4 col-form-label text-end">Pilih Produk</label>
						<div class="col-8">
							<div class="form-check form-check-inline">
								<input class="form-check-input" checked type="radio" name="produk" id="inlineRadio1" value="TV">
								<label class="form-check-label" for="inlineRadio1">TV</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="produk" id="inlineRadio2" value="KULKAS">
								<label class="form-check-label" for="inlineRadio2">KULKAS</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="produk" id="inlineRadio3" value="MESIN CUCI">
								<label class="form-check-label" for="inlineRadio3">MESIN CUCI</label>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="jumlah" class="col-4 col-form-label text-end">Jumlah</label>
						<div class="col-4">
							<div class="input-group mb-3">
								<input id="jumlah" name="jumlah" type="number" min="0" class="form-control" value="" placeholder="Jumlah" aria-label="Jumlah" aria-describedby="basic-addon2">
							</div>
						</div>
					</div>
					<div class="form-group row">
						<div class="offset-4 col-8">
							<input type="submit" class="btn btn-success" value="Simpan" name="submit">
						</div>
					</div>
				</form>
				<div class="col-12 col-sm-8 offset-sm-2 col-md-4">
					<ul class="list-group">
						<li class="list-group-item active" aria-current="true">Daftar Harga</li>
						<li class="list-group-item">TV : 4.200.000</li>
						<li class="list-group-item">KULKAS : 3.100.000</li>
						<li class="list-group-item">MESIN CUCI : 3.800.000</li>
						<li class="list-group-item active">Harga Dapat Berubah Setiap Saat</li>
					</ul>
				</div>
			</div>
			<hr class="featurette-divider mx-auto">
			<?php
			$submit = $_POST['submit'];
			$customer = $_POST['customer'];
			$produk = $_POST['produk'];
			$jumlah = $_POST['jumlah'];

			$produk_list = array("TV" => 4200000, "KULKAS" => 3100000, "MESIN CUCI" => 3800000);

			if (!empty($submit)) {
				echo 'Proses : ' . $submit;
				echo '</br>Nama Customer : ' . $customer;
				echo '</br>Produk Pilihan : ' . $produk;
				echo '</br>Jumlah Beli : ' . $jumlah;
				if (!empty($jumlah)) {
					echo '</br>Total Belanja : ' . $produk_list[$produk] * $jumlah;
				} else {
					echo '</br>Total Belanja : ' . "";
				}
			}
			?>
		</div>
	</div>

	<!-- Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>