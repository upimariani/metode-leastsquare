<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cPenjualan extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('mAnalisis');
	}

	public function index()
	{
		$data = array(
			'penjualan' => $this->mAnalisis->penjualan()
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/nav');
		$this->load->view('Admin/vPenjualan', $data);
		$this->load->view('Admin/Layouts/footer');
	}
}

/* End of file cPenjualan.php */
