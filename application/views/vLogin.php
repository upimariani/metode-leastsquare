<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>LOGIN USER</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url('asset/AdminLTE/') ?>/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?= base_url('asset/AdminLTE/') ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url('asset/AdminLTE/') ?>/dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<a href="../../index2.html"><b>LOGIN</b>USER</a>
		</div>

		<?php if ($this->session->userdata('success')) {
		?>
			<div class="alert alert-success alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h5><i class="icon fas fa-check"></i> Alert!</h5>
				<?= $this->session->userdata('success') ?>
			</div>
		<?php
		} ?>
		<?php if ($this->session->userdata('error')) {
		?>
			<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h5><i class="icon fas fa-ban"></i> Alert!</h5>
				<?= $this->session->userdata('error') ?>
			</div>
		<?php
		} ?>


		<!-- /.login-logo -->
		<div class="card">
			<div class="card-body login-card-body">
				<p class="login-box-msg">Sign in to start your session</p>

				<form action="<?= base_url('cLogin') ?>" method="POST">
					<div class="form-group">
						<label>Username *</label>
						<input type="text" name="username" class="form-control">
						<?= form_error('username', '<small class="text-danger">', '</small>') ?>
					</div>
					<div class="form-group">
						<label>Password *</label>
						<input type="password" name="password" class="form-control">
						<?= form_error('password', '<small class="text-danger">', '</small>') ?>
					</div>
					<div class="text-center">
						<button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
					</div>
				</form>


			</div>
			<!-- /.login-card-body -->
		</div>
	</div>
	<!-- /.login-box -->

	<!-- jQuery -->
	<script src="<?= base_url('asset/AdminLTE/') ?>plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?= base_url('asset/AdminLTE/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?= base_url('asset/AdminLTE/') ?>dist/js/adminlte.min.js"></script>
	<script>
		window.setTimeout(function() {
			$(".alert").fadeTo(500, 0).slideUp(500, function() {
				$(this).remove();
			});
		}, 3000)
	</script>
</body>

</html>