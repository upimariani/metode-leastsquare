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
										<th> Bulan </th>
										<th> Penjualan </th>
										<th> x </th>
										<th> xy </th>
										<th> x2 </th>
										<th> Selisih </th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($penjualan as $key => $value) {

									?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $value->bulan ?></td>
											<td><?= $value->tot_penjualan ?></td>
											<td><?= $value->x ?></td>
											<td><?= $value->xy ?></td>
											<td><?= $value->x2 ?></td>
											<td></td>
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