<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "batch137-142";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// echo "Connected successfully";

/**
 * 
 */
class Mregister extends CI_Model
{
	
	function __construct(argument)
	{
		parent::__construct();
	}
	public function getAllrecords()
	{
		return $this->db->select("SELECT * FROM `users`");
	}
	public function InsertData(){
		$this->db->insert('users', $data);
	}
}
?>