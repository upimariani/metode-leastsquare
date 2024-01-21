<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Analisis Peramalan Penjualan Metode Least Square </h1>

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
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Informasi Akun User</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="myTable" class="table">
								<thead>
									<tr>
										<th> # </th>
										<th> Bulan </th>
										<th> Penjualan /kg </th>
										<th> Hasil Peramalan /kg </th>
										<th> Nilai a </th>
										<th> Nilai b </th>

										<th> Action </th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($hasil_peramalan as $key => $value) {
									?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $value->bulan ?></td>
											<td><?= $value->tot_penjualan ?></td>
											<td><?= $value->nilai_a ?></td>
											<td><?= $value->nilai_b ?></td>
											<td><?= $value->hasil ?></td>

											<td> <a href="<?= base_url('Admin/cAnalisis/delete/' . $value->id_penjualan) ?>" class="btn btn-danger btn-icon-text">
													Hapus
												</a>
												<a href="<?= base_url('Admin/cAnalisis/list_perhari/' . $value->periode . '/' . $value->periode_tahun) ?>" class="btn btn-warning btn-icon-text">
													View
												</a>
											</td>
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