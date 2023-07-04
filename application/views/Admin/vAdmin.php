<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title"> Akun User </h3>

			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Tables</a></li>
					<li class="breadcrumb-item active" aria-current="page">Basic tables</li>
				</ol>
			</nav>

		</div>
		<?php
		if ($this->session->userdata('success')) {
		?>
			<div class="alert alert-success" role="alert">
				<?= $this->session->userdata('success') ?>
			</div>
		<?php
		}
		?>

		<div class="col-lg-4">
			<a href="<?= base_url('Admin/cAdmin/create') ?>" class="btn btn-primary btn-lg mb-3 btn-block">
				<i class="mdi mdi-account"></i> Tambah Data Akun User </a>
		</div>

		<div class="row">

			<div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Informasi Akun User</h4>
						</p>
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<tr>
										<th> # </th>
										<th> Nama User </th>
										<th> Jenis Kelamin </th>
										<th> Tempat, Tanggal Lahir </th>
										<th> Akun </th>
										<th> Level User </th>
										<th> Action </th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach ($admin as $key => $value) {
									?>
										<tr>
											<td class="py-1">
												<?php
												if ($value->jk == 'Laki - Laki') {
												?>
													<img src="<?= base_url('asset/template/template/') ?>assets/images/faces-clipart/pic-1.png" alt="image" />
												<?php
												} else {
												?>
													<img src="<?= base_url('asset/template/template/') ?>assets/images/faces-clipart/pic-2.png" alt="image" />
												<?php
												}
												?>

											</td>
											<td><?= $value->nama ?></td>
											<td><?= $value->jk ?></td>
											<td><?= $value->ttl_tempat ?>, <?= $value->ttl_tgl ?></td>
											<td>Username: <label class="badge badge-warning"><?= $value->username ?></label><br> Password: <label class="badge badge-danger"><?= $value->password ?></label></td>
											<td><?php if ($value->hak_akses == '1') {
													echo '<label class="badge badge-success">Admin</label>';
												} else {
													echo '<label class="badge badge-info">Manajer</label>';
												} ?></td>
											<td> <a href="<?= base_url('Admin/cAdmin/delete/' . $value->id_admin) ?>" class="btn btn-danger btn-icon-text">
													<i class="mdi mdi-close-octagon"></i>
												</a>
												<a href="<?= base_url('Admin/cAdmin/update/' . $value->id_admin) ?>" class="btn btn-warning btn-icon-text">
													<i class="mdi mdi-autorenew"></i>
												</a>
											</td>
										</tr>
									<?php
									}
									?>



								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>