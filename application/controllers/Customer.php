<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}

		$this->load->model('m_customer');
		$this->load->library('form_validation');
	}

	private function rules()
	{
		return [
			['field' => 'nama', 'label' => 'Nama', 'rules' => 'required'],
			['field' => 'alamat', 'label' => 'Alamat', 'rules' => 'required'],
			['field' => 'no_tlp', 'label' => 'No telpon', 'rules' => 'required']
		];
	}

	public function index()
	{
		$data['customer'] = $this->m_customer->getAll();

		$this->load->view('template/header');
		$this->load->view('data_master/tampil_customer', $data);
		$this->load->view('template/footer');
	}

	public function insert()
	{

		$this->form_validation->set_rules($this->rules());

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('template/header');
			$this->load->view('data_master/tambah_customer');
			$this->load->view('template/footer');
		} else {
			$data['nama_cust'] = $this->input->post('nama');
			$data['alamat_cust'] = $this->input->post('alamat');
			$data['no_tlp_cust'] = $this->input->post('no_tlp');

			$this->m_customer->insert($data);
			$this->session->set_flashdata('pesan', '<script>alert("Data berhasil disimpan")</script>');
			redirect(base_url('customer'));
		}
	}

	public function edit($id)
	{

		$this->form_validation->set_rules($this->rules());

		if ($this->form_validation->run() === FALSE) {
			$data["customer"] = $this->m_customer->getId($id);

			$this->load->view('template/header');
			$this->load->view('data_master/edit_customer', $data);
			$this->load->view('template/footer');
		} else {
			$data['nama_cust'] = $this->input->post('nama');
			$data['alamat_cust'] = $this->input->post('alamat');
			$data['no_tlp_cust'] = $this->input->post('no_tlp');

			$this->m_customer->edit($id, $data);
			$this->session->set_flashdata('pesan', '<script>alert("Data berhasil diubah")</script>');

			redirect(base_url('customer'));
		}
	}

	public function delete($id)
	{
		$this->m_customer->delete($id);
		$this->session->set_flashdata('pesan', '<script>alert("Data berhasil dihapus")</script>');
		redirect(base_url('customer'));
	}
}