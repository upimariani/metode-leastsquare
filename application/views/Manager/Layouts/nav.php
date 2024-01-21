<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-info elevation-4">
	<!-- Brand Logo -->
	<a href="index3.html" class="brand-link">
		<span class="brand-text font-weight-light">PT. RIDIV MITRA UTAMA</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?= base_url('asset/AdminLTE/') ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block">Manager</a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

				<li class="nav-item">
					<a href="<?= base_url('Manager/cDashboard') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'Manager' && $this->uri->segment(2) == 'cDashboard') {
																						echo 'active';
																					}  ?>">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>Dashboard</p>
					</a>
				</li>

				<li class="nav-item">
					<a href="<?= base_url('Manager/cPeramalan') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'Manager' && $this->uri->segment(2) == 'cPeramalan') {
																						echo 'active';
																					}  ?>">
						<i class="nav-icon fas fa-chart-pie"></i>
						<p>Peramalan</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('Manager/cAnalisis') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'Manager' && $this->uri->segment(2) == 'cAnalisis') {
																						echo 'active';
																					}  ?>">
						<i class="nav-icon fas fa-tag"></i>
						<p>Hasil Penjualan</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('Manager/cCetakPenjualan') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'Manager' && $this->uri->segment(2) == 'cCetakPenjualan') {
																								echo 'active';
																							}  ?>">
						<i class="nav-icon fas fa-bars"></i>
						<p>Penjualan Per Periode</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('cLogin/logout') ?>" class="nav-link">
						<i class="nav-icon fas fa-sign-out-alt"></i>
						<p>SignOut</p>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>