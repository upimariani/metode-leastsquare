<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mAnalisis extends CI_Model
{
	public function select()
	{
		$this->db->select('*');
		$this->db->from('penjualan');
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
		return $this->db->query("SELECT MAX(id_penjualan) as id_analisis FROM `penjualan`")->row();
	}

	//menampilkan data sebelumnya
	public function nilai_analisis()
	{
		$data['tot_penjualan'] = $this->db->query("SELECT * FROM `penjualan`")->result();
		$data['nilai_tengah'] = $this->db->query("SELECT COUNT(id_penjualan) as jml FROM `penjualan`")->row();
		return $data;
	}

	public function select_analisis()
	{
		$this->db->select('*');
		$this->db->from('penjualan');
		return $this->db->get()->result();
	}
	public function hasil($data)
	{
		$this->db->insert('penjualan', $data);
	}
	public function update_x($id, $data)
	{
		$this->db->where('id_penjualan', $id);
		$this->db->update('penjualan', $data);
	}

	public function delete($id)
	{
		$this->db->where('id_penjualan', $id);
		$this->db->delete('penjualan');
	}
}

/* End of file mAnalisis.php */
