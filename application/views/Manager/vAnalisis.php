<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Analisis Peramalan Penjualan Metode Least Square </h1>

				</div>

				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Analisis</li>
					</ol>
				</div>

			</div>

		</div><!-- /.container-fluid -->
		<a href="<?= base_url('Manager/cAnalisis/cetak') ?>" class="btn btn-app">
			<i class="fas fa-print"></i> Print
		</a>
		<?php
		if ($this->session->userdata('success')) {
		?>
			<div class="callout callout-success">
				<h5>Sukses!</h5>
				<p><?= $this->session->userdata('success') ?></p>
			</div>
		<?php
		}
		?>

	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-8">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Informasi Akun User</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="myTable" class="table">
								<thead>
									<tr>
										<th> # </th>
										<th> Bulan </th>
										<th> Penjualan /kg </th>

										<th> Nilai a </th>
										<th> Nilai b </th>
										<th> Hasil Peramalan /kg </th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($penjualan as $key => $value) {
									?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $value->bulan ?></td>
											<td><?= $value->tot_penjualan ?></td>
											<td><?= $value->nilai_a ?></td>
											<td><?= $value->nilai_b ?></td>
											<td><?= $value->hasil ?></td>

										</tr>
									<?php
									}
									?>



								</tbody>
							</table>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>