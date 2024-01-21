<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Dashboard Admin</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Dashboard</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<!-- Small boxes (Stat box) -->
			<div class="row">
				<?php
				if ($this->session->userdata('error')) {
				?>
					<div class="alert alert-danger" role="alert">
						<?= $this->session->userdata('error') ?>
					</div>
				<?php
				}
				?>


				<div class="col-lg-8">
					<div class="card">
						<div class="card-header">
							<h4>Grafik Penjualan</h4>
						</div>
						<div class="card-body">
							<canvas id="transaksi" style="height: 150px;"></canvas>
						</div>
					</div>
				</div>






			</div>

			<!-- /.row -->
			<!-- Main row -->

			<!-- /.row (main row) -->
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>