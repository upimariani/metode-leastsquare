<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cAdmin extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('mAdmin');
	}

	public function index()
	{
		$data = array(
			'admin' => $this->mAdmin->select()
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/nav');
		$this->load->view('Admin/vAdmin', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function create()
	{
		$this->form_validation->set_rules('nama', 'Nama User', 'required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('tempat', 'Tempat Kelahiran', 'required');
		$this->form_validation->set_rules('tgl', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('hak_akses', 'Hak Akses', 'required');


		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Admin/Layouts/head');
			$this->load->view('Admin/Layouts/nav');
			$this->load->view('Admin/vTambahAdmin');
			$this->load->view('Admin/Layouts/footer');
		} else {
			$data = array(
				'nama' => $this->input->post('nama'),
				'jk' => $this->input->post('jk'),
				'ttl_tempat' => $this->input->post('tempat'),
				'ttl_tgl' => $this->input->post('tgl'),
				'alamat' => $this->input->post('alamat'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'hak_akses' => $this->input->post('hak_akses')
			);
			$this->mAdmin->insert($data);
			$this->session->set_flashdata('success', 'Data Akun User Berhasil Ditambahkan!!!');
			redirect('Admin/cAdmin');
		}
	}
	public function update($id)
	{
		$this->form_validation->set_rules('nama', 'Nama User', 'required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('tempat', 'Tempat Kelahiran', 'required');
		$this->form_validation->set_rules('tgl', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('hak_akses', 'Hak Akses', 'required');


		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'admin' => $this->mAdmin->edit($id)
			);
			$this->load->view('Admin/Layouts/head');
			$this->load->view('Admin/Layouts/nav');
			$this->load->view('Admin/vUpdateAdmin', $data);
			$this->load->view('Admin/Layouts/footer');
		} else {
			$data = array(
				'nama' => $this->input->post('nama'),
				'jk' => $this->input->post('jk'),
				'ttl_tempat' => $this->input->post('tempat'),
				'ttl_tgl' => $this->input->post('tgl'),
				'alamat' => $this->input->post('alamat'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'hak_akses' => $this->input->post('hak_akses')
			);
			$this->mAdmin->update($id, $data);
			$this->session->set_flashdata('success', 'Data Akun User Berhasil Diperbaharui!!!');
			redirect('Admin/cAdmin');
		}
	}
	public function delete($id)
	{
		$this->mAdmin->delete($id);
		$this->session->set_flashdata('success', 'Data Akun User Berhasil Dihapus!!!');
		redirect('Admin/cAdmin');
	}
}

/* End of file cAdmin.php */
