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
						<form class="forms-sample" action="<?= base_url('Admin/cAdmin/update/' . $admin->id_admin) ?>" method="POST">
							<div class="form-group">
								<label for="exampleInputUsername1">Nama User</label>
								<input type="text" value="<?= $admin->nama ?>" class="form-control" name="nama" id="exampleInputUsername1" placeholder="Masukkan Nama User">
								<?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Jenis Kelamin</label>
								<select class="form-control" name="jk">
									<option value="">---Pilih Jenis Kelamin---</option>
									<option value="Perempuan" <?php if ($admin->jk == 'Perempuan') {
																	echo 'selected';
																} ?>>Perempuan</option>
									<option value="Laki - Laki" <?php if ($admin->jk == 'Laki - Laki') {
																	echo 'selected';
																} ?>>Laki - Laki</option>
								</select>
								<?= form_error('jk', '<small class="text-danger">', '</small>'); ?>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Tempat Lahir</label>
								<input type="text" value="<?= $admin->ttl_tempat ?>" class="form-control" name="tempat" id="exampleInputPassword1" placeholder="Masukkan Tempat Lahir">
								<?= form_error('tempat', '<small class="text-danger">', '</small>'); ?>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Alamat</label>
								<input type="text" class="form-control" value="<?= $admin->alamat ?>" name="alamat" id="exampleInputPassword1" placeholder="Masukkan Alamat">
								<?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Tanggal Lahir</label>
								<input type="date" class="form-control" value="<?= $admin->ttl_tgl ?>" name="tgl" id="exampleInputPassword1" placeholder="Password">
								<?= form_error('tgl', '<small class="text-danger">', '</small>'); ?>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Username</label>
								<input type="text" class="form-control" value="<?= $admin->username ?>" name="username" id="exampleInputPassword1" placeholder="Masukkan Username">
								<?= form_error('username', '<small class="text-danger">', '</small>'); ?>
							</div>
							<div class="form-group">
								<label for="exampleInputConfirmPassword1">Password</label>
								<input type="text" class="form-control" value="<?= $admin->password ?>" name="password" id="exampleInputConfirmPassword1" placeholder="Masukkan Password">
								<?= form_error('password', '<small class="text-danger">', '</small>'); ?>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Hak Akses</label>
								<select class="form-control" name="hak_akses">
									<option value="">---Pilih Hak Akses---</option>
									<option value="1" <?php if ($admin->hak_akses == '1') {
															echo 'selected';
														} ?>>Admin</option>
									<option value="2" <?php if ($admin->hak_akses == '2') {
															echo 'selected';
														} ?>>Manager</option>
									<option value="3" <?php if ($admin->hak_akses == '3') {
															echo 'selected';
														} ?>>Marketing</option>
								</select>
								<?= form_error('hak_akses', '<small class="text-danger">', '</small>'); ?>
							</div>

							<button type="submit" class="btn btn-warning mr-2">Perbaharui</button>
							<button class="btn btn-dark">Cancel</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
