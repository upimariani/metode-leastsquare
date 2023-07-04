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
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/nav');
		$this->load->view('Admin/vAnalisis', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function create()
	{
		$data = array(
			'max' => $this->mAnalisis->max_bulan_peramalan(),
			'nilai' => $this->mAnalisis->nilai_analisis()
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/nav');
		$this->load->view('Admin/vTambahAnalisis', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function hitung()
	{
		//diketahui
		$nilai_penjualan = $this->input->post('tot_penjualan');
		$nilai_xy = $this->input->post('nilai_xy');
		$nilai_x2 = $this->input->post('nilai_x2');
		$nilai_tengah = $this->input->post('nilai_tengah');


		//pembagian nilai tengah
		if ($nilai_tengah % 2 == 0) { //Kondisi
			$midle = $nilai_tengah / 2;
		} else {
			$midle = ($nilai_tengah - 1) / 2;
		}

		//perhitungan metode least square
		//mencari nilai a
		//dengan rumus total_penjualan / total jumlah data

		$a = $nilai_penjualan / $nilai_tengah;

		//mencari nilai b
		//dengan rumus total_xy / total_x2

		$b = $nilai_xy / $nilai_x2;

		//maka y = a+bx

		$y = $a + ($b * $midle);

		echo '<br>nilai a ' . $a;
		echo '<br>nilai b ' . $b;
		echo '<br>nilai y ' . $y;
		echo '<br>nilai penjualan ' . $nilai_penjualan;
		echo '<br>nilai xy ' . $nilai_xy;
		echo '<br>nilai x2 ' . $nilai_x2;
		echo '<br>nilai tengah ' . $nilai_tengah;
	}
}

/* End of file cAnalisis.php */
