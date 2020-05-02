<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->library('form_validation');
	}

	function index(){
		$this->load->view('form_login');
	}

	function cek_login(){
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('form_login');
		} else {

			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$where = array(
				'username'=>$username,
				'password'=>MD5($password)
			);

			$cek = $this->Login_model->data_login("karyawan", $where)->num_rows();
			if ($cek > 0) {
				$data_session = array(
					'nama' => $username,
					'status' => "login"
				);
				$this->session->set_userdata($data_session);
				redirect(base_url("Home"));
			}else{
				$this->session->set_flashdata('pesan', '<br>Username atau Password salah.');
				redirect(base_url("Login"));
			}
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url("Login"));
	}

}