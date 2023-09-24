<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cPenjualanPerHari extends CI_Controller
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
		$this->load->view('Marketing/Layouts/head');
		$this->load->view('Marketing/Layouts/nav');
		$this->load->view('Marketing/vPeriodePenjualan', $data);
		$this->load->view('Marketing/Layouts/footer');
	}
	public function list_perhari($bulan, $tahun)
	{
		$data = array(
			'penjualan' => $this->mPenjualan->select($bulan, $tahun)
		);
		$this->load->view('Marketing/Layouts/head');
		$this->load->view('Marketing/Layouts/nav');
		$this->load->view('Marketing/vPenjualan', $data);
		$this->load->view('Marketing/Layouts/footer');
	}
	public function create()
	{

		$this->form_validation->set_rules('date', 'Tanggal Penjualan', 'required');
		$this->form_validation->set_rules('total', 'Total Penjualan', 'required');


		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Marketing/Layouts/head');
			$this->load->view('Marketing/Layouts/nav');
			$this->load->view('Marketing/vTambahPenjualan');
			$this->load->view('Marketing/Layouts/footer');
		} else {
			$date = $this->input->post('date');

			$pecah_tgl = explode("-", $date);
			$thn = $pecah_tgl[0];
			$bln = $pecah_tgl[1];
			$tgl = $pecah_tgl[2];

			// echo $bln;
			// echo '<br>' . $thn;
			$data = array(
				'periode_hari' => $this->input->post('date'),
				'periode_bulan' => $bln,
				'periode_tahun' => $thn,
				'total' => $this->input->post('total'),
				'status' => '0'
			);
			$this->mPenjualan->insert($data);
			$this->session->set_flashdata('success', 'Data Penjualan Per Hari Berhasil Disimpan!');
			redirect('Marketing/cPenjualanPerHari');
		}
	}
	public function update($id)
	{
		$this->form_validation->set_rules('date', 'Tanggal Penjualan', 'required');
		$this->form_validation->set_rules('total', 'Total Penjualan', 'required');


		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'penjualan' => $this->mPenjualan->edit($id)
			);
			$this->load->view('Marketing/Layouts/head');
			$this->load->view('Marketing/Layouts/nav');
			$this->load->view('Marketing/vUpdatePenjualan', $data);
			$this->load->view('Marketing/Layouts/footer');
		} else {
			$data = array(
				'periode_hari' => $this->input->post('date'),
				'total' => $this->input->post('total')
			);
			$this->mPenjualan->update($id, $data);
			$this->session->set_flashdata('success', 'Data Penjualan Per Hari Berhasil Diperbaharui!');
			redirect('Marketing/cPenjualanPerHari');
		}
	}
	public function delete($id)
	{
		$this->mPenjualan->delete($id);
		$this->session->set_flashdata('success', 'Data Penjualan Harian Berhasil Dihapus!!');
		redirect('Marketing/cPenjualanPerHari');
	}
}

/* End of file cPenjualanPerHari.php */
