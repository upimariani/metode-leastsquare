<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="<?= base_url('asset/template/template/') ?>assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="<?= base_url('asset/template/template/') ?>assets/vendors/chart.js/Chart.min.js"></script>
<script src="<?= base_url('asset/template/template/') ?>assets/vendors/progressbar.js/progressbar.min.js"></script>
<script src="<?= base_url('asset/template/template/') ?>assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
<script src="<?= base_url('asset/template/template/') ?>assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?= base_url('asset/template/template/') ?>assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="<?= base_url('asset/template/template/') ?>assets/js/off-canvas.js"></script>
<script src="<?= base_url('asset/template/template/') ?>assets/js/hoverable-collapse.js"></script>
<script src="<?= base_url('asset/template/template/') ?>assets/js/misc.js"></script>
<script src="<?= base_url('asset/template/template/') ?>assets/js/settings.js"></script>
<script src="<?= base_url('asset/template/template/') ?>assets/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="<?= base_url('asset/template/template/') ?>assets/js/dashboard.js"></script>
<script src="<?= base_url('asset/chart/js_chart.js') ?>"></script>
<link href="<?= base_url('asset/') ?>DataTable/datatables.min.css" rel="stylesheet">

<script src="<?= base_url('asset/') ?>DataTable/datatables.min.js"></script>
<script>
	$('#myTable').DataTable({
		select: true
	});
</script>
<script>
	<?php
	$transaksi = $this->db->query("SELECT * FROM `penjualan`")->result();

	?>
	Chart.defaults.global.defaultFontColor = 'white';
	var xValues = [<?php foreach ($transaksi as $key => $value) {
						echo '"' . $value->bulan . '",';
					} ?>];
	var yValues = [<?php foreach ($transaksi as $key => $value) {
						echo '"' . $value->tot_penjualan . '",';
					} ?>];
	// var barColors = ["#F7604D", "#4ED6B8"];

	new Chart("transaksi", {
		type: "bar",
		data: {
			labels: xValues,
			datasets: [{
				backgroundColor: '#F29141',
				data: yValues
			}]
		},
		options: {
			legend: {
				display: false
			},
			title: {
				display: true,
				text: "Informasi Jumlah Penjualan"
			}
		}
	});
</script>
<!-- End custom js for this page -->
</body>

</html>