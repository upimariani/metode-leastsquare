<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-12 grid-margin stretch-card">
				<div class="card corona-gradient-card">
					<div class="card-body py-0 px-0 px-sm-3">
						<div class="row align-items-center">
							<div class="col-4 col-sm-3 col-xl-2">
								<img src="<?= base_url('asset/template/template/') ?>assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="">
							</div>
							<div class="col-5 col-sm-7 col-xl-8 p-0">
								<h4 class="mb-1 mb-sm-0">Selamat Datang Admin</h4>
								<p class="mb-0 font-weight-normal d-none d-sm-block">PT. Ridiv Mitra Utama</p>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
		<?php
		if ($this->session->userdata('error')) {
		?>
			<div class="alert alert-danger" role="alert">
				<?= $this->session->userdata('error') ?>
			</div>
		<?php
		}
		?>
		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col">
			<div class="tm-bg-primary-dark tm-block">
				<h2 class="tm-block-title">Grafik Penjualan</h2>
				<canvas id="transaksi" style="width:100%;max-width:600px"></canvas>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="tm-bg-primary-light tm-block">
				<form action="<?= base_url('Admin/cDashboard/lihat') ?>" method="POST">
					<div class="card">
						<div class="card-header">
							<h3>Grafik Penjualan Sesuai Range Periode</h3>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label for="exampleInputPassword1">Nilai Jumlah Periode</label>
										<select name="range_awal" class="form-control">
											<?php
											foreach ($periode as $key => $value) {
											?>
												<option value="<?= $value->id_penjualan ?>"><?= $value->bulan ?></option>
											<?php
											}
											?>

										</select>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="exampleInputPassword1">Nilai Jumlah Periode</label>
										<select name="range_akhir" class="form-control">
											<?php
											foreach ($periode as $key => $value) {
											?>
												<option value="<?= $value->id_penjualan ?>"><?= $value->bulan ?></option>
											<?php
											}
											?>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="card-footer">
							<button type="submit" class="btn btn-success">Lihat</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- content-wrapper ends -->