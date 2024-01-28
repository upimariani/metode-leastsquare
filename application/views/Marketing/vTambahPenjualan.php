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
							<form class="forms-sample" action="<?= base_url('Marketing/cPenjualanPerHari/create') ?>" method="POST">
								<div class="form-group">
									<label for="exampleInputUsername1">Tanggal Penjualan</label>
									<input type="date" class="form-control" name="date" id="exampleInputUsername1" placeholder="Masukkan Nama User">
									<?= form_error('date', '<small class="text-danger">', '</small>'); ?>
								</div>

								<div class="form-group">
									<label for="exampleInputPassword1">Total Penjualan</label>
									<input type="number" class="form-control" name="total" id="exampleInputPassword1" placeholder="Masukkan Total Penjualan">
									<?= form_error('total', '<small class="text-danger">', '</small>'); ?>
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Nama Parker</label>
									<input type="text" class="form-control" name="parker" id="exampleInputPassword1" placeholder="Masukkan Parker">
									<?= form_error('parker', '<small class="text-danger">', '</small>'); ?>
								</div>
								<button type="submit" class="btn btn-primary mr-2">Save</button>
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