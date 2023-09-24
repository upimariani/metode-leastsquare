<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title"> Analisis Peramalan Penjualan Metode Least Square </h3>



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
			<a href="<?= base_url('Manager/cAnalisis/cetak') ?>" class="btn btn-success mb-3 btn-block">
				<i class="mdi mdi-chart-areaspline"></i> Print </a>
		</div>

		<div class="row">

			<div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Informasi Analisis Penjualan Metode Least Square</h4>
						</p>
						<div class="table-responsive">
							<table id="myTable" class="table table-light">
								<thead>
									<tr>
										<th> # </th>
										<th> Bulan </th>
										<th> Penjualan </th>
										<th> Hasil Peramalan </th>
										<th> Nilai a </th>
										<th> Nilai b </th>
										<th> GAP </th>
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
											<td><?= $value->nilai_a ?></td>
											<td><?= $value->nilai_b ?></td>
											<td><?= $value->hasil ?></td>
											<td><?= abs(round((($value->hasil - $value->tot_penjualan) / $value->tot_penjualan) * 100, 2)) ?>%</td>

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