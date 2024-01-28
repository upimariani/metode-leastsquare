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
		<a href="<?= base_url('Admin/cAnalisis/create') ?>" class="btn btn-app">
			<i class="fas fa-plus"></i> Tambah Peramalan Bulan Berikutnya
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
		<?php
		$ramalan = $this->db->query("SELECT * FROM `penjualan` WHERE tot_penjualan != 'NULL' ORDER BY id_penjualan DESC LIMIT 1")->row();
		if ($ramalan->tot_penjualan < $ramalan->hasil) {
			$status = 'User dapat menyiapkan stok ayam yang lebih banyak dikandang';
		} else {
			$status = 'User dapat menyiapkan stok ayam yang cukup dikandang';
		}


		?>
		<div class="callout callout-success">
			<h5>Informasi!</h5>
			<p><?= $status ?></p>
		</div>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Informasi Peramalan</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="myTable" class="table">
								<thead>
									<tr>
										<th># </th>
										<th>Bulan </th>
										<th>Total Penjualan Bulan Sebelumnya </th>
										<th>Nilai a </th>
										<th>Nilai b </th>
										<th>Hasil Peramalan/kg </th>
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
											<td><?= $peramalan->tot_penjualan ?></td>
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