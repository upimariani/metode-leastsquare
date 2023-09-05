<body>
	<div class="container-scroller">
		<!-- partial:partials/_sidebar.html -->
		<nav class="sidebar sidebar-offcanvas" id="sidebar">
			<div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
				<img style="width: 150px;" src="<?= base_url('asset/logo.jpg') ?>" alt="logo" />
			</div>
			<ul class="nav">
				<li class="nav-item profile">
					<div class="profile-desc">
						<div class="profile-pic">
							<div class="count-indicator">
								<img class="img-xs rounded-circle " src="<?= base_url('asset/template/template/') ?>assets/images/faces/face15.jpg" alt="">
								<span class="count bg-success"></span>
							</div>
							<div class="profile-name">
								<h5 class="mb-0 font-weight-normal">Marketing</h5>
							</div>
						</div>

					</div>
				</li>
				<li class="nav-item nav-category">
					<span class="nav-link">Navigation</span>
				</li>
				<li class="nav-item menu-items">
					<a class="nav-link" href="<?= base_url('Marketing/cDashboard') ?>">
						<span class="menu-icon">
							<i class="mdi mdi-speedometer"></i>
						</span>
						<span class="menu-title">Dashboard</span>
					</a>
				</li>


				<li class="nav-item menu-items">
					<a class="nav-link" href="<?= base_url('Marketing/cPenjualanPerHari') ?>">
						<span class="menu-icon">
							<i class="mdi mdi-tag"></i>
						</span>
						<span class="menu-title">Penjualan Per Hari</span>
					</a>
				</li>
				<li class="nav-item menu-items">
					<a class="nav-link" href="<?= base_url('cLogin/logout') ?>">
						<span class="menu-icon">
							<i class="mdi mdi-reload"></i>
						</span>
						<span class="menu-title">Logout</span>
					</a>
				</li>
			</ul>
		</nav>
		<!-- partial -->
		<div class="container-fluid page-body-wrapper">
			<!-- partial:partials/_navbar.html -->
			<nav class="navbar p-0 fixed-top d-flex flex-row">
				<div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
					<a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
				</div>
				<div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
					<button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
						<span class="mdi mdi-menu"></span>
					</button>


					<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
						<span class="mdi mdi-format-line-spacing"></span>
					</button>
				</div>
			</nav>