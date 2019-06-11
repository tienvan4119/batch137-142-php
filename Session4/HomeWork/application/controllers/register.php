<?php
/**
 * 
 */
class Register extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function index(){
		$this->load->view('register_view');
	}
	public function insertData(){
		$action=$_POST['submit']; 
		if ($action=='submit')
		{
			echo'$action';
		$arg=$_POST['id'];
		$data = array(
		'id' =>'',
		'Name' =>$_POST['name'],
		'Email' =>$_POST['email'],
		'Phone' => $_POST['phone'],
		'Sex' => $_POST['name'],
		'DoB'=> $_POST['DoB']
		);
		$this->model->Mregister($data);
		
		}
	}
}
?>