
<?php
/**
 * 
 */
class Mregister extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function getAllrecords()
	{
		return $this->db->select("SELECT * FROM 'users'");
	}
	public function InsertData($name,$email,$phone,$gender,$DoB){

	$query="insert into users (id, Name, Phone, Email, Sex, DoB) values('','$name','$phone','$email','$gender','$DoB')";
 	$this->db->query($query);
 	
	}
}
?>