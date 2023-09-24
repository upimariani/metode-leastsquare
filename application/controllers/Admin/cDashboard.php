<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mDashboard');
	}

	public function index()
	{
		$data = array(
			'periode' => $this->mDashboard->periode()
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/nav');
		$this->load->view('Admin/vDashboard', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function lihat()
	{
		$range_awal = $this->input->post('range_awal');
		$range_akhir = $this->input->post('range_akhir');

		if ($range_awal > $range_akhir) {
			$this->session->set_flashdata('error', 'Sesuaikan kembali range periode yang diinginkan!');

			redirect('Admin/cDashboard', 'refresh');
		} else {
			$data = array(
				'range' => $this->mDashboard->lihat($range_awal, $range_akhir)
			);
			$this->load->view('Admin/Layouts/head');
			$this->load->view('Admin/Layouts/nav');
			$this->load->view('Admin/vGrafikPenjualan', $data);
			$this->load->view('Admin/Layouts/footer');
		}
	}
}

/* End of file cDashboard.php */
