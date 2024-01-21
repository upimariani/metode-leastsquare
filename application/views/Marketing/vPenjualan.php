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
										<th> Periode Hari </th>
										<th> Total Penjualan </th>
										<th> Action </th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($penjualan as $key => $value) {

									?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $value->periode_hari ?></td>
											<td><?= $value->total ?></td>
											<td> <a href="<?= base_url('Marketing/cPenjualanPerHari/delete/' . $value->id_harian) ?>" class="btn btn-danger btn-icon-text">
													Hapus
												</a>
												<a href="<?= base_url('Marketing/cPenjualanPerHari/update/' . $value->id_harian) ?>" class="btn btn-warning btn-icon-text">
													Update
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