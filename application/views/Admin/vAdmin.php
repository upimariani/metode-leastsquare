<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Akun User</h1>

				</div>

				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Akun</li>
					</ol>
				</div>

			</div>

		</div><!-- /.container-fluid -->
		<a href="<?= base_url('Admin/cAdmin/create') ?>" class="btn btn-app">
			<i class="fas fa-plus"></i> Tambah Akun User
		</a>
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
							<table id="myTable" class="table table-striped">
								<thead>
									<tr>
										<th> Nama User </th>
										<th> Jenis Kelamin </th>
										<th> Tempat, Tanggal Lahir </th>
										<th> Akun </th>
										<th> Level User </th>
										<th class="text-center"> Action </th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach ($admin as $key => $value) {
									?>
										<tr>

											<td><?= $value->nama ?></td>
											<td><?= $value->jk ?></td>
											<td><?= $value->ttl_tempat ?>, <?= $value->ttl_tgl ?></td>
											<td>Username: <label class="badge badge-warning"><?= $value->username ?></label><br> Password: <label class="badge badge-danger"><?= $value->password ?></label></td>
											<td><?php if ($value->hak_akses == '1') {
													echo '<label class="badge badge-success">Admin</label>';
												} else if ($value->hak_akses == '2') {
													echo '<label class="badge badge-info">Manager</label>';
												} else {
													echo '<label class="badge badge-danger">Sales</label>';
												} ?></td>
											<td class="text-center"> <a href="<?= base_url('Admin/cAdmin/delete/' . $value->id_admin) ?>" class="btn btn-app">
													<i class="fas fa-trash"></i> Hapus
												</a> <a href="<?= base_url('Admin/cAdmin/update/' . $value->id_admin) ?>" class="btn btn-app">
													<i class="fas fa-edit"></i> Edit
												</a></td>
										</tr>
									<?php
									}
									?>



								</tbody>
							</table>
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