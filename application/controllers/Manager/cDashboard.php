<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDashboard extends CI_Controller
{

	public function index()
	{
		$this->load->view('Manager/Layouts/head');
		$this->load->view('Manager/Layouts/nav');
		$this->load->view('Manager/vDashboard');
		$this->load->view('Manager/Layouts/footer');
	}
}

/* End of file cDashboard.php */
