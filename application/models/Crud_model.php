<?php
Class Crud_model extends CI_Model {

	Public function __construct() {
		parent::__construct();
	}
	public function insert($tabel,$data)
	{
		$this->db->insert($tabel,$data);
	}
	public function update($tabel,$data)
	{
		$id = $data["id"];
		unset($data["id"]);
		$this->db->where("id",$id);
		$this->db->update($tabel,$data);
	}
	public function delete($tabel,$data)
	{
		$this->db->delete($tabel,array("username" => $data["username"]));
	}
	public function select($tabel,$field = "*")
	{
		$this->db->select($field);
		$query = $this->db->get($tabel);
		$data = $query->result();
		return $data;
	}
	public function selectdetail($tabel,$username)
	{
		$this->db->select("*");
		$query = $this->db->get_where($tabel, array("username"=>$username));
		$data = $query->row();
		return $data;
	}

}
