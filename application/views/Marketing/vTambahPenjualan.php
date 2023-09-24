<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title"> Penjualan Per Hari </h3>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Forms</a></li>
					<li class="breadcrumb-item active" aria-current="page">Penjualan Per Hari</li>
				</ol>
			</nav>
		</div>
		<div class="row">
			<div class="col-md-6 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Informasi Penjualan per Hari</h4>
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
							<button type="submit" class="btn btn-primary mr-2">Save</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>