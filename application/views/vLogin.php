<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login User | PT. RIDIV MITRA</title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="<?= base_url('asset/template/template/') ?>assets/vendors/mdi/css/materialdesignicons.min.css">
	<link rel="stylesheet" href="<?= base_url('asset/template/template/') ?>assets/vendors/css/vendor.bundle.base.css">
	<!-- endinject -->
	<!-- Plugin css for this page -->
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<!-- endinject -->
	<!-- Layout styles -->
	<link rel="stylesheet" href="<?= base_url('asset/template/template/') ?>assets/css/style.css">
	<!-- End layout styles -->
	<link rel="shortcut icon" href="<?= base_url('asset/template/template/') ?>assets/images/favicon.png" />
</head>

<body>
	<div class="container-scroller">
		<div class="container-fluid page-body-wrapper full-page-wrapper">
			<div class="row w-100 m-0">
				<div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
					<div class="card col-lg-4 mx-auto">
						<div class="card-body px-5 py-5">
							<h3 class="card-title text-left mb-3">Login</h3>
							<?php
							if ($this->session->userdata('error')) {
							?>
								<div class="alert alert-danger" role="alert"><strong>Gagal!</strong>
									<?= $this->session->userdata('error') ?>
								</div>
							<?php
							}
							?>
							<?php
							if ($this->session->userdata('success')) {
							?>
								<div class="alert alert-success" role="alert"><strong>Sukses!</strong>
									<?= $this->session->userdata('success') ?>
								</div>
							<?php
							}
							?>
							<form action="<?= base_url('cLogin') ?>" method="POST">
								<div class="form-group">
									<label>Username *</label>
									<input type="text" name="username" class="form-control p_input">
									<?= form_error('username', '<small class="text-danger">', '</small>') ?>
								</div>
								<div class="form-group">
									<label>Password *</label>
									<input type="text" name="password" class="form-control p_input">
									<?= form_error('password', '<small class="text-danger">', '</small>') ?>
								</div>
								<div class="text-center">
									<button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- content-wrapper ends -->
			</div>
			<!-- row ends -->
		</div>
		<!-- page-body-wrapper ends -->
	</div>
	<!-- container-scroller -->
	<!-- plugins:js -->
	<script src="<?= base_url('asset/template/template/') ?>assets/vendors/js/vendor.bundle.base.js"></script>
	<!-- endinject -->
	<!-- Plugin js for this page -->
	<!-- End plugin js for this page -->
	<!-- inject:js -->
	<script src="<?= base_url('asset/template/template/') ?>assets/js/off-canvas.js"></script>
	<script src="<?= base_url('asset/template/template/') ?>assets/js/hoverable-collapse.js"></script>
	<script src="<?= base_url('asset/template/template/') ?>assets/js/misc.js"></script>
	<script src="<?= base_url('asset/template/template/') ?>assets/js/settings.js"></script>
	<script src="<?= base_url('asset/template/template/') ?>assets/js/todolist.js"></script>
	<!-- endinject -->
</body>

</html>