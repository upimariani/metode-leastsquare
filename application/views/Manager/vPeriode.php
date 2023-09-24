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

		<div class="row">
			<div class="col-lg-8 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Informasi Periode Penjualan</h4>
						</p>
						<div class="table-responsive">
							<table id="myTable" class="table table-light table-warning">
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
												<a href="<?= base_url('Manager/cCetakPenjualan/list_perhari/' . $value->periode_bulan . '/' . $value->periode_tahun) ?>" class="btn btn-success btn-icon-text">
													<i class="mdi mdi-autorenew"></i>
												</a>
												<a href="<?= base_url('Manager/cCetakPenjualan/cetak/' . $value->periode_bulan . '/' . $value->periode_tahun) ?>" class="btn btn-warning btn-icon-text">
													<i class="mdi mdi-cloud-print"></i>
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