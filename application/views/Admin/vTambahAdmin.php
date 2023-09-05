<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title"> Akun User </h3>
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
						<h4 class="card-title">Informasi Akun User</h4>
						<form class="forms-sample" action="<?= base_url('Admin/cAdmin/create') ?>" method="POST">
							<div class="form-group">
								<label for="exampleInputUsername1">Nama User</label>
								<input type="text" class="form-control" name="nama" id="exampleInputUsername1" placeholder="Masukkan Nama User">
								<?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Jenis Kelamin</label>
								<select class="form-control" name="jk">
									<option value="">---Pilih Jenis Kelamin---</option>
									<option value="Perempuan">Perempuan</option>
									<option value="Laki - Laki">Laki - Laki</option>
								</select>
								<?= form_error('jk', '<small class="text-danger">', '</small>'); ?>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Tempat Lahir</label>
								<input type="text" class="form-control" name="tempat" id="exampleInputPassword1" placeholder="Masukkan Tempat Lahir">
								<?= form_error('tempat', '<small class="text-danger">', '</small>'); ?>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Alamat</label>
								<input type="text" class="form-control" name="alamat" id="exampleInputPassword1" placeholder="Masukkan Alamat">
								<?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Tanggal Lahir</label>
								<input type="date" class="form-control" name="tgl" id="exampleInputPassword1" placeholder="Password">
								<?= form_error('tgl', '<small class="text-danger">', '</small>'); ?>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Username</label>
								<input type="text" class="form-control" name="username" id="exampleInputPassword1" placeholder="Masukkan Username">
								<?= form_error('username', '<small class="text-danger">', '</small>'); ?>
							</div>
							<div class="form-group">
								<label for="exampleInputConfirmPassword1">Password</label>
								<input type="text" class="form-control" name="password" id="exampleInputConfirmPassword1" placeholder="Masukkan Password">
								<?= form_error('password', '<small class="text-danger">', '</small>'); ?>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Hak Akses</label>
								<select class="form-control" name="hak_akses">
									<option value="">---Pilih Hak Akses---</option>
									<option value="1">Admin</option>
									<option value="2">Manager</option>
									<option value="3">Marketing</option>
								</select>
								<?= form_error('hak_akses', '<small class="text-danger">', '</small>'); ?>
							</div>

							<button type="submit" class="btn btn-primary mr-2">Save</button>
							<button class="btn btn-dark">Cancel</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>