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
			'penjualan' => $this->mPenjualan->select()
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
			$data = array(
				'periode_hari' => $this->input->post('date'),
				'total' => $this->input->post('total'),
				'status' => '0'
			);
			$this->mPenjualan->insert($data);
			$this->session->set_flashdata('success', 'Data Penjualan Per Hari Berhasil Disimpan!');
			redirect('Marketing/cPenjualanPerHari');
		}
	}
}

/* End of file cPenjualanPerHari.php */
