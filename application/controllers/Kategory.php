<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategory extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}

		$this->load->model('m_kategory');
		$this->load->library('form_validation');
	}

	private function rules()
	{
		return [
			['field' => 'kategory', 'label' => 'Nama Kategory', 'rules' => 'required']
		];
	}

	public function index()
	{
		$data['kategory'] = $this->m_kategory->getAll();

		$this->load->view('template/header');
		$this->load->view('data_master/tampil_kategory', $data);
		$this->load->view('template/footer');
	}

	public function insert()
	{

		$this->form_validation->set_rules($this->rules());

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('template/header');
			$this->load->view('data_master/tambah_kategory');
			$this->load->view('template/footer');
		} else {
			$data['kategory'] = $this->input->post('kategory');

			$this->m_kategory->insert($data);
			$this->session->set_flashdata('pesan', '<script>alert("Data berhasil disimpan")</script>');
			redirect(base_url('kategory'));
		}
	}

	public function edit($id)
	{

		$this->form_validation->set_rules($this->rules());

		if ($this->form_validation->run() === FALSE) {
			$data["kategory"] = $this->m_kategory->getId($id);

			$this->load->view('template/header');
			$this->load->view('data_master/edit_kategory', $data);
			$this->load->view('template/footer');
		} else {
			$data['kategory'] = $this->input->post('kategory');

			$this->m_kategory->edit($id, $data);
			$this->session->set_flashdata('pesan', '<script>alert("Data berhasil diubah")</script>');

			redirect(base_url('kategory'));
		}
	}

	public function delete($id)
	{
		$this->m_kategory->delete($id);
		$this->session->set_flashdata('pesan', '<script>alert("Data berhasil dihapus")</script>');
		redirect(base_url('kategory'));
	}
}