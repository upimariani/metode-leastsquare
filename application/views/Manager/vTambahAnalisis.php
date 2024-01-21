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
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Informasi Akun User</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<form class="forms-sample" action="<?= base_url('Manager/cAnalisis/hitung') ?>" method="POST">
								<input type="hidden" name="bulan" value="<?= $total_penjualan->periode_bulan ?>">
								<input type="hidden" name="tahun" value="<?= $total_penjualan->periode_tahun ?>">
								<?php
								$bulan_max = $this->db->query("SELECT * FROM `penjualan` WHERE id_penjualan='" . $max->id_analisis . "'")->row();
								$tot_penjualan = 0;
								foreach ($nilai['tot_penjualan'] as $key => $value) {
									$tot_penjualan += $value->tot_penjualan;
								}
								$bulan_peramalan = $this->db->query("SELECT * FROM `penjualan` WHERE nilai_b= '0'")->row();
								if ($total_penjualan->total != NULL) {

								?>
									<div class="form-group">
										<label for="exampleInputUsername1">Periode / Bulan Sekarang</label><br>
										<input type="text" class="form-control" value="<?= $bulan_peramalan->bulan ?>" name="periode" id="exampleInputUsername1" placeholder="Masukkan Periode/Bulan Analisis">
										<?= form_error('periode', '<small class="text-danger">', '</small>'); ?>
									</div>
									<div class="form-group">
										<label for="exampleInputUsername1">Periode / Bulan Berikutnya</label><br>
										<small class="text-warning">*Catatan : Bulan terakhir peramalan adalah Bulan <?= $bulan_max->bulan ?></small>
										<input type="text" class="form-control" name="periode_berikutnya" id="exampleInputUsername1" placeholder="Masukkan Periode Berikutnya/Bulan Analisis">
										<?= form_error('periode_berikutnya', '<small class="text-danger">', '</small>'); ?>
									</div>
									<hr>
									<div class="form-group">
										<label for="exampleInputPassword1">Nilai Jumlah Penjualan /kg</label>
										<input type="text" class="form-control" name="penjualan" value="<?= $total_penjualan->total ?>" id="exampleInputPassword1" placeholder="Masukkan Penjualan">
										<?= form_error('penjualan', '<small class="text-danger">', '</small>'); ?>
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Nilai Jumlah Penjualan Sebelumnya</label>
										<input type="text" class="form-control" value="<?= $tot_penjualan ?>" name="tot_penjualan" id="exampleInputPassword1" placeholder="Masukkan Tempat Lahir">

									</div>
									<!-- <div class="form-group">
								<label for="exampleInputPassword1">Nilai Jumlah Periode</label> -->
									<input type="hidden" class="form-control" value="<?= $nilai['nilai_tengah']->jml ?>" name="nilai_tengah" id="exampleInputPassword1" placeholder="Masukkan Alamat">

									<!-- </div> -->


									<button type="submit" class="btn btn-warning mr-2">Hitung Analisis</button>
									<button class="btn btn-dark">Cancel</button>
								<?php
								} else {
								?>
									<h5>Belum Ada Total Data Penjualan Perhari</h5>
								<?php
								}
								?>
							</form>
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