<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mDashboard extends CI_Model
{
	public function periode()
	{
		$this->db->select('id_penjualan, bulan');
		$this->db->from('penjualan');
		return $this->db->get()->result();
	}
	public function lihat($range_awal, $range_akhir)
	{
		return $this->db->query("SELECT * FROM `penjualan` WHERE id_penjualan BETWEEN '" . $range_awal . "' AND '" . $range_akhir . "'")->result();
	}
}

/* End of file mDashboard.php */
