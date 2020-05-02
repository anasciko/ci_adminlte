<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}

		$this->load->model('m_karyawan');
		$this->load->library('form_validation');
	}

	private function rules()
	{
		return [
			['field' => 'nama', 'label' => 'Nama', 'rules' => 'required'],
			['field' => 'alamat', 'label' => 'Alamat', 'rules' => 'required'],
			['field' => 'username', 'label' => 'Username', 'rules' => 'required|is_unique[karyawan.username]'],
			['field' => 'password', 'label' => 'Password', 'rules' => 'required']
		];
	}

	public function index()
	{
		$data['karyawan'] = $this->m_karyawan->getAll();

		$this->load->view('template/header');
		$this->load->view('data_master/tampil_karyawan', $data);
		$this->load->view('template/footer');
	}

	public function insert()
	{

		$this->form_validation->set_rules($this->rules());

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('template/header');
			$this->load->view('data_master/tambah_karyawan');
			$this->load->view('template/footer');
		} else {
			$data['nama_kar'] = $this->input->post('nama');
			$data['alamat_kar'] = $this->input->post('alamat');
			$data['username'] = $this->input->post('username');
			$data['password'] = md5($this->input->post('password'));

			$this->m_karyawan->insert($data);
			$this->session->set_flashdata('pesan', '<script>alert("Data berhasil disimpan")</script>');
			redirect(base_url('karyawan'));
		}
	}

	public function edit($id)
	{

		$this->form_validation->set_rules($this->rules());

		if ($this->form_validation->run() === FALSE) {
			$data["karyawan"] = $this->m_karyawan->getId($id);

			$this->load->view('template/header');
			$this->load->view('data_master/edit_karyawan', $data);
			$this->load->view('template/footer');
		} else {
			$data['nama_kar'] = $this->input->post('nama');
			$data['alamat_kar'] = $this->input->post('alamat');
			$data['username'] = $this->input->post('username');
			$data['password'] = md5($this->input->post('password'));

			$this->m_karyawan->edit($id, $data);
			$this->session->set_flashdata('pesan', '<script>alert("Data berhasil diubah")</script>');

			redirect(base_url('karyawan'));
		}
	}

	public function delete($id)
	{
		$this->m_karyawan->delete($id);
		$this->session->set_flashdata('pesan', '<script>alert("Data berhasil dihapus")</script>');
		redirect(base_url('karyawan'));
	}
}