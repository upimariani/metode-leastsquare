<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mAnalisis extends CI_Model
{
	public function select()
	{
		$this->db->select('*');
		$this->db->from('penjualan');
		$this->db->where('hasil =', NULL);
		return $this->db->get()->result();
	}


	//penjualan
	public function penjualan()
	{
		$this->db->select('*');
		$this->db->from('penjualan');
		$this->db->where('hasil !=', NULL);
		return $this->db->get()->result();
	}
	public function max_bulan_peramalan()
	{
		return $this->db->query("SELECT MAX(bulan) as bulan FROM `penjualan`")->row();
	}

	//menampilkan data sebelumnya
	public function nilai_analisis()
	{
		$data['tot_penjualan'] = $this->db->query("SELECT * FROM `penjualan`")->result();
		$data['nilai_tengah'] = $this->db->query("SELECT COUNT(id_penjualan) as jml FROM `penjualan`")->row();
		$data['nilai_xy'] = $this->db->query("SELECT SUM(xy) as tot_xy FROM `penjualan`")->row();
		$data['nilai_x2'] = $this->db->query("SELECT SUM(x2) as tot_x2 FROM `penjualan`")->row();
		return $data;
	}
}

/* End of file mAnalisis.php */
