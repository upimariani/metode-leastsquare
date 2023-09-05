<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title"> Penjualan Perhari </h3>

			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Tables</a></li>
					<li class="breadcrumb-item active" aria-current="page">Penjualan Per Hari</li>
				</ol>
			</nav>

		</div>
		<?php
		if ($this->session->userdata('success')) {
		?>
			<div class="alert alert-success" role="alert">
				<?= $this->session->userdata('success') ?>
			</div>
		<?php
		}
		?>
		<div class="col-lg-4">
			<a href="<?= base_url('Marketing/cPenjualanPerHari/create') ?>" class="btn btn-primary btn-lg mb-3 btn-block">
				<i class="mdi mdi-barcode"></i> Tambah Data Penjualan </a>
		</div>


		<div class="row">

			<div class="col-lg-8 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Informasi Penjualan Per Hari</h4>
						</p>
						<div class="table-responsive">
							<table class="table table-striped">
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
											<td> <a href="<?= base_url('Admin/cAdmin/delete/' . $value->id_harian) ?>" class="btn btn-danger btn-icon-text">
													<i class="mdi mdi-close-octagon"></i>
												</a>
												<a href="<?= base_url('Admin/cAdmin/update/' . $value->id_harian) ?>" class="btn btn-warning btn-icon-text">
													<i class="mdi mdi-autorenew"></i>
												</a>
											</td>
										</tr>
									<?php
									}
									?>



								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>