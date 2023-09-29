<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cHasilPenjualan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mAnalisis');
	}
	public function index()
	{
		$data = array(
			'hasil_peramalan' => $this->mAnalisis->hasil_peramalan()
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/nav');
		$this->load->view('Admin/vHasilPenjualan', $data);
		$this->load->view('Admin/Layouts/footer');
	}
}

/* End of file cHasilPenjualan.php */
