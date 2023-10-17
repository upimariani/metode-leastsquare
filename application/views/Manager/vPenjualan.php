<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title"> Penjualan Perhari </h3>

			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Tables</a></li>
					<li class="breadcrumb-item active" aria-current="page">Penjualan Per Hari</li>
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



		<div class="row">

			<div class="col-lg-8 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Informasi Penjualan Per Hari</h4>
						</p>
						<div class="table-responsive">
							<table id="myTable" class="table table-light">
								<thead>
									<tr>
										<th> # </th>
										<th> Periode Hari </th>
										<th> Total Penjualan /kg </th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($penjualan as $key => $value) {

									?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $value->periode_hari ?></td>
											<td><?= $value->total ?></td>

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