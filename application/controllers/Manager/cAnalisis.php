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
			'penjualan' => $this->mAnalisis->select()
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
		$pdf->Cell(40, 7, 'GAP', 1, 0, 'C');


		$pdf->Cell(10, 7, '', 0, 1);
		$pdf->SetFont('Times', '', 10);
		$no = 1;

		$data = $this->mAnalisis->select();
		foreach ($data as $key => $value) {
			$pdf->Cell(10, 6, $no++, 1, 0, 'C');
			$pdf->Cell(50, 6, $value->bulan, 1, 0);
			$pdf->Cell(50, 6, $value->tot_penjualan, 1, 0);
			$pdf->Cell(40, 6, $value->hasil, 1, 0);
			$pdf->Cell(40, 6, abs(round((($value->hasil - $value->tot_penjualan) / $value->tot_penjualan) * 100, 2)) . '%', 1, 1);
		}
		$pdf->Output();
	}
}

/* End of file cAnalisis.php */
