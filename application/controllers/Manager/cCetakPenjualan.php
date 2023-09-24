<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cCetakPenjualan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mPenjualan');
	}
	public function index()
	{
		$data = array(
			'periode' => $this->mPenjualan->periode()
		);
		$this->load->view('Manager/Layouts/head');
		$this->load->view('Manager/Layouts/nav');
		$this->load->view('Manager/vPeriode', $data);
		$this->load->view('Manager/Layouts/footer');
	}
	public function list_perhari($bulan, $tahun)
	{
		$data = array(
			'penjualan' => $this->mPenjualan->select($bulan, $tahun)
		);
		$this->load->view('Manager/Layouts/head');
		$this->load->view('Manager/Layouts/nav');
		$this->load->view('Manager/vPenjualan', $data);
		$this->load->view('Manager/Layouts/footer');
	}
	public function cetak($bulan, $tahun)
	{
		// memanggil library FPDF
		require('asset/fpdf/fpdf.php');

		// intance object dan memberikan pengaturan halaman PDF
		$pdf = new FPDF('P', 'mm', 'A4');
		$pdf->AddPage();

		$pdf->SetFont('Times', 'B', 14);

		$pdf->Cell(200, 40, 'LAPORAN PENJUALAN PERIODE ' . $bulan . ' TAHUN ' . $tahun, 0, 0, 'C');
		$pdf->SetLineWidth(0);
		$pdf->Cell(10, 30, '', 0, 1);
		$pdf->SetFont('Times', 'B', 9);
		$pdf->Cell(10, 7, 'No', 1, 0, 'C');
		$pdf->Cell(50, 7, 'Periode per Hari', 1, 0, 'C');
		$pdf->Cell(50, 7, '	Total Penjualan', 1, 0, 'C');


		$pdf->Cell(10, 7, '', 0, 1);
		$pdf->SetFont('Times', '', 10);
		$no = 1;

		$data = $this->mPenjualan->select($bulan, $tahun);
		foreach ($data as $key => $value) {
			$pdf->Cell(10, 6, $no++, 1, 0, 'C');
			$pdf->Cell(50, 6, $value->periode_hari, 1, 0);
			$pdf->Cell(50, 6, $value->total, 1, 1);
		}
		$pdf->Output();
	}
}

/* End of file cCetakPenjualan.php */
