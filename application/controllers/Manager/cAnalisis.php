<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cAnalisis extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mAnalisis');
	}
	public function index()
	{
		$data = array(
			'penjualan' => $this->mAnalisis->hasil_peramalan(),
			'peramalan' => $this->mAnalisis->select()
		);
		$this->load->view('Manager/Layouts/head');
		$this->load->view('Manager/Layouts/nav');
		$this->load->view('Manager/vAnalisis', $data);
		$this->load->view('Manager/Layouts/footer');
	}
	public function cetak()
	{
		// memanggil library FPDF
		require('asset/fpdf/fpdf.php');

		// intance object dan memberikan pengaturan halaman PDF
		$pdf = new FPDF('P', 'mm', 'A4');
		$pdf->AddPage();

		$pdf->SetFont('Times', 'B', 14);

		$pdf->Cell(200, 40, 'LAPORAN HASIL ANALISIS', 0, 0, 'C');
		$pdf->SetLineWidth(0);
		$pdf->Cell(10, 30, '', 0, 1);
		$pdf->SetFont('Times', 'B', 9);
		$pdf->Cell(10, 7, 'No', 1, 0, 'C');
		$pdf->Cell(50, 7, 'Periode / Bulan', 1, 0, 'C');
		$pdf->Cell(50, 7, '	Total Penjualan', 1, 0, 'C');
		$pdf->Cell(40, 7, 'Hasil', 1, 0, 'C');


		$pdf->Cell(10, 7, '', 0, 1);
		$pdf->SetFont('Times', '', 10);
		$no = 1;

		$data = $this->mAnalisis->hasil_peramalan();
		foreach ($data as $key => $value) {
			$pdf->Cell(10, 6, $no++, 1, 0, 'C');
			$pdf->Cell(50, 6, $value->bulan, 1, 0);
			$pdf->Cell(50, 6, $value->tot_penjualan, 1, 0);
			$pdf->Cell(40, 6, $value->hasil, 1, 1);
		}
		$pdf->Output();
	}
	public function create()
	{
		$data = array(
			'max' => $this->mAnalisis->max_bulan_peramalan(),
			'nilai' => $this->mAnalisis->nilai_analisis(),
			'total_penjualan' => $this->mAnalisis->hasil_penjualan()
		);
		$this->load->view('Manager/Layouts/head');
		$this->load->view('Manager/Layouts/nav');
		$this->load->view('Manager/vTambahAnalisis', $data);
		$this->load->view('Manager/Layouts/footer');
	}
	public function hitung()
	{
		$this->form_validation->set_rules('periode', 'Periode', 'required');
		$this->form_validation->set_rules('periode_berikutnya', 'Periode Berikutnya', 'required');
		$this->form_validation->set_rules('penjualan', 'Penjualan', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'max' => $this->mAnalisis->max_bulan_peramalan(),
				'nilai' => $this->mAnalisis->nilai_analisis(),
				'total_penjualan' => $this->mAnalisis->hasil_penjualan()
			);
			$this->load->view('Admin/Layouts/head');
			$this->load->view('Admin/Layouts/nav');
			$this->load->view('Admin/vTambahAnalisis', $data);
			$this->load->view('Admin/Layouts/footer');
		} else {
			$periode = $this->input->post('periode');
			$jml_data = $this->input->post('nilai_tengah');
			$sigma_y = $this->input->post('tot_penjualan');
			$penjualan_next = $this->input->post('penjualan');

			if ($jml_data % 2) {
				$status = 'ganjil';
				$nilai_tengah = ($jml_data - 1) / 2;
			} else {
				$status = 'genap';
				$nilai_tengah = $jml_data / 2;
			}
			// echo $status;
			// echo $jml_data;
			// echo $nilai_tengah;
			// echo '<br>';
			$x = array();
			if ($status == 'ganjil') {
				for ($i = -$nilai_tengah; $i <= $nilai_tengah; $i++) {
					if ($i != '0') {
						$x[] = $i;
						$max_x = $i;
					}
				}
			} else {
				for ($i = -$nilai_tengah; $i <= $nilai_tengah; $i++) {
					$x[] = $i;
					$max_x = $i;
				}
			}

			$z = 0;
			$i = 0;
			$s = 0;
			$w = 0;
			$sigma_y = 0;
			$sigma_xy = 0;
			$sigma_x2 = 0;
			//menampilkan data penjualan sebelumnya
			$penjualan = $this->mAnalisis->select_analisis();
			foreach ($penjualan as $key => $value) {
				$y = $value->tot_penjualan;
				$sigma_y += $value->tot_penjualan;
				$xy = $value->tot_penjualan * $x[$z++];
				$sigma_xy += $xy;
				$x2 = pow($x[$s++], 2);
				$sigma_x2 += $x2;

				$data_update = array(
					'x' => $x[$w++],
					'xy' => $xy,
					'x2' => $x2
				);
				$id = $value->id_penjualan;
				$this->mAnalisis->update_x($id, $data_update);

				// echo ' id: ' . $value->id_penjualan;
				// echo ' Y: ' . $y;
				// echo ' X: ' . $x[$i++];
				// echo ' Sigma Y: ' . $sigma_y;
				// echo ' XY: ' . $xy;
				// echo ' Sigma XY: ' . $sigma_xy;
				// echo ' X2: ' . $x2;
				// echo ' Sigma X2: ' . $sigma_x2;
				// echo '<br>';
			}
			echo '<hr>';
			$xy_next = $max_x * $penjualan_next;
			$sigma_ynext = $penjualan_next + $sigma_y;
			$sigma_xynext = $sigma_xy;
			$x2_next = pow($max_x, 2);
			$sigma_x2next = $sigma_x2 + $x2_next;





			// echo '<br>Y: ' . $penjualan_next;
			// echo '<br>X : ' . $max_x;
			// echo '<br>Sigma Y: ' . $sigma_ynext;
			// echo '<br>XY: ' . $xy_next;
			// echo '<br>Sigma XY: ' . $sigma_xynext;
			// echo '<br>X2: ' . $x2_next;
			// echo '<br>Sigma X2: ' . $sigma_x2next;


			//mencari nilai a
			// a= sigma y /n;
			$a = round($sigma_ynext / $jml_data, 3);
			$b = round($sigma_xynext / $sigma_x2next, 3);
			$y = round($a + ($b * $max_x));


			$data_peramalan = array(
				'periode' => $this->input->post('bulan'),
				'periode_tahun' => $this->input->post('tahun'),
				'tot_penjualan' => $this->input->post('penjualan'),
				'x' => $max_x,
				'xy' => $xy_next,
				'x2' => $x2_next,
				'nilai_a' => $a,
				'nilai_b' => $b,
				'hasil' => $y
			);
			$this->db->where('bulan', $periode);
			$this->db->update('penjualan', $data_peramalan);

			$data_bulan_berikutnya = array(
				'bulan' => $this->input->post('periode_berikutnya')
			);
			$this->mAnalisis->hasil($data_bulan_berikutnya);



			$data_status = array(
				'status' => '1'
			);
			$this->db->update('penjualan_harian', $data_status);

			redirect('Manager/cAnalisis');
			// echo '<br>a: ' . $a;
			// echo '<br>b: ' . $b;
			// echo '<br>y: ' . $y;
		}
	}
}

/* End of file cAnalisis.php */
