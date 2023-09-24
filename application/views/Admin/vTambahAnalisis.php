<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title"> Analisis Peramalan Penjualan Bulan Berikutnya </h3>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Forms</a></li>
					<li class="breadcrumb-item active" aria-current="page">Form elements</li>
				</ol>
			</nav>
		</div>
		<div class="row">
			<div class="col-md-6 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<form class="forms-sample" action="<?= base_url('Admin/cAnalisis/hitung') ?>" method="POST">
							<input type="hidden" name="bulan" value="<?= $total_penjualan->periode_bulan ?>">
							<input type="hidden" name="tahun" value="<?= $total_penjualan->periode_tahun ?>">
							<?php
							$bulan_max = $this->db->query("SELECT * FROM `penjualan` WHERE id_penjualan='" . $max->id_analisis . "'")->row();
							$tot_penjualan = 0;
							foreach ($nilai['tot_penjualan'] as $key => $value) {
								$tot_penjualan += $value->tot_penjualan;
							}
							?>
							<div class="form-group">
								<label for="exampleInputUsername1">Periode / Bulan</label><br>
								<small class="text-warning">*Catatan : Bulan terakhir peramalan adalah Bulan <?= $bulan_max->bulan ?></small>
								<input type="text" class="form-control" name="periode" id="exampleInputUsername1" placeholder="Masukkan Periode/Bulan Analisis">
								<?= form_error('periode', '<small class="text-danger">', '</small>'); ?>
							</div>
							<hr>
							<div class="form-group">
								<label for="exampleInputPassword1">Nilai Jumlah Penjualan</label>
								<input type="text" class="form-control" name="penjualan" value="<?= $total_penjualan->total ?>" id="exampleInputPassword1" placeholder="Masukkan Penjualan">
								<?= form_error('penjualan', '<small class="text-danger">', '</small>'); ?>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Nilai Jumlah Penjualan Sebelumnya</label>
								<input type="text" class="form-control" value="<?= $tot_penjualan ?>" name="tot_penjualan" id="exampleInputPassword1" placeholder="Masukkan Tempat Lahir">

							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Nilai Jumlah Periode</label>
								<input type="text" class="form-control" value="<?= $nilai['nilai_tengah']->jml ?>" name="nilai_tengah" id="exampleInputPassword1" placeholder="Masukkan Alamat">

							</div>


							<button type="submit" class="btn btn-warning mr-2">Hitung Analisis</button>
							<button class="btn btn-dark">Cancel</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>