<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title"> Analisis Peramalan Penjualan Metode Least Square </h3>

			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Tables</a></li>
					<li class="breadcrumb-item active" aria-current="page">Basic tables</li>
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
			<a href="<?= base_url('Admin/cAnalisis/create') ?>" class="btn btn-warning btn-lg mb-3 btn-block">
				<i class="mdi mdi-chart-areaspline"></i> Tambah Peramalan Bulan Berikutnya </a>
		</div>

		<div class="row">

			<div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Informasi Analisis Penjualan Metode Least Square</h4>
						</p>
						<div class="table-responsive">
							<table id="myTable" class="table table-light">
								<thead>
									<tr>
										<th> # </th>
										<th> Bulan </th>
										<th> Nilai a </th>
										<th> Nilai b </th>
										<th> Hasil Peramalan/kg </th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($peramalan as $key => $value) {
										$peramalan = $this->db->query("SELECT * FROM `penjualan` WHERE tot_penjualan != 'NULL' ORDER BY id_penjualan DESC LIMIT 1")->row();
									?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $value->bulan ?></td>
											<td><?= $peramalan->nilai_a ?></td>
											<td><?= $peramalan->nilai_b ?></td>
											<td><?= $peramalan->hasil ?></td>

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