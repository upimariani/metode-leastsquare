<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mPenjualan extends CI_Model
{
	public function periode()
	{
		return $this->db->query("SELECT periode_bulan, periode_tahun, SUM(total) as total FROM `penjualan_harian` GROUP BY periode_bulan, periode_tahun")->result();
	}
	public function select($bulan, $tahun)
	{
		$this->db->select('*');
		$this->db->from('penjualan_harian');
		$this->db->where('periode_bulan', $bulan);
		$this->db->where('periode_tahun', $tahun);
		return $this->db->get()->result();
	}
	public function insert($data)
	{
		$this->db->insert('penjualan_harian', $data);
	}
	public function edit($id)
	{
		$this->db->select('*');
		$this->db->from('penjualan_harian');
		$this->db->where('id_harian', $id);
		return $this->db->get()->row();
	}
	public function update($id, $data)
	{
		$this->db->where('id_harian', $id);
		$this->db->update('penjualan_harian', $data);
	}
	public function delete($id)
	{
		$this->db->where('id_harian', $id);
		$this->db->delete('penjualan_harian');
	}
}

/* End of file mPenjualan.php */
