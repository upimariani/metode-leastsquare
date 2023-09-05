<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mPenjualan extends CI_Model
{
	public function select()
	{
		$this->db->select('*');
		$this->db->from('penjualan_harian');
		return $this->db->get()->result();
	}
	public function insert($data)
	{
		$this->db->insert('penjualan_harian', $data);
	}
}

/* End of file mPenjualan.php */
