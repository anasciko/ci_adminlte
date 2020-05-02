<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_barang extends CI_Model {

	private $table = 'barang';
	private $primary_key = 'id_bar';

	public function getAll()
	{
		return $this->db->get($this->table)->result();
	}

	public function getId($id)
	{
		return $this->db->get_where($this->table, array($this->primary_key => $id))->result();
	}

	public function insert($data)
	{
		$this->db->insert($this->table, $data);
	}

	public function edit($id, $data)
	{
		$this->db->update($this->table, $data, array($this->primary_key => $id));
	}

	public function delete($id)
	{
		$this->db->delete($this->table, array($this->primary_key => $id));
	}
}