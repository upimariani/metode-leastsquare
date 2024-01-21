<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Penjualan Per Hari </h1>

				</div>

				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Analisis</li>
					</ol>
				</div>

			</div>

		</div><!-- /.container-fluid -->
		<a href="<?= base_url('Marketing/cPenjualanPerHari/create') ?>" class="btn btn-app">
			<i class="fas fa-plus"></i>Tambah Data Penjualan
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
				<div class="col-6">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Informasi Penjualan per Hari</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="myTable" class="table">
								<thead>
									<tr>
										<th> # </th>
										<th> Periode Bulan </th>
										<th> Tahun </th>
										<th> Total </th>
										<th> Action </th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($periode as $key => $value) {

									?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?php if ($value->periode_bulan == '1') {
													echo 'Januari';
												} else if ($value->periode_bulan == '2') {
													echo 'Februari';
												} else if ($value->periode_bulan == '3') {
													echo 'Maret';
												} else if ($value->periode_bulan == '4') {
													echo 'April';
												} else if ($value->periode_bulan == '5') {
													echo 'Mei';
												} else if ($value->periode_bulan == '6') {
													echo 'Juni';
												} else if ($value->periode_bulan == '7') {
													echo 'Juli';
												} else if ($value->periode_bulan == '8') {
													echo 'Agustus';
												} else if ($value->periode_bulan == '9') {
													echo 'September';
												} else if ($value->periode_bulan == '10') {
													echo 'Oktober';
												} else if ($value->periode_bulan == '11') {
													echo 'November';
												} else if ($value->periode_bulan == '12') {
													echo 'Desember';
												} ?></td>
											<td><?= $value->periode_tahun ?></td>
											<td><?= $value->total ?></td>
											<td>
												<a href="<?= base_url('Marketing/cPenjualanPerHari/list_perhari/' . $value->periode_bulan . '/' . $value->periode_tahun) ?>" class="btn btn-success btn-icon-text">
													View Per Hari
												</a>
											</td>
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