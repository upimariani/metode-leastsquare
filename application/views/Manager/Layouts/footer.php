<!-- /.content-wrapper -->
<footer class="main-footer">
	<strong>PT. RIDIV MITRA UTAMA</strong>
</footer>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
	<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
	$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/moment/moment.min.js"></script>
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('asset/AdminLTE/') ?>dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('asset/AdminLTE/') ?>dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('asset/AdminLTE/') ?>dist/js/demo.js"></script>
<!-- DataTables -->
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('asset/AdminLTE/') ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('asset/AdminLTE/') ?>dist/js/demo.js"></script>
<script>
	$('#myTable').DataTable({
		"responsive": true,
		"autoWidth": false,
	});
</script>
<script>
	<?php
	$transaksi = $this->db->query("SELECT * FROM `penjualan`")->result();

	?>
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