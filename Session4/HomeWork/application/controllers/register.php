<?php
/**
 * 
 */
class Register extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		 $this->load->database();
		 $this->load->model('mregister');
	}

	public function GetData(){
		$this->load->view('register_view');
		if(isset($_POST['save']))
 		{ 		
 			$n=$this->input->post('name');
 			$e=$this->input->post('email');
 			$p=$this->input->post('phone');
 			$g=$this->input->post('gender');
 			$dob=$this->input->post('DoB'); 	

 			$this->mregister->InsertData($n,$e,$p,$g,$dob);		
			$this->load->view('success_view');
		}
	}
	
}
?>