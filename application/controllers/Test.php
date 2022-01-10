<?php
class Test extends CI_Controller {

	public $tblname = "users";
	public function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->model("crud_model");
		$this->load->helper('url');
	}
	public function insert() {

		if ($this->input->post() != null) {
			$username = $this->input->post("username", true);
			$password = $this->input->post("password", true);

			$data = array("username" => $username, "password" => $password, "created_date" => time());
			$this->crud_model->insert("users", $data);
			$this->success();
		}
		else
		{
			$this->IncludeHeader("insert");
		}

	}
	public function update() {

		if ($this->input->post() != null) {
			$username = $this->input->post("username", true);
			$password = $this->input->post("password", true);
			$id = $this->input->post("id", true);
			$data = array("id" => $id,"username" => $username, "password" => $password,"updated_date" => time());
			$this->crud_model->update($this->tblname, $data);
			$this->success();
		}
		else
		{
			$this->IncludeHeader("Update");
		}

	}
	public function delete() {

		if ($this->input->post() != null) {
			$username = $this->input->post("username", true);

			$data = array("username" => $username);
			$this->crud_model->delete($this->tblname, $data);
			$this->success();
		}
		else
		{
			$this->IncludeHeader("delete");
		}

	}
	public function selectusername() {

		 	$list["records"] = $this->crud_model->select($this->tblname,"username,id");
			$this->IncludeHeader("select",$list);

	}
	public function IncludeHeader($item,$data = null)
	{
		$this->load->view("header");
		$this->load->view($item,$data);
	}
	public function selectdetail() {
	 	$username = $this->input->post("username");
		$list["records"] = $this->crud_model->selectdetail("users",$username);
		//print_r($list["records"] );
		//print_r($username);
		//die();
		$this->load->library('jdf');
		if ($list["records"]->created_date != null) {

			$list["records"]->created_date = $this->jdf->jdate('Y/n/j ,H:i:s', $list["records"]->created_date);
		}
		if ($list["records"]->updated_date != null) {

			$list["records"]->updated_date = $this->jdf->jdate('Y/n/j ,H:i:s', $list["records"]->updated_date);
		}

		$this->IncludeHeader("detailusers",$list);
	}
	public function success()
	{
		$this->load->view("submit");
	}
	public function testModel()
	{
		$this->load->model("crud_model");
	}
	public function index()
	{
		$this->load->view("test");
	}
	public function id()
	{
		$this->load->model("Crud_model");
		//echo "Wellcome";
		//$this->load->database();
		//$data = array('username' => ‘reza’,'password' => ‘123’);
		//$this->crud_model->saverecords($data);

		/*echo "<br>";
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$username = $_POST["txtusername"];
			$password = $_POST["txtpass"];
			echo "Wellcome to username =" . $username
				. "and password =" . $password;
		}*/
	}

}
?>
