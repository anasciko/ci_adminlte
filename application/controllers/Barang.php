<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}

		$this->load->model('m_barang');
		$this->load->model('m_kategory');
		$this->load->library('form_validation');
	}

	private function rules()
	{
		return [
			['field' => 'nama', 'label' => 'Nama Barang', 'rules' => 'required'],
			['field' => 'kategory', 'label' => 'Kategory', 'rules' => 'required'],
			['field' => 'stok', 'label' => 'Stok', 'rules' => 'required'],
			['field' => 'harga', 'label' => 'Harga', 'rules' => 'required']
		];
	}

	public function index()
	{
		$data['barang'] = $this->m_barang->getAll();

		$this->load->view('template/header');
		$this->load->view('data_master/tampil_barang', $data);
		$this->load->view('template/footer');
	}

	private function listKategory(){
		$data_kat = $this->m_kategory->getAll();
		foreach ($data_kat as $key) {
			$list_kat[$key->id_kat] = $key->kategory;
		}
		return $list_kat;
	}

	public function insert()
	{

		$this->form_validation->set_rules($this->rules());

		if ($this->form_validation->run() === FALSE) {
			$data['kategory'] = $this->listKategory();
			$this->load->view('template/header');
			$this->load->view('data_master/tambah_barang', $data);
			$this->load->view('template/footer');
		} else {
			$data['nama_bar'] = $this->input->post('nama');
			$data['id_kat'] = $this->input->post('kategory');
			$data['stok_bar'] = $this->input->post('stok');
			$data['harga_bar'] = $this->input->post('harga');

			$this->m_barang->insert($data);
			$this->session->set_flashdata('pesan', '<script>alert("Data berhasil disimpan")</script>');
			redirect(base_url('barang'));
		}
	}

	public function edit($id)
	{

		$this->form_validation->set_rules($this->rules());

		if ($this->form_validation->run() === FALSE) {
			$data["barang"] = $this->m_barang->getId($id);
			$data['kategory'] = $this->listKategory();

			$this->load->view('template/header');
			$this->load->view('data_master/edit_barang', $data);
			$this->load->view('template/footer');
		} else {
			$data['nama_bar'] = $this->input->post('nama');
			$data['id_kat'] = $this->input->post('kategory');
			$data['stok_bar'] = $this->input->post('stok');
			$data['harga_bar'] = $this->input->post('harga');

			$this->m_barang->edit($id, $data);
			$this->session->set_flashdata('pesan', '<script>alert("Data berhasil diubah")</script>');

			redirect(base_url('barang'));
		}
	}

	public function delete($id)
	{
		$this->m_barang->delete($id);
		$this->session->set_flashdata('pesan', '<script>alert("Data berhasil dihapus")</script>');
		redirect(base_url('barang'));
	}
}